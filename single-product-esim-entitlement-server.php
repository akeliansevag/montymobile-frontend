<?php get_header(); ?>
<?php the_content(); ?>
<section class="py-5 bg-white">
    <div class="container">
        <div class="boxed w-75-p mx-auto">
            <p>uPair is an entitlement server eSIM solution that allows mobile network customers
                to use the built-in cellular capability of their wearable technology. Our cloud-native solution simplifies the integration and deployment of device pairing for network operators through a set of easy-to-use APIs.</p>
        </div>
    </div>
</section>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2>Drive Revenue and Efficiency</h2>
                <p><i>Revolutionize Device Entitlement
                        With a Cloud-Native Solution</i></p>
            </div>
        </div>
        <div class="boxes-wrapper">
            <div class="boxed text-start with-icon position-relative">
                <img class="image-icon" src="<?= get_template_directory_uri() ?>/assets/img/esim/icon-1.webp" alt="Icon 1">
                <div>
                    <h2>One Number Service</h2>
                    <p>uPair can fully lifecycle manage the One Number product behind the Apple Watch, Samsung Gear, and Wear OS enabling MNOs subscribers to have two more voice/video/messaging devices under one mobile service number. Once the secondary service is paired the customer will be able to receive voice/video calls as well as send and receive messages from the secondary device. </p>
                    <div class="box-stats">
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/increase.svg" alt="Increase">
                            <span>Increased ARPU</span>
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/increase.svg" alt="Increase">
                            <span>Increased CSAT</span>
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/decrease.svg" alt="Decrease">
                            <span>Reduced churn</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="boxed text-start image-right with-icon position-relative">
                <img class="image-icon" src="<?= get_template_directory_uri() ?>/assets/img/esim/icon-2.webp" alt="Icon 2">
                <div>
                    <h2>eSIM Transfer</h2>
                    <p>uPair can provide MNOs eSIM support including eSIM wearables and eSIM transfer through it’s Device Entitlement Server (DES).. </p>
                    <div class="box-stats">
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/increase.svg" alt="Increase">
                            <span>Increased CSAT</span>
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/decrease.svg" alt="Decrease">
                            <span>Reduced churn</span>
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/decrease.svg" alt="Decrease">
                            <span>Reduced cost</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="boxed text-start with-icon position-relative">
                <img class="image-icon" src="<?= get_template_directory_uri() ?>/assets/img/esim/icon-3.webp" alt="Icon 3">
                <div>
                    <h2>VoWIFI / Volte Entitlement</h2>
                    <p>Volte and VoWiFi Activatio, The VoLTE is an optional flow that may be used for operators wishing to use Entitlements to manage the deployment of VoLTE to capable Apple iPhones.</p>
                    <div class="box-stats">
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/increase.svg" alt="Increase">
                            <span>Increased CSAT</span>
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/assets/img/esim/decrease.svg" alt="Decrease">
                            <span>Reduced cost</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<?php get_template_part("template-parts/contact-us"); ?>
<?php get_footer(); ?>