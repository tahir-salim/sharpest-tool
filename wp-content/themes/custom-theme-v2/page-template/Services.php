<?php /** * Template Name: Services Template */ ?>
<?php $third_section = get_field('third_section',8);?>
<?php get_header(); ?>

<section class="sec-3" style="background-image:url(<?php echo $third_section['image'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <span class="sub-heading"><?php echo $third_section['heading'];?></span>
                    <h2 class="text-white"><?php echo $third_section['sub_heading'];?></h2>
                    <p class="text-white"><?php echo $third_section['content'];?></p>
                </div>
            </div>
        </div>
        <div class="row g-5 mt-md-2 wow fadeInUp">

            <?php    $x=1;  $args = array( 'post_type' => 'service' , 'posts_per_page' => '6','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="col-lg-4">
                <a href="<?php the_permalink() ;?>">
                    <div class="service-card">
                        <img src="<?php the_post_thumbnail_url() ;?>" alt="">
                        <h3 class="text-white"><?php the_title() ;?></h3>
                        <div class="text-white"><?php the_excerpt() ;?></div>
                    </div>
                </a>
            </div>
            <?php $x++; endwhile; wp_reset_query(); ?>
        </div>
        <div class="btn-wrap justify-content-center">
            <a href="<?php echo $third_section['button_link'];?>"
                class="btn theme-btn"><?php echo $third_section['button_text'];?></a>
        </div>
    </div>
</section>
<?php get_footer(); ?>