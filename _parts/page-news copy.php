<?php
/**
 * Template Name: お知らせ
 */
?>

<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <h1 class="page-title__news">お知らせ</h1>
    </div>
    <section class="l-section">
        <div class="wrapper">
            <?php
            $categories = get_categories('parent=0');
            foreach($categories as $category) :
            ?>
                <?php
                query_posts('cat='.$category->cat_ID);
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                    <?php get_template_part('template-parts/loop', 'news'); ?>
                <?php endwhile; endif; ?>
            <?php endforeach; ?>
            <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </div>
    </section>
    <div>
        <?php /* get_sidebar('archives'); */ ?>
    </div>
</main>

<?php get_footer(); ?>