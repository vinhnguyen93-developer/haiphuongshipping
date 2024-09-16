<?php
/*
 Template Name: News
 */

 get_header();

 $news_query = new WP_Query(array(
  'post_type' => 'news',
  'posts_per_page' => 3,
));
?>

<div>
  <div class="position-relative">
    <img class="w-100 new-page-image" src="<?php bloginfo('template_url'); ?>/assets/bg-news.png" alt="Tin tức & Tuyển dụng">
    <h1 class="position-absolute top-50 translate-middle-y news-page-title">Tin tức và tuyển dụng</h1>
  </div>

  <div class="container my-5">
    <div class="row row-cols-2 gy-4 gy-md-5 gx-md-5">
      <?php 
      if($news_query -> have_posts()):
        while($news_query -> have_posts()): $news_query -> the_post();
          $news_title = get_the_title();
          $news_image_src = get_field('image', get_the_ID());
      ?>
      <div class="col-12 col-md-6">
        <div class="new-item pb-2">
          <img class="w-100 new-page-item-image" src="<?php echo $news_image_src; ?>" alt="">
          <h2 class="m-3 new-title fw-bold lh-base"><?php echo $news_title; ?></h2>
          <a class="new-btn fw-semibold ms-3 mt-4 d-block" href="#">
            Xem thêm
            <i class="fa-solid fa-angle-right"></i>
          </a>
        </div>
      </div>
      <?php 
        endwhile;
      endif;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>