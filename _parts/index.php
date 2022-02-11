<?php get_header(); ?>

<main>
    <div class="wrapper">
        <div class="breadcrumb">
            <a href="<?php echo home_url(); ?>">TOP</a>
            <span> > </span>
            <a href="<?php echo home_url('news'); ?>"><?php the_title(); ?></a>
        </div>
        <h1 class="page-title__news"><?php wp_title(); ?></h1>
    </div>
    <section class="l-section">
        <div class="wrapper">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div>
                        <?php get_template_part('template-parts/loop', 'news'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer();