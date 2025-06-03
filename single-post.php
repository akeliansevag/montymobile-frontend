<?php get_header(); ?>
<?php
$post = get_post();
$category = "";
if ($post) {
    $category = get_the_category($post->ID);
}
$c = $_GET['c'];

$perm = $c ? get_category_link($category[0]->term_id) : home_url() . '/blog/';
?>


<section class="post-section  d-inline-block w-100 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xxl-2"></div>
            <div class="col-xxl-8">
                <div class="post-wrapper mb-5">
                    <a class="back-to" href="<?= $perm ?>"><svg width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="" transform="translate(-120.000000, -200.000000)">
                                    <g id="" transform="translate(120.000000, 200.000000)">
                                        <g id="" transform="translate(15.000000, 15.000000) rotate(-360.000000) translate(-15.000000, -15.000000) ">
                                            <rect id="Rectangle" transform="translate(15.000000, 15.000000) scale(1, -1) translate(-15.000000, -15.000000) " x="0" y="0" width="30" height="30"></rect>
                                            <path d="M22.5,19.6891 C22.2508097,19.6905407 22.0112989,19.5927124 21.834375,19.417225 L15,12.573475 L8.165625,19.417225 C7.79801046,19.7848396 7.20198954,19.7848396 6.834375,19.417225 C6.46676046,19.0496105 6.46676046,18.4535896 6.834375,18.085975 L14.334375,10.585975 C14.5104062,10.4084944 14.7500273,10.3086641 15,10.3086641 C15.2499727,10.3086641 15.4895938,10.4084944 15.665625,10.585975 L23.165625,18.085975 C23.3431056,18.2620062 23.4429359,18.5016273 23.4429359,18.7516 C23.4429359,19.0015727 23.3431056,19.2411938 23.165625,19.417225 C22.9887011,19.5927124 22.7491903,19.6905407 22.5,19.6891 Z" id="Path" fill="black" fill-rule="nonzero" transform="translate(15.000800, 15.000800) scale(1, -1) rotate(-90.000000) translate(-15.000800, -15.000800) "></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg> BACK TO BLOG
                    </a>
                    <div class="post-title">
                        <h1><?= $post->post_title; ?></h1>
                    </div>
                    <div class="post-meta">
                        <?php
                        $author = get_the_author_meta('display_name', $post->post_author);
                        ?>
                        <div class="inner-post-info">By <?= $author; ?> <?= date("M d, Y", strtotime($post->post_date)); ?></div>

                    </div><!--post-meta-->
                    <div class="post-image mt-5">
                        <?php $thumbnail = get_the_post_thumbnail($post->ID, "lg-thumb", ['class' => 'border-top-right-radius']); ?>
                        <?= $thumbnail ?>
                    </div>


                    <div class="post-content mt-3">
                        <?= get_the_content($post->ID); ?>
                    </div><!--post-content-->
                </div>
            </div><!--outer-column-->
            <div class="col-xxl-2"></div>
        </div>

    </div><!--container-->
</section>
<?php get_footer(); ?>