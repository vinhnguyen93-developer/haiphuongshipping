<?php 
/*
 Template Name: Ships
 */ 
get_header();

$ship_query = new WP_Query(array(
'post_type' => 'fleet',
));

?>

<div class="pb-4">
    <div class="f-conten d-flex justify-content-end align-items-center">
        <h1 class="f-h1">
            Đội tàu
        </h1>
    </div>
    <div class="f-item d-flex flex-wrap justify-content-evenly align-items-center">
        <?php 
        if($ship_query -> have_posts()):
            while($ship_query -> have_posts()): $ship_query -> the_post();
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
                <div class="f-1 fleet-box py-4 d-flex flex-column">
                    <img  class="f-img"src="<?php echo $ship_image_src; ?>" alt=""/>
                    <h2 class="name-ship text-center text-uppercase fs-3"><?php echo $ship_name; ?></h2>
                    <div class="mt-4">
                        <p class="fw-lighter lh-base text-uppercase ship-item-text"><?php echo $ship_type_year . ', ' . $ship_flag . ' ' . $ship_builder_place; ?></p>
                        <p class="fw-lighter lh-base text-uppercase ship-item-text"><?php echo $ship_dwt . ' ' . $ship_tons; ?></p>
                        <p class="fw-lighter lh-base text-uppercase ship-item-text"><?php echo $ship_vessel_dimensions . ' ' . $ship_grt_nrt; ?></p>
                        <p class="fw-lighter lh-base text-uppercase ship-item-text"><?php echo $ship_cargo_hold . ', ' . $ship_number_of_cargo; ?></p>
                        <p class="fw-lighter lh-base text-uppercase ship-item-text">h.cover type: <?php echo $ship_hatch_cover_type; ?></p>
                        <p class="fw-lighter lh-base text-uppercase ship-item-text">hatch size hold <?php echo $ship_hatch_dimensions; ?></p>
                        <p class="fw-lighter lh-base text-uppercase ship-item-text"><?php echo $ship_crane_grab . ' p&i: ' . $ship_protection_indemnity; ?></p>
                    </div>
                    <a href="" class="more fs-6 mt-4">Xem thêm <i class="fa-solid fa-angle-right"></i></a>
                </div>
        <?php 
            endwhile;
        endif;
        ?>        
    </div>
</div>




<?php get_footer(); ?>