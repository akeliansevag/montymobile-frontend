<?php
$category = null;
if (isset(get_queried_object()->taxonomy)) {
  $category = get_queried_object();
}

if (get_query_var('paged')) {
  $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
  $paged = get_query_var('page');
} else {
  $paged = 1;
}

$args = [];
$args['post_type'] = 'post';
$args['posts_per_page'] = 11;



$args['paged'] = $paged;

if ($category) {
  $args['cat'] = $category->term_id;
}

$query = new WP_Query($args);
$posts = $query->posts;
?>
<section class="bg-white">
  <div class="container">
    <?php if (!$category): ?>
      <h1 class="text-center pt-5">Discover Monty Mobile's latest blogs</h1>
    <?php endif; ?>
    <?php if ($category): ?>
      <?php if ($category->description): ?>
        <h1 class="text-center pt-5"><?= $category->description ?></h1>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <div class="container-fluid">

    <?php if ($posts) : ?>
      <div class="row">
        <div class="col-xxl-2"></div>
        <div class="col-xxl-8">
          <ul class="post-categories">
            <li class="cat-item <?= !$category ? 'current-cat' : '' ?>"><a href="<?= get_permalink(get_page_by_path('blog')) ?>">Show all</a></li>
            <?= wp_list_categories(['title_li' => '']); ?>
          </ul>
          <div class="row posts">
            <?php foreach ($posts as $key => $post) : ?>
              <?php
              $col = "col-xl-4";
              $new_ribbon = "";
              if ($key == 0 && $paged == 1) {
                $col = "col-xl-8";
                if (!$category) {
                  $new_ribbon = "<div class='new-ribbon'>NEW</div>";
                }
              }
              ?>

              <div class="<?= $col ?> d-flex">
                <?php $permalink = get_permalink($post->ID); ?>
                <a class="post" href="<?= $permalink; ?><?= $category ? '?c=1' : ''; ?>">
                  <?= $new_ribbon; ?>
                  <?php $thumbnail = get_the_post_thumbnail($post->ID, "md-thumb", ['class' => 'post-thumbnail']); ?>
                  <?= $thumbnail ?>
                  <div class="post-overlay"></div>
                  <div class="post-content">
                    <h2><?= $post->post_title ?></h2>
                    <div class="post-meta">
                      <?php
                      $author = get_the_author_meta('display_name', $post->post_author);
                      ?>
                      <div class="post-info"><?= date("M d, Y", strtotime($post->post_date)); ?> - <?= $author; ?></div>
                    </div><!--post-meta-->
                  </div><!--post-content-->
                </a><!--post-->
              </div><!--col-4-->
            <?php endforeach; ?>
          </div><!--row-->
        </div><!--outer-col-->
        <div class="col-xxl-2"></div>
      </div><!--outer-row-->

    <?php endif; ?>
  </div><!--container-->
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