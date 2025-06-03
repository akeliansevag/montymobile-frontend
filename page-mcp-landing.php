<?php get_header(); ?>
<style>
    .landing-wrapper {
        background-color: #000512;
        color: #ffffff;
        position: relative;
        z-index: 1;
    }

    .form-wrapper {
        width: 100%;
        padding: 30px;
        background-color: rgba(255, 255, 255, 0.67);
        border-radius: 10px;
        text-align: center;
    }

    #wrapper {
        margin-top: 30px;
    }

    .form-group p {
        margin: 0;
    }

    .form-elements {
        color: #000000;
    }

    .form-elements input[type='text'],
    .form-elements input[type='email'] {
        border-radius: 15px;
        border: none;
        width: 100%;
        padding: 5px 10px;
        margin-bottom: 5px;
    }

    .form-elements input[type='submit'] {
        background-color: var(--mmPink);
        color: white;
        border: 0;
        border-radius: 15px;
        padding: 5px 50px;
    }

    .form-elements input[type='submit']:hover {
        background-color: #000000;
    }

    .form-group {
        display: flex;
        gap: 10px;
    }

    .wpcf7-not-valid-tip {
        margin-top: 0;
        text-align: left;
    }

    .landing-item {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-bottom: 30px;
    }

    .landing-item img {
        width: 90px;
    }

    .landing-item h4 {
        color: var(--mmPink);
        font-weight: 600;
    }

    .landing-separator {
        background: rgb(255, 255, 255);
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(237, 33, 77, 1) 100%);
        width: 200px;
        height: 3px;
        margin: 0 auto;
    }

    .blue-background-image {
        position: absolute;
        top: 0;
        right: 0;
        z-index: -1;
        object-fit: cover;
        height: 80vh;
    }

    .red-background-image {
        position: absolute;
        bottom: 0;
        right: 0;
        height: 80vh;
        z-index: -1;
    }

    @media screen and (max-width: 767px) {
        .form-group {
            display: block;
        }

        .form-wrapper {
            margin-top: 20px;
        }
    }
</style>
<div class="landing-wrapper">
    <img class="blue-background-image" src="https://montymobile.com/wp-content/uploads/2024/06/MCP-Landing-page-Top-image.webp" alt="background image">
    <section class="py-3">
        <div class="container">
            <img width="200px" src="https://montymobile.com/wp-content/uploads/2024/06/montymobilelogo.png" alt="montymobile-logo" />
            <h1 class="mt-5">Welcome to Monty Communication Platform - CPaaS</h1>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5>
                        <strong>Unlock Extraordinary Customer
                            Engagement with our Omni-Engage Solution</strong><br />
                        Embrace a revolutionary all-in-one solution crafted to elevate your digital landscape while maximizing customer satisfaction.

                    </h5>
                    <h5 class="mt-5">
                        <strong>Seamless Communication Experience</strong> <br />
                        Embark on a journey of infinite possibilities with our CPaaS solution.
                    </h5>
                </div>
                <div class="col-md-6">
                    <div class="form-wrapper">
                        <h3>GET IN TOUCH</h3>
                        <div class="form-elements">
                            <!-- <?= do_shortcode('[contact-form-7 id="bb79e3f" title="MCP Landing"]') ?> LOCAL-->
                            <?= do_shortcode('[contact-form-7 id="de8c72c" title="MCP Landing"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 py-5">
        <?php
        $items = [
            [
                'icon' => 'https://montymobile.com/wp-content/uploads/2024/06/mcp-1.png',
                'title' => 'Amplify and Optimize',
                'description' => 'Elevate your customer experience to new heights'
            ],
            [
                'icon' => 'https://montymobile.com/wp-content/uploads/2024/06/mcp-4.png',
                'title' => 'Top-Tier Security',
                'description' => 'Protect your data with robust security measures'
            ],
            [
                'icon' => 'https://montymobile.com/wp-content/uploads/2024/06/mcp-2.png',
                'title' => 'Embrace Seamless Connections',
                'description' => 'Foster seamless interactions across all channels'
            ],
            [
                'icon' => 'https://montymobile.com/wp-content/uploads/2024/06/mcp-5.png',
                'title' => 'Forge Enduring Bonds',
                'description' => 'Cultivate lasting relationships with your customers'
            ],
            [
                'icon' => 'https://montymobile.com/wp-content/uploads/2024/06/mcp-3.png',
                'title' => 'Embody Immediacy',
                'description' => 'Respond promptly and effectively to customer inquiries'
            ],
        ];
        ?>
        <div class="container">
            <div class="row">
                <?php foreach ($items as $item) : ?>
                    <div class="col-md-6">
                        <div class="landing-item">
                            <div>
                                <img src="<?= $item['icon'] ?>" alt="icon">
                            </div>
                            <div>
                                <h4><?= $item['title'] ?>:</h4>
                                <h5><?= $item['description'] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="mt-5 pb-5">
        <div class="container">
            <div class="landing-separator"></div>
            <h5 class="text-center mt-4">With Monty Communication Platform every interaction is an opportunity for growth and success.</h5>

            <h5 class="text-center mt-5">Experience unparalleled customer engagement, maximize sales performance, and seize every opportunity with Monty Communication Platform.</h5>
        </div>

    </section>
    <img class="red-background-image" src="https://montymobile.com/wp-content/uploads/2024/06/MCP-Landing-page-design-red-color.webp" alt="Background image">
</div>
<?php get_footer(); ?>