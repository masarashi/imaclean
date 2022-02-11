<aside class="archive">
    <h2 class="archive__title">カテゴリ一覧</h2>
    <ul class="archive__list">
        <?php
        $args = array(
            'title_li' => '', //見出しを削除
        );
        wp_list_categories($args);
        ?>
    </ul>
</aside>