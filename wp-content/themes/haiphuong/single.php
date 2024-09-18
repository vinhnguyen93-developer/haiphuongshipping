<?php get_header(); ?>
<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
      $post_type = get_post_type();

      $the_query = new WP_Query(array(
        'post_type' => $post_type,
        'posts_per_page' => 5,
      ));

      if($post_type === 'fleet') {
        $ship_image_src = get_field('image_ship', get_the_ID());
        $ship_name = get_field('ship_name', get_the_ID());
        $ship_type_year = get_field('ship_type_year', get_the_ID());
        $ship_flag = get_field('flag', get_the_ID());
        $ship_builder_place = get_field('shipbuilder_place', get_the_ID());
        $ship_dwt = get_field('dwt', get_the_ID());
        $ship_tons = get_field('tons_per_centimeter', get_the_ID());
        $ship_vessel_dimensions = get_field('vessel_dimensions', get_the_ID());
        $ship_grt_nrt = get_field('grt_nrt', get_the_ID());
        $ship_cargo_hold = get_field('cargo_hold_capacity', get_the_ID());
        $ship_number_of_cargo = get_field('number_of_cargo', get_the_ID());
        $ship_hatch_cover_type = get_field('hatch_cover_type', get_the_ID());
        $ship_hatch_dimensions = get_field('hatch_dimensions', get_the_ID());
        $ship_crane_grab = get_field('crane_grab', get_the_ID());
        $ship_protection_indemnity = get_field('protection_indemnity', get_the_ID());
      }
?>
  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-md-8 post-content">
        <h1 class="text-center fs-2 mb-4 post-title lh-base"><?php the_title(); ?></h1>

        <?php if($post_type === 'fleet') : ?>
          <div class="mb-4 lh-lg">
            <p>1. Tên: <span class="text-uppercase"><?php echo $ship_name; ?></span></p>
            <p>2. Loại tàu và năm đóng: <span class="text-uppercase"><?php echo $ship_type_year; ?></span></p>
            <p>3. Quốc tịch tàu: <span class="text-uppercase"><?php echo $ship_flag; ?></span></p>
            <p>4. Nhà đóng tàu và nơi đóng: <span class="text-uppercase"><?php echo $ship_builder_place; ?></span></p>
            <p>5. Trọng tải toàn phần (DWT) và mớn nước: <span class="text-uppercase"><?php echo $ship_dwt; ?></span></p>
            <p>6. Trọng tải tấn trên mỗi cm (TCP): <span class="text-uppercase"><?php echo $ship_tons; ?></span></p>
            <p>7. Kích thước tàu: <span class="text-uppercase"><?php echo $ship_vessel_dimensions; ?></span></p>
            <p>8. Tổng dung tích/Dung tích tịnh: <span class="text-uppercase"><?php echo $ship_grt_nrt; ?></span></p>
            <p>9. Dung tích hầm hàng: <span class="text-uppercase"><?php echo $ship_cargo_hold; ?></span></p>
            <p>10. Số hầm hàng: <span class="text-uppercase"><?php echo $ship_number_of_cargo; ?></span></p>
            <p>11. Loại nắp hầm hàng: <span class="text-uppercase"><?php echo $ship_hatch_cover_type; ?></span></p>
            <p>12. Kích thước cửa hầm: <span class="text-uppercase"><?php echo $ship_hatch_dimensions; ?></span></p>
            <p>13. Thiết bị cẩu và gắp hàng: <span class="text-uppercase"><?php echo $ship_crane_grab; ?></span></p>
            <p>14. Bảo hiểm trách nhiệm chủ tàu: <span class="text-uppercase"><?php echo $ship_protection_indemnity; ?></span></p>
          </div>
        <?php endif; ?>
        <?php echo the_content(); ?>
      </div>

      <div class="col-12 col-md-4 post-right">
        <h3 class="mb-3 pb-2 fs-4 post-right-title"><?php echo ($post_type === 'news') ? 'Bài viết mới' : 'Đội tàu'; ?></h3>

        <div>
          <?php 
          if($the_query -> have_posts()):
            while($the_query -> have_posts()): $the_query -> the_post();
              if($post_type === 'news'):
          ?>
            <a href="<?php the_guid(); ?>" class="d-flex align-items-start p-2 post-item">
              <img width="50" height="50" class="" src="<?php the_field('image', get_the_ID()); ?>" alt="">
              <h2 class="ms-2 lh-base post-item-title"><?php the_title(); ?></h2>
            </a>
            <?php else: ?>
            <a href="<?php the_guid(); ?>" class="d-flex align-items-start p-2 post-item">
              <img width="80" height="80" class="" src="<?php the_field('image_ship', get_the_ID()); ?>" alt="">
              <h2 class="ms-2 lh-base post-item-title text-uppercase"><?php the_title(); ?></h2>
            </a>
          <?php 
              endif;
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>