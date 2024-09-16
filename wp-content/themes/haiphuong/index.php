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

?>

<section>
  <div class="position-relative text-center">
    <img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/bg-top.png" alt="Board" >
    <h1 class="position-absolute cover-top-title">sharing experience, serving excellence</h1>
  </div>
</section>

<section class="py-4 why">
  <div class="d-flex justify-content-center mb-5">
    <h2 class="section-title">Tại sao chọn chúng tôi?</h2>
  </div>

  <div class="container">
    <div class="row gx-0 gx-md-5 gy-md-0 gy-4">
      <div class="col-12 col-md-4">
        <div class="why-item px-2 px-md-3 py-4 d-flex align-items-center">
          <img class="me-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/goal.png" alt="Goal" >
          <div>
            <h3 class="why-item-title fw-medium">Giải pháp vận chuyển</h3>
            <p class="why-item-text fw-light mt-2 lh-base">
              Chúng tôi cung cấp các phương thức giao hàng thuận tiện và tiết kiệm cho từng dự án.
            </p>
            <!-- <a class="why-item-title" href="#">
              <span>Xem thêm</span>
              <i class="fa-solid fa-chevron-right"></i>
            </a> -->
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="why-item px-2 px-md-3 py-4 d-flex align-items-center">
          <img class="me-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/analytic.png" alt="Analytic" >
          <div>
            <h3 class="why-item-title fw-medium">Chất lượng đảm bảo</h3>
            <p class="why-item-text fw-light mt-2 lh-base">
              Với mục đích cung cấp dịch vụ vận chuyển hàng hóa chất lượng cao.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="why-item px-2 px-md-3 py-4 d-flex align-items-center">
          <img class="me-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/focus.png" alt="Focus" >
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

<section class="container py-4 about-us">
  <div class="row gx-3 gy-md-0 gy-4 align-items-end">
    <div class="col-12 col-md-6">
      <div>
        <img class="about-us-image" src="<?php bloginfo('template_url'); ?>/assets/hp-office.png" alt="Hải Phương Office">
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="text-center text-md-start px-3 px-md-0">
        <h2 class="section-title mb-5 about-us-title">Về chúng tôi</h2>
        <h3 class="about-us-sub-title fw-semibold mb-3 lh-base lh-md-lg text-start">
          Thành lập vào 31 tháng 5 năm 2018, Công ty TNHH vận tải biển Hải Phương (Hai Phuong Shipping Co., Ltd - HPS) rà đời với sứ mệnh phục vụ vận chuyển hàng hóa nội thủy và vận tải biển quốc tế với dịch vụ tốt nhất, đưa ra những giải pháp hữu ích nhất cho khách hàng.
        </h3>
        <p class="fw-light lh-base text-start">
          Với phương châm "Sharing Experience, Serving Excellence!" - "Chia sẻ hết mình, Phục vụ tận tình!" đội ngũ HPS luôn nỗ lực trau dồi, ý thức sứ mệnh và cam kết hỗ trợ, đáp ứng mọi nhu cầu của khách hàng ngày càng tốt hơn.
        </p>

        <a class="btn mt-5 text-white about-us-btn rounded-0 btn-lg" href="tel:+84 916.114.888">Liên hệ ngay</a>
      </div>
    </div>
  </div>
</section>

<section class="mt-3 service">
  <div class="service-layer pt-4">
    <div class="d-flex justify-content-center mb-5">
      <h2 class="section-title text-white">Dịch vụ cung cấp</h2>
    </div>
  
    <div class="service-body">
      <div class="h-100 d-flex flex-column flex-md-row justify-content-between px-4 pb-5 service-content">
        <?php 
        
        if($service_query -> have_posts()):
          while($service_query -> have_posts()): $service_query -> the_post();
            $service_number = $service_query -> current_post + 1;
            $service_title = get_the_title();
            $service_description = get_the_excerpt();
        ?>

        <div class="service-item">
          <h2 class="service-number mb-3"><?php echo '0' . $service_number; ?></h2>
          <h2 class="service-title lh-base"><?php echo $service_title; ?></h2>
          <p class="mt-4 service-text text-white fw-lighter lh-base">
            <?php echo $service_description; ?>
          </p>
          <i class="service-angles mt-4 text-white fa-solid fa-angles-right"></i>
        </div>

        <?php 
          endwhile;
        endif;

        ?>
      </div>
    </div>
  </div>
</section>

<section class="py-4">
  <div class="container">
    <div class="d-flex justify-content-center mb-5">
      <h2 class="section-title">Đội tàu công ty</h2>
    </div>
  
    <div class="row gy-5">
      <div class="col-12 py-3 ship-item">
        <div class="d-flex flex-column flex-md-row">
          <div class="me-0 me-md-5 mb-3 mb-md-0">
            <img class="ship-image" src="<?php bloginfo('template_url'); ?>/assets/ship-1.png" alt="">
          </div>
         
          <div>
            <h1 class="mb-3 text-uppercase fs-2">ocean gold</h1>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">sdbc, 1996blt, panama flag japan tsuneishi blt</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">45,622dwt on s.draft: 11.62m tcp: 49.82</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">loa/beam/depth 185.74/30.4/16.5m grt/nrt 26,047/14,880</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">grain/57,208.40m3, bale/55,564.90m3, 5h/5h</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">h.cover type: mac(folding)</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">hatch size hold no.1 20.5 <span class="text-lowercase">x</span> 15.3/no.2, 3, 4, 5 20.8 <span class="text-lowercase">x</span> 15.3m</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">crane 4 <span class="text-lowercase">x</span> 20 mt, grabfitted 4 <span class="text-lowercase">x</span> 8 cbm p&i: mmia ada</p>
          </div>
        </div>
      </div>
      <div class="col-12 py-3 ship-item">
        <div class="d-flex flex-column flex-md-row">
          <div class="me-0 me-md-5 mb-3 mb-md-0">
            <img class="ship-image" src="<?php bloginfo('template_url'); ?>/assets/ship-2.png" alt="">
          </div>
         
          <div>
            <h1 class="mb-3 text-uppercase fs-2">m/v sun gold</h1>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">sdbc, 1996blt, panama flag japan tsuneishi blt</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">45,622dwt on s.draft: 11.62m tcp: 49.82</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">loa/beam/depth 185.74/30.4/16.5m grt/nrt 26,047/14,880</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">grain/57,208.40m3, bale/55,564.90m3, 5h/5h</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">h.cover type: mac(folding)</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">hatch size hold no.1 20.5 <span class="text-lowercase">x</span> 15.3/no.2, 3, 4, 5 20.8 <span class="text-lowercase">x</span> 15.3m</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">crane 4 <span class="text-lowercase">x</span> 20 mt, grabfitted 4 <span class="text-lowercase">x</span> 8 cbm p&i: mmia ada</p>
          </div>
        </div>
      </div>
      <div class="col-12 py-3 ship-item">
        <div class="d-flex flex-column flex-md-row">
          <div class="me-0 me-md-5 mb-3 mb-md-0">
            <img class="ship-image" src="<?php bloginfo('template_url'); ?>/assets/ship-3.png" alt="">
          </div>
         
          <div>
            <h1 class="mb-3 text-uppercase fs-2">m/v new gold</h1>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">sdbc, 1996blt, panama flag japan tsuneishi blt</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">45,622dwt on s.draft: 11.62m tcp: 49.82</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">loa/beam/depth 185.74/30.4/16.5m grt/nrt 26,047/14,880</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">grain/57,208.40m3, bale/55,564.90m3, 5h/5h</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">h.cover type: mac(folding)</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">hatch size hold no.1 20.5 <span class="text-lowercase">x</span> 15.3/no.2, 3, 4, 5 20.8 <span class="text-lowercase">x</span> 15.3m</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">crane 4 <span class="text-lowercase">x</span> 20 mt, grabfitted 4 <span class="text-lowercase">x</span> 8 cbm p&i: mmia ada</p>
          </div>
        </div>
      </div>
      <div class="col-12 py-3 ship-item">
        <div class="d-flex flex-column flex-md-row">
          <div class="me-0 me-md-5 mb-3 mb-md-0">
            <img class="ship-image" src="<?php bloginfo('template_url'); ?>/assets/ship-4.png" alt="">
          </div>
         
          <div>
            <h1 class="mb-3 text-uppercase fs-2">m/v t&t gold</h1>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">sdbc, 1996blt, panama flag japan tsuneishi blt</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">45,622dwt on s.draft: 11.62m tcp: 49.82</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">loa/beam/depth 185.74/30.4/16.5m grt/nrt 26,047/14,880</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">grain/57,208.40m3, bale/55,564.90m3, 5h/5h</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">h.cover type: mac(folding)</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">hatch size hold no.1 20.5 <span class="text-lowercase">x</span> 15.3/no.2, 3, 4, 5 20.8 <span class="text-lowercase">x</span> 15.3m</p>
            <p class="fw-lighter lh-base text-uppercase ship-item-text">crane 4 <span class="text-lowercase">x</span> 20 mt, grabfitted 4 <span class="text-lowercase">x</span> 8 cbm p&i: mmia ada</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4 text-center">
      <a href="<?php echo site_url('/ships'); ?>" class="new-btn fs-4">
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

  <div class="row gx-3 gy-4">
    <?php 
    if($news_query -> have_posts()):
      while($news_query -> have_posts()): $news_query -> the_post();
        $news_title = get_the_title();
        $news_image_src = get_field('image', get_the_ID());
    ?>
    <div class="col-12 col-md-4">
      <div class="new-item pb-2">
        <img class="new-image" src="<?php echo $news_image_src; ?>" alt="">
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

    <div class="mt-4 text-center">
      <a href="<?php echo site_url('/news'); ?>" class="new-btn fs-4">
        Xem thêm
        <i class="fa-solid fa-angle-right"></i>
      </a>
    </div>
  </div>
</section>

<section class="comments">
  <div class="comments-body h-100">
    <div class="container d-flex align-items-center h-100">
      <div class="row gx-md-5 gy-md-0 gy-5 flex-column-reverse flex-md-row">
        <div class="col-12 col-md-6 overflow-hidden">
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
  
        <div class="col-12 col-md-6">
          <div class="h-100 d-flex align-items-center justify-content-center">
            <h1 class="text-white section-title">Khách hàng nói về chúng tôi</h1>
          </div>
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
    </div>
  </div>
</section>

<?php get_footer(); ?>