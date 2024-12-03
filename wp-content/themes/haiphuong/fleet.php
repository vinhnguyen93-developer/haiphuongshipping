<?php 
/*
 Template Name: Ships
 */ 
get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$ship_query = new WP_Query(array(
    'post_type' => 'fleet',
    'posts_per_page' => 100,
    'paged' => $paged,
));

?>

<div class="ppb-3">
    <div class="f-content d-flex justify-content-center align-items-center">
        <h1 class="ship-page-title text-uppercase">
            Đội tàu
        </h1>
    </div>
    <div class="container py-5">
        <div>
            <h4 class="ship-page-content lh-base">
                <span class="ship-page-content-custom">HPS</span>
                sở hữu đội tàu hàng rời hiện đại và đa dạng, gồm hơn 10 con tàu, có trọng tải chuyên chở 7,500DWT đến 45,000DWT. Các tàu của chúng tôi được thiết kế và trang bị theo tiêu chuẩn quốc tế, có khả năng vận chuyển các loại hàng hóa khác nhau như than, xi măng, phân bón, gạo, ngũ cốc, thép, ... Các tàu của chúng tôi có thể hoạt động ở các cảng nhỏ và sông nước hẹp, tăng cường khả năng tiếp cận thị trường và linh hoạt trong việc phục vụ khách hàng. Đội tàu luôn được bảo dưỡng và kiểm tra định kỳ để đảm bảo an toàn và hiệu quả trong quá trình vận hành. Bên cạnh những tàu trực tiếp sở hữu và khai thác, HPS cũng liên kết với một số đơn vị đối tác lớn để cùng vận hành và quản lý tàu. 
            </h4>
        </div>

        <div>

            <h2 class="ship-page-body-title d-flex justify-content-center mt-4 mb-5">Xem tất cả hạng tàu</h2>

            <div class="row gy-5 gx-0 gx-md-5">
                <?php 
                if($ship_query -> have_posts()):
                    while($ship_query -> have_posts()): $ship_query -> the_post();
                        $ship_guid = get_the_guid();
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
                        <div class="col-12 col-md-4 ship-item">
                            <a href="<?php echo $ship_guid; ?>" class="ship-item-body">
                            <div class="">
                                <img class="ship-image" src="<?php echo $ship_image_src; ?>" alt="">
                            </div>
                            
                            <h1 class="ship-item-title d-flex align-items-center justify-content-center text-uppercase text-white"><?php echo $ship_name; ?></h1>
                            
                            <div class="ship-item-description text-white p-3 overflow-hidden">
                                <h1 class="mb-2 text-uppercase fs-4"><?php echo $ship_name; ?></h1>
                                <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_type_year . ', ' . $ship_flag . ' ' . $ship_builder_place; ?></p>
                                <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_dwt . ' ' . $ship_tons; ?></p>
                                <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_vessel_dimensions . ' ' . $ship_grt_nrt; ?></p>
                                <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_cargo_hold . ', ' . $ship_number_of_cargo; ?></p>
                                <p class="lh-base text-uppercase ship-item-text">h.cover type: <?php echo $ship_hatch_cover_type; ?></p>
                                <p class="lh-base text-uppercase ship-item-text">hatch size hold <?php echo $ship_hatch_dimensions; ?></p>
                                <p class="lh-base text-uppercase ship-item-text"><?php echo $ship_crane_grab . ' p&i: ' . $ship_protection_indemnity; ?></p>
                            </div>
                            </a>
                        </div>
                <?php 
                    endwhile;
                endif;
                ?> 
            </div>

            <div class="pagination-page mt-5">
                <?php
                    $big = 999999999;

                    echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => $paged,
                    'total' => $ship_query->max_num_pages,
                    'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
                    'next_text' => '<i class="fa-solid fa-chevron-right"></i>'
                    ) );
                    wp_reset_postdata();
                ?>
            </div>
        </div>       
    </div>
</div>




<?php get_footer(); ?>