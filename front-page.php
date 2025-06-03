<?php get_header(); ?>
<?php
$slider = get_field("homepage_slider_items");
?>
<?php
$astroImage = get_field("floating_astronaut_image", 7);

?>

<section class="slider-section position-relative">
    <div id="h-slider" class="h-slider">
        <!-- <div class="h-slider-item slide-1">
            <a href="<?= get_permalink(get_page_by_path('mwc-2025')) ?>" target="_blank">
                <div class="h-slider-background">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/mwc-banner.webp" alt="Webinar Banner">
                </div>
                <div class="position-relative z-1 mt-4 py-4 h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center gap-3 mb-4">
                                    <img style="width: auto; height: 40px;" src="<?= get_template_directory_uri() ?>/assets/img/mwc-logo.svg" alt="MWC Logo">
                                    <div style="width: 3px; height: 60px; background-color: #fff;" class=""></div>
                                    <img style="width: auto; height: 40px;" src="<?= get_template_directory_uri() ?>/assets/img/mm-logo.svg" alt="Monty Mobile Logo">
                                </div>

                                <h1 class="display-5 fw-semi-bold text-white mb-4">It's <span class="text-red">Big</span>, it's <span class="text-red">Tech</span>, it's what's <span class="text-red">Next</span>.</h1>
                                <div class="display-7 text-red bg-white d-inline-block px-3 py-2 rounded fw-semi-bold mb-4">March 3<sup>rd</sup> - March 6<sup>th</sup></div>
                                <p class="text-white display-7 mb-4">Meet us at <strong>Fira Gran Via, Barcelona</strong><br><strong>Booth 5B81 Hall 5</strong></p>
                            </div>

                        </div>
                    </div>
                </div>
            </a>

        </div> -->
        <?php if ($slider) : ?>
            <?php foreach ($slider as $key => $slide) : ?>
                <div class="h-slider-item slide-<?= $key ?>">
                    <div class="h-slider-background">
                        <?php if ($slide['video']) : ?>
                            <video loading="lazy" autoplay muted loop poster="<?= $slide['image'] ? $slide['image']['sizes']['background'] : ""; ?>">
                                <source src="<?= $slide['video']['url']; ?>" type="video/mp4">
                            </video>
                        <?php else : ?>
                            <?php if ($slide['image']) : ?>
                                <img src="<?= $slide['image']['sizes']['background']; ?>" alt="">
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="h-slider-content">
                        <div class="h-slider-inner text-center">
                            <?php if ($slide['text']) : ?>
                                <h1 class="display-3 fw-semi-bold"><?= $slide['text']; ?></h1>
                            <?php endif; ?>
                            <?php if ($slide['link']) : ?>
                                <a target="<?= $slide['link']['target']; ?>" href="<?= $slide['link']['url'] ?>" class="mm-button-2 my-3"><?= $slide['link']['title']; ?></a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- <div class="h-slider-item slide-1">
            <a href="<?= home_url() ?>/was19">
                <div class="h-slider-background">
                    <img src="https://montymobile.com/wp-content/uploads/2023/10/waslanding.jpg" alt="">
                </div>

                <div class="h-slider-content">
                    <div class="h-slider-inner text-center">

                        <div class="text-center">
                            <img class="d-inline-block mb-2" src="https://montymobile.com/wp-content/uploads/2023/10/mmlogo.png" alt="Logo">
                            <h2 style="letter-spacing:2px;" class="mt-1 mb-3 fw-bold fs-2">HOSTING</h2>
                            <img style="width:130px;" class="d-inline-block mb-2" src="https://montymobile.com/wp-content/uploads/2023/10/GSMALOGO.png" alt="GSMA Logo">
                        </div>


                        <h1>WAS#19</h1>
                        <div class="p-3 text-center mt-3 d-inline-block" style="background-color: var(--mmPink);">
                            <p class="text-center p-0 m-0 text-white fw-bold">
                                APRIL 16-18, 2024, <br>
                                ISTANBUL, TURKEY
                            </p>
                        </div>


                    </div>
                </div>
            </a>
        </div> -->
    </div>
    <div class="field d-none d-md-block">
        <div class="mouse"></div>
    </div>
</section>

<div class="position-relative motion-path-container">
    <div id="path-container" class="d-none d-sm-block" style="position:absolute;height:100%;width:100%;top:0;z-index:-1;">
        <!--<img style="position:absolute;top:0;max-width:100%;" id="floating-astro" src="<?= $astroImage['url'] ?>" alt="">-->
        <div style="position:absolute;top:0;" id="floating-astro">
            <video width="400" height="400" playsinline autoplay loop muted>
                <source src="https://montymobile.com/wp-content/uploads/2023/11/astronaut_hevc.mov">
                <source src="https://montymobile.com/wp-content/uploads/2023/11/astronaut.webm">
            </video>
        </div>
    </div>
    <?php if (get_field("homepage_about_us")) : ?>
        <section class="h-about-us text-center">
            <div class="container">
                <div class="spacer-75"></div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <?= get_field("homepage_about_us"); ?>
                        <?php $habout = get_field("homepage_about_us_items"); ?>
                        <?php if ($habout) : ?>
                            <div class="h-about-items mt-4">
                                <div class="row">
                                    <?php foreach ($habout as $key => $ha) : ?>
                                        <div class="col-lg-4 px-3">
                                            <div class="h-about-item border border-white rounded-5 p-3 mb-lg-0 mb-3">
                                                <h5><?= $ha['title'] ?></h5>
                                                <div class="read-more-text collapse" id="collapse-<?= $key ?>">
                                                    <div class="text-content">
                                                        <?= $ha['description']; ?>
                                                    </div>
                                                </div>
                                                <a role="button" data-bs-toggle="collapse" href="#collapse-<?= $key ?>" class="read-more white-text"></a>

                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                </div>
                            </div>



                        <?php endif; ?>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>

        </section>
    <?php endif; ?>

    <?php
    $planet_image = get_field("homepage_planet_image");
    ?>
    <?php if ($planet_image) : ?>
        <section class="home-background">
            <img src="<?= $planet_image['sizes']['lg-thumb'] ?>" class="parallax-image" alt="<?= $planet_image['alt'] ?>">
        </section>
    <?php endif; ?>

    <?php
    $events = new WP_Query([
        'post_type' => 'event',
        'posts_per_page' => 10
    ]);
    $events = $events->posts;
    ?>
    <?php if ($events) : ?>
        <?php $events_title = get_field("homepage_events_title"); ?>
        <section class="h-events">
            <div class="container">
                <h2 class="section-title display-4 fw-semi-bold"><?= $events_title; ?></h2>
            </div>
            <div id="events-slider" class="events-slider">
                <?php
                foreach ($events as $key => $event) :
                    $eventImage = get_field('event_small_thumbnail', $event->ID);
                    $eventLogo = get_field("event_logo", $event->ID);

                ?>
                    <div class="event-slide">
                        <a class="event-item <?= $eventImage ? "with-image" : "" ?>" href="<?= home_url('/events/') ?>">
                            <?php

                            ?>
                            <?php if ($eventImage) : $withImage = true; ?>
                                <img class="box-bg" src="<?= $eventImage['sizes']['mid-thumb'] ?>" alt="<?= $eventImage['alt'] ?>">
                                <div class="event-overlay"></div>
                            <?php endif; ?>
                            <div class="event-content">
                                <div>
                                    <?php if ($eventLogo) : ?>
                                        <img src="<?= $eventLogo['sizes']['mid-thumb'] ?>" alt="<?= $eventLogo['alt'] ?>" class="event-logo">
                                    <?php else : ?>
                                        <h4><?= $event->post_title; ?></h4>
                                    <?php endif; ?>

                                </div>

                            </div>

                        </a>
                    </div>

                <?php endforeach; ?>
            </div>

            <div class="spacer-75"></div>
        </section>
    <?php endif; ?>

    <?php
    $products = get_field("top_tier_products");
    ?>
    <?php if ($products) : ?>
        <section class="h-products">
            <div class="container">
                <h2 class="section-title display-4 fw-semi-bold"><?= get_field("homepage_products_title") ?></h2>
            </div>
            <div class="products-slider" id="products-slider">
                <?php foreach ($products as $key => $product) : ?>
                    <div class="product-slide">
                        <div class="h-product">
                            <div class="h-product-info d-block d-xl-flex align-items-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="">
                                                <div class="h-blog-meta mb-2 d-flex align-items-center">
                                                    <span class="h-blog-category display-6 product-name fw-semi-bold"><?= $product['title']; ?></span>
                                                    <span class="h-blog-shape"></span>
                                                    <span class="h-blog-dot"></span>
                                                </div>
                                                <?php if ($product['full_title']) : ?>
                                                    <h3 class="fs-4"><i><?= $product['full_title']; ?></i></h3>
                                                <?php endif; ?>
                                                <div class="product-description mb-4 mb-xl-0">
                                                    <?= $product['description'] ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                                            <?php $infographic = $product['image']; ?>
                                            <?php if ($infographic) : ?>
                                                <div class="h-product-image">
                                                    <img src="<?= $infographic['sizes']['lg-thumb']; ?>" alt="<?= $infographic['alt'] ?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center my-5">
                                                <div id="slider-buttons">
                                                    <div>
                                                        <a target="<?= $product['link']['target'] ?>" href="<?= $product['link']['url'] ?>" class="mm-button-2">Get started</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                <?php endforeach; ?>


            </div>

            <div class="spacer-75"></div>
        </section>
    <?php endif; ?>
    <?php
    $posts = new WP_Query([
        'posts_per_page' => 4
    ]);
    $posts = $posts->posts;
    ?>
    <?php if ($posts) : ?>
        <section class="h-blogs">

            <div class="container">
                <h2 class="section-title display-4 fw-semi-bold"><?= get_field("homepage_blogs_title"); ?></h2>
                <div class="blogs">
                    <?php foreach ($posts as $key => $post) : ?>
                        <?php
                        $category = get_the_category($post->ID);
                        $thumb = get_the_post_thumbnail($post->ID, 'lg-thumb');
                        ?>
                        <div class="mb-4 mb-md-0 h-blog position-relative row align-items-center <?= ($key + 1) % 2 == 0 ? "flex-row-reverse" : "" ?>">
                            <div class="col-md-6 animated-element">
                                <div class="display-7 h-blog-meta mb-2 d-flex align-items-center <?= ($key + 1) % 2 == 0 ? "flex-row-reverse" : "" ?>">
                                    <span class="h-blog-category"><a href="<?= get_category_link($category[0]->term_id) ?>"><?= $category[0]->cat_name; ?></a></span>
                                    <span class="meta-separator"> | </span>
                                    <span class="h-blog-date"><?= date("d.m.Y", strtotime($post->post_date)) ?></span>
                                    <span class="h-blog-shape"></span>
                                    <span class="h-blog-dot"></span>
                                </div>
                                <div class="h-blog-thumb mb-3">
                                    <a href="<?= get_permalink($post->ID) ?>"><?= $thumb; ?></a>
                                </div>
                                <div class="h-blog-title">
                                    <a href="<?= get_permalink($post->ID); ?>">
                                        <p><?= $post->post_title; ?></p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 text-center d-none d-md-block">
                                <?php if ($key == 0) : ?>
                                    <img width="70%" src="https://montymobile.com/wp-content/uploads/2025/04/new-moon1.webp" class="parallax-image" alt="Moon image">
                                <?php endif; ?>

                                <?php if ($key == 2) : ?>
                                    <img src="https://montymobile.com/wp-content/uploads/2025/04/new-planet.webp" class="parallax-image position-absolute top-0" alt="Moon image">
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center">
                    <a href="<?= home_url('/blog/') ?>" class="mm-button-2 my-5">Read more</a>
                </div>

            </div>
        </section>
    <?php endif; ?>

    <div class="spacer-75"></div>
    <?php
    $awards = get_field('awards_items', 7);
    ?>
    <?php if ($awards) : ?>
        <section class="h-awards">
            <div class="container">
                <h2 class="section-title display-4 fw-semi-bold">Awards</h2>

                <div class="awards-scroll-slider swiper" id="awards-scroll-slider">
                    <div class="swiper-line"></div>
                    <div class="swiper-wrapper">
                        <?php foreach ($awards as $award) : ?>
                            <div class="swiper-slide">
                                <div class="award-item">
                                    <div>
                                        <img src="<?= $award['image']['url'] ?>" alt="<?= $award['image']['alt'] ?>" />
                                    </div>
                                    <div class="swiper-dot"></div>
                                    <div class="swiper-desc">
                                        <div>
                                            <h4><?= $award['title'] ?></h4>
                                            <?php if ($award['description']) : ?>
                                                <p><?= $award['description']; ?></p>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>


                </div>
                <!-- If we need scrollbar -->
                <div class="awards-swiper-scrollbar"></div>

        </section>

    <?php endif; ?>

    <div class="spacer-75"></div>
    <?php $clients = get_field("homepage_clients", 7); ?>
    <?php if ($clients) : ?>
        <section class="h-clients">
            <div class="container">
                <h2 class="section-title display-4 fw-semi-bold"><?= get_field("homepage_clients_title", 7); ?></h2>

                <div class="clients-slider v-slider" id="slider-clients">
                    <?php foreach ($clients as $client) : ?>
                        <div class="v-slide">
                            <div class="v-wrapper">
                                <img src="<?= $client['image']['sizes']['lg-thumb'] ?>" alt="<?= $client['image']['alt'] ?>" class="v-slider-img">
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="spacer-75"></div>
            </div>

        </section>
    <?php endif; ?>
</div><!--motion-path-container-close-->
<?php
$astronaut_video = get_field("astronaut_video", 7);
$astronaut_poster = get_field("astronaut_video_poster", 7);
?>
<?php if ($astronaut_video) : ?>
    <section class="h-video-section">
        <video playsinline id="h-video" autoplay muted loop poster="<?= $astronaut_poster['sizes']['background']; ?>">
            <source src="<?= $astronaut_video['url'] ?>" type="video/mp4">
            </source>
        </video>
    </section>
<?php endif; ?>
<?php get_footer(); ?>