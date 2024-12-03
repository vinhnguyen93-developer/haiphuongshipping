<?php
  $the_query = new WP_Query(array(
    'post_type' => 'slide',
  ));
?>
  
<?php
  while ($the_query -> have_posts()) : $the_query -> the_post();
?>

  <div>
    <img class="slide-top-image" src="<?php the_field('image'); ?>" alt="Anh bìa" loading="lazy">
  </div>
  
<?php
  endwhile;
  wp_reset_postdata();
?>