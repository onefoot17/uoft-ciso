<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <meta name="viewport" content="width=device-width" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header id="header" class="section--header">
            <section class="section__width section__width--header">
                <section class="section--header__logos">
                    <a class="section--header__logos__uoft" href="https://www.utoronto.ca/" title=""><img class="section--header__logo" src="https://cio.utoronto.ca/wp-content/themes/ITS_uoft_bootstrap3_v203_sp/_inc/img/U-of-T-logo.svg" /></a>

                    <a class="section--header__logos__ciso" href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">
                        <span class="section--header__logos__ciso__top">Office of the</span>

                        <span class="section--header__logos__ciso__bottom">Chief <br />Information<br />Security <br/>Officer</span>
                    </a>

                    <section class="section--header__logos__text">
                        <section class="section--header__logos__text__sign">Isaac Straley</section>

                        <p>Isaac Straley, CISO</p>

                        <p>University of Toronto</p>
                    </section>
                </section>

                <section class="section--header__photo" style="background-image: url(https://cio.utoronto.ca/wp-content/uploads/2019/01/ciso_portraits_1-edit-sp02-e02.png);"></section>
            </section>
        </header>
