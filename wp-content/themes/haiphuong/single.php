<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-md-8 post-content">
        <h1 class="text-center fs-2 mb-4 post-title lh-base"><?php the_title(); ?></h1>
        <?php echo the_content(); ?>
      </div>

      <?php
        $post_type = get_post_type();

        $the_query = new WP_Query(array(
          'post_type' => $post_type,
          'posts_per_page' => 5,
        ));
      ?>

      <div class="col-12 col-md-4 post-right">
        <h3 class="mb-3 pb-2 fs-4 post-right-title">Bài viết mới</h3>

        <div>
          <?php 
          if($the_query -> have_posts()):
            while($the_query -> have_posts()): $the_query -> the_post();
          ?>
            <a href="<?php the_guid(); ?>" class="d-flex align-items-start p-2 post-item">
              <img width="50" height="50" class="" src="<?php the_field('image', get_the_ID()); ?>" alt="">
              <h2 class="ms-2 lh-base post-item-title"><?php the_title(); ?></h2>
            </a>
          <?php 
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>