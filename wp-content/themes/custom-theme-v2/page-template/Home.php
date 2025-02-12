<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fifth_section = get_field('fifth_section');?>


<?php get_header(); ?>
<div class="mainBanner" style="background-image:url(<?php echo $banner_section['image'];?>)">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-12 wow fadeInLeft">
                    <span class="sub-heading"><?php echo $banner_section['heading'];?></span>
                    <h1 class="banner-heading text-white">
                        <?php echo $banner_section['sub_heading'];?>
                    </h1>
                    <p class="banner-text text-white"><?php echo $banner_section['content'];?>
                    </p>
                    <div class="btn-wrap">
                        <a href="<?php echo $banner_section['button_link'];?>"
                            class="btn theme-btn"><?php echo $banner_section['button_text'];?></a>
                        <div class="video-wrap">
                            <!-- <video id="intro" poster="assets/images/vd-image.png">
                                    Your browser does not support the video tag.
                                </video> -->
                            <a href="<?php echo $banner_section['button_link_2'];?>">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="sec-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h2><?php echo $first_section['heading'];?></h2>
                    <p><?php echo $first_section['content'];?></p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php $box_list = $first_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div class="col-lg-4 wow fadeInLeft">
                <div class="choose-us-card">
                    <div class="bg-color">
                        <img src="<?php echo $boxlist['image']; ?>" alt="">
                    </div>
                    <h3 class="text-white"><?php echo $boxlist['heading']; ?></h3>
                    <p class="text-white"><?php echo $boxlist['content']; ?></p>
                    <a href="<?php echo $boxlist['button_link']; ?>"><?php echo $boxlist['button_text']; ?><i
                            class="fa-solid fa-chevron-right"></i> </a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<section class="sec-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="image-1">
                    <img src="<?php echo $second_section['image'];?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $second_section['heading'];?></span>
                    <h2><?php echo $second_section['sub_heading'];?></h2>
                    <p><?php echo $second_section['content'];?></p>
                </div>

                <div class="row">
                    <?php $box_list = $second_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div class="col-lg-6">
                        <div class="card-wrap">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <h3><?php echo $boxlist['heading']; ?></h3>
                            <p><?php echo $boxlist['content']; ?>
                            </p>
                        </div>
                    </div>
                    <?php }?>
                </div>

                <div class="btn-wrap">
                    <a href="<?php echo $second_section['button_link'];?>"
                        class="btn theme-btn"><?php echo $second_section['button_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>

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

<?php get_template_part("includes/trusted-companies"); ?>

<section class="sec-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $fifth_section['heading'];?></span>
                    <h2><?php echo $fifth_section['sub_heading'];?></h2>
                    <p><?php echo $fifth_section['content'];?></p>
                    <img src="<?php echo $fifth_section['image'];?>" alt="" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="card-wrapper">
                    <?php $box_list = $fifth_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div class="who-we-are-card">
                        <div>
                            <img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy">
                        </div>
                        <div class="card-del">
                            <h3><?php echo $boxlist['heading']; ?></h3>
                            <p><?php echo $boxlist['content']; ?></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/cta-section"); ?>
<?php get_footer(); ?>