<?php
$image = get_field("block_product_background_image");
$text = get_field("block_product_background_text");
$textDark = get_field("block_product_text_dark");
$backgroundColor = get_field("block_background_color");
?>

<?php if ($image || $text) : ?>
    <section class="background-section position-relative py-4" style="<?= $image ? "background-image:url(" . $image['sizes']['background-no-crop'] . ");" : "" ?> <?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <?php if ($image) : ?>
            <div class="bg-overlay-2"></div>
        <?php endif; ?>
        <?php if ($text) : ?>
            <div class="container position-relative">
                <div class="fs-4 <?= $textDark ? "black-text" : "" ?>">
                    <?= $text; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>