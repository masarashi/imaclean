<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <h1 class="page-title__contact"><?php the_title(); ?></h1>
    </div>
    <section class="l-section">
        <div class="contact__wrapper">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer();
