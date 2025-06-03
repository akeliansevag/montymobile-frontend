<?php get_header();?>
    <?php $bg = get_field("contact_us_background_image");?>

    <section class="min-full-section pb-5 pt-5 contact-our-experts-section" style="background-image:url(<?=$bg['url']?>);background-size:cover;background-repeat:no-repeat;background-position:left;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-5 col-xxl-6 p-0 d-flex align-items-center justify-content-center">
              
            </div><!--col-xxl-6-->
            <div class="col-xl-6 col-xxl-5">
              <div class="contact-us-content pt-5">
                <h1 class="white-text"><?=get_field("contact_us_form_title");?></h1>
                <div class="monty-form">
                    <?=do_shortcode('[contact-form-7 id="9386a64" title="Contact us"]');?>
                </div><!--monty-form-->
                <div class="contact-us-info mt-5">
                  <div class="address">
                    <?=get_field("address");?>
                  </div><!--address-->

                  <div class="locations">
                    <?php $locations = get_field("locations");?>
                    <?php foreach($locations as $key=>$l):?>
                      <div class="location">
                        <h3><?=$l['country'];?></h3>
                        <a href="tel:<?=$l['tel_number']?>"><?=$l['tel_number'];?></a>
                      </div><!--location-->
                    <?php endforeach;?>
                  </div><!--locations-->

                </div><!--contact-us-info-->
              </div><!--contact-us-content-->
            </div><!--col-xxl-6-->
          </div><!--row-->
        </div><!--container-fluid-->
    </section>

<?php get_footer();?>
