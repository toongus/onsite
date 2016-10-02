<?php
require_once 'inc/ProductAssetM.php';

class PROC_MgrObj{
	const post_type = 'post';
	private static $current = null;
	private $tableMgr = "proc_txnmain";
	
	public function __construct()
	{
		//echo 'The class "', __CLASS__, '" was initiated!<br />';
	}
	
	public static function get_current() {
		return self::$current = new self();
	}
	
	public function saveFormData() {
		global $wpdb;
		echo "Save proclaim success!";
		$keyId = $this->generateSubmitTime();
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
		$ip = (isset($_SERVER['X_FORWARDED_FOR'])) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];		
		//`keyid`, `create_by`, `create_date`, `update_by`, `update_date`, `start_date`, `expired_date`, `status`, `level`, `type`, `message`, `ipaddr`
		$parametrizedFileQuery = "INSERT INTO proc_txnmain (`keyid`, `create_by`, `status`, `level`, `type`, `message`, `ipaddr`) "
				."VALUES (%s, %s, %s, %s, %s, %s, %s)";
		
		
		$user = "system";
		if (function_exists('is_user_logged_in') && is_user_logged_in()) {
			$current_user = wp_get_current_user(); // WP_User
			$user = $current_user->user_login;
		}
		$objProduct = $this->convertDataToProductAssetM($keyId);
		$didSaveFile = $wpdb->query($wpdb->prepare($parametrizedFileQuery,
				$keyId, //keyid
				$user, //create_by
				"Draft", //status
				"999", //level
				"999", //type
				json_encode($objProduct), //message
				$ip //ipaddr
			));	
		$this->addToPost($objProduct);
	}
	
	protected function addToPost($obj){
		
		$post_id = wp_insert_post( array(
				'post_type' => self::post_type,
				'post_status' => 'publish',
				'post_title' => $obj->keyId .":". $obj->ipProductName,
				'post_content' => trim( $this->arrangContent($obj) ) ) );
		
		wp_set_post_categories($post_id, array('post_category'=>$obj->ipProductType));
	}
	
	protected function arrangContent($obj){
		$ret = "
			<strong>ตั้งชื่อสินค้าที่คุณต้องการลงขาย :</strong> $obj->ipProductName			
			<strong>สภาพสินค้า :</strong> $obj->ipProductQulity
			<strong>เลือกหมวดหมู่ให้ตรงกับสินค้า :</strong> $obj->ipProductGroup
			<strong>ระบุราคาที่เหมาะสม :</strong> $obj->ipCostEstimate
			<strong>ใส่รายละเอียดสินค้าให้ครบถ้วน :</strong> $obj->ipDetail
			<strong>ระบุพื้นที่ตั้ง :</strong> $obj->ipAreaSub $obj->ipAreaProv
			<strong>จำนวนห้องนอน :</strong> $obj->ipTotalBedroom
			<strong>จำนวนห้องน้ำ :</strong> $obj->ipTotalBathroom
			<strong>เบอร์มือถือ :</strong> $obj->ipPhoneNumber";
		return $ret;
	}
	protected function convertDataToProductAssetM($keyId) {
		$obj = new ProductAssetM();
		$obj->keyId = $keyId;
		$obj->ipProductName = trim(preg_replace('#<[^>]+>#', ' ',$_POST['ipProductName']));
		$obj->ipProductType = $_POST['ipProductType'];
		$obj->ipProductQulity = $_POST['ipProductQulity'];
		$obj->ipProductGroup = $_POST['ipProductGroup'];
		$obj->ipCostEstimate = $_POST['ipCostEstimate'];
		$obj->ipDetail = trim(preg_replace('#<[^>]+>#', ' ',$_POST['ipDetail']));
		$obj->ipAreaProv = $_POST['ipAreaProv'];
		$obj->ipAreaSub = $_POST['ipAreaSub'];
		$obj->ipTotalBedroom = $_POST['ipTotalBedroom'];
		$obj->ipTotalBathroom = $_POST['ipTotalBathroom'];
		$obj->ipPhoneNumber = trim(preg_replace('#<[^>]+>#', ' ',$_POST['ipPhoneNumber']));
	
		return $obj;
	}
	
	/**
	 * @param $fileUrl
	 * @return string
	 */
	protected function parseFileUrl($fileUrl) {
		$href = array();
		preg_match('#<a href=\"([^\"]*)/wp-content/([^\"]*)\">(.*)</a>#iU', $fileUrl, $href);
		if (count($href) >= 3) {
			//            [0] => <a href="http://www.site.com/wp-content/uploads/2015/08/Amazon-icon1.png">Amazon.png</a>
			//            [1] => http://www.site.com
			//            [2] => uploads/2015/08/Amazon-icon1.png
			//            [3] => Amazon.png
			$wpContentDirPath = dirname(dirname(dirname(__FILE__)));
			return $wpContentDirPath . DIRECTORY_SEPARATOR . $href[2];
		}
		return null;
	}
	
	
	protected function getKeyIdTableName_raw() {
		global $wpdb;
		//return $wpdb->prefix . strtolower('proc_keyid');
		return strtolower('proc_keyid');
	}
	protected function generateSubmitTime(){
		global $wpdb;
		$table = $this->getKeyIdTableName_raw();
		$time = 0;
		$noDuplicate = false;
		$tries = 0;
		$wpdb->hide_errors(); // avoid submission page from hanging on DB error like table not exists
		while (!$noDuplicate && ++$tries <= 20) {
			// $tries breaks out of loop which would be infinite when table to insert into does not exist
			$time = function_exists('microtime') ? microtime(true) : time();
			// Bug fix: on some systems microtime is in scientific notation when converted to string
			$time = number_format($time, 4, '.', '');
			// Avoid duplicate submission with the same submit_time in the DB
			$noDuplicate = $wpdb->query($wpdb->prepare("INSERT INTO $table VALUES (%s)", $time));
		}
		return $time;		
	}
}

function proc_mgr(){
	return PROC_MgrObj::get_current();
}


?>