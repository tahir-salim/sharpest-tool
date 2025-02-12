<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 text-left">
                        <a href="<?php echo site_url();?>" class="logo">
                            <!-- <img src="assets/images/logo.svg" alt=""> -->
                            <h2 class="text-white">Sharpest Tool</h2>
                        </a>
                    </div>
                    <div class="col-lg-8 text-right">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                            <li class="header-btn">
                                <a href="contact.php"> Contact Us </a>
                            </li>
                        </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>


        <?php } else{?>

        <?php $banner_section = get_field('banner_section'); ?>

        <div class="mainBanner innerpage" style="background-image:url(<?php echo $banner_section['image'];?>)">
            <div class="container">
                <div class="banner-content">
                    <div class="row align-items-center">
                        <div class="col-lg-12 wow fadeInLeft">
                            <h1 class="banner-heading text-white">
                                <?php echo $banner_section['heading'];?>
                            </h1>
                            <p class="banner-text text-white">
                                <?php echo $banner_section['content'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>