<?php get_header(); ?>

<?php
$q = null;
if (isset($_GET['q'])) {
    $q = $_GET['q'];
}
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$query = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 9,
    's' => $q,
    'paged' => $paged,
]);
$posts = $query->posts;


$term_args = array(
    'taxonomy' => 'product-category',
    'name__like' => $q,
);

$cats = get_terms($term_args);

?>
<style>

</style>
<section class="bg-white py-5">
    <div class="container">
        <h1>Search results for "<i><?= $q ?>"</i></h1>
        <div class="search-results my-5">
            <?php if ($posts || $cats) : ?>
                <div class="search-items card-items">
                    <div class="row">

                        <?php if ($cats) : ?>
                            <?php foreach ($cats as $cat) : ?>
                                <?php
                                $description = get_field("display_description", $cat->taxonomy . "_" . $cat->term_id);
                                ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card-item">
                                        <h4 class="card-title fs-5"><a href="<?= get_term_link($cat->term_id, 'product-category'); ?>"><?= $cat->name ?></a></h4>
                                        <p>
                                        <p class="truncate"><?= $description ? str_replace(['<p>','</p>'], '', $description ) : "" ?></p>
                                        <a href="<?= get_term_link($cat->term_id, 'product-category'); ?>" class="text-decoration-underline"><i>learn more</i></a>
                                        </p>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if ($posts) : ?>
                            <?php foreach ($posts as $p) : ?>
                                <?php
                                $description = get_field("small_description", $p->ID);

                                $cat = wp_get_post_terms($p->ID, 'product-category');
                                ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card-item">
                                        <h4 class="card-title fs-5"><a href="<?= get_permalink($p->ID); ?>"><?= $p->post_title ?></a></h4>
                                        <p>
                                        <p class="truncate"><?= $description ? str_replace(['<p>','</p>'], '', $description ) : "" ?></p>
                                        <a href="<?= get_permalink($p->ID); ?>" class="text-decoration-underline"><i>learn more</i></a>
                                        </p>

                                        <?php if ($cat) : ?>
                                            <div class="card-meta">
                                                <ul class="card-list py-2">
                                                    <?php foreach ($cat as $c) : ?>
                                                        <li><a href="<?= get_term_link($c->term_id, 'product-category') ?>"><?= $c->name; ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>

                                            </div>
                                        <?php endif; ?>


                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>

                </div>
            <?php else : ?>
                <h4 class="my-5">Your query returned no results.</h4>
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