<?php /** * Template Name: Contact Template */ ?>
<?php $first_section = get_field('first_section');?>

<?php global $options; ?>
<?php get_header(); ?>

<section class="contact-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 wow zoomIn">
                <div class="details">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                    <h5>Phone Number</h5>
                    <a href="tel: <?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn">
                <div class="details">
                    <img src="<?php echo $first_section['image_2'];?>" alt="">
                    <h5>Email</h5>
                    <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn">
                <div class="details">
                    <img src="<?php echo $first_section['image_3'];?>" alt="">
                    <h5>Address</h5>
                    <p><?php echo $options['timing'];?></p>
                </div>
            </div>
        </div>
        <div class="padding-1">
            <div class="row">
                <div class="col-lg-6 col-md-6  wow fadeInLeft">
                    <div class="sec-heading">
                        <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                        <h2 class=""><?php echo $first_section['sub_heading'];?></h2>
                        <p class=""><?php echo $first_section['content'];?></p>
                        <span><?php echo $first_section['para'];?>
                            <a
                                href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInRight">
                    <div class="form aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                    <?php echo do_shortcode('[contact-form-7 id="4e43aa3" title="Contact form 1"]');?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>