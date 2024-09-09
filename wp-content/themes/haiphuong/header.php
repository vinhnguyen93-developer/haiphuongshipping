<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php wp_head(); ?>
<link href="<?php bloginfo('template_url'); ?>/duy-css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/luan-css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/vinh-css/style.css" rel="stylesheet">
</head>
  <body>
    <div>
      <header class="header">
        <div class="container d-flex align-items-center justify-content-between h-100">
          <div class="d-flex">
            <a href="tel:+84 916.114.888" class="d-flex me-5">
              <div class="me-3">
                <i class="fa-solid fa-phone text-white"></i>
              </div>
              <h3 class="text-white">+84 916.114.888</h3>
            </a>
            <a href="mailto:global@haiphuongshipping.com" class="d-flex">
              <div class="me-3">
                <i class="fa-solid fa-envelope text-white"></i>
              </div>
              <h3 class="text-white">global@haiphuongshipping.com</h3>
            </a>
          </div>

          <a href="https://www.facebook.com/Haiphuong0505" target="blank" class="header-icon-facebook">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
        </div>
      </header>

      <nav class="navbar-container">
        <div class="container d-flex align-items-center justify-content-between">
          <a href="/">
            <img width="200" src="<?php bloginfo('template_url'); ?>/assets/haiphuong_logo.jpg" alt="Hai Phuong Logo">
          </a>

          <div class="d-flex align-items-center">
            <ul class="d-flex align-items-center">
              <li class="mx-3 pb-1 navbar-item-hover navbar-item-active">
                <a href="/">Trang chủ</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover">
                <a href="#">Giới thiệu</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover">
                <a href="#">Dịch vụ</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover">
                <a href="#">Tiện ích</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover">
                <a href="#">Liên hệ</a>
              </li>
            </ul>

            <div class="d-flex align-items-center ms-3">
              <div class="me-2" role="button">
                <img width="40" src="<?php bloginfo('template_url'); ?>/assets/united-kingdom.png" alt="United kingdom flag">
              </div>
              <div role="button">
                <img width="40" src="<?php bloginfo('template_url'); ?>/assets/vietnam.png" alt="vietnam flag">
              </div>

              <div class="ms-4" role="button">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <div>
        <main role="main">