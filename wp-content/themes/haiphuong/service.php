
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
<div id="modal" class="modal justify-content-center align-items-center">
    <div id="modal-conten" class="modal-conten d-flex flex-column justify-content-center align-items-center">
        <div class="d-box-1 d-flex flex-column align-items-center"> 
            <div class="content-1 text-center">
                Dịch vụ vận tải hàng hóa bằng đường biển
            </div>
            <div class="title-1 text-center">
            Vận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóaVận chuyển hàng hóa
            </div>
        </div>
       
        <div class="button-modal ">
        <button class="button-modal d-flex justify-content-center align-items-center">
                Liên hệ ngay
        </button>
        </div>    
    </div>
 
</div>



<script>
    const buyShows = document.querySelectorAll('.js-show')
    const modal = document.querySelector('.modal')
    const close = document.querySelector('modal')
    function showShow() {
        modal.classList.add('sv-modal-open')
    }

    for (const buyShow of buyShows) {
        buyShow.addEventListener('click',showShow)
    }
    close.addEventListener('click', (e)=>{
        if(!modal-conten.contains(e.target)){
            modal.classlist.remove('sv-modal-open')
        }

    });

    // document.addEventListener('click', handleClickOutside);

    // function handleClickOutside(e) {
    // if (
    //     // e.target.matches('.header-toggle') ||
    //     e.target.matches('.modal-conten, .modal-conten *')
    // )
    //     return;
    //    modal.classList.remove('sv-modal-close');
    // }
</script>










<?php get_footer(); ?>