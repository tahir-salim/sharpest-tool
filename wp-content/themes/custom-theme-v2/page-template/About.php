<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php get_header(); ?>

<section class="sec-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="image-1">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2><?php echo $first_section['sub_heading'];?></h2>
                    <p><?php echo $first_section['content'];?></p>
                </div>

                <div class="row">
                    <?php $box_list = $first_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div class="col-lg-6">
                            <div class="card-wrap">
                                <img src="<?php echo $boxlist['image']; ?>" alt="">
                                <h3><?php echo $boxlist['heading']; ?></h3>
                                <p><?php echo $boxlist['content']; ?></p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading">
                    <p><?php echo $first_section['content_2'];?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/cta-section"); ?>
<?php get_template_part("includes/trusted-companies"); ?>


<section class="sec-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <h2><?php echo $second_section['heading'];?></h2>
                    <p><?php echo $second_section['content'];?></p>

                    <div class="pre-del">
                        <span><?php echo $second_section['p_1'];?></span>
                        <h4><?php echo $second_section['p_2'];?></h4>
                        <p><?php echo $second_section['p_3'];?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div>
                    <img src="<?php echo $second_section['image'];?>" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>