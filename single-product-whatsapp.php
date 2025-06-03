<?php get_header(); ?>
<?php the_content(); ?>
<section class="bg-white py-5">
    <div class="container">
        <div class="boxed w-75-p mx-auto wide-padding">
            <h3>Transform Customer Journeys with WhatsApp</h3>
            <p>Empower your business with secure interactions, 24/7 support, and tailor-made customer journeys using the world’s most popular messaging app.</p>
            <div class="red-separator"></div>
            <p><strong><span class="color-pink">Experience the Best:</span></strong> Join 1,000+ global brands that trust WhatsApp powered by MontyMobile.</p>
        </div>
    </div>
</section>
<section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Seamless and Reliable Messaging</h3>
                <p>Deliver meaningful interactions on WhatsApp with easy-to-use automation and consistent customer support.</p>
            </div>
        </div>

        <?php $items = [
            [
                'title' => 'High Engagement',
                'description' => '99% of chatbot and customer service interactions on our platform occur on WhatsApp.'
            ],
            [
                'title' => 'Rapid Growth',
                'description' => 'Witness an 85% increase in B2C interactions over a year on our platform.'
            ],
            [
                'title' => 'Global Reach',
                'description' => 'Connect with 2.44 billion active WhatsApp users worldwide.'
            ]

        ];
        ?>
        <div class="row">
            <div class="col-lg-7">
                <div class="d-flex flex-column flex-lg-row gap-3 pb-5 position-relative z-1">
                    <?php foreach ($items as $item) : ?>
                        <div class="boxed w-100">
                            <h4 class="red"><?= $item['title']; ?></h4>
                            <p><?= $item['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5 position-relative">
                <img class="z-0 mw-100 position-absolute bottom-0" src="<?= get_template_directory_uri() ?>/assets/img/big-emblem.webp" alt="">
            </div>
        </div>


    </div>
</section>
<section class="bg-white">
    <div class="black-red">
        <div class="container-padding-left">
            <h3>Unified Customer Interaction</h3>
            <p>Design and implement any use case, from marketing to support, on a single, integrated platform.</p>
            <ul class="disc mt-3">
                <li><strong>Conversational Marketing:</strong> Engage your audience with personalized promotions and marketing campaigns.</li>
                <li><strong>Conversational Commerce:</strong> Guide customers through their purchasing journey with interactive messages.</li>
                <li><strong>Conversational Support:</strong> Provide exceptional customer service with quick, reliable support on WhatsApp.</li>
            </ul>

        </div>
        <div class="container-padding-right">
            <h3>Maximize Marketing Impact</h3>
            <p>Enhance your ROI by sending engaging and targeted marketing messages.</p>
            <ul class="disc black mt-3">
                <li><strong>Tailored Promotions:</strong> Send personalized offers to boost customer engagement.</li>
                <li><strong>Campaign Management:</strong> Launch and manage marketing campaigns with ease.</li>
                <li><strong>Product Announcements:</strong> Keep customers informed with updates on new products.</li>
            </ul>
        </div>
    </div>
</section>
<section class="bg-white py-5">
    <div class="container py-5">
        <h3 class="text-center mb-3">Comprehensive Customer Engagement</h3>
        <p class="text-center">Leverage Monty Mobile’s solutions to optimize your WhatsApp communications.</p>
        <?php $items = [
            [
                'title' => 'WhatsApp Templates',
                'description' => 'Design and deploy predefined message templates and campaigns effortlessly.'
            ],
            [
                'title' => 'Customers',
                'description' => 'Build detailed customer profiles using valuable insights and data.'
            ],
            [
                'title' => 'Inbox',
                'description' => 'Manage multiple conversations seamlessly with our customer care.'
            ],
            [
                'title' => 'Chatbot',
                'description' => 'Develop AI-driven chatbots for faster and more efficient customer support.'
            ]

        ];
        ?>
        <div class="mm-grid two-columns">
            <?php foreach ($items as $item) : ?>
                <div class="boxed wide-padding d-flex justify-content-center align-items-center">
                    <div>
                        <h3><?= $item['title'] ?></h3>
                        <p><?= $item['description'] ?></p>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<section class="bg-black color-white py-5 position-relative">
    <img class="mw-100 position-absolute start-0 bottom-0" src="<?= get_template_directory_uri() ?>/assets/img/left-dots.webp" alt="">
    <img class="mw-100 position-absolute end-0 top-0" src="<?= get_template_directory_uri() ?>/assets/img/right-dots.webp" alt="">
    <div class="container py-5">
        <h3 class="mb-3 w-75-p">Delight your customers with dynamic WhatsApp messaging features to enhance interactions and boost satisfaction.</h3>
        <div class="mm-grid two-columns">
            <div>
                <ul class="disc">
                    <li><strong>Transactional Messaging:</strong> Facilitate seamless transactions directly within WhatsApp, ensuring convenient purchasing experiences.</li>
                    <li><strong>Workflow Automation:</strong> Automate processes with interactive menus, streamlining navigation and resolving queries swiftly.</li>
                    <li><strong>Standardized Notifications:</strong> Maintain consistency and compliance with standardized message templates, optimizing communication efficiency.</li>
                </ul>
            </div>
            <div>
                <ul class="disc">
                    <li><strong>Dynamic Updates:</strong> Keep customers informed with real-time updates on product information changes and promotional offers.</li>
                    <li><strong>Product Showcase:</strong> Effectively showcase products with detailed descriptions and compelling visuals, driving direct sales through WhatsApp.</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<section class="bg-white py-5">
    <div class="container my-4">
        <div class="row align-items-center pt-4">
            <div class="col-lg-6">
                <img class="mw-100" src="<?= get_template_directory_uri() ?>/assets/img/emblem.webp" alt="">
            </div>
            <div class="col-lg-6">
                <h3 class="mb-3 mt-4 mt-lg-0">
                    Easy Implementation and Automation
                </h3>
                <p>Create customer journeys and workflows effortlessly with our user-friendly tools.</p>
                <ul class="disc">
                    <li><strong>Drag-and-Drop Interface:</strong> Build workflows without any coding required.</li>
                    <li><strong>Automated Responses:</strong> Set up automatic replies to common customer queries.</li>
                    <li><strong>Event-Triggered Messages:</strong> Send messages based on customer actions and behaviors.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-black color-white position-relative">
    <img class="z-0 position-absolute start-0 bottom-0 mw-100" src="<?= get_template_directory_uri() ?>/assets/img/emblem-bg.webp" alt="">
    <div class="container">
        <div class="blurred-boxes py-5 position-relative z-1">
            <div class="blurred-box">
                <h3>Automate and Enhance Interactions</h3>
                <p>Utilize the WhatsApp Business Platform API to automate messaging, send notifications, receive customer inquiries in real time, and enhance overall customer experience.</p>
                <ul class="disc">
                    <li><strong>Start Your Trial:</strong> Experience the benefits of two-way communication on WhatsApp with our trial version, allowing you to easily send and receive messages, use predefined buttons, and share rich media.</li>
                    <li><strong>API Documentation:</strong> Access comprehensive documentation to guide you through setting up and optimizing the WhatsApp API for your business needs.</li>
                </ul>
            </div>
            <div class="blurred-box">
                <h3>Advanced Capabilities</h3>
                <p>Maximize the potential of WhatsApp for Business with these advanced API features.</p>
                <ul class="disc">
                    <li><strong>Pre-Approved Templates:</strong> Use pre-approved message templates for consistent communication, such as order confirmations, shipping updates, and appointment reminders.</li>
                    <li><strong>Automated Workflows:</strong> Set up automated messaging workflows to handle common inquiries, including FAQs, product information, and support requests.</li>
                    <li><strong>Personalized Messaging:</strong> Target specific customer segments with personalized messages based on location, interests, and purchase history, enhancing engagement.</li>
                    <li><strong>Performance Analytics:</strong> Analyze messaging performance and customer engagement with built-in analytics and reporting tools available in the People CDP through Conversations API.</li>
                </ul>
            </div>
            <div class="blurred-box">
                <h3>Create Engaging Customer Experiences</h3>
                <p>Harness the capabilities of the WhatsApp API to build conversational experiences and deliver exceptional support.</p>
                <ul class="disc">
                    <li><strong>Seamless Messaging:</strong> Send and receive messages effortlessly, integrating predefined buttons and rich media to engage your customers.</li>
                    <li><strong>Omni-Channel Integration:</strong> Combine WhatsApp with other applications and channels to provide a unified and efficient customer support experience using our Conversations API.</li>
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
            <div class="pink-box first-item">
                <h3>Enhance Customer Journeys</h3>
                <p>Discover how to leverage the WhatsApp Business Platform to streamline customer interactions and boost satisfaction.</p>
                <div class="mm-grid two-columns">
                    <div>
                        <ul class="disc black">
                            <li><strong>Promotional Campaigns:</strong> Engage customers with tailored promotions and exclusive deals, driving higher conversion rates.</li>
                            <li><strong>In-App Ordering:</strong> Facilitate seamless order placements directly within WhatsApp, keeping customers engaged on a single platform.</li>
                            <li><strong>Customer Feedback:</strong> Collect valuable insights through engaging WhatsApp surveys, leveraging the app’s popularity for higher response rates.</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="disc black">
                            <li><strong>Status Updates:</strong> Keep customers informed with real-time notifications and alerts, ensuring they stay updated on important matters.</li>
                            <li><strong>Appointment Scheduling:</strong> Simplify booking processes and automate appointment scheduling, enhancing efficiency and customer convenience.</li>
                            <li><strong>Secure Authentication:</strong> Verify user identity with one-time pins (OTPs) sent via WhatsApp, offering a convenient and secure authentication method.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pink-box">
                <h3>Marketing Integration</h3>
                <p>Maximize the impact of your marketing efforts by using WhatsApp for targeted promotions and customer engagement.</p>
                <ul class="disc black">
                    <li><strong>Special Promotions:</strong> Send personalized offers and discounts to boost customer interest and drive sales.</li>
                    <li><strong>Product Highlights:</strong> Showcase new arrivals and featured products to encourage purchases and enhance customer awareness.</li>
                </ul>
            </div>
            <div class="pink-box">
                <h3>Sales Optimization</h3>
                <p>Streamline sales processes and improve customer satisfaction through efficient communication channels.</p>
                <ul class="disc black">
                    <li><strong>Order Confirmations:</strong> Provide instant confirmations and updates on orders to keep customers informed and satisfied.</li>
                    <li><strong>Lead Generation:</strong> Use WhatsApp to nurture leads with personalized messages and prompt responses, improving conversion rates.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/contact-us", null, ['type' => 'whatsapp']); ?>
<?php get_footer(); ?>