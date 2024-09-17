<?php 
/*
 Template Name: Service
 */ 
get_header();
$fleet_query = new WP_Query(array(
    'post_type' => 'fleet',
    'posts_per_page' => 5,
    'order'          => 'ASC',
  ));

?>

<div class="fleet">
    <div class="f-conten d-flex justify-content-end align-items-center">
        <h1 class="f-h1">
            Đội tàu
        </h1>
    </div>
    <div class="f-item d-flex flex-wrap justify-content-evenly align-items-center">
        
        <?php 
            
            if($fleet_query -> have_posts()):
            while($fleet_query -> have_posts()): $fleet_query -> the_post();
                $fleet_number = $fleet_query -> current_post + 1;
                $fleet_title = get_the_title();
                $fleet_description = get_the_excerpt();
                $fleet_image_src = get_field('image', get_the_ID());
            ?>
        
        
            <div id="d-fleet-<?php echo $fleet_number; ?>" class="f-1 fleet-box d-flex flex-column">
                <img  class="f-img"src="<?php echo $fleet_image_src; ?>" alt=""/>
                <!-- <img  class="f-img"src="<?php bloginfo('template_url'); ?>/assets/ocengold.jpg" alt=""/> -->
                <h2 id="fleet-content-<?php echo $fleet_number; ?>" class="name-ship text-center">
                    <?php echo $fleet_title; ?>
                    OCEAN GOLD
                </h2>
                <p id="fleet-title-<?php echo $fleet_number; ?>" class="title">
                    SDBC, 1996BLT, PANAMA FLAG JAPAN TSUNEISHI BLT 45,622DWT ON S.DRAFT: 11.62M TPC:49.82 LOA/BEAM/DEPTH 185.74/ 30.4/ 16.5 GRT/ NRT 26,047/ 14,880 GRAIN/ 57,208.40 M3, BALE/ 55,564.90M3, 5H/5H
                    <?php echo $fleet_description; ?>
                </p>
                <a href="" class="more">Xem thêm ></a>
            </div>
            <?php 
          endwhile;
        endif;

        ?>
        
         
        <!-- <div id="d-fleet" class="item-fleet d-flex">
            <div id="d-fleet-2" class="f-2">
                <img  class="f-img"src="<?php bloginfo('template_url'); ?>/assets/sungold.jpg" alt=""/>
                <h2 id="fleet-title-2" class="name-ship text-center">
                    M/V SUN GOLD
                </h2>
                <p class="title">
                    SDBC, 1996BLT, PANAMA FLAG JAPAN TSUNEISHI BLT 45,622DWT ON S.DRAFT: 11.62M TPC:49.82 LOA/BEAM/DEPTH 185.74/ 30.4/ 16.5 GRT/ NRT 26,047/ 14,880 GRAIN/ 57,208.40 M3, BALE/ 55,564.90M3, 5H/5H
                    </p>
                <a href="" class="more">Xem thêm ></a>
            </div>
        </div>
         
        <div id="d-fleet" class="item-fleet d-flex">
            <div id="d-fleet-3" class="f-3">
                <img  class="f-img"src="<?php bloginfo('template_url'); ?>/assets/newgold.jpg" alt=""/>
                <h2 id="fleet-title-3" class="name-ship text-center">
                    M/V NEW GOLD
                </h2>
                <p class="title">
                    SDBC, 1996BLT, PANAMA FLAG JAPAN TSUNEISHI BLT 45,622DWT ON S.DRAFT: 11.62M TPC:49.82 LOA/BEAM/DEPTH 185.74/ 30.4/ 16.5 GRT/ NRT 26,047/ 14,880 GRAIN/ 57,208.40 M3, BALE/ 55,564.90M3, 5H/5H
                </p>
                <a href="" class="more">Xem thêm ></a>
            </div>
        </div>
         
        <div id="d-fleet" class="item-fleet d-flex">
            <div id="d-fleet-4" class="f-4">
                <img  class="f-img"src="<?php bloginfo('template_url'); ?>/assets/ttgold.jpg" alt=""/>
                <h2 id="fleet-title-4" class="name-ship text-center">
                    M/V T&T GOLD
                </h2>
                <p class="title">
                    SDBC, 1996BLT, PANAMA FLAG JAPAN TSUNEISHI BLT 45,622DWT ON S.DRAFT: 11.62M TPC:49.82 LOA/BEAM/DEPTH 185.74/ 30.4/ 16.5 GRT/ NRT 26,047/ 14,880 GRAIN/ 57,208.40 M3, BALE/ 55,564.90M3, 5H/5H
                </p>
                <a href="" class="more">Xem thêm ></a>
            </div>
        </div> -->
        
    </div>





    
</div>




<?php get_footer(); ?>