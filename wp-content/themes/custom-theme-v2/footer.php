<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer style="background-image:url(<?php echo $options['footer-logo'];?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-sec">
                    <a href="<?php echo site_url();?>" class="logo">
                        <!-- <img src="assets/images/logo.png" alt=""> -->
                        <h2 class="text-white">Sharpest Tool</h2>
                    </a>

                    <p><?php echo $options['footer_about'];?></p>

                    <ul class="f-link">
                        <li>
                            <a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-hdng">
                    <h4>useful Links</h4>
                </div>
                <!-- <ul class="f-menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul> -->
                <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'f-menu' ) ); ?>

            </div>
            <div class="col-lg-3">
                <div class="footer-hdng">
                    <h4>Contact Info</h4>
                </div>
                <ul class="f-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="fal fa-home-lg-alt"></i>
                            <?php echo $options['address'];?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?php echo $options['phone_number'];?>">
                            <i class="fa fa-phone"></i>
                            <?php echo $options['phone_number'];?>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?php echo $options['email'];?>">
                            <i class="fas fa-envelope"></i>
                            <?php echo $options['email'];?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="copyright">
                    <p><?php echo $options['copyright'];?></p>

                    <!-- <ul class="links">
                        <li>
                            <a href="#">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu 1', 'menu_class'=> 'links' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>

</main>
</body>

</html>