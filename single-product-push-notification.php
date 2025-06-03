<?php get_header(); ?>
<?php the_content(); ?>
<section class="bg-white py-5">
    <div class="container">
        <div class="boxed w-75-p mx-auto wide-padding">
            <h3>Boost Engagement</h3>
            <p>Push notifications are essential for driving app re-engagement. Whether it’s a breaking news alert, a game update, or a response from a social platform, push notifications keep users connected and informed. Monty Mobile’s push notification service helps you enhance conversions and build loyalty.</p>
        </div>
    </div>
</section>
<section class="bg-white py-5 position-relative">
    <img class="z-0 mw-100 position-absolute top-0 end-0" src="<?= get_template_directory_uri() ?>/assets/img/right-dots.webp" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Types of Push Notifications</h3>
                <p>Monty Mobile’s platform supports iOS, Android, and other mobile devices, allowing you to send eye-catching notifications across various platforms effortlessly.</p>
            </div>
        </div>

        <?php $items = [
            [
                'title' => 'Informational Alerts',
                'description' => 'Notify users about new features, special offers, or exclusive trials. For example, let them know about a holiday discount or an upcoming event.'
            ],
            [
                'title' => 'User Mentions',
                'description' => 'Keep users engaged by notifying them when their username is mentioned in a thread or when they receive direct messages through your app.'
            ],
            [
                'title' => 'Event-Triggered',
                'description' => 'Build loyalty by sending notifications triggered by specific events, such as package shipments, ride arrivals, flight delays, or bill due dates.'
            ],
            [
                'title' => 'Reminder Notifications',
                'description' => 'Send personalized messages to users who haven’t completed their profile or left items in their shopping cart, encouraging them to return.'
            ]

        ];
        ?>
        <div class="row">
            <div class="col-lg-9">
                <div class="d-flex flex-column flex-lg-row gap-3 pb-5 position-relative z-1">
                    <?php foreach ($items as $item) : ?>
                        <div class="boxed w-100">
                            <h4 class="red"><?= $item['title']; ?></h4>
                            <p><?= $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 position-relative">

            </div>
        </div>


    </div>
</section>

<section class="py-5 bg-black color-white position-relative overflow-hidden">
    <img class="z-0 position-absolute start-0 bottom-0 mw-100" src="<?= get_template_directory_uri() ?>/assets/img/emblem-bg.webp" alt="">

    <div class="container">
        <h4 class="position-relative z-1 w-75-p">Monty Mobile’s feature-rich push notification service equips you with the tools to create engaging, personalized, and effective communications, ensuring your messages reach the right users at the right time.</h4>
        <div class="blurred-boxes py-5 position-relative z-1">
            <div class="blurred-box">
                <h3>Personalized Messaging</h3>

                <ul class="disc">
                    <li>Automate and deliver tailored messages based on real-time user behavior, preferences, and engagement across multiple channels. Create a personalized experience for each user, increasing relevance and engagement.</li>

                </ul>
            </div>
            <div class="blurred-box">
                <h3>Advanced Analytics</h3>
                <ul class="disc">
                    <li>Leverage industry-leading event tracking to monitor user interactions and drive goal-oriented results. Gain valuable insights into user behavior and the effectiveness of your campaigns, enabling data-driven decision-making for continuous improvement.</li>

                </ul>
            </div>
            <div class="blurred-box">
                <h3>Powerful API Integration</h3>
                <ul class="disc">
                    <li>Utilize Monty Mobile’s robust API to send personalized messages at scale. Develop effective customer engagement strategies by integrating our API into your system, ensuring seamless and dynamic communication with your users.</li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white color-white position-relative">
    <img class="z-0 mw-100 position-absolute start-0 bottom-0" src="<?= get_template_directory_uri() ?>/assets/img/left-dots.webp" alt="">
    <img class="z-0 mw-100 position-absolute end-0 top-0" src="<?= get_template_directory_uri() ?>/assets/img/right-dots.webp" alt="">
    <div class="container">
        <div class="pink-boxes py-5">
            <div class="pink-box">
                <h3>eCommerce Reminders</h3>

                <ul class="disc black">
                    <li>Send reminders about abandoned carts and notify buyers about trending items. In-app messaging can boost conversion rates significantly.</li>
                </ul>
            </div>
            <div class="pink-box">
                <h3>Personalized Offers</h3>

                <ul class="disc black">
                    <li>Provide personalized discounts or special prizes to users to enhance retention. Incentivize them to return and create a lasting impression.</li>
                </ul>
            </div>
            <div class="pink-box">
                <h3>App Ratings</h3>
                <ul class="disc black">
                    <li>Encourage users to rate your app positively when they have a good experience. Improve your app store ranking and accumulate 5-star reviews.</li>
                </ul>
            </div>
            <div class="pink-box">
                <h3>Optimal Timing for Increased Engagement</h3>
                <ul class="disc black">
                    <li>Create customized journeys to send relevant messages based on user attributes or behavior. For instance, schedule a follow-up message 24 hours after app download, or use Intelligent Delivery to leverage machine learning for higher click-through rates.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/contact-us"); ?>
<?php get_footer(); ?>