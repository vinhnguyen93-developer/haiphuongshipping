
<?php 
/*
 Template Name: Service
 */ 
get_header(); ?>
<div class="d-service">
    <div class="sv-conten d-flex justify-content-end align-items-center">
        <div class="sv-conten-title d-flex flex-column justify-content-center align-items-center ">
            <h2 class="sv-h2">
                Dịch vụ
            </h2>
            <p class="hps">HPS - Chia sẻ hết mình - Phục vụ tận tình</p>
        </div>
    </div>
    <div class="d-service d-flex flex-wrap justify-content-evenly">
    <div class="sv-1 d-flex flex-column">
        <img  class="sv-img"src="<?php bloginfo('template_url'); ?>/assets/vantai.png" alt=""/>
        <button class="show sv-button js-show">
            Dịch vụ vận tải hàng hóa trọn gói bằng đường biển
        </button>
    </div>
    <div class="sv-1 d-flex flex-column">
        <img  class="sv-img"src="<?php bloginfo('template_url'); ?>/assets/thuetau.png" alt=""/>
        <button class="show sv-button js-show">
            Dịch vụ thuê tàu và mô giới hàng hải
        </button>
    </div>
    <div class="sv-1 d-flex flex-column">
        <img  class="sv-img"src="<?php bloginfo('template_url'); ?>/assets/cungung.png" alt=""/>
        <button class="show sv-button js-show">
            Cung ứng thuyền viên
        </button>
    </div>
    <div class="sv-1 d-flex flex-column">
        <img  class="sv-img"src="<?php bloginfo('template_url'); ?>/assets/add.png" alt=""/>
        <button class="show sv-button js-show">
            Cung ứng thuyền viên
        </button>
    </div>
    <div class="sv-2 d-flex flex-column">
        <img  class="sv-img"src="<?php bloginfo('template_url'); ?>/assets/cungunghanghai.png" alt=""/>
        <button class="show sv-button js-show">
            Đại lý và cung ứng hàng hải
        </button>
    </div>
    </div>
</div>
<div class="modal justify-content-center align-items-center">
    <div class="modal-conten d-flex justify-content-center align-items-end">
    <div class="button-modal ">
        <button class="button-modal d-flex justify-content-center align-items-center">
                Liên hệ ngay
        </button>
    </div>    
    
    </div>
    
</div>
<!-- <script>
    const buyShows = document.querySelectorAll('.js-show')
    const modal = document.querySelector('.modal')
    function showShow() {
        modal.classList.add('sv-modal-open')
    }

    for (const buyShow of buyShows) {
        buyShow.addEventListener('click',showShow)
    }
</script> -->










<?php get_footer(); ?>