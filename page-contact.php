<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package WordPress
* @subpackage Twenty_Twenty_One
* @since Twenty Twenty-One 1.0
*/
?>

<?php get_header(); ?>


<main>
    <div class="wrapper">
        <div class="breadcrumb">
            <a href="<?php echo home_url(); ?>">TOP</a>
            <span> > </span>
            <a href="<?php echo home_url( 'aboutus' ); ?>"><?php the_title(); ?></a>
        </div>
        <h1 class="page-title__contact"><?php the_title(); ?></h1>
    </div>
    <section class="l-section">
        <div class="contact__wrapper">
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                    <section>
                        <?php the_content(); ?>
                    </section>
                <?php
                    endwhile;
                endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer();
