<?php
$items = get_field("block_product_performance_items");
$title = get_field("block_product_performance_title");
$description = get_field("block_product_performance_description");
$bgColor = get_field("block_background_color");
$infographic = get_field("block_product_performance_infographic");
?>
<?php if ($items || $title || $description) : ?>
    <section class="performance-section py-5" style="<?= $bgColor ? "background-color:" . $bgColor . "" : "" ?>">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="grid-info container-margin">
                        <h2><?= $title ?></h2>
                        <?php if ($description) : ?>
                            <?= $description; ?>
                        <?php endif; ?>
                        <?php if ($infographic) : ?>
                            <div class="grid-infographic">
                                <img src="<?= $infographic['sizes']['lg-thumb'] ?>" alt="">
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <?php if ($items) : ?>
                        <div class="performance-items">
                            <?php foreach ($items as $key => $item) : ?>
                                <div class="performance-item <?= $key == 0 ? "performance-active" : "" ?>">
                                    <p class="h5"><?= $item['title'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif ?>


                </div>
            </div>
        </div>
    </section>
<?php endif; ?>