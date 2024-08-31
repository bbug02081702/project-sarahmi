<?php
// Template Name: Trang chi tiết bài viết
get_header(); 
?>

<section class="header-banner-info container-content">
    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post(); // Lấy thông tin bài viết hiện tại
            $post_id = get_the_ID(); // Lấy ID của bài viết
            ?>
            <?php 
            if (has_post_thumbnail()) {
                $thumbnail_id = get_post_thumbnail_id();
                $title = get_the_title();
                $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'large');
                $thumbnail_alt = esc_attr($title);
                $thumbnail_title = esc_attr($title);
                ?>
                <?php if ($thumbnail_url) : ?>
                    <img src="<?php echo $thumbnail_url; ?>" class="banner-img-top container-content" alt="<?php echo $thumbnail_alt; ?>" title="<?php echo $thumbnail_title; ?>" loading="lazy" decoding="async">
                <?php else : ?>
                    <img src="<?php echo get_home_url(); ?>/assets/images/default-thumbnail.png" class="banner-img-top container-content" alt="<?php echo $thumbnail_alt; ?>" title="<?php echo $thumbnail_title; ?>" loading="lazy" decoding="async">
                <?php endif; ?>
            <?php } ?>
            <h1 class="info-title"><?php echo $title; ?></h1>
            <p class="info-content">
                <?php the_content(); ?>
            </p>
            <?php
        }
    } else {
        echo "Không có nội dung cho bài viết";
    }
    ?>
</section>

<?php get_footer(); ?>
