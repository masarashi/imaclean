<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
    <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="https://kit.fontawesome.com/850082e926.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="l-header">
        <div class="header-company">
            <div>
                <h1 class="header-company__name"><a href="<?php echo home_url(); ?>">I.M.Aクリーン産業株式会社</a></h1>
            </div>
        </div>
        <div class="flex">
            <div class="gnav">
                <nav>
                    <ul class="gnav__nav">
                        <li class="gnav__item"><a href="<?php echo home_url( 'aboutus' ); ?>">企業情報</a></li>
                        <li class="gnav__item"><a href="<?php echo home_url( 'service' ); ?>">サービス</a></li>
                        <li class="gnav__item"><a href="<?php echo home_url( 'news' ); ?>">お知らせ</a></li>
                        <li class="gnav__item"><a href="<?php echo home_url( 'contact' ); ?>">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
            <!-- <div class="">
                <div>
                    <p class="header-phone">080-0000-0000</p>
                </div>
            </div> -->
        </div>
    </header>