<?php get_header(); ?>


<section class="d-inline-block w-100 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-xxl-2"></div>
      <div class="col-xxl-8">
        <div class="page-wrapper mb-5 bg-white p-4 rounded">

          <div class="page-title text-center">
            <h1 class="display-1">404</h1>
            <h2>Ooops!</h2>
            <h4>THAT PAGE DOESN'T EXIST OR IS UNAVAILABLE.</h4>
            <div class="text-center my-5">
              <a class="mm-button" href="<?= home_url(); ?>">Go Back to Home</a>
            </div>
          </div>


        </div>
      </div><!--outer-column-->
      <div class="col-xxl-2"></div>
    </div>

  </div><!--container-->
</section>
<?php get_footer(); ?>