<?php

$backgroundColor = get_field("blocks_background_color");
$post_id = get_the_ID();
$terms = get_the_terms($post_id, 'product-category');
$direct_parent = null;
if($terms){
    $direct_parent = $terms[(count($terms)-1)]; //because the last term is the direct parent in the array
}
$products = [];
if (!empty($terms) && !is_wp_error($terms)) {
    $parent_term = $terms[0];
    $args = [
        'post_type' => 'product',
        'tax_query' => [
            [
                'taxonomy' => 'product-category',
                'field' => 'slug',
                'terms' => $direct_parent->slug,
            ]
        ],
        'posts_per_page' => -1
    ];
    $products = get_posts($args);
}
$blockID = $block['id'];

global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request))."/"; // Get the current page's URL.
$menu_items = wp_get_nav_menu_items('main-menu');
$current_menu_item = null;
foreach ($menu_items as $menu_item) {
    if ($menu_item->url == $current_url) {
        // You've found the menu item that corresponds to the current page.
        $current_menu_item = $menu_item;
        break; // Exit the loop once you've found the match.
    }
}
$same_level_items = [];
foreach($menu_items as $menu_item){
    if($current_menu_item->menu_item_parent == $menu_item->menu_item_parent){
        $same_level_items[] = $menu_item;
    }
}
?>

<?php if ($terms) : ?>
    <section data-block-id="<?= $blockID ?>" class="product-categories-container bg-gray py-5 w-100" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <div class="container">
            <div class="cat-container position-relative">
                <div class="product-categories my-2 swiper" id="product-categories-swiper-<?= $blockID ?>" data-current-product-id="<?= $current_menu_item->ID ?>">
                    <div class="swiper-wrapper">
                        <?php foreach ($same_level_items as $key => $p) : ?>
                            <div class="swiper-slide">
                                <div class="product-cat-slide" data-key="<?= $key ?>" id="product-<?= $p->ID ?>">
                                    <div class="product-category px-2">
                                        <a class="<?= $current_menu_item->ID == $p->ID ? "active-cat" : "" ?>" href="<?=$p->url?>"><?= $p->title ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </section>
<?php endif; ?>