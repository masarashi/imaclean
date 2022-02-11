<?php get_header(); ?>

<main>
    <div class="wrapper">
        <div class="breadcrumb">
            <a href="<?php echo home_url(); ?>">TOP</a>
            <span> > </span>
            <a href="<?php echo home_url('news'); ?>"><?php the_title(); ?></a>
        </div>
        <h1 class="page-title__news">お知らせ</h1>
    </div>
    <section class="l-section">
        <div class="wrapper">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                        <header class="article__header">
                            <h2 class="article__title"><?php the_title(); ?></h2>
                            <div class="article__meta">
                                <?php the_category(); ?>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time ('Y.m.d'); ?></time>
                            </div>
                        </header>
                        <div class="article__body">
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="postlinks">
                            <div class="postlink postlink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
                            <div class="postlink postlink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer();
