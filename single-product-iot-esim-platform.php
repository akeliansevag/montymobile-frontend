<?php get_header(); ?>
<?php the_content(); ?>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6">
                <h2>Embrace the IoT Technology</h2>
            </div>
            <div class="col-lg-6">
                <p>With global coverage through our partner network and tailored solutions for Mobile Operators, OEMs, and Service Providers, we empower your success in the interconnected world of IoT.</p>
                <p>
                    Designed to address the shortcomings of previous provisioning standards, this specification offers enhanced adaptability for IoT deployments. Committed to technological excellence, this development delivers increased flexibility, scalability, and compatibility to clients.
                </p>
            </div>
        </div>

        <div class="row pt-5 mt-5">
            <div class="col-lg-6">
                <h2>The eSIM IoT of the Future</h2>
                <p>The initial potential of eSIM promised a dynamic future for connected devices.
                    However, existing standards, notably the M2M and Consumer eSIM standards, presented challenges in IoT deployments and were not suitable for a wide range
                    of devices. The industry needed a refined standard.</p>
            </div>
            <div class="col-lg-6"> </div>
        </div>

        <div class="row align-items-center pt-4">
            <div class="col-lg-6">
                <img class="mw-100" src="<?= get_template_directory_uri() ?>/assets/img/esim/iot-emblem.webp" alt="IoT">
            </div>
            <div class="col-lg-6">
                <p>In response to the industry’s call, GSMA introduced SGP.32. This technical specification, tailored for IoT devices with network constraints or without user interfaces, brings substantial enhancements. Central to this system is the SM-DP+ an integral component operated by eSIM providers. In conjunction with the IoT Profile Assistant (IPA) and the eSIM IoT Remote Manager (eIM), the SGP.32 solution aims to optimize profile management and connectivity.</p>
                <h3 class="mb-3 mt-4 mt-lg-0">
                    Features:
                </h3>
                <ul class="disc">
                    <li><strong>Simplified Integration:</strong> Through the SM-DP+, consistent interactions between devices and their managers are ensured.</li>
                    <li><strong>Enhanced Flexibility:</strong> The system supports effortless transitions between connectivity providers.</li>
                    <li><strong>Broad Applicability:</strong> The adaptation of SGP.32 caters to a wide range of IoT devices, regardless of network or UI limitations.</li>
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
                <h3>Potential Impact and the Role of new IoT standards</h3>
                <p>The introduction of the SGP.32 standard is expected to bring significant advancements to the existing M2M specifications, particularly SGP.02. However, it is unlikely to completely replace the older M2M specifications in the near term. Instead, SGP.32 will coexist with SGP.02, providing a pathway for gradual transition and offering enhanced capabilities that complement and extend the functionalities of the older standard.</p>

            </div>

        </div>
    </div>
</section>
<section class="bg-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>What Are the Improvements of This New Standard?</h2>
                <p>The new IoT eSIM standard brings notable advancements compared to the existing M2M eSIM standard, predominantly utilized in the IoT and M2M sectors.</p>
                <p>A key enhancement is the removal of the SM-SR lock-in issue present in the M2M standard. With the IoT eSIM standard, devices can communicate with any SM-DP+ without needing pre-configured integrations, thus eliminating the need for technical integrations between network operators. This change allows for the initiation of profile downloads without vendor lock-in.</p>
            </div>
            <div class="col-lg-6">
                <img class="mw-100" src="<?= get_template_directory_uri() ?>/assets/img/esim/iot-1.webp" alt="IoT">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <img class="mw-100" src="<?= get_template_directory_uri() ?>/assets/img/esim/iot-2.webp" alt="IoT">
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <p>Additionally, unlike the M2M eSIM standard, the new IoT eSIM standard does not require SMS to complete profile downloads. This feature is particularly beneficial for network-constrained IoT devices, such as those using NB-IoT, which may lack SMS capabilities. The new standard supports a broader range of protocols to accommodate various device categories.</p>
                <p>
                    While SGP.32 will introduce significant enhancements and may eventually become the primary standard for M2M eSIM management, it is expected to coexist with SGP.02 for the foreseeable future. This coexistence allows for a flexible and gradual transition, ensuring that existing M2M deployments continue to function effectively while enabling the adoption of new and improved capabilities offered by SGP.32.</p>
            </div>
        </div>
    </div>
</section>
<?php get_template_part("template-parts/contact-us"); ?>
<?php get_footer(); ?>