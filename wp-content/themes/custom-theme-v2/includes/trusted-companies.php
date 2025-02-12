<?php $fourth_section = get_field('fourth_section',8);?>
<section class="sec-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 wow zoomIn">
                <div class="sec-heading center">
                    <h4><?php echo $fourth_section['heading'];?></h4>

                    <ul class="trusted-list">

                        <?php $box_list = $fourth_section['box_list'];?>
                        <?php foreach ($box_list as $boxlist) {?>

                        <li><img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy"></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>