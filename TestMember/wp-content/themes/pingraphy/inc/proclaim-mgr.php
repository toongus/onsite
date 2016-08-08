<?php

class PROC_Mgr{

	public static function get_instance( $post ) {
		$post = get_post( $post );
	
		if ( ! $post || self::post_type != get_post_type( $post ) ) {
			return false;
		}
	
		self::$current = $proc_mgr = new self( $post );
	
		return $proc_mgr;
	}
	
	public function saveFormData($cf7) {
		global $wpdb;
		$time = $this->generateSubmitTime();
		
		$parametrizedFileQuery = "INSERT INTO proc_txnmain (`submit_time`, `form_name`, `field_name`, `field_value`, `field_order`, `file`) VALUES (%s, %s, %s, %s, %s, %s)";
		$didSaveFile = $wpdb->query($wpdb->prepare($parametrizedFileQuery,
				$time,
				$title,
				$nameClean,
				$valueClean,
				$order++,
				$content));
		
		exit;
		/*
		try {
			if (
					!empty($cf7->posted_data['submit_time']) &&
					(is_numeric($cf7->posted_data['submit_time']) ||
							// Looks like is_numeric may fail on decimal '.' when ',' is the localization
							preg_match('/^\d+\.?\d*$/', $cf7->posted_data['submit_time']))
					) {
						$time = $cf7->posted_data['submit_time'];
						unset($cf7->posted_data['submit_time']);
						unset($cf7->posted_data['submit_url']);
					} else {
						$time = $this->generateSubmitTime();
					}
					$cf7->submit_time = $time;
	
					$ip = (isset($_SERVER['X_FORWARDED_FOR'])) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	
					// Set up to allow all this data to be filtered
					$cf7->ip = $ip;
					$user = null;
					if (function_exists('is_user_logged_in') && is_user_logged_in()) {
						$current_user = wp_get_current_user(); // WP_User
						$user = $current_user->user_login;
					}
					$cf7->user = $user;
					try {
						$newCf7 = apply_filters('cfdb_form_data', $cf7);
						if ($newCf7 && is_object($newCf7)) {
							$cf7 = $newCf7;
							$time = $cf7->submit_time;
							$ip = $cf7->ip;
							$user = $cf7->user;
						}
						else {
							//$this->getErrorLog()->log('CFDB Error: No or invalid value returned from "cfdb_form_data" filter: ' .
							//        print_r($newCf7, true));
							// Returning null from cfdb_form_data is a way to stop from saving the form
							return true;
						}
					}
					catch (Exception $ex) {
						$this->getErrorLog()->logException($ex);
					}
	
					// Get title after applying filter
					if (isset($cf7->title)) {
						$title = $cf7->title;
					} else {
						$title = 'Unknown';
					}
					$title = stripslashes($title);
	
					if ($this->fieldMatches($title, $this->getNoSaveForms())) {
						return true; // Don't save in DB
					}
	
					$tableName = $this->getSubmitsTableName();
					$parametrizedQuery = "INSERT INTO `$tableName` (`submit_time`, `form_name`, `field_name`, `field_value`, `field_order`) VALUES (%s, %s, %s, %s, %s)";
					$parametrizedFileQuery = "INSERT INTO `$tableName` (`submit_time`, `form_name`, `field_name`, `field_value`, `field_order`, `file`) VALUES (%s, %s, %s, %s, %s, %s)";
					$order = 0;
					$noSaveFields = $this->getNoSaveFields();
					$foundUploadFiles = array();
					global $wpdb;
	
					//            $hasDropBox = $this->getOption('dropbox');
					//            if ($hasDropBox) {
					//                require_once('CFDBShortCodeSavePostData.php');
					//            }
						foreach ($cf7->posted_data as $name => $value) {
							$nameClean = stripslashes($name);
							if ($this->fieldMatches($nameClean, $noSaveFields)) {
								continue; // Don't save in DB
							}
	
							$value = is_array($value) ? implode($value, ', ') : $value;
							$valueClean = stripslashes($value);
	
							// Check if this is a file upload field
							$didSaveFile = false;
							if ($cf7->uploaded_files && isset($cf7->uploaded_files[$nameClean])) {
								$foundUploadFiles[] = $nameClean;
								$filePath = $cf7->uploaded_files[$nameClean];
								if ($filePath) {
									$content = file_get_contents($filePath);
									$didSaveFile = $wpdb->query($wpdb->prepare($parametrizedFileQuery,
											$time,
											$title,
											$nameClean,
											$valueClean,
											$order++,
											$content));
									if (!$didSaveFile) {
										$this->getErrorLog()->log("CFDB Error: could not save uploaded file, field=$nameClean, file=$filePath");
									}
								}
							}
							if (!$didSaveFile) {
								$wpdb->query($wpdb->prepare($parametrizedQuery,
										$time,
										$title,
										$nameClean,
										$valueClean,
										$order++));
							}
						}
	
						// Since Contact Form 7 version 3.1, it no longer puts the names of the files in $cf7->posted_data
						// So check for them only only in $cf7->uploaded_files
						// Update: This seems to have been reversed back to the original in Contact Form 7 3.2 or 3.3
						if ($cf7->uploaded_files && is_array($cf7->uploaded_files)) {
							foreach ($cf7->uploaded_files as $field => $filePath) {
								if (!in_array($field, $foundUploadFiles) &&
										$filePath &&
										!$this->fieldMatches($field, $noSaveFields)) {
											$fileName = basename($filePath);
											$content = file_get_contents($filePath);
											$didSaveFile = $wpdb->query($wpdb->prepare($parametrizedFileQuery,
													$time,
													$title,
													$field,
													$fileName,
													$order++,
													$content));
											if (!$didSaveFile) {
												$this->getErrorLog()->log("CFDB Error: could not save uploaded file, field=$field, file=$filePath");
											}
										}
							}
						}
	
						// Save Cookie data if that option is true
						if ($this->getOption('SaveCookieData', 'false', true) == 'true' && is_array($_COOKIE)) {
							$saveCookies = $this->getSaveCookies();
							foreach ($_COOKIE as $cookieName => $cookieValue) {
								if (empty($saveCookies) || $this->fieldMatches($cookieName, $saveCookies)) {
									$wpdb->query($wpdb->prepare($parametrizedQuery,
											$time,
											$title,
											'Cookie ' . $cookieName,
											$cookieValue,
											$order++));
								}
							}
						}
	
						// If the submitter is logged in, capture his id
						if ($user && !$this->fieldMatches('Submitted Login', $noSaveFields)) {
							$order = ($order < 9999) ? 9999 : $order + 1; // large order num to try to make it always next-to-last
							$wpdb->query($wpdb->prepare($parametrizedQuery,
									$time,
									$title,
									'Submitted Login',
									$user,
									$order));
						}
	
						// Capture the IP Address of the submitter
						if (!$this->fieldMatches('Submitted From', $noSaveFields)) {
							$order = ($order < 10000) ? 10000 : $order + 1; // large order num to try to make it always last
							$wpdb->query($wpdb->prepare($parametrizedQuery,
									$time,
									$title,
									'Submitted From',
									$ip,
									$order));
						}
	
		}
		catch (Exception $ex) {
			$this->getErrorLog()->logException($ex);
		}
	
		// Indicate success to WordPress so it continues processing other unrelated hooks.
		return true;
		*/
	}
	
}

function proc_mgr( $id ) {
	return PROC_Mgr::get_instance( $id );
}

?>