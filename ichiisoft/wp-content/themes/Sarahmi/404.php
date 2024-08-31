<?php
get_header();
?>
<main class="container-bg-error-404">
	<div class="container">
        <section class="error-404">
            <div class="page-content">
				<h2 class="page-content-title-top">
					404
				</h2>
				<h3 class="page-content-title-center">
					Ôi? Đã xảy ra lỗi...
				</h3>
				<p class="page-content-center">
					Xin lỗi trang bạn truy cập không tồn tại trong hệ thống website của chúng tôi!
					vui lòng quay lại trang chủ hoặc tìm kiếm từ khóa bạn muốn bên dưới nhé.
				</p>
				<a href="<?php echo get_template_directory_uri() ; ?>" class="page-content-btn-404">
					Trở lại trang chủ
				</a>
				
				
            </div><!-- .page-content -->
        </section><!-- .error-404 -->

</div><!-- #container -->
</main><!-- #main -->
<?php get_footer();?>