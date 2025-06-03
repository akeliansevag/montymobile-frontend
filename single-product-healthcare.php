<?php get_header(); ?>
<?php the_content(); ?>

<section class="bg-white py-5">
    <div class="black-red style-two py-5">
        <div class="container-padding-left">
            <div>
                <h2>Scale Patient Communication</h2>
                <ul class="disc mt-3">
                    <li>Leverage automated, omnichannel communication solutions to deliver a fast, convenient patient experience in person and at home. By using a single platform, healthcare providers can ensure consistent and efficient communication across multiple channels.</li>
                    <li>Provide superior healthcare with easy-to-use communication solutions that boost efficiency and cut costs. Digitalizing patient interactions improves service delivery and reduces operational expenses.</li>
                </ul>
            </div>

        </div>
        <div class="container-padding-right">
            <h2>Enhance Patient Engagement</h2>
            <ul class="disc mt-3">
                <li>Reduce patient wait times and minimize missed appointments with automated reminders and easy rescheduling options. Personalized, convenient communication improves overall patient satisfaction and ensures timely responses.</li>
                <li>Increase efficiency by automating routine tasks, allowing healthcare professionals to focus more on patient care. Reducing workloads enables staff to spend more time with patients and less on manual administrative tasks.</li>
            </ul>
        </div>
    </div>
</section>

<section class="py-5 bg-black color-white position-relative overflow-hidden">
    <img class="z-0 position-absolute start-0 bottom-0 mw-100" src="<?= get_template_directory_uri() ?>/assets/img/emblem-bg.webp" alt="">
    <div class="container">
        <div class="blurred-boxes mx-auto py-5 position-relative z-1">
            <div class="blurred-box">
                <h3>Key Features</h3>
                <p>By integrating these features, healthcare providers can ensure a seamless, efficient, and personalized experience
                    for patients. This approach improves patient outcomes and satisfaction while reducing operational costs.</p>

                <div class="d-lg-flex justify-content-between">
                    <ul class="disc">
                        <li>Set up automated reminders for appointments, medication, and more </li>
                        <li>Provide proactive notifications about test results, prescriptions, and doctor availability. </li>
                        <li>Share documents, videos, and other materials to welcome new patients and educate them on treatment plans.</li>
                        <li>Offer self-service options using chatbots to handle FAQs and connect patients via chat, video, or voice calls. </li>

                    </ul>
                    <ul class="disc">
                        <li>Enable remote appointments through video calls to reduce wait times and optimize doctor schedules. </li>
                        <li>Provide 24/7 support with virtual assistants that can transfer to live agents when necessary. </li>
                        <li>Streamline administration management by allowing patients to pay bills, check appointments, and follow up on medication refills all in one place.</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>


<?php get_template_part("template-parts/contact-us"); ?>
<?php get_footer(); ?>