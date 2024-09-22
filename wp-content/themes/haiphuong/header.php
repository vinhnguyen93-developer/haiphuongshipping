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
<link href="<?php bloginfo('template_url'); ?>/slick.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/slick-theme.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/duy-css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/luan-css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/vinh-css/style.css" rel="stylesheet">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2CP4SY5D4L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2CP4SY5D4L');
</script>
</head>
  <body>
    <div>
      <header class="header d-none d-md-block">
        <div class="container d-flex align-items-center justify-content-between h-100">
          <div class="d-flex">
            <a href="tel:+84 945.776.999" class="d-flex me-5">
              <div class="me-3">
                <i class="fa-solid fa-phone text-white"></i>
              </div>
              <h3 class="text-white">+84 945.776.999</h3>
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

      <?php
        $path = $_SERVER['REQUEST_URI'];
        $path_name;
        if(strlen($path) > 1) {
          $array_path = explode('/', $path);
          $path_name = $array_path[1];
        } else {
          $path_name = $path;
        }
      ?>

      <nav id="navbar-sticky" class="navbar-container bg-white">
        <div class="container d-flex align-items-center justify-content-between">
          <a href="/">
            <img class="navbar-logo" src="<?php bloginfo('template_url'); ?>/assets/haiphuong_logo.jpg" alt="Hai Phuong Logo">
          </a>

          <div class="d-none d-md-flex align-items-center">
            <ul class="d-flex align-items-center">
              <li class="mx-3 pb-1 navbar-item-hover <?php echo ($path_name == '/' ? 'navbar-item-active' : ''); ?>">
                <a href="/">Trang chủ</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover <?php echo ($path_name == 'intro' ? 'navbar-item-active' : ''); ?>">
                <a href="<?php echo site_url('/intro'); ?>">Giới thiệu</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover <?php echo ($path_name == 'service' ? 'navbar-item-active' : ''); ?>">
                <a href="<?php echo site_url('/service'); ?>">Dịch vụ</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover <?php echo ($path_name == 'news' ? 'navbar-item-active' : ''); ?>">
                <a href="<?php echo site_url('/news'); ?>">Tin tức & Tuyển dụng</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover <?php echo ($path_name == 'fleet' ? 'navbar-item-active' : ''); ?>">
                <a href="<?php echo site_url('/fleet'); ?>">Đội tàu</a>
              </li>
              <li class="mx-3 pb-1 navbar-item-hover <?php echo ($path_name == 'contact' ? 'navbar-item-active' : ''); ?>">
                <a href="<?php echo site_url('/contact'); ?>">Liên hệ</a>
              </li>
            </ul>

            <div class="d-flex align-items-center ms-3">
              <div class="me-2" role="button">
                <img width="40" src="<?php bloginfo('template_url'); ?>/assets/vietnam.png" alt="vietnam flag">
              </div>
              <div role="button">
                <img width="40" src="<?php bloginfo('template_url'); ?>/assets/united-kingdom.png" alt="United kingdom flag">
              </div>

              <div class="ms-4" role="button">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
          </div>

          <div class="d-block d-md-none">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <i class="fs-2 fa-solid fa-bars"></i>
            </button>
          </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header align-items-start">
            <a href="/">
              <img width="140" src="<?php bloginfo('template_url'); ?>/assets/haiphuong_logo.jpg" alt="">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="my-3">
                <a class="navbar-item-hover <?php echo ($path_name == '/' ? 'navbar-item-active' : ''); ?>" href="/">Trang chủ</a>
              </li>
              <li class="my-3">
                <a class="navbar-item-hover <?php echo ($path_name == 'intro' ? 'navbar-item-active' : ''); ?>" href="<?php echo site_url('/intro'); ?>">Giới thiệu</a>
              </li>
              <li class="my-3">
                <a class="navbar-item-hover <?php echo ($path_name == 'service' ? 'navbar-item-active' : ''); ?>" href="<?php echo site_url('/service'); ?>">Dịch vụ</a>
              </li>
              <li class="my-3">
                <a class="navbar-item-hover <?php echo ($path_name == 'news' ? 'navbar-item-active' : ''); ?>" href="<?php echo site_url('/news'); ?>">Tin tức & tuyển dụng</a>
              </li>
              <li class="my-3">
                <a class="navbar-item-hover <?php echo ($path_name == 'fleet' ? 'navbar-item-active' : ''); ?>" href="<?php echo site_url('/fleet'); ?>">Đội tàu</a>
              </li>
              <li class="my-3">
                <a class="navbar-item-hover <?php echo ($path_name == 'contact' ? 'navbar-item-active' : ''); ?>" href="<?php echo site_url('/contact'); ?>">Liên hệ</a>
              </li>
            </ul>

            <div class="d-flex align-items-center">
              <div class="me-2" role="button">
                <img width="40" src="<?php bloginfo('template_url'); ?>/assets/vietnam.png" alt="vietnam flag">
              </div>
              <div role="button">
                <img width="40" src="<?php bloginfo('template_url'); ?>/assets/united-kingdom.png" alt="United kingdom flag">
              </div>
            </div>

            <form class="d-flex mt-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>

      <div class="hp-main">
        <main role="main">