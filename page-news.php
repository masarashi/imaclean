<?php
/**
 * Template Name: お知らせ
 */
?>

<?php get_header(); ?>

<main>
    <section class="l-section">
        <div class="section__wrap">
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <h1 class="page-title__news">お知らせ</h1>
            <?php
            // $categories = get_categories('parent=0');
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array (
                'post_status' => 'publish',
                'post_type' => 'post',
                'paged' => $paged,
                'posts_per_page' => 10,
                'orderby' => 'date',
                'order' => 'DESC',
            ));
            // foreach($categories as $category) :
            ?>
                <?php
                query_posts('cat='.$category->cat_ID);
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <?php get_template_part('template-parts/loop', 'news'); ?>
                <?php endwhile; endif; ?>
            <?php /* endforeach; */ ?>
            <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(array('query' => $the_query)); } ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>