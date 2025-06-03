<?php
$backgroundColor = get_field("block_background_color");
$items = get_field("block_product_left_right_items");
?>

<?php if ($items) : ?>
    <section class="py-4" style="<?= $backgroundColor ? "background-color:" . $backgroundColor . ";" : "" ?>">
        <div class="">
            <div class="left-right-items">
                <?php foreach ($items as $key => $item) : ?>
                    <div id="<?= $item['scroll_id'] ?>" class="left-right-item py-3" style="<?= $item['background_color'] ? "background-color:" . $item['background_color'] . ";" : ""; ?>">
                        <div class="container">
                            <div class="row align-items-center <?= $key % 2 == 0 ? "flex-row-reverse" : "" ?>">
                                <div class="col-md-6">
                                    <h3>
                                        <?= $item['title'] ?>
                                    </h3>
                                    <?= $item['description'] ?>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center">
                                    <?php if ($item['image']) : ?>
                                        <img src="<?= $item['image']['sizes']['lg-thumb']; ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>
<?php endif; ?>