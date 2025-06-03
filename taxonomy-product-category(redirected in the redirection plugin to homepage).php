<?php get_header(); ?>
<?php
$term = get_queried_object();
$title = get_field("display_title", $term->taxonomy . "_" . $term->term_id);
$description = get_field("display_description", $term->taxonomy . "_" . $term->term_id);
if (!$title) {
    $title = $term->name;
}

$args = [
    'post_type' => 'product',
    'tax_query' => [
        [
            'taxonomy' => 'product-category',
            'field' => 'slug',
            'terms' => $term->slug
        ]
    ],
    'posts_per_page' => -1
];
$products = get_posts($args);
$background = get_field("product_category_background_image", $term->taxonomy . "_" . $term->term_id);
?>
<?php if ($term) : ?>
    <section class="position-relative product-category-section section-background">

        <div class="product-category-page white-text py-5 position-relative">
            <?php if ($background) : ?>
                <img src="<?= $background['sizes']['background-entire'] ?>" class="d-none d-sm-block position-absolute top-0 object-fit-cover h-100 w-100 z-n1" />
            <?php endif; ?>
            <section class="product-category-header py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="display-6"><?= $title ?></h1>
                        </div>
                        <div class="col-md-6">
                            <?php if ($description) : ?>
                                <?= $description ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php if ($products) : ?>
                <section class="category-products-slider py-5">
                    <div class="container">
                        <div class="px-3 px-md-0">
                            <div id="category-products-slider" class="">
                                <?php foreach ($products as $key => $pr) : ?>
                                    <div class="px-2">
                                        <div class="category-product-item <?= $key == 0 ? "category-active" : "" ?> py-4" data-key="<?= $key ?>">
                                            <h4 class="fs-2 fw-semi-bold"><?= $pr->post_title ?></h4>
                                        </div>
                                    </div>


                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>

                </section>
                <section class="product-info-slider py-2 my-4">
                    <div class="container">
                        <div id="category-product-info-slider">
                            <?php foreach ($products as $key => $p) : ?>
                                <div class="product-info-slide" id="c<?= $key ?>">
                                    <div class="category-product-info-item">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-md-6 mb-4 mb-md-0">
                                                <?php $smallDescription = get_field("small_description", $p->ID); ?>
                                                <?php if ($smallDescription) : ?>
                                                    <?= $smallDescription ?>
                                                <?php else : ?>
                                                    <p><?= $p->post_title; ?></p>
                                                <?php endif; ?>
                                                <a class="white-text fst-italic text-decoration-underline" href="<?= get_permalink($p->ID); ?>">learn more</a>
                                            </div>
                                            <div class="col-md-6 justify-content-center d-flex">
                                                <?php $infographic = get_field("homepage_infographic", $p->ID); ?>
                                                <?php if ($infographic) : ?>
                                                    <img class="mw-100" src="<?= $infographic['sizes']['lg-thumb']; ?>" alt="">

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

        </div>
    </section>

<?php endif; ?>
<?php get_footer(); ?>