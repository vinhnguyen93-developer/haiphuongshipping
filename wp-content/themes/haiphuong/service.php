
<?php 
/*
 Template Name: Service
 */ 
get_header();
$service_query = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => 5,
    'order'          => 'ASC',
  ));

?>
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
    <?php 
        
        if($service_query -> have_posts()):
          while($service_query -> have_posts()): $service_query -> the_post();
            $service_number = $service_query -> current_post + 1;
            $service_title = get_the_title();
            $service_description = get_the_excerpt();
            $service_image_src = get_field('image', get_the_ID());
        ?>

    <div id="d-service-<?php echo $service_number; ?>" class="sv-1  open-modal d-flex flex-column">
        <img  class="sv-img"src="<?php echo $service_image_src; ?>" alt=""/>
        <button id="service-title-<?php echo $service_number; ?>" class="show sv-button js-show">
            <?php echo $service_title; ?>
        </button>
        <p id="service-content-<?php echo $service_number; ?>" class="d-none">
        <?php echo $service_description; ?>
        </p>
    </div>
    <?php 
          endwhile;
        endif;

        ?>
    </div>
</div>
<div id="modal" class="modal justify-content-center align-items-center">
    <div id="modal-conten" class="modal-conten d-flex flex-column justify-content-center align-items-center">
        <div class="d-box-1 d-flex flex-column align-items-center"> 
            <div id="service-modal-title" class="content-1 text-center">
                Dịch vụ vận tải hàng hóa bằng đường biển
            </div>
            <div id="service-modal-content" class="title-1">
            
            </div>
        </div>
       
        <div class="button-modal ">
            <a href="<?php echo site_url('/contact'); ?>" class="button-modal d-flex justify-content-center align-items-center ">
                    Liên hệ ngay
            </a>
        </div>    
    </div>
 
</div>



<script>
    const buyShows = document.querySelectorAll('.open-modal')
    const modal = document.querySelector('.modal')
    const close = document.querySelector('modal')
    function showShow() {
        modal.classList.add('sv-modal-open')
    }

    for (const buyShow of buyShows) {
        buyShow.addEventListener('click',showShow)
    }
    // close.addEventListener('click', (e)=>{
    //     if(!modal-conten.contains(e.target)){
    //         modal.classlist.remove('sv-modal-open')
    //     }
    // });

    document.addEventListener('click', handleClickOutside);

    function handleClickOutside(e) {
    if (
        e.target.matches('.d-service, .d-service *') ||
        e.target.matches('.modal-conten, .modal-conten *')
    )
    {
        
        return;
    }
    console.log('click here')
    console.log(modal.classList)
       modal.classList.remove('sv-modal-open');
    }
</script>










<?php get_footer(); ?>