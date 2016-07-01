<?php get_header(); ?>
<form action="#" method="post">            
    <fieldset>
        <legend>&nbsp;&nbsp;&nbsp; Login Information</legend>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='form-group'>
                    <label for="user_login">Username</label>
                    <input class="form-control" id="user_login" name="user[login]" required="true" size="30" type="text" />
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-6'>
                <div class='form-group'>
                    <label for="user_password">Password</label>
                    <input class="form-control" id="user_password" name="user[password]" size="30" type="password" />
                </div>
            </div>
            <div class='col-sm-6'>
                <div class='form-group'>
                    <label for="user_password_confirmation">Password confirmation</label>
                    <input class="form-control" id="user_password_confirmation" name="user[password_confirmation]" size="30" type="password" />
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Personal Information</legend>
        <div class='row'>
            <div class='col-sm-4'>    
                <div class='form-group'>
                    <label for="user_title">Title</label>
                    <input class="form-control" id="user_title" name="user[title]" size="30" type="text" />
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='form-group'>
                    <label for="user_firstname">First name</label>
                    <input class="form-control" id="user_firstname" name="user[firstname]" required="true" size="30" type="text" />
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='form-group'>
                    <label for="user_lastname">Last name</label>
                    <input class="form-control" id="user_lastname" name="user[lastname]" required="true" size="30" type="text" />
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='form-group'>
                    
                    <label for="user_email">Email</label>
                    <input class="form-control required email" id="user_email" name="user[email]" required="true" size="30" type="text" />
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Options</legend>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='form-group'>
                    <label for="user_locale">Language</label>
                    <select class="form-control" id="user_locale" name="user[locale]"><option value="de" selected="selected">Deutsch</option>
                        <option value="en">English</option></select>
                </div>
            </div>
        </div>
    </fieldset>
</form>
<?php  get_footer(); ?>



array(17) {
  [2]=>
  array(7) {
    [0]=>
    string(9) "Dashboard"
    [1]=>
    string(4) "read"
    [2]=>
    string(9) "index.php"
    [3]=>
    string(0) ""
    [4]=>
    string(43) "menu-top menu-top-first menu-icon-dashboard"
    [5]=>
    string(14) "menu-dashboard"
    [6]=>
    string(19) "dashicons-dashboard"
  }
  [4]=>
  array(5) {
    [0]=>
    string(0) ""
    [1]=>
    string(4) "read"
    [2]=>
    string(10) "separator1"
    [3]=>
    string(0) ""
    [4]=>
    string(17) "wp-menu-separator"
  }
  [10]=>
  array(7) {
    [0]=>
    string(5) "Media"
    [1]=>
    string(12) "upload_files"
    [2]=>
    string(10) "upload.php"
    [3]=>
    string(0) ""
    [4]=>
    string(24) "menu-top menu-icon-media"
    [5]=>
    string(10) "menu-media"
    [6]=>
    string(21) "dashicons-admin-media"
  }
  [15]=>
  array(7) {
    [0]=>
    string(5) "Links"
    [1]=>
    string(12) "manage_links"
    [2]=>
    string(36) "edit-tags.php?taxonomy=link_category"
    [3]=>
    string(0) ""
    [4]=>
    string(24) "menu-top menu-icon-links"
    [5]=>
    string(10) "menu-links"
    [6]=>
    string(21) "dashicons-admin-links"
  }
  [25]=>
  array(7) {
    [0]=>
    string(87) "Comments <span class="awaiting-mod count-0"><span class="pending-count">0</span></span>"
    [1]=>
    string(10) "edit_posts"
    [2]=>
    string(17) "edit-comments.php"
    [3]=>
    string(0) ""
    [4]=>
    string(27) "menu-top menu-icon-comments"
    [5]=>
    string(13) "menu-comments"
    [6]=>
    string(24) "dashicons-admin-comments"
  }
  [5]=>
  array(7) {
    [0]=>
    string(5) "Posts"
    [1]=>
    string(10) "edit_posts"
    [2]=>
    string(8) "edit.php"
    [3]=>
    string(0) ""
    [4]=>
    string(37) "menu-top menu-icon-post open-if-no-js"
    [5]=>
    string(10) "menu-posts"
    [6]=>
    string(20) "dashicons-admin-post"
  }
  [20]=>
  array(7) {
    [0]=>
    string(5) "Pages"
    [1]=>
    string(10) "edit_pages"
    [2]=>
    string(23) "edit.php?post_type=page"
    [3]=>
    string(0) ""
    [4]=>
    string(23) "menu-top menu-icon-page"
    [5]=>
    string(10) "menu-pages"
    [6]=>
    string(20) "dashicons-admin-page"
  }
  [59]=>
  array(5) {
    [0]=>
    string(0) ""
    [1]=>
    string(4) "read"
    [2]=>
    string(10) "separator2"
    [3]=>
    string(0) ""
    [4]=>
    string(17) "wp-menu-separator"
  }
  [60]=>
  array(7) {
    [0]=>
    string(10) "Appearance"
    [1]=>
    string(13) "switch_themes"
    [2]=>
    string(10) "themes.php"
    [3]=>
    string(0) ""
    [4]=>
    string(29) "menu-top menu-icon-appearance"
    [5]=>
    string(15) "menu-appearance"
    [6]=>
    string(26) "dashicons-admin-appearance"
  }
  [65]=>
  array(7) {
    [0]=>
    string(87) "Plugins <span class='update-plugins count-2'><span class='plugin-count'>2</span></span>"
    [1]=>
    string(16) "activate_plugins"
    [2]=>
    string(11) "plugins.php"
    [3]=>
    string(0) ""
    [4]=>
    string(26) "menu-top menu-icon-plugins"
    [5]=>
    string(12) "menu-plugins"
    [6]=>
    string(23) "dashicons-admin-plugins"
  }
  [70]=>
  array(7) {
    [0]=>
    string(5) "Users"
    [1]=>
    string(10) "list_users"
    [2]=>
    string(9) "users.php"
    [3]=>
    string(0) ""
    [4]=>
    string(24) "menu-top menu-icon-users"
    [5]=>
    string(10) "menu-users"
    [6]=>
    string(21) "dashicons-admin-users"
  }
  [75]=>
  array(7) {
    [0]=>
    string(5) "Tools"
    [1]=>
    string(10) "edit_posts"
    [2]=>
    string(9) "tools.php"
    [3]=>
    string(0) ""
    [4]=>
    string(24) "menu-top menu-icon-tools"
    [5]=>
    string(10) "menu-tools"
    [6]=>
    string(21) "dashicons-admin-tools"
  }
  [80]=>
  array(7) {
    [0]=>
    string(8) "Settings"
    [1]=>
    string(14) "manage_options"
    [2]=>
    string(19) "options-general.php"
    [3]=>
    string(0) ""
    [4]=>
    string(27) "menu-top menu-icon-settings"
    [5]=>
    string(13) "menu-settings"
    [6]=>
    string(24) "dashicons-admin-settings"
  }
  [99]=>
  array(5) {
    [0]=>
    string(0) ""
    [1]=>
    string(4) "read"
    [2]=>
    string(14) "separator-last"
    [3]=>
    string(0) ""
    [4]=>
    string(17) "wp-menu-separator"
  }
  [100]=>
  array(7) {
    [0]=>
    string(3) "TML"
    [1]=>
    string(14) "manage_options"
    [2]=>
    string(14) "theme_my_login"
    [3]=>
    string(23) "Theme My Login Settings"
    [4]=>
    string(55) "menu-top menu-icon-generic toplevel_page_theme_my_login"
    [5]=>
    string(28) "toplevel_page_theme_my_login"
    [6]=>
    string(23) "dashicons-admin-generic"
  }
  [26]=>
  array(7) {
    [0]=>
    string(7) "Contact"
    [1]=>
    string(24) "wpcf7_read_contact_forms"
    [2]=>
    string(5) "wpcf7"
    [3]=>
    string(14) "Contact Form 7"
    [4]=>
    string(28) "menu-top toplevel_page_wpcf7"
    [5]=>
    string(19) "toplevel_page_wpcf7"
    [6]=>
    string(15) "dashicons-email"
  }
  [101]=>
  array(7) {
    [0]=>
    string(29) "AccessPress Social Login Lite"
    [1]=>
    string(14) "manage_options"
    [2]=>
    string(29) "accesspress-social-login-lite"
    [3]=>
    string(29) "AccessPress Social Login Lite"
    [4]=>
    string(52) "menu-top toplevel_page_accesspress-social-login-lite"
    [5]=>
    string(43) "toplevel_page_accesspress-social-login-lite"
    [6]=>
    string(92) "http://localhost/testmember/wp-content/plugins/accesspress-social-login-lite/images/icon.png"
  }
}
