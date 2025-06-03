<?php
    $image = get_field("product_info_background_section_image");
    $text = get_field("product_info_background_image_text");
?>

<?php if($image || $text):?>
    <section class="background-section py-4" style="<?= $image ? "background-image:url(".$image['sizes']['background-no-crop'].");" : "" ?>">
        <?php if($text):?>
            <div class="container">
                <div class="fs-3">
                    <?=$text;?>
                </div>
            </div>
        <?php endif;?>
    </section>
<?php endif;?>