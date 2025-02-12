<?php $sixth_section = get_field('sixth_section',8);?>

<section class="sec-6" style="background-image:url(<?php echo $sixth_section['image'];?>)">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <h2 class="text-white"><?php echo $sixth_section['heading'];?></h2>
                    <p class="text-white"><?php echo $sixth_section['content'];?></p>

                    <div class="btn-wrap">
                        <a href="<?php echo $sixth_section['button_link'];?>"
                            class="btn theme-btn"><?php echo $sixth_section['button_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>