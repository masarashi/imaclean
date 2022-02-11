<article id="post-<?php the_ID(); ?>" <?php post_class('news-list__item'); ?>>
    <div class="news-list__meta">
        <time class="news-list__time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time ('Y.m.d'); ?></time>
        <div><?php the_category(); ?></div>
    </div>
    <a href="<?php the_permalink(); ?>" <?php post_class('news-list__title'); ?>><?php the_title(); ?></a>
</article>