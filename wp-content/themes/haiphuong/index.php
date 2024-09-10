<?php get_header(); ?>

<section>
  <div class="position-relative text-center">
    <img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/board.png" alt="Board" >
    <h1 class="position-absolute text-white cover-top-title">sharing experience, serving excellence</h1>
  </div>
</section>

<section class="py-3 why">
  <div class="d-flex justify-content-center mb-5">
    <h2 class="section-title">Tại sao chọn chúng tôi?</h2>
  </div>

  <div class="container">
    <div class="row gx-0 gx-md-5 gy-md-0 gy-4">
      <div class="col-12 col-md-4">
        <div class="why-item p-2 d-flex align-items-center">
          <img class="me-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/gear.png" alt="Gear" >
          <div>
            <h3 class="why-item-title fw-medium">Giải pháp vận chuyển</h3>
            <p class="why-item-text fw-light mt-2 mb-4">Lorem ipsum dolor amet, consectetuer</p>
            <a class="why-item-title" href="#">
              <span>Xem thêm</span>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="why-item p-2 d-flex align-items-center">
          <img class="me-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/quality.png" alt="Quality" >
          <div>
            <h3 class="why-item-title fw-medium">Chất lượng đảm bảo</h3>
            <p class="why-item-text fw-light mt-2 mb-4">Lorem ipsum dolor amet, consectetuer</p>
            <a class="why-item-title" href="#">
              <span>Xem thêm</span>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="why-item p-2 d-flex align-items-center">
          <img class="me-3" width="64" src="<?php bloginfo('template_url'); ?>/assets/secure-payment.png" alt="Secure payment" >
          <div>
            <h3 class="why-item-title fw-medium">Điều kiện thanh toán</h3>
            <p class="why-item-text fw-light mt-2 mb-4">Lorem ipsum dolor amet, consectetuer</p>
            <a class="why-item-title" href="#">
              <span>Xem thêm</span>
              <i class="fa-solid fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>