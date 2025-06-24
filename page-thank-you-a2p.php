<?php get_header(); ?>
<style>
    body {
        background-color: white;
    }

    #wrapper {
        margin: 0;
    }

    .logo-pattern {
        position: absolute;
        top: 0;
        right: 0;
        z-index: -1;
        max-width: 45%;
    }

    .thank-you-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        gap: 50px;
        padding: 50px 0;
    }

    .thank-you-banner {
        max-width: 100%;
    }

    .mm-emblem {
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -1;
    }
</style>
<div class="container">
    <div class="thank-you-section">
        <img class="d-none d-md-block logo-pattern" src="<?= get_template_directory_uri() ?>/assets/img/logo-pattern.webp" alt="logo Pattern">
        <img class="d-none d-md-block mm-emblem" src="<?= get_template_directory_uri() ?>/assets/img/monty-emblem.webp" alt="Monty Mobile Emblem">
        <div>
            <img class="mm-logo" src="<?= get_template_directory_uri() ?>/assets/img/monty-mobile-logo.webp" alt="Monty Mobile Logo">
        </div>
        <div>
            <img class="thank-you-banner" src="<?= get_template_directory_uri() ?>/assets/img/thank-you-banner.webp" alt="Thank you banner">
        </div>
        <div class="text-center">
            <h1>Thank You!</h1>
            <p class="mb-0">Your submission has been received successfully.<br />
                We appreciate your interest and will get back to you shortly.</p>
        </div>

        <div>
            <a href="<?= get_home_url() ?>" class="mm-button">GO TO HOMEPAGE</a>
        </div>
    </div>
</div>




<?php get_footer(); ?>