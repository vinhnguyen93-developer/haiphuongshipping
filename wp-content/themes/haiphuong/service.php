
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
<div class="sv-title d-flex justify-content-center align-items-center">
    <h1 class="sv-h1 fs-1">
        DỊCH VỤ
    </h1>
</div>
<div class="sv-service">
        <?php 
        
        if($service_query -> have_posts()):
          while($service_query -> have_posts()): $service_query -> the_post();
            $service_number = $service_query -> current_post + 1;
            $service_title = get_the_title();
            $service_description = get_the_excerpt();
            $service_image_src = get_field('image', get_the_ID());
        ?>
    <div class="sv-item d-flex">
        <div class="d-box-1 d-flex flex-wrap flex-column justify-content-center align-items-center">
            <div>
                <img  class="sv-img"src="<?php echo $service_image_src; ?>" alt=""/>
            </div>    
        
            <div class="sv-h2-img d-flex justify-content-center align-items-center text-white">
                <h2 id="service-modal-title" class="d-sv-box-1 text-center">
                <?php echo $service_title; ?>
                </h2>
            </div>
            
        </div>
        <div id="service-title-" class="sv-content">
            <h2 id="service-title-<?php echo $service_number; ?>" class="sv-h2">
                <?php echo $service_title; ?>
            </h2>
            <p id="service-content-<?php echo $service_number; ?>" class="d-sv-title">
                <?php echo $service_description; ?>
            </p>    
        </div>
    </div>
    <?php 
          endwhile;
        endif;

        ?>
    
</div>



<?php get_footer(); ?>