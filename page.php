<?php get_header(); ?>


<section class="d-inline-block w-100 pt-5 white-text">
  <div class="container">
    <div class="row">
      <div class="col-xxl-2"></div>
      <div class="col-xxl-8">
        <div class="page-wrapper mb-5 p-4">

          <div class="page-title">
            <h1><?= $post->post_title; ?></h1>
          </div>

          <div class="page-content mt-3">
            <?= the_content(); ?>
          </div><!--post-content-->
        </div>
      </div><!--outer-column-->
      <div class="col-xxl-2"></div>
    </div>

  </div><!--container-->
</section>
<?php get_footer(); ?>