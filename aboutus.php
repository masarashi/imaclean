<?php
/*
Template Name: 企業情報
*/
?>

<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <h1 class="page-title__aboutus">企業情報</h1>
    </div>
    <section class="l-section">
        <div class="wrapper">
            <h2 class="section-title">代表ご挨拶</h2>
            <div class="greeting">
                <div class="greeting__body">
                    <p class="greeting__txt">埼玉県・東京都・内装解体・(ユニット解体・キッチン・スケルトン等)不用品
                        ・廃品・ゴミ回収・庭木の伐採・等々、幅広く対応させていただいております。<br><br>
                        当社では、産廃収集・産業廃棄物収集から、一般家庭の片付け・貸切運送・荷物
                        運送・引っ越し運送までも承ります。ゴミ処理や粗大ごみ・不用品・廃品の回収
                        、お家・お庭の模様替えでの重い荷物運びなども行っております<br><br>
                        埼玉県・東京都を中心に、お伺いいたします。
                        ご依頼は24時間受け付けておりますので、お気軽にお問合せください。</p>
                    <p class="greeting__signature"><span class="greeting__signature--secondary">代表</span> 石川 守</p>
                </div>
                <div class="greeting__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/mamoru_ishikawa.png" alt="石川守_写真">
                </div>
            </div>
        </div>
    </section>
    <section class="l-section">
        <div class="wrapper">
            <h2 class="section-title --center">会社概要</h2>
            <div class="overview">
                <table class="overview__table">
                    <tr>
                        <th>会社名</th>
                        <td>I.M.Aクリーン産業株式会社</td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td>石川　守</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>〒336-0026<br>埼玉県さいたま市南区辻 2-12-13</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>048-838-7202</td>
                    </tr>
                    <tr>
                        <th>FAX</th>
                        <td>048-838-7202</td>
                    </tr>
                    <tr>
                        <th>営業時間</th>
                        <td>24時間</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>内装解体、産業廃棄粒収集、一般家庭の片付け、運送</td>
                    </tr>
                </table>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.607721766337!2d139.66022941639642!3d35.83409918015907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018eae4e54be747%3A0x8ad88756ef0aa701!2z44CSMzM2LTAwMjYg5Z-8546J55yM44GV44GE44Gf44G-5biC5Y2X5Yy66L6777yS5LiB55uu77yR77yS4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1643112298980!5m2!1sja!2sjp" class="overview__map" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="l-section">
        <div class="wrapper">
            <div class="company-pic">
                <div class="company-pic__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/company_img01.jpeg" alt="">
                </div>
                <div class="company-pic__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/company_img01.jpeg" alt="">
                </div>
                <div class="company-pic__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/company_img01.jpeg" alt="">
                </div>
            </div>
        </div>
    </section> -->

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