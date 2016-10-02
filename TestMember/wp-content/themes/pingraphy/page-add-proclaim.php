<?php 
//require_once WPCF7_PLUGIN_DIR . '/includes/controller.php';

function custom_scripts() {
	wp_enqueue_style( 'my-bootstrapcss', get_template_directory_uri() .  '/css/mybootstrap.min.css');
	wp_enqueue_script( 'my-bootstrapjs', get_template_directory_uri() . '/js/mybootstrap.min.js', array(), '20160709' );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


function ibenic_enqueue() {
	wp_enqueue_script( 'ibenic-uploader', get_template_directory_uri().'/js/uploader.js', array('jquery'), '1.0', true );
	wp_localize_script( 'ibenic-uploader', 'ibenicUploader',array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	
}
add_action( 'wp_enqueue_scripts', 'ibenic_enqueue' );

function custom_css(){
	?>
<style>
<!--TKKY customer css-->

.uploading-image {
	min-width: 0
}

.normal-upload {
	margin: 20px 0;
	float: left
}

.upload-photo {
	padding: 0;
	border: 0
}

.uploading-image .area-figure {
	max-width: 100%;
	border: 2px dashed #e5e5e5;
	min-height: 45px;
	padding: 20px;
	border-radius: 10px;
	position: relative
}

.uploading-image .area-figure>div, .uploading-image .area-figure>div>* {
	float: left
}

.area-figure .counsel>p {
	margin: 30px 0 0;
	font-size: .98em
}

#upload-image {
	margin-right: 20px
}

#imags-list-notice, .show-gide-postcode, .navigation-user,
	#gide-postcode {
	display: none
}

#gide-postcode {
	font-size: 13px
}

.show-gide-postcode>div>div {
	margin-top: 10px
}

.area-figure>div[role=presentation] {
	
}

.area-figure>div[role=presentation]>div.files>div {
	float: left;
	width: 135px;
	position: relative;
	margin-bottom: 15px
}

.area-figure>div[role=presentation]>div.files>div.template-download>div:first-child
	{
	width: 102px;
	padding: 5px;
	text-align: center;
	float: left;
	background: 0 0;
	border: 1px solid #ddd;
	background-color: transparent;
	cursor: move;
	box-sizing: border-box;
	-moz-box-sizing: border-box
}

.area-figure>div[role=presentation]>div.files>div {
	border: 0;
	position: relative
}

.area-figure>div[role=presentation]>div.files>div>div img {
	height: 68px;
	display: block
}

.area-figure>div[role=presentation]>div.files>div>div+div>a {
	font-size: 22px;
	color: #c21515;
	width: 15px;
	height: 15px;
	display: block;
	border: 0;
	position: absolute;
	top: -15px;
	right: 28px
}

.area-figure span.df-ic-undo:before {
	content: "\f01e"
}

.area-figure>div[role=presentation]>div.files>div>div+div>span.df-ic-undo
	{
	width: 20px;
	height: 20px;
	background-color: #4b67ca;
	position: absolute;
	left: 82px;
	bottom: 0;
	color: #fff;
	text-align: center;
	cursor: pointer;
	padding-top: 1px;
	z-index: 1
}

.lt-ie9 .area-figure>div[role=presentation]>div.files>div>div+div>span.df-ic-undo
	{
	display: none !important
}


.drop-file-here {
	position: absolute;
	background: rgba(0, 0, 0, .03);
	width: 435px;
	height: 171px;
	margin: -7px 0 0 -7px
}

.drop-file-here>span {
	position: absolute;
	top: 50%;
	margin-top: -10px;
	font-size: 100%;
	width: 435px;
	display: block;
	text-align: center;
	color: #333;
	font-weight: 700
}


input[type=file] {
	opacity: 0;
	height: 40px;
	width: 160px;
	margin-left: 10px;
	cursor: pointer;
	-ms-filter: "alpha(Opacity=0)"
}

input[type=file]::-webkit-file-upload-button {
	cursor: pointer
}

/*TKKY upload file*/
.file-upload {
	position: relative;
	display:block;	
	width:110px;
	/*height:100px;*/
	border-radius: 3px;
	background-color: #F2F2F2;
	font-size: 14px;
	color: #737373;
	text-align: center; 
	line-height: 70px;
}

.file-upload input {
	opacity: 0;
	position: absolute;
	width: 100%;
	height: 100%;
	display: block;
	cursor: pointer;
}

.file-preview img{
	width:100%;
	height: auto;
}

.file-preview .ibenic_file_preview {
	position: absolute;
	width:100%;
	height:100%;
	overflow: hidden;
}

.ibenic_file_delete {
	position: absolute;
	width: 100%;
	top:98%;
	left:0;
	padding:0.5em;
	text-align: center;
	color:white;
	background-color:red;
}
</style>
	<?php
}
add_action( 'wp_enqueue_scripts', 'custom_css' );

get_header(); 
?>
<?php #**************START FORM ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<article id="post-144" class="post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-rent category-main-categories category-uncategorized">
			<div class="content-wrap">
			<header class="entry-header">
				<h1 class="entry-title">ติดตั้งประกาศ</h1>	
			</header><!-- .entry-header -->
			</div>
			<footer class="entry-footer clearfix">
				<div class="entry-meta">
					<div class="entry-footer-right"></div>
				</div>
			</footer><!-- .entry-footer -->		
			<div class="content-wrap">
				<div class="entry-content">
					<form class="form-horizontal" action="/testmember/add-proclaim" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="frmTokenId" id="frmTokenId" value="runningnumber">
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ตั้งชื่อสินค้าที่คุณต้องการลงขาย :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ipProductName" id="ipProductName" placeholder="ตั้งชื่อสินค้าที่คุณต้องการลงขาย" value="ตั้งชื่อสินค้าที่คุณต้องการลงขาย">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ต้องการ :</label>
							<div class="col-sm-8">
								<div class="radio">
								  <label><input type="radio" name="ipProductType" id="ipProductType1" value="13" checked>ขาย</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="ipProductType" id="ipProductType2" value="12">เช่า</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">สภาพสินค้า :</label>
							<div class="col-sm-8">
								<div class="radio">
								  <label><input type="radio" name="ipProductQulity" id="ipProductQulity1" value="1" checked>ใหม่</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="ipProductQulity" id="ipProductQulity2" value="2">มือสอง</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">เลือกหมวดหมู่ให้ตรงกับสินค้า :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ipProductGroup" id="ipProductGroup" placeholder="เลือกหมวดหมู่ให้ตรงกับสินค้า" value="เลือกหมวดหมู่ให้ตรงกับสินค้">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ระบุราคาที่เหมาะสม :</label>
							<div class="col-sm-3">
								<input type="number" class="form-control" name="ipCostEstimate" id="ipCostEstimate" placeholder="ระบุราคาที่เหมาะสม" min="0" step="500" maxlength="10" data-bind="value:replyNumber" value="1000000">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">รูปภาพสินค้า :</label>
							<div class="col-sm-8">
								<div class="uploading-image span">
									<div id="upload-photo" class="upload-photo">
                                        <div class="area-figure clear">
                                            <div role="presentation" class="clear">
                                                <div class="files clear ui-sortable" data-toggle="modal-gallery" data-target="#modal-gallery" id="imags-list">
                                                            <div class="template-download">
                                                                <div><img src="https://i1.24x7th.com/df/0/ui/post/2016/06/11/8/t/4c5b87bb3e8301468f9996fef9c94f95.jpeg"></div>
                                                            </div>
                                                            <div class="template-download">
                                                                <div><img src="https://i2.24x7th.com/df/0/ui/post/2016/06/11/8/t/0f085c4ae1f26e4712661646efa32fe8.jpeg"></div>
                                                            </div>
                                                            <div class="template-download">
                                                                <div><img src="https://i1.24x7th.com/df/0/ui/post/2016/06/11/8/t/ed39a1ec6946fe77e39ef91c95125ef9.jpeg"></div>
                                                            </div>
                                                            <div class="template-download">
                                                                <div><img src="https://i2.24x7th.com/df/0/ui/post/2016/06/11/8/t/949199122151f985673c45c271c20d30.jpeg"></div>
                                                            </div>
                                                 </div>
												<div id="ibenic_file_upload" class="file-upload">
												  	<input type="file" id="ibenic_file_input" style="opacity:0;" />
												  	<p class="ibenic_file_upload_text"><?php _e( 'คลิกเลือกรูปภาพ', 'ibenic_upload' ); ?></p>
												</div>
                                            </div>
                                        </div><!-- EOT div class="area-figure clear" -->
                                    </div><!-- EOT div id="upload-photo" class="upload-photo" -->								
								</div><!-- EOT div class="uploadin-image span" -->
							</div><!-- EOT div class="col-sm-8" -->
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ใส่รายละเอียดสินค้าให้ครบถ้วน :</label>
							<div class="col-sm-8">
								<textarea class="form-control" rows="3" name="ipDetail" id="ipDetail">ใส่รายละเอียดสินค้าให้ครบถ้วน </textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ระบุพื้นที่ตั้ง :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ipAreaProv" id="ipAreaProv" placeholder="ระบุพื้นที่ จังหวัด" value="ระบุพื้นที่ จังหวัด">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label"></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ipAreaSub" id="ipAreaSub" placeholder="ระบุพื้นที่ อำเภอ/เขต" value="ระบุพื้นที่ อำเภอ/เขต">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">จำนวนห้องนอน :</label>
							<div class="col-sm-3">
								<input type="number" class="form-control" name="ipTotalBedroom" id="ipTotalBedroom" placeholder="จำนวนห้องนอน" min="0" step="1" max="10" maxlength="2" data-bind="value:replyNumber" value="1">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">จำนวนห้องน้ำ :</label>
							<div class="col-sm-3">
								<input type="number" class="form-control" name="ipTotalBathroom" id="ipTotalBathroom" placeholder="จำนวนห้องน้ำ" min="0" step="1" maxlength="2" data-bind="value:replyNumber" value="1">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">เบอร์มือถือ :</label>
							<div class="col-sm-3">
								<input type="tel" class="form-control" name="ipPhoneNumber" id="ipPhoneNumber" placeholder="เบอร์มือถือ" value="0868734246">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label"></label>
							<div class="col-sm-8">
								<button type="submit" class="btn btn-default">บันทึก</button>
							</div>
						</div>
					</form>							
				</p>
				</div><!-- .entry-content -->
			</div>
			<footer class="entry-footer clearfix">
				<div class="entry-meta">
					<div class="entry-footer-right"></div>
				</div>
				<span class="edit-link"><a class="post-edit-link" href="javascript:alert('Hello world!')"><i class="fa fa-pencil-square-o"></i></a></span>	
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->		
	</main><!-- #main -->
</div><!-- #primary -->
<!-- 
<div id="secondary" class="widget-area" role="complementary">
	<aside id="categories-2" class="widget widget_categories"><h2 class="widget-title">รายการประกาศ</h2>
	<ul>
		<li class="cat-item cat-item-13"><a href="http://localhost/testmember/category/main-categories/rent/" title="Rent">ประกาศขาย</a> (1)</li>
		<li class="cat-item cat-item-12"><a href="http://localhost/testmember/category/main-categories/sale/" title="Sale">ประกาศให้เช่า</a> (2)</li>
	</ul>
	</aside>
</div><!-- #secondary -->
<?php get_sidebar(); ?>	

<?php #**************CLOSE FORM?>
<?php get_footer(); ?>