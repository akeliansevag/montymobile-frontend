<?php
$products = get_field("related_products_items");
$backgroundColor = get_field("block_background_color");
$title = get_field("block_product_related_title");
$blockID = $block['id'];
?>

<?php if ($products) : ?>
    <section data-block-id="<?= $blockID ?>" class="related-section related-products-section pt-5" style="background-color:<?= $backgroundColor ? $backgroundColor : "#ffffff;" ?>">
        <div class="container">
            <h2 class="fw-semi-bold"><?= $title ?></h2>
        </div>
        <div class="related-products-container position-relative bg-gray py-5 mt-3 d-flex align-items-center ">
            <img src="<?= get_template_directory_uri() ?>/assets/img/relatedbg2.jpg" alt="Background image used on Monty Mobile's website featuring space and planets" class="position-absolute object-fit-cover top-0 left-0 z-0 w-100 h-100">
            <div class="container px-5 px-md-0">
                <div class="swiper-cont position-relative my-4">
                    <div class="related-products-slider" id="related-products-slider-<?= $blockID ?>">
                        <?php foreach ($products as $p) : ?>
                            <div class="related-slide">
                                <a href="<?= get_permalink($p->ID); ?>" class="product-slider-item mx-3 position-relative">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <!--<img src="<?= get_template_directory_uri() ?>/assets/img/relatedbg.png" alt="" class="box-bg">-->
                                        <?php if ($icon = get_field("related_product_icon", $p->ID)) : ?>
                                            <img width="40" class="mb-2" src="<?= $icon['sizes']['logo'] ?>" alt="Icon">
                                        <?php endif; ?>
                                        <h5 class="fw-semi-bold"><?= $p->post_title ?></h5>
                                        <?php $very_small_description = get_field("very_small_description", $p->ID); ?>
                                        <?php if ($very_small_description) : ?>
                                            <p class="mb-0 mt-1"><?= $very_small_description; ?></p>
                                        <?php endif; ?>

                                    </div>
                                </a>
                            </div>

                        <?php endforeach; ?>

                    </div>


                </div>

            </div>
            <div class="spacer-50"></div>
        </div>
    </section>
<?php endif ?>