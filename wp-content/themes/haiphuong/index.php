<?php 

get_header();

$service_query = new WP_Query(array(
  'post_type' => 'service',
  'posts_per_page' => 5,
  'order'          => 'ASC',
));

$news_query = new WP_Query(array(
  'post_type' => 'news',
  'posts_per_page' => 3,
));

$ships_query = new WP_Query(array(
  'post_type' => 'fleet',
  'posts_per_page' => 6,
));

?>

<section>
  <?php
  echo do_shortcode('[smartslider3 slider="2"]');
  ?>
</section>

<section class="py-4 why">
  <div class="d-flex justify-content-center mb-5">
    <h2 class="section-title">Tại sao chọn chúng tôi?</h2>
  </div>

  <div class="container">
    <div class="row gx-0 gx-md-5 gy-md-0 gy-4">
      <div class="col-12 col-md-4">
        <div class="why-item px-2 px-md-3 py-4 text-center">
          <img class="mb-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/goal.png" alt="Goal" >
          <div>
            <h3 class="why-item-title fw-medium">Giải pháp vận chuyển</h3>
            <p class="why-item-text fw-light mt-2 lh-base">
              Chúng tôi cung cấp các phương thức giao hàng thuận tiện và tiết kiệm cho từng dự án.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="why-item px-2 px-md-3 py-4 text-center">
          <img class="mb-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/analytic.png" alt="Analytic" >
          <div>
            <h3 class="why-item-title fw-medium">Chất lượng đảm bảo</h3>
            <p class="why-item-text fw-light mt-2 lh-base">
              Với mục đích cung cấp dịch vụ vận chuyển hàng hóa chất lượng cao.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="why-item px-2 px-md-3 py-4 text-center">
          <img class="mb-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/focus.png" alt="Focus" >
          <div>
            <h3 class="why-item-title fw-medium">Điều kiện thanh toán</h3>
            <p class="why-item-text fw-light mt-2 lh-base">
              Chúng tôi cung cấp cho mỗi khách hàng thanh toán cước vận chuyển thuận lợi.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-4 about-us">
  <div class="container">
    <div class="row gx-3 gy-md-0 gy-4 align-items-center">
      <div class="col-12 col-md-4">
        <div>
          <img class="about-us-image" src="<?php bloginfo('template_url'); ?>/assets/hp-office.png" alt="Hải Phương Office">
        </div>
      </div>
      <div class="col-12 col-md-8">
        <div class="text-center text-md-start px-3 px-md-0">
          <h2 class="section-title mb-5 about-us-title text-white">Về chúng tôi</h2>
          <h3 class="about-us-sub-title text-white mb-1 text-start">
            Thành lập vào 31 tháng 5 năm 2018, Công ty TNHH vận tải biển Hải Phương (Hai Phuong Shipping Co., Ltd - HPS) ra đời với sứ mệnh phục vụ vận chuyển hàng hóa nội thủy và vận tải biển quốc tế với dịch vụ tốt nhất, đưa ra những giải pháp hữu ích nhất cho khách hàng.
          </h3>
          <p class="about-us-sub-title text-white text-start">
            Với phương châm "Sharing Experience, Serving Excellence!" - "Chia sẻ hết mình, Phục vụ tận tình!" đội ngũ HPS luôn nỗ lực trau dồi, ý thức sứ mệnh và cam kết hỗ trợ, đáp ứng mọi nhu cầu của khách hàng ngày càng tốt hơn.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-4 container">
  <div class="pt-2">
    <div class="d-flex justify-content-center mb-5">
      <h2 class="section-title">Dịch vụ cung cấp</h2>
    </div>
  
    <div class="service-body">
      <div class="d-flex flex-column flex-md-row justify-content-between px-4 pb-5 service-content">
        <?php 
        if($service_query -> have_posts()):
          while($service_query -> have_posts()): $service_query -> the_post();
            $service_title = get_the_title();
            $service_image_src = get_field('image', get_the_ID());
        ?>

        <div class="service-item text-center">
          <img class="service-image mb-4" src="<?php echo $service_image_src; ?>" alt="">
          <h2 class="service-title lh-base"><?php echo $service_title; ?></h2>
        </div>

        <?php 
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>

<section class="py-4 ship">
  <div class="container">
    <div class="d-flex justify-content-center mb-5">
      <h2 class="section-title">Đội tàu công ty</h2>
    </div>
  
    <div class="row gy-4 gx-0 gx-md-5">
      <?php 
        
        if($ships_query -> have_posts()):
          while($ships_query -> have_posts()): $ships_query -> the_post();
            $ships_guid = get_the_guid();
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
      ?>
      <div class="col-12 col-md-4 ship-item">
        <a href="<?php echo $ships_guid; ?>" class="ship-item-body">
          <div class="">
            <img class="ship-image" src="<?php echo $ship_image_src; ?>" alt="">
          </div>
          
          <h1 class="ship-item-title d-flex align-items-center justify-content-center text-uppercase text-white"><?php echo $ship_name; ?></h1>
         
          <div class="ship-item-description text-white p-3 overflow-hidden">
            <h1 class="mb-2 text-uppercase fs-4"><?php echo $ship_name; ?></h1>
            <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_type_year . ', ' . $ship_flag . ' ' . $ship_builder_place; ?></p>
            <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_dwt . ' ' . $ship_tons; ?></p>
            <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_vessel_dimensions . ' ' . $ship_grt_nrt; ?></p>
            <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_cargo_hold . ', ' . $ship_number_of_cargo; ?></p>
            <p class="lh-base text-uppercase ship-item-text">h.cover type: <?php echo $ship_hatch_cover_type; ?></p>
            <p class="lh-base text-uppercase ship-item-text">hatch size hold <?php echo $ship_hatch_dimensions; ?></p>
            <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_crane_grab . ' p&i: ' . $ship_protection_indemnity; ?></p>
          </div>
        </a>
      </div>
      <?php 
        endwhile;
      endif;
      ?>
    </div>

    <div class="mt-4 text-center">
      <a href="<?php echo site_url('/fleet'); ?>" class="new-btn fs-4">
        Xem thêm
        <i class="fa-solid fa-angle-right"></i>
      </a>
    </div>
  </div>
</section>

<section class="container py-4">
  <div class="d-flex justify-content-center mb-5">
    <h2 class="section-title">Tin tức & tuyển dụng</h2>
  </div>

  <div class="row gx-0 gx-md-5 gy-4 gy-md-0">
    <?php 
    if($news_query -> have_posts()):
      while($news_query -> have_posts()): $news_query -> the_post();
        $news_guid = get_the_guid();
        $news_title = get_the_title();
        $news_image_src = get_field('image', get_the_ID());
        $news_description = get_field('description', get_the_ID());
    ?>
    <div class="col-12 col-md-4">
      <a href="<?php echo $news_guid; ?>" class="d-block new-item p-1">
        <img class="new-image" src="<?php echo $news_image_src; ?>" alt="">
        <h2 class="new-title fw-bold lh-base mt-2 text-truncate mb-2"><?php echo $news_title; ?></h2>
        <p class="new-description text-black"><?php echo $news_description; ?></p>
      </a>
    </div>
    <?php 
      endwhile;
    endif;
    ?>

    <div class="mt-4 text-center">
      <a href="<?php echo site_url('/news'); ?>" class="new-btn fs-4">
        Xem thêm
        <i class="fa-solid fa-angle-right"></i>
      </a>
    </div>
  </div>
</section>

<section class="comments py-5">
  <div class="container d-flex align-items-center justify-content-center h-100">
    <div class="comments-container">
      <div class="d-flex justify-content-center mb-5">
        <h2 class="section-title">Khách hàng nói gì về chúng tôi</h2>
      </div>

      <div class="comments-slide">
        <div class="comments-content">
          <i class="comments-quote fa-solid fa-quote-left"></i>
          <h2 class="lh-lg comments-text">
            Chúng tôi hoàn toàn tin tưởng dịch vụ HPS cung cấp, là đối tác tin cậy của công ty trong dịch vụ vận chuyển!
            <i class="comments-angles fa-solid fa-angles-right"></i>
          </h2>
        </div>
        <div class="comments-content">
          <i class="comments-quote fa-solid fa-quote-left"></i>
          <h2 class="lh-lg comments-text">
            HPS mang đến dịch vụ logistic chuyên nghiệp và đáng tin cậy. Từ quy trình vận hành đến chăm sóc khách hàng, mọi thứ đều hoàn hảo, giúp chúng tôi tối ưu hóa thời gian và chi phí
            <i class="comments-angles fa-solid fa-angles-right"></i>
          </h2>
        </div>
        <div class="comments-content">
          <i class="comments-quote fa-solid fa-quote-left"></i>
          <h2 class="lh-lg comments-text">
            Sự chuyên nghiệp của HPS đã giúp chúng tôi yên tâm trong mọi khâu vận chuyển quốc tế. Đội ngũ tận tâm và hệ thống quản lý hàng hóa hiện đại là những điểm cộng lớn
            <i class="comments-angles fa-solid fa-angles-right"></i>
          </h2>
        </div>
        <div class="comments-content">
          <i class="comments-quote fa-solid fa-quote-left"></i>
          <h2 class="lh-lg comments-text">
            HPS không chỉ mang lại hiệu quả vận chuyển cao mà còn tạo dựng lòng tin với dịch vụ chăm sóc khách hàng chu đáo, luôn sẵn sàng xử lý mọi vấn đề phát sinh.
            <i class="comments-angles fa-solid fa-angles-right"></i>
          </h2>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="d-flex justify-content-center mb-5">
      <h2 class="section-title">Đối tác của chúng tôi</h2>
    </div>

    <div class="slide-images">
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-1.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-2.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-3.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-4.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-5.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-6.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-7.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-8.png" alt="">
      </div>
      <div class="client-item">
        <img width="160" src="<?php bloginfo('template_url'); ?>/assets/client-9.png" alt="">
      </div>
      <div class="client-item">
        <img width="150" class="bg-dark" src="<?php bloginfo('template_url'); ?>/assets/client-10.png" alt="">
      </div>
      <div class="client-item">
        <img width="150" class="bg-dark" src="<?php bloginfo('template_url'); ?>/assets/client-11.png" alt="">
      </div>
      <div class="client-item">
        <img width="150" class="bg-dark" src="<?php bloginfo('template_url'); ?>/assets/client-12.png" alt="">
      </div>
      <div class="client-item">
        <img src="<?php bloginfo('template_url'); ?>/assets/client-13.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>