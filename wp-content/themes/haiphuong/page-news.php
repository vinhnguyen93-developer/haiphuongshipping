<?php
/*
 Template Name: News
 */

 get_header();

 $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

 $news_query = new WP_Query(array(
  'post_type' => 'news',
  'posts_per_page' => 10,
  'paged' => $paged,
));
?>

<div>
  <div class="position-relative new-page-top">
    <img class="w-100 new-page-image" src="<?php bloginfo('template_url'); ?>/assets/bg-news.png" alt="Tin tức & Tuyển dụng">
    <h1 class="position-absolute top-50 start-50 translate-middle new-page-title text-uppercase">Tin tức và tuyển dụng</h1>
  </div>

  <div class="container my-5">
    <div>
      <?php 
      if($news_query -> have_posts()):
        while($news_query -> have_posts()): $news_query -> the_post();
          $news_guid = get_the_guid();
          $new_date = get_the_date('j/M/Y');
          $news_title = get_the_title();
          $news_image_src = get_field('image', get_the_ID());
          $news_description = get_field('description', get_the_ID());
      ?>
        <a href="<?php echo $news_guid; ?>" class="row mb-5 mb-md-4 gx-md-4 gx-0 gy-2 gy-md-0">
          <div class="col-md-4 col-12">
            <img class="w-100 new-page-item-image" src="<?php echo $news_image_src; ?>" alt="">
          </div>
          <div class="col-md-8 col-12">
            <h2 class="new-title lh-base text-truncate mb-2"><?php echo $news_title; ?></h2>
            <p class="mb-3 new-page-date text-black"><?php echo $new_date; ?></p>
            <p class="lh-base new-page-description text-black"><?php echo $news_description; ?></p>
            <p class="new-page-btn btn mt-4">
              Đọc thêm
            </p>
          </div>
        </a>
      <?php 
        endwhile;
      endif;
      ?>
    </div>

    <div class="pagination-page mt-5">
			<?php
				$big = 999999999;

				echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => $paged,
				'total' => $news_query->max_num_pages,
				'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
				'next_text' => '<i class="fa-solid fa-chevron-right"></i>'
				) );
        wp_reset_postdata();
			?>
		</div>
  </div>
</div>

<?php get_footer(); ?>