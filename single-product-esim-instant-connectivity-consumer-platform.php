<?php get_header(); ?>
<?php the_content(); ?>
<section class="py-5 bg-white">
    <div class="container">
        <div class="map-bg">
            <img class="map-img" src="<?= get_template_directory_uri() ?>/assets/img/esim/world-map.svg" alt="Map">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 mt-4 mt-lg-0">
                    <img class="esim-mobile-img" src="<?= get_template_directory_uri() ?>/assets/img/esim/phone.webp" alt="Mobile">
                </div>
                <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column gap-2">
                    <h2>Connect Instantly, Manage Effortlessly with our Instant-Connectivity Platform.</h2>
                    <div class="d-flex flex-column flex-lg-row gap-3">
                        <img style="max-width: 95px;" src="<?= get_template_directory_uri() ?>/assets/img/esim/esim-simcard.svg" alt="eSIM Simcard">
                        <p class="m-0">Consumer eSIM places subscribers at the heart of convenience. By eliminating the need for physical SIM cards, users can activate or modify mobile plans without manual SIM swaps. This not only reduces delays but also empowers subscribers to easily switch between service providers or packages, promoting a seamless, global mobile experience.</p>
                    </div>

                    <div class="d-flex flex-column flex-lg-row gap-3">
                        <p class="order-2 order-lg-1 m-0">Our RSP (Remote Sim Provisioning) portal provides mobile operators with a multitude of benefits, streamlining operations and enhancing customer satisfaction. By leveraging the portal, operators can efficiently manage eSIM profile inventory, ensuring timely distribution and activation without the logistical challenges of physical SIM cards.</p>
                        <img style="max-width: 70px;" class="order-1 order-lg-2" src="<?= get_template_directory_uri() ?>/assets/img/esim/remote-sim.svg" alt="Remote SIM">
                    </div>

                    <div class="border-box mt-4">
                        <p>
                            The portal’s comprehensive logs and reports offer valuable insights into transaction patterns and potential issues, enabling proactive troubleshooting and continuous service improvement.
                        </p>
                        <p class="m-0">
                            Additionally, the portal’s robust security features ensure data protection and compliance with regulatory standards. Overall, the RSP customer portal is an indispensable tool for operators, driving operational efficiency, reducing costs, and delivering a superior, hassle-free experience to subscribers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black color-white position-relative overflow-hidden">
    <img class="z-0 position-absolute start-0 bottom-0 mw-100" src="<?= get_template_directory_uri() ?>/assets/img/emblem-bg.webp" alt="">
    <div class="container">
        <div class="blurred-boxes max-w-1000 mx-auto py-5 position-relative z-1">
            <div class="blurred-box">
                <h3>Certifications and Accreditations</h3>
                <p>Monty Mobile has been recognized and accredited by several esteemed organizations, ensuring its commitment to superior quality and utmost security. The company holds the GSMA’s Security Accreditation Scheme (SAS) certification, endorsing it as an approved provider for the safe production and data personalization of eSIMs in the consumer market.</p>
                <p>
                    Key certifications held by Monty Mobile include:
                </p>

                <div class="d-lg-flex justify-content-between">
                    <ul class="disc">
                        <li><strong>GSMA SAS-SM </strong><br /> Certification, Affirming Its Credibility In Secure ESIM Management</li>
                        <li><strong>ISO 27001 </strong><br /> Certification, Validating Its Commitment To Information Security</li>
                    </ul>
                    <ul class="disc">
                        <li><strong>ISO 9001 </strong><br /> Certification, Underscoring Its Adherence To Quality Management Standards</li>
                        <li><strong>TCA </strong><br /> Trusted Connectivity Alliance Member since February 2024</li>
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
                    Instant Benefits
                </h3>
                <ul class="disc">
                    <li>Management Portal to manage eSIM lifecycle efficiently and to provide inventory management.</li>
                    <li>Multi-tenancy to manage enterprises and more than one sales channel.</li>
                    <li>Security, the platform must be GSMA SAS-SM certified.</li>
                    <li>Compatibility and Interoperability.</li>
                    <li>Security and Compliance.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black color-white position-relative overflow-hidden">
    <img class="w-100 h-100 z-0 mw-100 position-absolute top-0 object-fit-cover" src="<?= get_template_directory_uri() ?>/assets/img/redpattern.webp" alt="">
    <div class="container">
        <div class="blurred-boxes mx-auto py-5 position-relative z-1">
            <div class="blurred-box max-w-650">
                <h3>eSIM Customer Portal</h3>
                <p>Our customer portal offers a convenient and efficient way to instantly manage your subscribers’ connectivity needs effortlessly, allowing you
                    to view and track your transactions, access key metrics, profile logs,
                    and reports. </p>

            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Provide a seamless and fully digitized customer journey
                    through a sophisticated portal that will allow you to: </h2>
            </div>
        </div>


        <div class="mt-4 d-lg-flex justify-content-between">
            <ul class="disc">
                <li>Track key metrics, profiles, profile logs and report information.</li>
                <li>Export all type of reports.</li>
                <li>Optionally print physical QR vouchers or deliver by email.</li>
            </ul>
            <ul class="disc">
                <li>Troubleshoot customer complaints.</li>
                <li>Provisioning APIs.</li>
                <li>Reveal details related to eSIM compliant devices, billing and financial management.</li>
            </ul>


        </div>
        <div class="row">
            <div class="col-lg-8">
                <p>
                    Gain real-time insights into various transactions, such as profile activations, deactivations..
                    Users can access detailed logs based on Different filtering criteria such as ICCID, MSISDN and EID.
                </p>
            </div>
        </div>

    </div>
</section>
<?php get_template_part("template-parts/contact-us"); ?>
<?php get_footer(); ?>