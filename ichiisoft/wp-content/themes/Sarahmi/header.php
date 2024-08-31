<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up until <body>
 *
 * @package YourTheme
 */
 
 

// Đường dẫn đến ảnh và ảnh @2x
$image_url_1x = get_template_directory_uri() . '/assets/images/banner_header.png';
$image_url_2x = get_template_directory_uri() . '/assets/images/banner_header.png';


// xu ly cho trang con khi dan url len mxh
$thumbnail_id = get_post_thumbnail_id();
$thumbnail_url = '';
if ($thumbnail_id) {
    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0];
}

// Nếu không có ảnh thumbnail, sử dụng ảnh mặc định
if (empty($thumbnail_url)) {
    $thumbnail_url = get_stylesheet_directory_uri() . '/assets/images/default-bbugsoft-thumbnail.jpg';
}
// --------------------------

$category = get_queried_object(); // Lấy đối tượng category hiện tại
$category_thumbnail_id = '';
if ($category) {
    $category_thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true); // Lấy ID ảnh thumbnail của category
}
$category_thumbnail_url = '';
if ($category_thumbnail_id) {
    $category_thumbnail_url = wp_get_attachment_image_src($category_thumbnail_id, 'full')[0]; // Lấy URL ảnh thumbnail
}

// Nếu không có ảnh thumbnail, sử dụng ảnh mặc định
if (empty($category_thumbnail_url)) {
    $category_thumbnail_url = get_stylesheet_directory_uri() . '/assets/images/default-bbugsoft-thumbnail.jpg';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset');?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-language" content="vi, en, ja, ko">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google" content="nositelinkssearchbox">
	<meta name="description" content="Công ty Cổ phần Thời Đại Khai Phóng được Sáng lập vào Tháng 5/2024, sự sáp nhập và thống nhất các Ý tưởng, Giá trị và Nguồn lực của 3 Công ty: Công ty Cổ phần Tâm Khai sáng (Thành lập năm 2016), Công ty Cổ phần Giáo dục Đích thực (Thành lập năm 2020) và Công ty Cổ phần Trực Tâm (Thành lập năm 2023)" />
	<meta name="keywords" content="Định hướng, Thúc đẩy và cùng với các tổ chức hay cá nhân khác góp phần Xây dựng một Hệ sinh thái Khai phóng ở quy mô Toàn dân – Toàn diện – Toàn cầu, với mục tiêu năm 2051 đạt được 1 tỷ người tham gia học tập, trải nghiệm và làm việc trong Hệ sinh thái Khai phóng">
	
    <?php if (is_singular('page')) : // Kiểm tra nếu là trang con ?>
    <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
	<!-- Thẻ meta cho Open Graph -->
    <meta property="og:image" content="<?php echo esc_url($thumbnail_url); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="<?php echo esc_attr(get_locale()); ?>">
	<meta property="article:modified_time" content="<?php echo esc_attr(get_the_modified_time('c')); ?>">
    <!-- Các meta tag khác cho trang con -->
<?php elseif (is_front_page()) : // Kiểm tra nếu là trang chủ ?>
    <meta property="og:title" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_site_icon_url()); ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php echo esc_attr(get_locale()); ?>">
	<meta property="article:modified_time" content="<?php echo esc_attr(get_the_modified_time('c')); ?>">
<?php elseif (is_category()) : // Kiểm tra nếu là trang category ?>
    <meta property="og:title" content="<?php echo esc_attr(single_cat_title('', false)); ?>">
    <meta property="og:description" content="<?php echo esc_attr(category_description()); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_category_link(get_query_var('cat'))); ?>">
	<!-- Thẻ meta cho Open Graph -->
    <meta property="og:image" content="<?php echo esc_url($category_thumbnail_url); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php echo esc_attr(get_locale()); ?>">
	<meta property="article:modified_time" content="<?php echo esc_attr(get_the_modified_time('c')); ?>">
    <!-- Các meta tag khác cho trang category -->
<?php elseif (is_singular('post')) : // Kiểm tra nếu là trang bài viết ?>
    <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="<?php echo esc_attr(get_locale()); ?>">
	<meta property="article:modified_time" content="<?php echo esc_attr(get_the_modified_time('c')); ?>">
    <!-- Các meta tag khác cho trang bài viết -->
<?php elseif (is_singular()) : // Kiểm tra nếu là trang bài viết chi tiết ?>
    <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="<?php echo esc_attr(get_locale()); ?>">
	<meta property="article:modified_time" content="<?php echo esc_attr(get_the_modified_time('c')); ?>">
    <!-- Các meta tag khác cho trang bài viết chi tiết -->
<?php endif; ?>
		<meta property="article:publisher" content="" />
<!-- 		<meta name="revisit-after" content="1days" /> -->
		
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Prata&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/open-iconic-bootstrap.min.css"  type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css"  type="text/css" media="all"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.theme.default.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/magnific-popup.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/aos.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ionicons.min.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-datepicker.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/jquery.timepicker.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/flaticon.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/icomoon.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" type="text/css" media="all"/>
 
  <?php wp_head(); ?>
  <style>
      .mission-title {
        font-family: "Prata", serif;
        font-weight: bold;
        font-style: italic;
      }
    </style>
</head>
<body>
<nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container" style="left: -20px; position: relative">
        <!-- <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#ftco-nav"
          aria-controls="ftco-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="oi oi-menu"></span>
        </button> -->
        <div>
          <ul class="navbar-nav m-auto justify-content-between">
            <li class="nav-item active">
              <a href="" class="nav-link" id="menu-home"
                ><span class="icon icon-home"></span
              ></a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_home_url(); ?>/gioi-thieu" class="nav-link">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_home_url(); ?>/dich-vu" class="nav-link">Dịch vụ</a>
            </li>
            <li class="nav-item" id="menu-blog">
              <a href="<?php echo get_home_url(); ?>/blog" class="nav-link">Blog</a>
            </li>
            <li
              class="nav-item"
              id="menu-logo"
              style="width: 12%; height: 12%; margin-bottom: -60px"
            >
              <!-- <a href="products.html" class="nav-link">Products</a> -->
              <a
                href="<?php echo get_home_url(); ?>"
                class="navbar-brand ml-lg-3 p-0"
                style="border-radius: 50%; background-color: #3c3c3c"
              >
                <img
                  src="<?php echo get_template_directory_uri() ; ?>/assets/images/SarahmiLogo.png"
                  alt="SarahmiLogo"
                  style="width: 100%; height: 100%"
                />
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_home_url(); ?>/san-pham" class="nav-link">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_home_url(); ?>/khoa-hoc" class="nav-link">Khóa học</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_home_url(); ?>/lien-he" class="nav-link">Liên hệ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>

</html>