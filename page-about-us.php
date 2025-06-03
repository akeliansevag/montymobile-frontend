<?php get_header(); ?>
<?php
$top_banner = get_field("about_us_top_banner");
?>
<section class="py-5 min-full-section pt-5 position-relative" id="about-us-section">
    <img class="background-image" src="<?= $top_banner['sizes']['background-no-crop'] ?>" alt="<?= $top_banner['alt'] ?>">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-content animate about-us-header" data-animation="fadeInUp">
                        <?php if (get_field("about_us_title")) : ?><h1 class="display-2 pb-5 about-us-big-title white-text"><?= get_field("about_us_title"); ?></h1><?php endif; ?>

                        <span class="white-text"><?= get_field("about_us_description"); ?></span>
                        <?php if (get_field("about_us_big_desription")) : ?>
                            <p class="fs-5 white-text" style="font-weight:bold;line-height:normal;">
                                <?= get_field("about_us_big_description"); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>
<?php
$timeline_items = get_field("timeline_items");
?>
<?php if ($timeline_items) : ?>
    <section class="timeline-section text-white">
        <div class="timeline-container">
            <div id="timeline-slider" class="swiper">
                <?php foreach ($timeline_items as $key => $tl) : ?>
                    <div class="timeline-item">
                        <h2 class="timeline-date" data-key="<?= $key ?>"><span><?= $tl['year'] ?></span></h2>
                        <div class="timeline-content-wrapper">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h3><?= $tl['title'] ?></h3>
                                <p><?= nl2br($tl['description']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php $mvbg = get_field("mission_vision_background"); ?>
<section class="pt-5 pb-0 min-full-section mission-vision-section white-text">
    <div class="mission-vision-filters pb-3">
        <span class="mission-filter filter active"><?= get_field("mission_text") ?></span>
        <span class="filter-separator"></span>
        <span class="vision-filter filter"><?= get_field("vision_text"); ?></span>
    </div>
    <div class="mission-vision">
        <div class="mission mission-vision-content act">
            <div class="left-image animate" data-animation="fadeInDown">
                <?php $mimage = get_field("mission_image"); ?>
                <img src="<?= $mimage['sizes']['lg-thumb'] ?>" alt="<?= $mimage['alt'] ?>">
            </div>
            <div class="mission-vision-text">
                <div class="good-block animate" data-animation="blackHighlighter">
                    <span><?= get_field("mission_title"); ?></span>
                    <span><?= get_field("mission_description"); ?></span>
                </div>
            </div>
        </div>

        <div class="vision mission-vision-content">

            <div class="mission-vision-text">
                <div class="good-block animate" data-animation="blackHighlighter">
                    <?= get_field("vision_title"); ?>
                    <?= get_field("vision_description"); ?>
                </div>
            </div>
            <div class="right-image">
                <?php $vimage = get_field("vision_image"); ?>
                <img src="<?= $vimage['sizes']['lg-thumb'] ?>" alt="<?= $vimage['alt'] ?>">
            </div>
        </div>
    </div>
</section>

<section class="section py-3">
    <div class="container">
        <div class="our-team leadership-team px-5 py-5 white-text">
            <h2 class="text-center"><?= get_field("team_1_title"); ?></h2>
            <?php if ($team_one = get_field("team_1_members")) : ?>

                <div class="team-slider" id="leadership-team-slider">
                    <?php foreach ($team_one as $key => $t1) : ?>
                        <?php if ($t1['hide']) continue; ?>
                        <div class="team-member" data-popup="<?= sanitize_title($t1['for_slug']); ?>-<?= $key ?>">
                            <?php if ($t1['image']) : ?>
                                <div class="member-pic" data-popup="<?= sanitize_title($t1['for_slug']); ?>-<?= $key ?>"><img src="<?= $t1['image']['sizes']['lg-thumb'] ?>" alt="<?= $t1['image']['alt'] ?>"></div>
                            <?php else : ?>
                                <div class="member-pic no-pic" data-popup="<?= sanitize_title($t1['for_slug']); ?>-<?= $key ?>"></div>
                            <?php endif; ?>

                            <div class="member-name"><?= $t1['name'] ?></div>

                        </div>

                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
        </div>
    </div>
</section>
<?php foreach ($team_one as $key => $p) : ?>
    <div class="team-popup" id="<?= sanitize_title($p['for_slug']); ?>-<?= $key ?>">
        <div class="close-container">
            <div class="leftright"></div>
            <div class="rightleft"></div>
            <label class="close">close</label>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2"></div>
                <div class="col-xl-4">
                    <div class="popup-image">
                        <img src="<?= $p['image']['sizes']['lg-thumb']; ?>" alt="<?= $p['image']['alt'] ?>">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="popup-description">
                        <h3><?= $p['name']; ?></h3>
                        <span> <?= $p['description']; ?></span>
                    </div>
                </div>
                <div class="col-xl-2"></div>
            </div>

        </div>
    </div>
<?php endforeach; ?>

<section class="section py-3">
    <div class="container">
        <div class="our-team management-team px-5 py-5 white-text">
            <h2 class="text-center"><?= get_field("team_2_title"); ?></h2>
            <?php if ($team_two = get_field("team_2_members")) : ?>

                <div class="team-slider" id="management-team-slider">
                    <?php foreach ($team_two as $key => $t2) : ?>
                        <?php if ($t2['hide']) continue; ?>
                        <div class="team-member" data-popup="<?= sanitize_title($t2['for_slug']); ?>-<?= $key ?>">
                            <?php if ($t2['image']) : ?>
                                <div class="member-pic" data-popup="<?= sanitize_title($t2['for_slug']); ?>-<?= $key ?>"><img src="<?= $t2['image']['sizes']['lg-thumb'] ?>" alt="<?= $t2['image']['alt'] ?>"></div>
                            <?php else : ?>
                                <div class="member-pic no-pic" data-popup="<?= sanitize_title($t2['for_slug']); ?>-<?= $key ?>"></div>
                            <?php endif; ?>

                            <div class="member-name"><?= $t2['name'] ?></div>
                            <div class="member-title"><?= $t2['title']; ?></div>

                        </div>

                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
        </div>
    </div>

</section>

<?php foreach ($team_two as $key => $p2) : ?>
    <div class="team-popup" id="<?= sanitize_title($p2['for_slug']); ?>-<?= $key ?>">
        <div class="close-container">
            <div class="leftright"></div>
            <div class="rightleft"></div>
            <label class="close">close</label>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2"></div>
                <div class="col-xl-4">
                    <div class="popup-image">
                        <img src="<?= $p2['image']['sizes']['lg-thumb']; ?>" alt="<?= $p2['image']['alt'] ?>">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="popup-description">
                        <h3><?= $p2['name']; ?></h3>
                        <h4><?= $p2['title']; ?></h4>
                        <span><?= $p2['description']; ?></span>
                    </div>
                </div>
                <div class="col-xl-2"></div>
            </div>

        </div>
    </div>
<?php endforeach; ?>
<?php $gpimage = get_field("global_presence_background"); ?>
<section class="py-5 section global-presence" style="background-image: url(<?= $gpimage['sizes']['lg-thumb'] ?>">
    <div class="container">
        <div class="global-presence-content">
            <div class="row">
                <div class="col-xl-4">

                    <!--<h2 class="section-title animate" data-animation="fadeInDown">
                        <span class="black-highlighter white-highlighter" style="color:#04010a;"><?= get_field("global_title"); ?></span>
                    </h2>-->

                    <p><?= get_field("global_description"); ?></p>
                    <?php if ($abnumbers = get_field("about_us_numbers")) : ?>
                        <div class="about-us-numbers">
                            <?php foreach ($abnumbers as $n) : ?>
                                <div class="about-us-number mb-4">
                                    <p><span class="display-2 d-block"><?= $n['number'] ?></span> <?= $n['description'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>


                    <?php endif; ?>
                </div>
                <div class="col-xl-3"></div>
                <div class="col-xl-4 align-self-end pb-4">
                    <div class="global-presence-list animate" data-animation="fadeInUp">
                        <?= get_field("global_countries"); ?>
                    </div>
                </div>
                <div class="col-xl-1"></div>
            </div>

        </div><!--global-presence-content-->

    </div>
</section>
<section class="full-section-header" id="about-us-half-sections">

    <div class="half-sections">
        <div class="half-section half-section-1 is-active">
            <div class="half-section-content">
                <h2><?= get_field("part_1_title"); ?></h2>
                <p><?= get_field("part_1_description"); ?></p>
            </div><!--half-section-content-->
        </div><!--half-section-->

        <div class="half-section half-section-2">
            <div class="half-section-content">
                <h2><?= get_field("part_2_title"); ?></h2>
                <p><?= get_field("part_2_description"); ?></p>
            </div>
        </div><!--half-section-->

    </div><!--half-sections-->
</section>

<?php
$awards = get_field('homepage_awards', 7);
?>
<?php if ($awards) : ?>
    <section class="h-awards pb-5">
        <div class="container">
            <h2 class="section-title fs-2 fw-semi-bold text-white"><?= get_field("homepage_awards_title", 7); ?></h2>

            <div class="awards-slider v-slider" id="slider-awards">
                <div class="row">
                    <?php foreach ($awards as $award) : ?>
                        <div class="v-slide col-6 col-md-3 px-2">
                            <div class="v-wrapper">
                                <img src="<?= $award['image']['sizes']['md-thumb'] ?>" alt="<?= $award['image']['alt'] ?>" class="v-slider-img">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
<?php endif; ?>
<section class="py-5 white-text">
    <div class="container">
        <h2><?= get_field("about_us_services_title") ?></h2>
        <?php $services = get_field("about_us_services_items"); ?>
        <?php if ($services) : ?>
            <div class="about-us-services pt-3">
                <div class="row">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="about-us-service">
                                <h3><?= $service['title']; ?></h3>
                                <p><?= $service['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        <?php endif; ?>
        <div class="about-us-contact py-5">
            <div class="mb-3 row">
                <div class="col-md-8">
                    <h3>
                        <?= get_field("about_us_contact_us_text") ?>
                    </h3>
                </div>

            </div>

            <?php $link = get_field("about_us_contact_us_link"); ?>
            <?php if ($link) : ?>
                <a class="mm-button border-none" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>"><?= $link['title'] ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="py-5 careers-section text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2>
                    <?= get_field("careers_title"); ?>
                </h2>
                <div class="mt-3 mb-5">
                    <p><?= get_field("careers_description") ?></p>
                </div>
                <div>
                    <?php $link = get_field("careers_link"); ?>
                    <?php if ($link) : ?>
                        <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="mm-button"><?= $link['title'] ?></a>
                    <?php endif; ?>
                </div>

            </div>
            <div class="col-md-5 mt-5 mt-md-0">
                <?php $cimage = get_field("careers_image"); ?>
                <?php if ($cimage) : ?>
                    <img class="mw-100" src="<?= $cimage['sizes']['lg-thumb']; ?>" alt="<?= $cimage['alt'] ?>">
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>