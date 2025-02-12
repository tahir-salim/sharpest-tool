<?php $services = get_field('services');?>

<?php get_header(); ?>

<section class="sec-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading ser-detail">
                    <h3 class=""><?php the_title() ;?></h3>
                    <?php the_content() ;?>

                    <img src="<?php echo $services['image'];?>" alt="">

                    <h3 class=""><?php echo $services['heading'];?></h3>
                    <p class=""><?php echo $services['content'];?></p>

                    <h3 class=""><?php echo $services['heading_2'];?></h3>
                    <p class=""><?php echo $services['content_2'];?></p>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>