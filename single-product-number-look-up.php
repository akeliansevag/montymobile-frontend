<?php get_header(); ?>
<?php the_content(); ?>
<section class="bg-white py-5">
    <div class="container">

        <?php $items = [
            [
                'title' => 'Real-Time Verification',
                'description' => 'Verify the validity of phone numbers before sending messages.'
            ],
            [
                'title' => 'Cost & Time Efficiency',
                'description' => 'Save resources by ensuring messages are sent to active numbers.'
            ],
            [
                'title' => 'Accurate Delivery',
                'description' => 'Avoid delivery issues due to network changes or inactive numbers.'
            ],
            [
                'title' => 'Enhanced Communication',
                'description' => 'Improve overall communication effectiveness with reliable number validation.'
            ]

        ];
        ?>
        <div class="d-flex flex-column flex-lg-row gap-3 pb-5">
            <?php foreach ($items as $item) : ?>
                <div class="boxed w-100">
                    <h4 class="red"><?= $item['title']; ?></h4>
                    <p><?= $item['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<section class="bg-white">
    <div class="black-red">
        <div class="container-padding-left">
            <h5 class="mb-4">Monty Mobile’s Number Lookup service offers a range of features designed to enhance your messaging efficiency</h5>
            <h3>Global Operator Network Access</h3>
            <ul class="disc mt-3">
                <li>Benefit from our extensive relationships with mobile operators worldwide, ensuring accurate message delivery to the intended networks.</li>
            </ul>

            <h3>Cost-Effective Verification</h3>
            <ul class="disc mt-3">
                <li>Verify virtual numbers at a low cost, reducing wasted messaging expenses.</li>
            </ul>

            <h3>Detailed Number Information</h3>
            <ul class="disc mt-3">
                <li>Obtain crucial details such as IMSI, MSC, MCC, MNC, and network name.</li>
            </ul>

            <h3>Fraud Prevention</h3>
            <ul class="disc mt-3">
                <li>Protect against network scams with our advanced verification features.</li>
            </ul>

        </div>
        <div class="container-padding-right">
            <h5 class="mb-4"><br /><br /></h5>
            <h3>Direct Customer Interaction</h3>
            <ul class="disc black mt-3">
                <li>Enjoy a seamless experience with no third-party interference.</li>
            </ul>

            <h3>24/7 Technical Support</h3>
            <ul class="disc black mt-3">
                <li>Access round-the-clock assistance through our online portal.</li>
            </ul>

            <h3>High-Speed Lookups</h3>
            <ul class="disc black mt-3">
                <li>Perform over 1,000 queries per second with protocols like HTTPS (JSON) and ENUM.</li>
            </ul>

            <h3>Accurate and Redundant Service</h3>
            <ul class="disc black mt-3">
                <li>Experience high availability and precision with fully redundant systems.</li>
            </ul>
        </div>
    </div>
</section>

<section class="py-5 bg-white color-white position-relative">
    <img class="z-0 mw-100 position-absolute start-0 bottom-0" src="<?= get_template_directory_uri() ?>/assets/img/left-dots.webp" alt="">
    <img class="z-0 mw-100 position-absolute end-0 top-0" src="<?= get_template_directory_uri() ?>/assets/img/right-dots.webp" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 color-black">
                <h3>Versatile Use Cases for Number Lookup</h3>
                <p>Monty Mobile’s Number Lookup service is versatile, offering a range of applications to optimize your communication strategy.</p>
            </div>
        </div>
        <div class="pink-boxes">
            <div class="pink-box">
                <h3>Real-Time MSISDN Information</h3>
                <ul class="disc black">
                    <li>Access real-time routing information for improved efficiency in message delivery</li>
                </ul>
            </div>
            <div class="pink-box">
                <h3>Revenue Leakage Prevention</h3>
                <ul class="disc black">
                    <li>Avoid revenue loss by eliminating inefficiencies in ported-number routing.</li>
                </ul>
            </div>
        </div>
        <div class="pink-boxes three-columns">
            <div class="pink-box">
                <h3>Message Delivery Optimization</h3>
                <ul class="disc black">
                    <li>Ensure messages reach the correct recipients by verifying numbers before sending, reducing bounce rates.</li>
                </ul>
            </div>
            <div class="pink-box">
                <h3>Cost-Effective Routing Decisions</h3>
                <ul class="disc black">
                    <li>Make informed routing choices based on accurate number data, lowering costs associated with incorrect routing.</li>
                </ul>
            </div>

            <div class="pink-box">
                <h3>Ported-Number Management</h3>
                <ul class="disc black">
                    <li>Enhance the accuracy of your number management by identifying ported numbers and their current operators.</li>
                </ul>
            </div>
        </div>
        <div class="pink-boxes">
            <div class="pink-box">
                <h3>Enhanced Service Coverage</h3>
                <ul class="disc black">
                    <li>Broaden your service reach with reliable number verification across various networks.</li>
                </ul>
            </div>

            <div class="pink-box">
                <h3>Increased Profits</h3>
                <ul class="disc black">
                    <li>Boost your profitability by improving delivery success rates and reducing operational costs.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/contact-us"); ?>
<?php get_footer(); ?>