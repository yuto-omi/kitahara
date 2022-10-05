<?php
/*-------------------------     サムネイル設定    -------------------------*/
add_theme_support('post-thumbnails');

/*-------------------------     自動整形無効化    -------------------------*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

/*-------------------------     タイムゾーン設定    -------------------------*/
date_default_timezone_set('Asia/Tokyo');

/*-------------------------     投稿編集用管理画面    -------------------------*/
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
    if (current_user_can('editor')) {
        remove_menu_page('index.php');
        remove_menu_page('upload.php');
        remove_menu_page('edit.php?post_type=page');
        remove_menu_page('edit-comments.php');
        remove_menu_page('themes.php');
        remove_menu_page('plugins.php');
        remove_menu_page('users.php');
        remove_menu_page('tools.php');
        remove_menu_page('options-general.php');
        remove_menu_page('wpcf7');
        remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
        remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
    }
}

/*-------------------------     投稿ネーミング設定    -------------------------*/
add_filter('post_type_labels_post', 'aktk_post_type_labels_post');
function aktk_post_type_labels_post($labels)
{
    foreach ($labels as $key => $value) {
        $labels->$key = str_replace('投稿', 'NEWS&BLOG', $value);
    }
    return $labels;
}

/*-------------------------     自作関数    -------------------------*/
function pn()
{
    if (is_page()) $pagename = get_post(get_the_ID())->post_name;
    elseif (is_single()) $pagename = 'single';
    // else $pagename = 'news';
    return $pagename;
}

/**
 *画像のパスを返す
 *
 * @param [char] $falder フォルダ名
 * @param [char] $imgname 画像名
 * @param [char] $extension 画像の拡張子
 * @param [char] $class クラス名
 * @param [char] $alt alt属性
 * @return $images 画像までのパス
 */
/*
使用例
<?php echo img("common", "logo", "svg", "クラス名", "alt属性名") ?>
*/
function img($falder, $imgname, $extension, $class = null, $alt = null)
{
    $images = get_template_directory_uri() . "/assets/images";
    $images = "<img alt='$alt' class='$class'src='" . $images . "/" . $falder . "/" . $imgname . "." . $extension . "'>";
    return $images;
}
