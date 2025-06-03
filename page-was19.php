<?php get_header(); ?>
<section>
    <div class="h-slider-item slide-1">
        <div class="h-slider-background">
            <img src="https://montymobile.com/wp-content/uploads/2023/10/waslanding.jpg" alt="">
        </div>

        <div class="h-slider-content">
            <div class="text-center">
                <div class="text-center">
                    <img class="d-inline-block mb-2" src="https://montymobile.com/wp-content/uploads/2023/10/mmlogo.png" alt="Logo">
                    <h2 style="letter-spacing:2px;" class="text-white mt-1 mb-3 fw-bold fs-2">HOSTING</h2>
                    <img style="width:130px;" class="d-inline-block mb-2" src="https://montymobile.com/wp-content/uploads/2023/10/GSMALOGO.png" alt="GSMA Logo">
                </div>


                <h1 class="text-white">WAS#19</h1>
                <div class="p-3 text-center mt-3 d-inline-block" style="background-color: var(--mmPink);">
                    <p class="text-center p-0 m-0 text-white fw-bold">
                        APRIL 16-18, 2024, <br>
                        ISTANBUL, TURKEY
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-5">
    <div class="container">
        <div class="row gx-0 gx-lg-5">
            <div class="col-lg-6">
                <h2>
                    Istanbul, Turkey
                </h2>
                <p>
                    A city where History Meets Modernity and ancient wonders coexist with contemporary marvels. With its rich history and vibrant ambiance, Istanbul is the perfect blend of tradition and modern allure.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="d-flex">
                    <div class="me-2">
                        <img class="d-block img-fluid" src="https://montymobile.com/wp-content/uploads/2023/11/WAS-landing-page-02.webp" alt="WAS Image">
                    </div>
                    <div class="ms-2">
                        <img class="d-block img-fluid" src="https://montymobile.com/wp-content/uploads/2023/11/WAS-landing-page-03.webp" alt="WAS Image">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray py-5">
    <div class="container">
        <h2 class="mb-4">Istanbul Congress Center ICC</h2>
        <div class="row g-0 gx-lg-5 align-items-center">
            <div class="col-lg-6">
                <div class="d-flex mb-3 mb-lg-0">
                    <div class="me-2">
                        <img class="d-block img-fluid" src="https://montymobile.com/wp-content/uploads/2023/11/WAS-landing-page-04.webp" alt="WAS Image">
                    </div>
                    <div class="ms-2">
                        <img class="d-block img-fluid" src="https://montymobile.com/wp-content/uploads/2023/11/WAS-landing-page-05.webp" alt="WAS Image">
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <p>
                    Where Innovation Meets Elegance! An unparalleled venue that defines sophistication and international business. As the city's largest congress center, ICC stands as a hub for global gatherings, offering a premier space for conferences, meetings, and events.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="h1 mb-5">Wholesale Agreements
                    and Solutions Group</h2>
            </div>
        </div>
        <div class="row gx-0 gx-lg-5 gy-3">
            <div class="col-lg-6">
                <h2>Overview</h2>
                <p>
                    The Wholesale Agreements and Solutions Group (WAS) is responsible for Operator-to-Operator and Operator-to-Hub interoperability (including Interworking and Roaming) to provide GSMA members with a consistent, reliable GSM service for members to offer their customers.
                </p>
            </div>
            <div class="col-lg-6">
                <h2>
                    Key Topics
                </h2>
                <p>
                    The Wholesale Agreements and Solutions Group (WAS) develops roaming and interconnect agreement templates and wholesale charging principles. Additionally, WAS supports GSMA projects with the development of roaming and interconnect agreement templates and wholesale charging principles that are unique to the needs of these efforts, as appropriate.
                </p>
            </div>
        </div>

        <div class="border border-white rounded-5 p-4 mt-4">
            <h2>
                What the Wholesale Agreements
                and Solutions Group Does
            </h2>
            <p>
                Develop and maintain roaming and interconnect agreement templates, solutions and charging frameworks as listed below:
            <ul>
                <li>Support of new prioritised projects and study of impacts;</li>
                <li>Dialogue with GSMA leadership and provide recommendations on all matters related to roaming and interconnect;</li>
                <li>Continuous improvements of official documentation</li>
            </ul>
            </p>
        </div>
    </div>
</section>
<?= get_template_part("template-parts/monty-esim"); ?>
<?= get_template_part("template-parts/gsma-registration-times"); ?>
<section class="bg-white py-5">
    <div class="container">
        <h2 class="fs-1">Sponsorships and Delegate passes</h2>
        <p class="mb-0">For sponsorship inquires and Delegate passes purchase please reach out on <a class="text-decoration-underline" href="mailto:was19_sponsorships@montymobile.com ">was19_sponsorships@montymobile.com </a></p>
    </div>

</section>
<section class="bg-gray py-5">
    <?php $hotels_data = get_fields(); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="fs-1">Hotels</h2>
                <?= $hotels_data['hotels_description']; ?>
            </div>
            <div class="col-lg-6">
                <div>
                    <img class="w-100" src="<?= $hotels_data['hotels_image']['sizes']['large'] ?>" />
                </div>
            </div>
            <div class="d-flex align-items-end mt-5">
                <h4 class="mb-0 lh-1 fs-3">Hotel Picks</h4>
                <div style="height:2px;background-color:black;" class="ms-2 flex-grow-1 align-self-end">&nbsp;</div>
            </div>
            <div class="mt-5 fs-4">
                <?= get_field('intro_text'); ?>
            </div>
            <?php $hotels = $hotels_data['hotel_listings']; ?>

            <div class="mt-2 mt-md-5 pt-3 mb-2 mb-md-5">
                <div class="hotels-slider mx-4 mx-md-0">
                    <?php foreach ($hotels as $key => $hotel) : ?>
                        <?php if ($hotel['status'] && $hotel['stars'] == 5) : ?>
                            <div class="mb-5 d-flex flex-column flex-md-row align-items-start gap-3 gap-md-5">
                                <div class="flex-grow-1 w-100">
                                    <h5 class="fs-4 mb-1"><?= $hotel['title'] ?></h5>
                                    <div>
                                        <div>
                                            <?php for ($i = 0; $i < $hotel['stars']; $i++) : ?>
                                                <i class="fa fa-star" style="color:#fbbc04" aria-hidden="true"></i>
                                            <?php endfor; ?>
                                            <?php for ($i = 0; $i < (5 - $hotel['stars']); $i++) : ?>
                                                <i class="fa fa-star" style="color:#dadce0" aria-hidden="true"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <h6 class="fs-7 font-bold"><?= $hotel['stars'] ?> Stars</h6>
                                    </div>
                                    <?= $hotel['description'] ?>
                                    <!--<?= $hotel['address'] ?>-->
                                    <?php if (get_field('agent_text')) : ?>
                                        <div class="agent-info">
                                            <strong><?= get_field('agent_text'); ?></strong>
                                        </div>

                                    <?php endif; ?>
                                    <?php if ($hotel['promo_code']) : ?>
                                        <p><strong>Promo Code: </strong><?= $hotel['promo_code']; ?></p>
                                    <?php endif ?>

                                    <?php if ($hotel['promo_code_link']) : ?>
                                        <a class="mm-button transparent d-inline-block mt-2" href="<?= $hotel['promo_code_link'] ?>" target="_blank">Book Now</a>
                                        <!-- <p class="mt-2" style="color:var(--mmPink);">*Discounted rates for WAS#19</p> -->
                                    <?php else : ?>
                                        <?php if ($hotel['link']) : ?>
                                            <a class="mm-button transparent d-inline-block mt-2" href="<?= $hotel['link'] ?>" target="_blank">View Hotel</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if ($hotel['map_link']) : ?>
                                        <a class="mm-button transparent d-inline-block mt-2" href="<?= $hotel['map_link'] ?>" target="_blank">View Location</a>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-grow-1 w-100">
                                    <img src="<?= $hotel['image']['sizes']['large'] ?>" class="w-100 mt-2" />
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>


                </div>
                <div class="agent-info">
                    <strong><?= get_field('agent_info'); ?></strong>
                </div>

            </div>

            <div class="mt-2 mt-md-5 pt-3 mb-2 mb-md-5">
                <div class="hotels-slider mx-4 mx-md-0">
                    <?php foreach ($hotels as $key => $hotel) : ?>
                        <?php if ($hotel['status'] && $hotel['stars'] == 4) : ?>
                            <div class="mb-5 d-flex flex-column flex-md-row align-items-start gap-3 gap-md-5">
                                <div class="flex-grow-1 w-100">
                                    <h5 class="fs-4 mb-1"><?= $hotel['title'] ?></h5>
                                    <div>
                                        <div>
                                            <?php for ($i = 0; $i < $hotel['stars']; $i++) : ?>
                                                <i class="fa fa-star" style="color:#fbbc04" aria-hidden="true"></i>
                                            <?php endfor; ?>
                                            <?php for ($i = 0; $i < (5 - $hotel['stars']); $i++) : ?>
                                                <i class="fa fa-star" style="color:#dadce0" aria-hidden="true"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <h6 class="fs-7 font-bold"><?= $hotel['stars'] ?> Stars</h6>
                                    </div>
                                    <?= $hotel['description'] ?>
                                    <!--<?= $hotel['address'] ?>-->
                                    <?php if (get_field('agent_text')) : ?>
                                        <div class="agent-info">
                                            <strong><?= get_field('agent_text'); ?></strong>
                                        </div>

                                    <?php endif; ?>
                                    <?php if ($hotel['promo_code']) : ?>
                                        <p><strong>Promo Code: </strong><?= $hotel['promo_code']; ?></p>
                                    <?php endif ?>

                                    <?php if ($hotel['promo_code_link']) : ?>
                                        <a class="mm-button transparent d-inline-block mt-2" href="<?= $hotel['promo_code_link'] ?>" target="_blank">Book Now</a>
                                        <!-- <p class="mt-2" style="color:var(--mmPink);">*Discounted rates for WAS#19</p> -->
                                    <?php else : ?>
                                        <?php if ($hotel['link']) : ?>
                                            <a class="mm-button transparent d-inline-block mt-2" href="<?= $hotel['link'] ?>" target="_blank">View Hotel</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if ($hotel['map_link']) : ?>
                                        <a class="mm-button transparent d-inline-block mt-2" href="<?= $hotel['map_link'] ?>" target="_blank">View Location</a>
                                    <?php endif; ?>
                                </div>

                                <div class="flex-grow-1 w-100">
                                    <img src="<?= $hotel['image']['sizes']['large'] ?>" class="w-100 mt-2" />
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="agent-info">
                <strong><?= get_field('agent_info'); ?></strong>
            </div>
        </div>


    </div>
</section>
<?= get_template_part("template-parts/travel-and-passport"); ?>
<?= get_template_part("template-parts/travel-and-transfers-guide"); ?>



<?= get_template_part("template-parts/was19-agenda"); ?>

<?= get_template_part("template-parts/was19-party"); ?>

<?= get_template_part("template-parts/floor-plan"); ?>

<?= get_template_part("template-parts/sponsors"); ?>

<section class="bg-white py-5">
    <div class="container">
        <h4 class="m-0 text-center">For general inquiries, please contact <a class="text-decoration-underline" href="mailto:was19@montymobile.com">was19@montymobile.com </a> </h4>
    </div>
</section>

<style>
    .hotels-slider .slick-prev:before,
    .hotels-slider .slick-next:before {
        color: gray;
    }

    .hotels-slider .slick-prev {
        left: -35px;
    }

    .hotels-slider .slick-next {
        right: -35px;
    }

    .agent-info a {
        color: var(--mmPink);
    }

    table.agenda-table {
        width: 100%;
        border-collapse: collapse;
    }

    table.agenda-table,
    .agenda-table th,
    .agenda-table td {
        border: 1px solid black;
    }

    .agenda-table th,
    .agenda-table td {
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    .agenda-table th {
        background-color: #000000;
        color: white;
    }

    .black-cell {
        background-color: black;
        color: white;
        font-weight: bold;
        border-bottom: 1px solid rgba(255, 255, 255, 0.4) !important;
    }

    .table-container {
        width: 100%;
        overflow: hidden;
    }

    @media (max-width:768px) {
        table.agenda-table {
            width: 1000px;
        }

        .table-container {
            overflow: auto;
        }
    }
</style>
<script>
    jQuery(document).ready(() => {
        jQuery(".hotels-slider").slick({
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
</script>
<?php get_footer(); ?>