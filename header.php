<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/850082e926.js" crossorigin="anonymous"></script>
    <? wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="l-header">
        <div class="header-company">
            <div>
                <h1 class="header-company__name"><a href="<?php echo home_url(); ?>" alt="I.M.Aクリーン産業株式会社">I.M.Aクリーン産業株式会社</a></h1>
            </div>
        </div>
        <div class="openbtn"><span></span><span></span><span></span></div>
        <nav id="g-nav">
            <ul class="gnav-list">
                <li class="gnav-list__item"><a href="<?php echo home_url('aboutus'); ?>">企業情報</a></li>
                <li class="gnav-list__item"><a href="<?php echo home_url('service'); ?>">サービス</a></li>
                <li class="gnav-list__item"><a href="<?php echo home_url('news'); ?>">お知らせ</a></li>
                <li class="gnav-list__item"><a href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>