<?php get_header(); ?>
<style>
    .certificate {
        width: 100%;
        background-color: var(--mmWhite);
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 30px;
        height: 100%;
    }
</style>
<section class="d-inline-block w-100 pt-5 pb-5 bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-2"></div>
            <div class="col-xxl-8">
                <div class="page-wrapper mb-5 bg-gray p-4 rounded">

                    <div class="page-title">
                        <h1><?= $post->post_title; ?></h1>
                    </div>

                    <div class="page-content mt-5">
                        <?php $certificates = get_field("certificates"); ?>
                        <?php if ($certificates) : ?>
                            <div class="row">

                                <?php foreach ($certificates as $c) : ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="certificate">
                                            <div>
                                                <img style="max-width: 250px;" class="mb-3" src="<?= $c['image']['sizes']['lg-thumb'] ?>" alt="">
                                                <h3 class="fs-4"><?= $c['title'] ?></h3>
                                                <h4 class="fs-6"><?= $c['small_title'] ?></h4>
                                                <a href="<?= $c['pdf']; ?>" target="_blank">view certificate</a>
                                            </div>

                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>

                        <?php endif; ?>
                    </div><!--post-content-->
                </div>
            </div><!--outer-column-->
            <div class="col-xxl-2"></div>
        </div>

    </div><!--container-->
</section>
<?php get_footer(); ?>