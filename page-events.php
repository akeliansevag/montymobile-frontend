<?php get_header(); ?>
<?php

if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$args = [];
$args['post_type'] = 'event';
$args['orderby'] = 'meta_value_num';
$args['meta_key'] = 'from';
$args['order'] = 'DESC';
$args['posts_per_page'] = 9;
$args['paged'] = $paged;


$query = new WP_Query($args);
$posts = $query->posts;
?>
<style>
    .card-image {
        min-height: 200px;
    }

    .card-image img {
        max-width: 100%;
        width: 100%;
    }
</style>
<section class="bg-white py-5">
    <div class="container">
        <h1><?= the_title() ?></h1>
        <div class="search-results my-5">
            <?php if ($posts) : ?>
                <div class="search-items card-items">
                    <div class="row">
                        <?php foreach ($posts as $p) : ?>
                            <?php $thumbnail = get_the_post_thumbnail($p->ID, "lg-thumb", ['class' => 'event-thumbnail']); ?>

                            <div class="col-md-4 mb-3">

                                <div class="card-item">
                                    <div class="card-image">
                                        <?= $thumbnail ?>
                                    </div>
                                    <h4 class="card-title fs-5 pt-3"><?= $p->post_title ?></h4>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            <?php endif; ?>
        </div>
    </div>
</section>
<section class="text-center bg-white">
    <div class="container">
        <div class="mm-pagination pb-5 pt-3">
            <?php
            $big = 999999999; // need an unlikely integer

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $query->max_num_pages,
                'next_text' => "<i class='fa fa-chevron-right'></i>",
                'prev_text' => "<i class='fa fa-chevron-left'></i>"
            ));
            ?>
        </div><!--pagination-->
    </div><!--container-->
</section>

<?php get_footer(); ?>