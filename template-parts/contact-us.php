<section class="py-5 bg-black position-relative">
    <img class="top-0 position-absolute object-fit-cover w-100 h-100 z-0" src="<?= get_template_directory_uri() ?>/assets/img/bg-contact-img.webp" alt="">
    <div class="contact-overlay position-absolute w-100 h-100 bg-black opacity-50 top-0 left-0"></div>
    <div class="container my-4">
        <div class="contact-box text-center">
            <h3>Contact Us</h3>
            <?php if (isset($args['type']) && $args['type'] == 'whatsapp') : ?>
                <div class="w-75-p mx-auto">
                    <p>Enhance customer service with responsive and personalized support through WhatsApp.</p>
                    <div class="red-separator"></div>
                    <p><span class="color-pink">24/7 Support:</span> Offer round-the-clock assistance to address customer queries and issues promptly.</p>
                </div>

            <?php endif; ?>
            <div class="buttons mt-4 w-75-p mx-auto">
                <a target="_blank" class="mm-button-new" href="<?= home_url('/sign-up/') ?>">Sign Up For Free</a>
                <a class="mm-button-new alternate" href="<?= home_url('/contact-us/') ?>">Contact An Expert</a>
            </div>
        </div>
    </div>

</section>