<?php get_header(); ?>

<main>
    <section class="l-section">
        <div class="section__wrap">
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <h1 class="page-title__contact"><?php the_title(); ?></h1>
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer();
