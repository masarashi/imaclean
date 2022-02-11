<aside class="archive">
    <h2 class="archive__title">アーカイブ</h2>
    <ul class="archive__list">
        <?php
        $args = array(
            'type' => 'monthly', //月別を指定
        );
        wp_get_archives($args);
        ?>
    </ul>
</aside>