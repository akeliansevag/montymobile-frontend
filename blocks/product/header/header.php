<?php
$backgroundColor = get_field("block_background_color");
$title = get_field("block_product_header_title");
$description = get_field("block_product_header_description");
?>

<?php if ($title || $description) : ?>
    <section class="pt-5 pb-2" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <?php if ($title) : ?>
                        <h2 class="fw-semi-bold"><?= $title ?></h2>
                    <?php endif; ?>
                    <?php if ($description) : ?>
                        <?= $description; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>

    </section>
<?php endif; ?>