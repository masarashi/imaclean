<?php get_header(); ?>

<main>
    <div>
        <div class="hero">
            <div class="hero__wrapper">
                <p class="hero__txt">笑顔と元気で承ります！</p>
            </div>
        </div>
    </div>

    <section class="l-section">
        <div class="wrapper">
            <h2 class="section-title --center">I.M.Aクリーン産業について</h2>
            <div class="aboutus">
                <div class="aboutus__item">
                    <div class="aboutus__body">
                        <div class="aboutus__title">
                            <p>笑顔と元気と対応力</p>
                        </div>
                        <p class="aboutus__txt">
                            笑顔と元気は必ず必要です。第一印象が悪いとうまく出来た仕事でも、あと味が悪くなります。まずはお客様に気持ちよく仕事を頼んでいただき、終わった後に気持ちよくありがとうって言われるように心がけています。
                        </p>
                    </div>
                    <div class="aboutus__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/aboutus_image_01.jpeg" alt="">
                    </div>
                </div>
                <div class="aboutus__item">
                    <div class="aboutus__body">
                        <div class="aboutus__title">
                            <p>料金設定</p>
                        </div>
                        <p class="aboutus__txt">
                            当社は必ず、現場を見て料金を出します。見積もりの際には、お客様と一緒に必ず取ります。万が一納得出来なければ断ってもらってかまいません。もちろん見積もりは無料です。無駄なものは省き、出来るだけお互い納得出来る料金を目指します。
                        </p>
                    </div>
                    <div class="aboutus__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/aboutus_image_01.jpeg" alt="">
                    </div>
                </div>
                <div class="aboutus__item">
                    <div class="aboutus__body">
                        <div class="aboutus__title">
                            <p>細かな心使い</p>
                        </div>
                        <p class="aboutus__txt">
                            一人ではどうすることも出来ないような、家具の移動。庭に生えた雑草など、やりたいけどなかなか出来ないような事など、お手伝いします。一人暮らしのお年寄りさんや、庭の草むしりが面倒な人、なんでもお気軽にご相談ください!心を込めてお手伝いします!
                        </p>
                    </div>
                    <div class="aboutus__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/aboutus_image_01.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="l-seciton__link">
                <a href="<?php echo home_url( 'aboutus' ); ?>" class="link-btn"><i class="fas fa-arrow-circle-right"></i> 企業情報</a>
            </div>
        </div>
    </section>

    <section class="l-section">
        <div class="wrapper">
            <h2 class="section-title">サービス</h2>
            <ul class="service-list">
                <li class="service-list__item">
                    <a href="" class="service-list__wrapper">
                        <div class="service-list__body">
                            <div class="service-list__title">
                                不用品・ゴミ回収
                            </div>
                            <p class="service-list__txt">大手処理施設と付き合いがあるので、安心してお任せいただけます。一般家庭でのごみ処理や、粗大ごみ・不用 品・廃棄物の回収も行っております。笑顔と元気だけは必ず忘れずに作業し、出来るだけお客様の要望に応えら れるよう努力します。長いお付き合いが出来るような対応します。</p>
                        </div>
                        <div class="service-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_image_trash.jpeg" alt="">
                        </div>
                    </a>
                </li>
                <li class="service-list__item">
                    <a href="" class="service-list__wrapper">
                        <div class="service-list__body">
                            <div class="service-list__title">
                                運送
                            </div>
                            <p class="service-list__txt">トラック1日・半日貸切・チャーター便など、お客様のニーズに合った利用ができます。引っ越しなどに運転手付きでお手伝いします。</p>
                        </div>
                        <div class="service-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_image_truck.jpeg" alt="">
                        </div>
                    </a>
                </li>
                <li class="service-list__item">
                    <a href="" class="service-list__wrapper">
                        <div class="service-list__body">
                            <div class="service-list__title">
                                庭のお掃除・家の模様替え
                            </div>
                            <p class="service-list__txt">庭のお掃除や家の模様替えなど、一人で出来ない事、一人で持ち上げられないタンスや冷蔵庫など、お手伝いします。</p>
                        </div>
                        <div class="service-list__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_image_home.jpeg" alt="">
                        </div>
                    </a>
                </li>
            </ul>
            <div class="l-seciton__link">
                <a href="<?php echo home_url( 'service' ); ?>" class="link-btn"><i class="fas fa-arrow-circle-right"></i> サービス一覧</a>
            </div>
        </div>
    </section>

    <section class="l-section">
        <div class="news-list__wrapper">
            <h2 class="section-title">お知らせ</h2>
            <div class="news-list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <div>
                            <?php get_template_part('template-parts/loop', 'news'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="l-seciton__link">
                <a href="<?php echo home_url( 'news' ); ?>" class="link-btn"><i class="fas fa-arrow-circle-right"></i> お知らせ一覧</a>
            </div>
        </div>
    </section>

    <section class="l-section">
        <div class="wrapper">
            <h2 class="section-title --center">お問い合わせ</h2>
            <div class="contact">
                <div class="contact__aside">
                        <p class="contact__phone"><i class="fas fa-phone-alt"></i> 080-5093-0044</p>
                </div>
                <div class="contact__line">
                </div>
                <div class="contact__aside">
                    <a href="<?php echo home_url( 'contact' ); ?>" class="link-btn"><i class="far fa-envelope"></i> お問い合わせ</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();