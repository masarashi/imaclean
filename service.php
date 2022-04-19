<?php
/*
Template Name: サービス
*/
?>

<?php get_header(); ?>

<main>
    <section class="l-section">
        <div class="section__wrap">
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <h1 class="page-title__service">サービス</h1>
            <h2 class="section-title">I.M.Aクリーン産業のサービス</h2>
            <div class="service-detail">
                <div class="service-detail__wrapper">
                    <div class="service-detail__item" id="service-01">
                        <div class="service-detail__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_icon_01.png" alt="">
                        </div>
                        <div class="service-detail__body">
                            <p class="service-detail__title">不用品・ゴミ回収</p>
                            <p class="service-detail__txt">大手処理施設と付き合いがあるので、安心してお任せいただけます。一般家庭でのごみ処理や、粗大ごみ・不用品・廃棄物の回収も行っております。</p><!-- /.service-detail__txt -->
                        </div><!-- /.service-detail__body -->
                    </div>
                    <div class="service-detail__item" id="service-02">
                        <div class="service-detail__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_icon_02.png" alt="">
                        </div>
                        <div class="service-detail__body">
                            <p class="service-detail__title">内装解体</p>
                            <p class="service-detail__txt">内装の解体もお任せください。</p><!-- /.service-detail__txt -->
                        </div><!-- /.service-detail__body -->
                    </div>
                    <div class="service-detail__item" id="service-03">
                        <div class="service-detail__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_icon_03.png" alt="">
                        </div>
                        <div class="service-detail__body">
                            <p class="service-detail__title">運送・引っ越しのお手伝い</p>
                            <p class="service-detail__txt">トラック１日・半日貸切・チャーター便など、お客様のニーズに合った利用ができます。引っ越しなどに運転手付きでお手伝いします。</p><!-- /.service-detail__txt -->
                        </div><!-- /.service-detail__body -->
                    </div>
                    <div class="service-detail__item" id="service-04">
                        <div class="service-detail__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_icon_04.png" alt="">
                        </div>
                        <div class="service-detail__body">
                            <p class="service-detail__title">庭のお掃除</p>
                            <p class="service-detail__txt">庭のお掃除など、一人で出来ない事もお手伝いします。</p><!-- /.service-detail__txt -->
                        </div><!-- /.service-detail__body -->
                    </div>
                    <div class="service-detail__item" id="service-05">
                        <div class="service-detail__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/service_icon_05.png" alt="">
                        </div>
                        <div class="service-detail__body">
                            <p class="service-detail__title">お家の模様替え</p>
                            <p class="service-detail__txt">家の模様替えなど、一人で持ち上げられないタンスや冷蔵庫の移動などお手伝いします。</p><!-- /.service-detail__txt -->
                        </div><!-- /.service-detail__body -->
                    </div>
                </div><!-- /.wrapper -->
            </div>
        </div>
    </section>

    <section class="l-section">
        <div class="section__wrap">
            <h2 class="section-title">サービスの流れ</h2>
            <ul class="service-flow">
                <li class="service-flow__item">
                    <div class="service-flow__num">1</div>
                    <div class="service-flow__body">
                        <p class="service-flow__title">無料相談</p>
                        <p class="service-flow__txt">平日はお仕事で忙しいという方のために、土日もご相談を受け付けております。</p>
                    </div>
                </li>
                <li class="service-flow__item">
                    <div class="service-flow__num">2</div>
                    <div class="service-flow__body">
                        <p class="service-flow__title">無料お見積り</p>
                        <p class="service-flow__txt">お客さまとの対話を重視することがモットーです。お客さまのお話にじっくりと耳を傾け、時間をかけて丁寧にヒアリングいたします。</p>
                    </div>
                </li>
                <li class="service-flow__item">
                    <div class="service-flow__num">3</div>
                    <div class="service-flow__body">
                        <p class="service-flow__title">ご契約</p>
                        <p class="service-flow__txt">当社では、お客さまにご納得いただけないままお手続きを進めるようなことは一切ございません。一つでもご不明点がございましたら、お気軽にお申し付けください。</p>
                    </div>
                </li>
                <li class="service-flow__item">
                    <div class="service-flow__num">4</div>
                    <div class="service-flow__body">
                        <p class="service-flow__title">作業開始</p>
                        <p class="service-flow__txt">笑顔と元気に作業させていただきます。</p>
                    </div>
                </li>
                <li class="service-flow__item">
                    <div class="service-flow__num">5</div>
                    <div class="service-flow__body">
                        <p class="service-flow__title">ご精算</p>
                        <p class="service-flow__txt">ご精算は現金のみとなります。</p>
                    </div>
                </li>
            </ul>
            <div class="l-seciton__link">
                <a href="<?php echo home_url( 'contact' ); ?>" class="link-btn"><i class="far fa-envelope"></i> 無料相談</a>
            </div>
        </div>
    </section>

    <section class="l-section">
        <div class="section__wrap">
            <h2 class="section-title">I.M.Aクリーン産業の強み</h2>
            <div class="service-point">
                <div class="service-point__item">
                    <p class="service-point__title">どんな現場にも対応</p>
                    <p class="service-point__txt">どうすることも出来なくなったゴミ屋敷、お庭の片づけ、工場の整理など、どんな現場にも対応いたします。お見積りは無料ですので、お気軽にお問合せください！</p>
                </div>
                <div class="service-point__item">
                    <p class="service-point__title">お得にお引越し</p>
                    <p class="service-point__txt">引っ越し業者に頼むと、料金が高いのですが、トラックと運転手付きで、梱包等はお客様に準備していただきますが、業者さんよりお得に引っ越ししていただけます。</p>
                </div>
                <div class="service-point__item">
                    <p class="service-point__title">夜間作業</p>
                    <p class="service-point__txt">24時間対応なので、夜間現場の資材の引き取り、納品もお任せ下さい。重量物などもご相談ください！</p>
                </div>
                <div class="service-point__item">
                    <p class="service-point__title">買い取り</p>
                    <p class="service-point__txt">鉄、非鉄など、買い取り可能な物は、買い取りいたします。少量でもご相談ください。</p>
                </div>
                <div class="service-point__item">
                    <p class="service-point__title">他社で断られた産廃</p>
                    <p class="service-point__txt">会社で、出たゴミは産業廃棄物になります。当社ではほぼ全ての産廃に対応いたしておりますので、他社で断られた、料金が納得出来ないなど、少しでもお困りな事がありましたら、当社にご相談下さい。</p>
                </div>
                <div class="service-point__item">
                    <p class="service-point__title">対応エリア</p>
                    <p class="service-point__txt">さいたま市、東京近郊</p>
                </div>
            </div>
        </div>
    </section>

    <section class="l-section">
        <div class="contact__wrap">
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