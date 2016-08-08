<?php 
require_once WPCF7_PLUGIN_DIR . '/includes/controller.php';

function custom_scripts() {
	wp_enqueue_style( 'my-bootstrapcss', get_template_directory_uri() .  '/css/mybootstrap.min.css');
	wp_enqueue_script( 'my-bootstrapjs', get_template_directory_uri() . '/js/mybootstrap.min.js', array(), '20160709' );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
get_header(); 
?>
<?php #**************START FORM ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<article id="post-144" class="post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-rent category-main-categories category-uncategorized">
			<div class="content-wrap">
			<header class="entry-header">
				<h1 class="entry-title">ลงประกาศ</h1>	
			</header><!-- .entry-header -->
			</div>
			<footer class="entry-footer clearfix">
				<div class="entry-meta">
					<div class="entry-footer-right"></div>
				</div>
			</footer><!-- .entry-footer -->		
			<div class="content-wrap">
				<div class="entry-content">
					<form class="form-horizontal" action="/testmember/add-proclaim" method="POST">
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ตั้งชื่อสินค้าที่คุณต้องการลงขาย :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="iputproname" id="iputproname" placeholder="ตั้งชื่อสินค้าที่คุณต้องการลงขาย">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ต้องการ :</label>
							<div class="col-sm-8">
								<div class="radio">
								  <label><input type="radio" name="ipProclaimType" id="ipProclaimType1" value="1" checked>ขาย</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="ipProclaimType" id="ipProclaimType2" value="2">เช่า</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">สภาพสินค้า :</label>
							<div class="col-sm-8">
								<div class="radio">
								  <label><input type="radio" name="ipProclaimQulity" id="ipProclaimQulityNew" value="1" checked>ใหม่</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="ipProclaimQulity" id="ipProclaimQulitySecH" value="2">มือสอง</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">เลือกหมวดหมู่ให้ตรงกับสินค้า :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="iputpgroup" id="iputpgroup" placeholder="เลือกหมวดหมู่ให้ตรงกับสินค้า">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ระบุราคาที่เหมาะสม :</label>
							<div class="col-sm-3">
								<input type="number" class="form-control" name="iputcostestimate" id="iputcostestimate" placeholder="ระบุราคาที่เหมาะสม" min="0" step="500" maxlength="10" data-bind="value:replyNumber">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">รูปภาพสินค้า :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="iputimages" id="iputimages" placeholder="รูปภาพสินค้า">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ใส่รายละเอียดสินค้าให้ครบถ้วน :</label>
							<div class="col-sm-8">
								<textarea class="form-control" rows="3" name="iputdetail" id="iputdetail"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">ระบุพื้นที่ตั้ง :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="iputareaprov" id="iputareaprov" placeholder="ระบุพื้นที่ จังหวัด">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label"></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="iputareadist" id="iputareadist" placeholder="ระบุพื้นที่ อำเภอ/เขต">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">จำนวนห้องนอน :</label>
							<div class="col-sm-3">
								<input type="number" class="form-control" name="iputbedroom" id="iputbedroom" placeholder="จำนวนห้องนอน" min="0" step="1" max="10" maxlength="2" data-bind="value:replyNumber">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">จำนวนห้องน้ำ :</label>
							<div class="col-sm-3">
								<input type="number" class="form-control" name="iputbathroom" id="iputbathroom" placeholder="จำนวนห้องน้ำ" min="0" step="1" maxlength="2" data-bind="value:replyNumber">
							</div>
						</div>
						<div class="form-group">
							<label for="iputEmail3" class="col-sm-4 control-label">เบอร์มือถือ :</label>
							<div class="col-sm-3">
								<input type="tel" class="form-control" id="inputEmail3" placeholder="เบอร์มือถือ">
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

<div id="secondary" class="widget-area" role="complementary">
	<aside id="categories-2" class="widget widget_categories"><h2 class="widget-title">รายการประกาศ</h2>
	<ul>
		<li class="cat-item cat-item-13"><a href="http://localhost/testmember/category/main-categories/rent/" title="Rent">For Rent</a> (1)</li>
		<li class="cat-item cat-item-12"><a href="http://localhost/testmember/category/main-categories/sale/" title="Sale">For Sale</a> (2)</li>
		<li class="cat-item cat-item-14"><a href="http://localhost/testmember/category/main-categories/" title="Main Categories">Main Categories</a> (2)</li>
		<li class="cat-item cat-item-1"><a href="http://localhost/testmember/category/uncategorized/">Uncategorized</a> (1)</li>
	</ul>
	</aside>
</div><!-- #secondary -->


<?php #**************CLOSE FORM?>
<?php get_footer(); ?>