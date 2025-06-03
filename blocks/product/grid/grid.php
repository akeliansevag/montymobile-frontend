<?php
$gridItems = get_field("block_product_grid_items");
$title = get_field("block_product_grid_title");
$description = get_field("block_product_grid_description");
$backgroundColor = get_field("block_background_color");
$boxesColor = get_field("boxes_color");
$infographic = get_field("block_product_grid_infographic");
?>
<?php if ($gridItems) : ?>
    <section class="grid-section py-5" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <div class="grid-section-content">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="grid-info container-margin">
                            <h2><?= $title ?></h2>
                            <?= $description ?>
                            <?php if ($infographic) : ?>
                                <div class="grid-infographic">
                                    <img src="<?= $infographic['sizes']['lg-thumb'] ?>" alt="">
                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="grid-items">
                            <?php foreach ($gridItems as $key => $item) : ?>
                                <?php
                                $color = "";
                                if ($boxesColor) {
                                    if ($key % 2 == 0) {
                                        $color = $boxesColor;
                                    }
                                }
                                ?>
                                <div class="grid-item" style="<?= $color ? "background-color:" . $color . ";" : "" ?>">
                                    <p><?= $item['text'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>