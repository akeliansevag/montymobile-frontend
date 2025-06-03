<?php
$top_banner_image = get_field("block_product_top_banner_image");
$mobile_image = get_field("block_product_top_banner_mobile_image");
$top_banner_title = get_field("block_product_top_banner_title");
$top_banner_description = get_field("block_product_top_banner_description");
$product_title = get_field("block_product_top_banner_h1_title") ? get_field("block_product_top_banner_h1_title") : get_the_title();
$blockID = $block['id'];
$backgroundColor = get_field("block_background_color");
$textDark = get_field("block_product_top_banner_dark_text");
?>
<div id="<?= $blockID ?>" class="product-top-banner py-4 d-flex align-items-center" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
    <?php if ($top_banner_image) : ?>
        <img class="background-image <?= $mobile_image ? "d-none d-md-block" : "" ?>" src="<?= $top_banner_image['sizes']['background-product']; ?>" alt="<?= $top_banner_image['alt'] ?>">
        <div class="bg-overlay"></div>
    <?php endif; ?>
    <?php if ($mobile_image) : ?>
        <img class="background-image mobile-background-image d-block d-md-none" src="<?= $mobile_image['sizes']['background-product']; ?>" alt="<?= $mobile_image['alt'] ?>">
        <div class="bg-overlay"></div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="p-banner-content">
                    <?php if ($top_banner_title && !get_field("disable_product_title")) : ?>
                        <h1 class="fs-3 scramble fw-bold <?= $textDark ? "black-text" : "" ?>" data-text="<?= $product_title ?>"><?= $product_title ?></h1>
                    <?php elseif (!get_field("disable_product_title")) : ?>
                        <h1 class="display-6 fw-400 scramble <?= $textDark ? "black-text" : "" ?>" data-text="<?= $product_title ?>"><?= $product_title ?></h1>
                    <?php endif; ?>

                    <div class="product-description <?= $textDark ? "black-text" : "" ?>">
                        <?php if ($top_banner_title) : ?>
                            <h2 class="display-6 <?= $textDark ? "black-text" : "" ?>"><?= $top_banner_title; ?></h2>
                        <?php endif; ?>
                        <?php if ($top_banner_description) : ?>
                            <?= $top_banner_description; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>