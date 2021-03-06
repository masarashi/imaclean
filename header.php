<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php display_description(); ?>"/>
    <script src="https://kit.fontawesome.com/850082e926.js" crossorigin="anonymous"></script>
    <? wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-221052988-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-221052988-1');
    </script>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="l-header">
        <div class="header-company">
            <h1 class="header-company__name"><a href="<?php echo home_url(); ?>" alt="I.M.Aクリーン産業株式会社">I.M.Aクリーン産業株式会社</a></h1>
        </div>
        <div class="openbtn"><span></span><span></span><span></span></div>
        <nav id="gnav">
            <ul class="gnav-list">
                <li class="gnav-list__item --home"><a href="<?php echo home_url(); ?>">ホーム</a></li>
                <li class="gnav-list__item"><a href="<?php echo home_url('aboutus'); ?>">企業情報</a></li>
                <li class="gnav-list__item"><a href="<?php echo home_url('service'); ?>">サービス</a></li>
                <li class="gnav-list__item"><a href="<?php echo home_url('news'); ?>">お知らせ</a></li>
                <li class="gnav-list__item"><a href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>