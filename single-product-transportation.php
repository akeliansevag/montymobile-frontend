<?php get_header(); ?>
<?php the_content(); ?>
<section class="bg-white py-5">
    <div class="container">
        <div class="boxed w-75-p mx-auto wide-padding">
            <p>Our platform ensures reliable, fast, and scalable messaging for any transportation and logistics use case. Unlock efficiency and cost savings with an omnichannel communication approach that includes messaging on customers’ preferred channels like SMS, WhatsApp, and Viber. Benefit from the reduced cost of digital channels for service messages, guarantee delivery with automatic failover, and enable two-way real-time communication to exceed customer expectations with quick, reliable, and relevant interactions.</p>
        </div>
    </div>
</section>
<section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Provide Better Service at Scale</h3>
                <p>Introduce automation to enhance your service and scale your operations efficiently. Ensure the same quality of service through demand peaks with AI-driven solutions.</p>
            </div>
        </div>

        <?php $items = [
            [
                'description' => 'Automated employee onboarding and authentication with chatbots.'
            ],
            [

                'description' => '24/7 customer service and issue resolution with chatbots.'
            ],
            [
                'description' => 'Timely reminders, notifications, and alerts.'
            ],
            [
                'description' => 'Scalable operations with AI to maintain service quality.'
            ],
            [
                'description' => 'Exceptional Service and Customer Experience.'
            ]

        ];
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-column flex-lg-row gap-3 pb-5 position-relative z-1 color-pink">
                    <?php foreach ($items as $item) : ?>
                        <div class="boxed d-flex align-items-center w-100">
                            <p><?= $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>


    </div>
</section>
<section class="py-5 bg-black color-white position-relative overflow-hidden">
    <img class="z-0 position-absolute start-0 bottom-0 mw-100" src="<?= get_template_directory_uri() ?>/assets/img/emblem-bg.webp" alt="">
    <div class="container">
        <div class="blurred-boxes mx-auto py-5 position-relative z-1">
            <div class="blurred-box">
                <h3>Create Exceptional Experiences</h3>
                <p>From booking to touch down and beyond, create exceptional experiences for your customers. Send immediate booking confirmations, provide conversational customer support on digital channels, keep travelers informed with pre-flight information, and send check-in and security reminders. Offer flight status updates and notifications, and send targeted upgrade and cross-sell promotions. </p>

                <div class="d-lg-flex justify-content-between">
                    <ul class="disc">
                        <li>Immediate booking confirmations.</li>
                        <li>Conversational customer support on digital channels.</li>
                        <li>Pre-flight information updates.</li>

                    </ul>
                    <ul class="disc">
                        <li>Check-in and security reminders.</li>
                        <li>Flight status updates and notifications.</li>
                        <li>Targeted upgrade and cross-sell promotions.</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="bg-white py-5">
    <div class="container my-4">
        <div class="row align-items-center pt-4">
            <div class="col-lg-6">
                <img class="mw-100" src="<?= get_template_directory_uri() ?>/assets/img/white-emblem.webp" alt="">
            </div>
            <div class="col-lg-6">
                <h3 class="mb-3 mt-4 mt-lg-0">
                    Personalized and Timely Communication
                </h3>
                <p>Support your business with secure, timely, and personalized communication for every use case. Privacy and security through number masking.</p>
                <ul class="disc">
                    <li><strong>Fast and reliable authentication with OTPs.</strong></li>
                    <li><strong>Real-time notifications and reminders.</strong></li>
                    <li><strong>Cost-effective digital channels for transactional messages.</strong></li>
                    <li><strong>Promotion and management of loyalty programs.</strong></li>
                    <li><strong>Collection of customer feedback and reviews.</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/contact-us"); ?>
<?php get_footer(); ?>