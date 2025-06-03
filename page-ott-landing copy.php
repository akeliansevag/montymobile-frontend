<?php get_header(); ?>

<style>
    #wrapper {
        margin: 0;
    }

    a {
        color: var(--mmPink);
    }

    a:hover {
        text-decoration: underline;
    }

    .sign-up-section {
        background-color: white;
        display: flex;
        min-height: calc(100vh);
    }

    .sign-up-one {
        background-color: black;
        position: relative;
        flex: 1;
        border-top-right-radius: 70px;
        border-bottom-right-radius: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .sign-up-one img.hands-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 1;
    }

    .sign-up-one img.mm-emblem {
        position: absolute;
        width: 50%;
        bottom: 0;
        right: 0;
        z-index: 3;
    }

    .sign-up-content {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 70px;
        padding: 50px;
        width: 90%;
        height: 90%;
        position: relative;
        z-index: 2;
    }

    .sign-up-content .mm-logo {
        margin-bottom: 20px;
    }

    .sign-up-content p {
        font-size: 20px;
    }

    .sign-up-content ul {
        padding: 0;
        list-style-type: none;
        margin-top: 25px;
    }

    .sign-up-content ul li {
        margin-bottom: 20px;
        display: flex;
        gap: 15px;
        align-items: center;
        text-transform: uppercase;
    }

    .sign-up-two {
        background-color: white;
        position: relative;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    .sign-up-two img.logo-pattern {
        position: absolute;
        top: 0;
        right: 0;
        width: 80%;
        z-index: 0;
    }

    .sign-up-form-container {
        width: 80%;
        z-index: 1;
        position: relative;
    }

    .sign-up-form-container h2 {
        font-size: 38px;
        margin-bottom: 30px;
    }

    .sign-up-form input[type="text"],
    .sign-up-form input[type="email"],
    .sign-up-form input[type="submit"] {
        width: 100%;
    }

    .two-columns {
        display: flex;
        gap: 15px;
    }

    .sign-up-form .input-wrapper {
        width: 100%;
        margin-bottom: 20px;
    }

    .sign-up-form .input-wrapper.checkbox-wrapper {

        margin-bottom: 0;
    }

    .sign-up-form .input-wrapper label {
        margin: 5px;
    }

    .sign-up-form .input-wrapper input,
    .sign-up-form .input-wrapper select {
        border: 1px solid #9b9b9b;
        border-radius: 50px;
        padding: 10px;
        font-size: 14px;
        padding-left: 18px;
    }

    #signUpSubmit {
        background-color: var(--mmPink);
        color: white;
        border: none;
        border-radius: 50px;
        text-align: center;
        padding: 10px;
        font-size: 20px;
        line-height: normal;
        margin-top: 30px;
        font-weight: 600;
        padding-top: 13px;
        border: 2px solid var(--mmPink);
    }

    #signUpSubmit:disabled {
        background-color: #b7b7b7;
        border-color: #b7b7b7;
    }

    #signUpSubmit:disabled:hover {
        background-color: #b7b7b7;
        border-color: #b7b7b7;
        color: white;
    }

    #signUpSubmit:hover {
        background-color: #ffffff;
        color: var(--mmPink);
        border-color: var(--mmPink);
    }

    .grey-text {
        color: #9b9b9b;
        font-size: 14px;
    }

    .input-wrapper .grey-text {
        padding-top: 3px;
    }

    .error {
        color: red;
        font-size: 13px;
        margin: 5px 0 0 5px;
    }

    .input-wrapper input.error-border,
    .input-wrapper select.error-border {
        border-color: #d50000;
    }

    .sign-up-popup {
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 20;
        top: -100%;
        left: 0;
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.2s linear;
    }

    .sign-up-popup.open {
        top: 0;
        opacity: 1;
    }

    .sign-up-popup .sign-up-popup-content {
        width: 30%;
        border-radius: 50px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 30px;
        text-align: center;
        position: relative;
    }

    .sign-up-popup .sign-up-popup-content h2 {
        font-weight: bold;
    }

    .sign-up-popup .sign-up-popup-content p {
        font-size: 14px;
    }

    .sign-up-popup .sign-up-popup-content svg {
        margin-bottom: 20px;
    }

    .sign-up-popup.p-error #resend-container,
    .sign-up-popup.p-error #success-icon {
        display: none;
    }

    .sign-up-popup.p-error.with-resend #resend-container {
        display: block;
    }

    #resend-clock {
        font-size: 24px;
    }

    #resend-button {
        color: black;
        font-weight: bold;
        font-size: 20px;
        display: inline;
    }

    #resend-button.active {
        color: var(--mmPink);
    }

    #resend-button.active:hover {
        color: #000000;
        cursor: pointer;
    }

    #close-popup .cls-1 {
        fill: #000;
        stroke-width: 0px;

    }

    #close-popup svg {
        width: 25px;
        position: absolute;
        right: 20px;
        top: 20px;
    }

    #close-popup:hover {
        cursor: pointer;
    }

    #close-popup:hover .cls-1 {
        fill: var(--mmPink);
    }

    .loader-container {
        opacity: 0;
        margin-top: 8px;
        text-align: center;
    }

    .loader-container.active {
        opacity: 1;
    }

    #resend-loader {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 2px;
    }

    /* Hide the default checkbox */
    input[type="checkbox"] {
        display: none;
    }

    /* Style the label as a container */
    .checkbox-label {
        display: inline-flex;
        align-items: center;
        cursor: pointer;
    }

    /* Style the icons */
    .icon {
        width: 16px;
        /* Adjust size as needed */
        height: 16px;
        /* Adjust size as needed */
        fill: currentColor;
        /* Use current text color */
        margin-right: 4px;
        /* Adjust spacing between icon and label text */
    }

    /* Initially hide the checked icon */
    .checked {
        display: none;
    }

    /* Show checked icon when checkbox is checked */
    input[type="checkbox"]:checked+.checkbox-label .checked {
        display: inline-block;
    }

    /* Hide unchecked icon when checkbox is checked */
    input[type="checkbox"]:checked+.checkbox-label .unchecked {
        display: none;
    }

    .icon.unchecked use {
        fill: #000;
        /* Default fill color */
    }

    /* Change fill on hover */
    input[type=checkbox]:hover+.checkbox-label .icon.unchecked use {
        fill: #ed204c;
        /* New fill color on hover */
    }

    .input-wrapper select {
        background-color: transparent;
        width: 100%;
        color: #000;
        border: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: url("<?= get_template_directory_uri() ?>/assets/img/dropdown.svg") no-repeat;
        background-position: right 12px center;
        background-size: 25px;
    }

    select {
        color: gray;
        /* Default color for placeholder text */
    }

    /* Change the text color when a valid option is selected */
    select:not([value=""]) {
        color: black;
        /* Color for selected text */
    }

    .loader {
        width: 25px;
        height: 25px;
        border: 5px solid #000000;
        border-bottom-color: transparent;
        border-radius: 50%;
        display: inline-block;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    p.account {
        font-size: 13px;
    }

    @media only screen and (max-width:1399px) {
        .sign-up-content {
            width: 92%;
            height: 92%;
        }

        .sign-up-content p {
            font-size: 17px;
        }

        .sign-up-content ul li {
            margin-bottom: 17px;
        }
    }

    @media only screen and (max-width:992px) {
        .sign-up-section {
            flex-direction: column;
            min-height: auto;
        }

        .sign-up-one {
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            padding: 30px;
        }

        .sign-up-content {
            width: 100%;
            height: 100%;
        }

        .sign-up-popup .sign-up-popup-content {
            width: 70%;
        }
    }

    @media only screen and (max-width:768px) {
        .two-columns {
            flex-direction: column;
            gap: 0;
        }

        .sign-up-form-container {
            width: 100%;
        }
    }

    @media only screen and (max-width:576px) {
        .sign-up-content {
            padding: 25px;
        }

        .sign-up-content .mm-logo {
            margin-bottom: 20px;
        }

        .sign-up-content p {
            font-size: 22px;
        }

        .sign-up-popup .sign-up-popup-content {
            width: 90%;
        }
    }
</style>
<div id="sign-up-popup" class="sign-up-popup">
    <div class="sign-up-popup-content">
        <div id="close-popup">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 335.4 335.46">
                <path class="cls-1" d="M167.84,0C75.12.03-.03,75.16,0,167.79c.03,93.11,75.15,167.62,169.06,167.67,91.21.05,166.38-75.76,166.34-167.77C335.36,75.2,260.18-.03,167.84,0ZM167.26,311.58c-78.75-.07-143.17-64.75-143.13-143.73.04-79.83,64.67-143.92,145.01-143.8,78.36.11,142.64,65.09,142.46,144-.19,79.74-64.4,143.6-144.34,143.53Z" />
                <path class="cls-1" d="M151.34,168.04c-5.05-4.97-9.41-9.22-13.73-13.52-9.28-9.25-18.55-18.51-27.79-27.8-5.41-5.43-5.69-12.7-.76-17.64,4.92-4.93,12.2-4.65,17.63.77,12.64,12.6,25.25,25.22,37.84,37.87.95.96,1.62,2.21,2.55,3.51,1.68-1.57,2.68-2.45,3.63-3.39,13.06-13.05,26.1-26.14,39.19-39.16,4.33-4.3,9.79-5.13,14.72-2.46,4.79,2.6,7.42,7.84,5.89,13.29-.73,2.61-2.45,5.21-4.38,7.16-12.76,12.83-25.7,25.48-38.61,38.16-.88.87-1.98,1.51-3.18,2.41,1.33,1.43,2.12,2.35,2.98,3.2,13.32,13.15,26.66,26.28,39.98,39.44,3.69,3.64,5.12,7.95,3.33,12.96-1.7,4.77-5.21,7.55-10.22,8.18-4.28.54-7.69-1.29-10.67-4.29-12.93-13.01-25.93-25.95-38.87-38.96-.95-.96-1.6-2.22-2.76-3.86-2.32,2.48-3.88,4.23-5.52,5.9-12.25,12.46-24.51,24.91-36.78,37.34-3.54,3.59-7.81,4.92-12.66,3.36-4.54-1.46-7.26-4.76-8.05-9.45-.74-4.42,1-7.97,4.09-11.1,12.74-12.85,25.41-25.77,38.13-38.63,1.05-1.06,2.32-1.9,4.01-3.27Z" />
            </svg>
        </div>
        <svg id="success-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="83" height="80" viewBox="0 0 83 80">
            <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_516" data-name="Rectangle 516" width="83" height="80" fill="#ed204c" />
                </clipPath>
            </defs>
            <g id="Group_468" data-name="Group 468" transform="translate(0 0)">
                <g id="Group_470" data-name="Group 470" transform="translate(0 0)" clip-path="url(#clip-path)">
                    <path id="Path_436" data-name="Path 436" d="M83,39.06v1.956a8.452,8.452,0,0,1-3.623,5.117q-2.18,1.619-4.337,3.275c-1.479,1.131-1.387.8-.882,2.664a67.937,67.937,0,0,1,1.987,7.645,6.244,6.244,0,0,1-4.839,7.214,12.936,12.936,0,0,1-2.888.357c-2.024.015-4.052.041-6.076.011a1.148,1.148,0,0,0-1.3.932c-.19.648-.447,1.282-.681,1.916a53.563,53.563,0,0,1-2.478,6.285,5.974,5.974,0,0,1-6.98,3.054A22.179,22.179,0,0,1,48.032,78.4c-1.995-.954-3.576-2.527-5.446-3.666-1.259-.766-.948-.844-2.24.022-2.2,1.477-4.282,3.143-6.625,4.4a5.939,5.939,0,0,1-7.32-.943,9.1,9.1,0,0,1-2.064-3.378c-.8-2.1-1.588-4.218-2.321-6.348a1.318,1.318,0,0,0-1.471-1.039,59.489,59.489,0,0,1-6.877-.151,8.839,8.839,0,0,1-4.088-1.168c-2.262-1.485-3.151-3.946-2.536-7.022.523-2.616,1.409-5.132,2.116-7.7a1.124,1.124,0,0,0-.465-1.382c-2.1-1.617-4.271-3.146-6.233-4.941A6.577,6.577,0,0,1,0,39.811a6.152,6.152,0,0,1,1.768-4.086,55.069,55.069,0,0,1,6.771-5.552,1.362,1.362,0,0,0,.564-1.713,83.215,83.215,0,0,1-2.185-8.186,6.038,6.038,0,0,1,1.629-5.626,6.888,6.888,0,0,1,4.3-1.868c2.58-.309,5.179-.122,7.767-.284a1.413,1.413,0,0,0,1.515-1.113c.351-1.168.8-2.306,1.211-3.456a33.009,33.009,0,0,1,1.808-4.451A6.116,6.116,0,0,1,33.5.677a16.97,16.97,0,0,1,2.7,1.639c1.23.884,2.449,1.783,3.7,2.642,1.709,1.175,1.7,1.138,3.437-.044A57.025,57.025,0,0,1,49.712.751a5.769,5.769,0,0,1,6.266.589,7.559,7.559,0,0,1,2.463,3.272c.974,2.155,1.643,4.425,2.471,6.639.512,1.371.509,1.378,1.951,1.371a56.89,56.89,0,0,1,7.514.309c4.132.538,6.412,3.581,5.717,7.7a78.981,78.981,0,0,1-2.141,8.024,1.233,1.233,0,0,0,.516,1.522c1.731,1.3,3.437,2.634,5.135,3.979a8.337,8.337,0,0,1,3.4,4.9M63.877,30.674a3.249,3.249,0,0,0-1.98-3.1,3.39,3.39,0,0,0-3.81.748Q47.628,38.547,37.173,48.779c-1.131,1.105-.889,1.367-2.163-.085-2.178-2.487-4.345-4.981-6.537-7.457a3.416,3.416,0,1,0-5.186,4.443q5,5.676,10.054,11.292c1.574,1.743,3.561,1.743,5.252.085q3.772-3.7,7.529-7.409,8.274-8.157,16.555-16.31a3.526,3.526,0,0,0,1.2-2.664" transform="translate(-0.001 0.002)" fill="#ed204c" />
                </g>
            </g>
        </svg>
        <h2 id="sign-up-message"></h2>
        <p id="sign-up-email-message"></p>
    </div>
</div>
<section class="sign-up-section">
    <div class="sign-up-one">
        <img class="hands-background" src="<?= get_template_directory_uri() ?>/assets/img/ottbg.webp" alt="OTT">
        <img class="mm-emblem" src="<?= get_template_directory_uri() ?>/assets/img/monty-emblem.webp" alt="Monty Mobile Emblem">
        <div class="sign-up-content">
            <img class="mm-logo" src="<?= get_template_directory_uri() ?>/assets/img/monty-mobile-logo.webp" alt="Monty Mobile Logo">
            <p>
                Optimize Spending with Monty Mobile’s A2P Wholesale Solution.
            </p>
            <p>
                Stay connected with your customers effortlessly. Monty Mobile’s OTT & A2P messaging solutions can give your business the flexibility, reach, and reliability it needs to thrive in today’s fast-paced world. Empower your communications with secure OTPs, urgent notifications, and engaging marketing messages that build trust and drive results.
            </p>
            <p><strong>Why Monty Mobile OTT/A2P Wholesale Solution?</strong></p>
            <ul>
                <li>
                    <span>
                        <svg id="checked" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path id="Path_420" data-name="Path 420" d="M.214,13.248A15.8,15.8,0,0,1,7.136,2.674,15.716,15.716,0,0,1,15.976,0a1.181,1.181,0,0,1,1.2,1.114,1.159,1.159,0,0,1-1.065,1.27c-.673.073-1.354.077-2.024.167A13.1,13.1,0,0,0,7.346,5.517a13.055,13.055,0,0,0-4.509,7.036,13.222,13.222,0,0,0,3.04,12.511,12.91,12.91,0,0,0,7.949,4.354A13.236,13.236,0,0,0,24.9,26.244a12.947,12.947,0,0,0,4.224-6.787,28.717,28.717,0,0,0,.446-2.988c.024-.175.009-.355.029-.53a1.181,1.181,0,0,1,1.282-1.129A1.2,1.2,0,0,1,32,16.073a14.365,14.365,0,0,1-.575,4.164,15.825,15.825,0,0,1-11.586,11.29,24.337,24.337,0,0,1-2.647.433,18.958,18.958,0,0,1-2.392,0,15.474,15.474,0,0,1-6.99-2.2,15.807,15.807,0,0,1-7.6-11A18.937,18.937,0,0,1,.214,13.248Z" transform="translate(-0.004 0)" />
                            <path id="Path_421" data-name="Path 421" d="M104.206,66.671a2.293,2.293,0,0,1,.243-.38q7.212-7.2,14.427-14.4a1.369,1.369,0,0,1,1.281-.5,1.229,1.229,0,0,1,.755,1.951,2.988,2.988,0,0,1-.283.307q-7.726,7.709-15.455,15.417a1.287,1.287,0,0,1-2.122-.041q-3-3.251-5.988-6.5A1.267,1.267,0,0,1,97,60.706a1.235,1.235,0,0,1,1.827.073c.714.756,1.412,1.526,2.116,2.291q1.535,1.667,3.069,3.336c.043.048.076.1.192.266Z" transform="translate(-89.743 -47.229)" fill="#ed204c" />
                        </svg>
                    </span>
                    <span>Increased Customer Engagement & Loyalty</span>

                </li>
                <li>
                    <span>
                        <svg id="checked" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path id="Path_420" data-name="Path 420" d="M.214,13.248A15.8,15.8,0,0,1,7.136,2.674,15.716,15.716,0,0,1,15.976,0a1.181,1.181,0,0,1,1.2,1.114,1.159,1.159,0,0,1-1.065,1.27c-.673.073-1.354.077-2.024.167A13.1,13.1,0,0,0,7.346,5.517a13.055,13.055,0,0,0-4.509,7.036,13.222,13.222,0,0,0,3.04,12.511,12.91,12.91,0,0,0,7.949,4.354A13.236,13.236,0,0,0,24.9,26.244a12.947,12.947,0,0,0,4.224-6.787,28.717,28.717,0,0,0,.446-2.988c.024-.175.009-.355.029-.53a1.181,1.181,0,0,1,1.282-1.129A1.2,1.2,0,0,1,32,16.073a14.365,14.365,0,0,1-.575,4.164,15.825,15.825,0,0,1-11.586,11.29,24.337,24.337,0,0,1-2.647.433,18.958,18.958,0,0,1-2.392,0,15.474,15.474,0,0,1-6.99-2.2,15.807,15.807,0,0,1-7.6-11A18.937,18.937,0,0,1,.214,13.248Z" transform="translate(-0.004 0)" />
                            <path id="Path_421" data-name="Path 421" d="M104.206,66.671a2.293,2.293,0,0,1,.243-.38q7.212-7.2,14.427-14.4a1.369,1.369,0,0,1,1.281-.5,1.229,1.229,0,0,1,.755,1.951,2.988,2.988,0,0,1-.283.307q-7.726,7.709-15.455,15.417a1.287,1.287,0,0,1-2.122-.041q-3-3.251-5.988-6.5A1.267,1.267,0,0,1,97,60.706a1.235,1.235,0,0,1,1.827.073c.714.756,1.412,1.526,2.116,2.291q1.535,1.667,3.069,3.336c.043.048.076.1.192.266Z" transform="translate(-89.743 -47.229)" fill="#ed204c" />
                        </svg>
                    </span>
                    <span>Reliable & Secure Messaging</span>
                </li>
                <li>
                    <span>
                        <svg id="checked" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path id="Path_420" data-name="Path 420" d="M.214,13.248A15.8,15.8,0,0,1,7.136,2.674,15.716,15.716,0,0,1,15.976,0a1.181,1.181,0,0,1,1.2,1.114,1.159,1.159,0,0,1-1.065,1.27c-.673.073-1.354.077-2.024.167A13.1,13.1,0,0,0,7.346,5.517a13.055,13.055,0,0,0-4.509,7.036,13.222,13.222,0,0,0,3.04,12.511,12.91,12.91,0,0,0,7.949,4.354A13.236,13.236,0,0,0,24.9,26.244a12.947,12.947,0,0,0,4.224-6.787,28.717,28.717,0,0,0,.446-2.988c.024-.175.009-.355.029-.53a1.181,1.181,0,0,1,1.282-1.129A1.2,1.2,0,0,1,32,16.073a14.365,14.365,0,0,1-.575,4.164,15.825,15.825,0,0,1-11.586,11.29,24.337,24.337,0,0,1-2.647.433,18.958,18.958,0,0,1-2.392,0,15.474,15.474,0,0,1-6.99-2.2,15.807,15.807,0,0,1-7.6-11A18.937,18.937,0,0,1,.214,13.248Z" transform="translate(-0.004 0)" />
                            <path id="Path_421" data-name="Path 421" d="M104.206,66.671a2.293,2.293,0,0,1,.243-.38q7.212-7.2,14.427-14.4a1.369,1.369,0,0,1,1.281-.5,1.229,1.229,0,0,1,.755,1.951,2.988,2.988,0,0,1-.283.307q-7.726,7.709-15.455,15.417a1.287,1.287,0,0,1-2.122-.041q-3-3.251-5.988-6.5A1.267,1.267,0,0,1,97,60.706a1.235,1.235,0,0,1,1.827.073c.714.756,1.412,1.526,2.116,2.291q1.535,1.667,3.069,3.336c.043.048.076.1.192.266Z" transform="translate(-89.743 -47.229)" fill="#ed204c" />
                        </svg>
                    </span>
                    <span>Scalability & Cost Reduction</span>
                </li>

            </ul>
        </div>
    </div>
    <div class="sign-up-two">
        <img class="logo-pattern" src="<?= get_template_directory_uri() ?>/assets/img/logo-pattern.webp" alt="logo Pattern">
        <div class="sign-up-form-container">
            <h1><strong>Welcome to Monty Mobile’s <br /> A2P Wholesale Solution</strong>
            </h1>

            <div class="sign-up-form">
                <form id="signUpForm" action="">
                    <div class="two-columns">
                        <div class="input-wrapper">
                            <label for="companyName">Company Name</label>
                            <input type="text" name="companyName" placeholder="Company Name" />
                            <div class="error" id="companyNameError"></div>
                        </div>
                        <div class="input-wrapper">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="fullName" placeholder="Full Name" />
                            <div class="error" id="fullNameError"></div>
                        </div>
                    </div>

                    <div class="two-columns">
                        <div class="input-wrapper">
                            <label for="companyEmail">Email</label>
                            <input type="text" name="companyEmail" placeholder="Email" />
                            <div class="error" id="companyEmailError"></div>
                        </div>
                        <div class="input-wrapper">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" name="phoneNumber" placeholder="Phone Number" />
                            <div class="error" id="phoneNumberError"></div>
                        </div>
                    </div>


                    <div class="two-columns">
                        <div class="input-wrapper">
                            <label for="country">Country</label>
                            <select name="country" id="country" style="color: gray;" onchange="changeColor(this)">
                                <option value="" selected>Choose Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czechia (Czech Republic)">Czechia (Czech Republic)</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Eswatini (fmr. Swaziland)">Eswatini (fmr. Swaziland)</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Holy See">Holy See</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea (North)">Korea (North)</option>
                                <option value="Korea (South)">Korea (South)</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine State">Palestine State</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            <div class="error" id="countryError"></div>
                        </div>
                        <div class="input-wrapper">
                            <label for="industry">Industry</label>
                            <select name="industry" id="industry" style="color: gray;" onchange="changeColor(this)">
                                <option value="" selected>Industry Name</option>
                                <option value="Printing Machines">Printing Machines</option>
                                <option value="Technology">Technology</option>
                                <option value="Syndicate">Syndicate</option>
                                <option value="Schooling System">Schooling System</option>
                                <option value="Software">Software</option>
                                <option value="Shipping">Shipping</option>
                                <option value="Plastic Industry">Plastic Industry</option>
                                <option value="SMS Aggregator">SMS Aggregator</option>
                                <option value="Sunglasses">Sunglasses</option>
                                <option value="Web Developer">Web Developer</option>
                                <option value="Watches">Watches</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Trading">Trading</option>
                                <option value="Spirits & Alcohol">Spirits & Alcohol</option>
                                <option value="Tourism">Tourism</option>
                                <option value="TV">TV</option>
                                <option value="Web Services">Web Services</option>
                                <option value="Services">Services</option>
                                <option value="visa center">visa center</option>
                                <option value="SMS Providers">SMS Providers</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Transportation">Transportation</option>
                                <option value="reservation and ticketing">reservation and ticketing</option>
                                <option value="Theatre">Theatre</option>
                                <option value="Prefabricated houses">Prefabricated houses</option>
                                <option value="Supplements">Supplements</option>
                                <option value="Properties">Properties</option>
                                <option value="Sweets">Sweets</option>
                                <option value="Perfumes">Perfumes</option>
                                <option value="Stationery">Stationery</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Voice Aggregator">Voice Aggregator</option>
                                <option value="Security">Security</option>
                                <option value="Supermarket">Supermarket</option>
                                <option value="Religious">Religious</option>
                                <option value="Virtual Office">Virtual Office</option>
                                <option value="School">School</option>
                                <option value="University">University</option>
                                <option value="Travel Agency">Travel Agency</option>
                                <option value="Petroleum">Petroleum</option>
                                <option value="Spas & Beauty Services">Spas & Beauty Services</option>
                                <option value="Tires">Tires</option>
                                <option value="VAS">VAS</option>
                                <option value="People & Society">People & Society</option>
                                <option value="Travel">Travel</option>
                                <option value="Special Events">Special Events</option>
                                <option value="Toys">Toys</option>
                                <option value="Safety & Survival">Safety & Survival</option>
                                <option value="Pets & Animals">Pets & Animals</option>
                                <option value="Photo & Video Services">Photo & Video Services</option>
                                <option value="Smoking & Vaping">Smoking & Vaping</option>
                                <option value="Sports & Activities">Sports & Activities</option>
                                <option value="Tattoo">Tattoo</option>
                                <option value="Religion & Belief">Religion & Belief</option>
                                <option value="Pharmaceuticals & Biotech">Pharmaceuticals & Biotech</option>
                                <option value="Payment Service Provider">Payment Service Provider</option>
                                <option value="Reseller">Reseller</option>
                                <option value="Science">Science</option>
                                <option value="Visual Art & Design">Visual Art & Design</option>
                                <option value="Solar System">Solar System</option>
                                <option value="Social Issues & Advocacy">Social Issues & Advocacy</option>
                                <option value="Press/News">Press/News</option>
                                <option value="Tobacco">Tobacco</option>

                            </select>
                            <div class="error" id="industryError"></div>
                        </div>
                    </div>



                    <div class="input-wrapper checkbox-wrapper">
                        <input type="checkbox" name="newsletter" id="newsletter" />
                        <label for="newsletter" class="checkbox-label">
                            <svg class="icon unchecked">
                                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprites.svg#unchecked"></use>
                            </svg>
                            <svg class="icon checked">
                                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprites.svg#checked"></use>
                            </svg>
                            <span class="grey-text">
                                I want to receive MontyMobile news, trends, or blogs by email.
                            </span>
                        </label>

                    </div>
                    <div class="input-wrapper checkbox-wrapper">
                        <input type="checkbox" name="terms" id="terms" />
                        <label for="terms" class="checkbox-label">
                            <svg class="icon unchecked">
                                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprites.svg#unchecked"></use>
                            </svg>
                            <svg class="icon checked">
                                <use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprites.svg#checked"></use>
                            </svg>
                            <span class="grey-text">
                                I have read and agree to Monty Mobile’s <a target="_blank" href="<?= home_url() ?>/terms-conditions">Terms & Conditions</a> and <a target="_blank" href="<?= home_url() ?>/privacy-policy">Privacy Policy</a>.
                            </span>
                        </label>

                        <div class="error" id="termsError"></div>
                    </div>
                    <div class="mt-3">
                        <div id="recaptcha-container"></div>
                        <!-- <div class="g-recaptcha" data-sitekey="6LfiJhEqAAAAAEnjPS42yZIuL6OMKbaZIl-i4rQ5"></div> -->
                        <div class="error" id="recaptchaError"></div>
                    </div>


                    <div id="error-container">

                    </div>

                    <input type="submit" id="signUpSubmit" value="SCHEDULE YOUR FREE CONSULTATION" />

                    <div class="loader-container" id="form-loader">
                        <span class="loader"></span>
                    </div>
                </form>
                <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
                </script> -->
            </div>
        </div>
    </div>
</section>

<script>
    function changeColor(select) {
        if (select.value) {
            select.style.color = "black";
        } else {
            select.style.color = "gray";
        }
    }
    var onloadCallback = function() {
        grecaptcha.render('recaptcha-container', {
            'sitekey': '6LfiJhEqAAAAAEnjPS42yZIuL6OMKbaZIl-i4rQ5',
            'callback': onReCaptchaSuccess
        });
    };



    var signUpForm = document.getElementById("signUpForm");
    var closePopupButton = document.getElementById("close-popup");

    var popup = document.getElementById("sign-up-popup");
    var successIcon = document.getElementById("success-icon");
    var signUpMessage = document.getElementById("sign-up-message");
    var signUpEmailMessage = document.getElementById("sign-up-email-message");
    var formLoader = document.getElementById("form-loader");

    let currentEmail = ''; // Global variable to store the current email

    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    function hasSpaces(str) {
        return /^\s|\s$/.test(str); // Matches if there's a space at the beginning or end
    }

    function showError(inputElement, errorElement, message) {
        formLoader.classList.remove("active");
        errorElement.textContent = message;
        if (inputElement) {
            inputElement.classList.add('error-border');
        }

    }

    function clearError(inputElement, errorElement) {
        errorElement.textContent = '';
        if (inputElement) {
            inputElement.classList.remove('error-border');
        }

    }

    function onReCaptchaSuccess(response) {
        // This function will be called when reCAPTCHA is successfully completed
        clearError(false, document.getElementById("recaptchaError"));
    }

    function openPopup(data, email, error) {
        resetPopup();

        if (data && data.status == "mail_sent") {
            signUpMessage.innerHTML = "Thank you for your submission! We will get back to you shortly!";
            popup.classList.add('open');
            return;
        }
        return;
    }

    function closePopup() {
        popup.classList.remove("open");
        popup.classList.remove("p-error");
        popup.classList.remove("with-resend");
        resetPopup();
    }

    function resetPopup() {
        signUpMessage.innerHTML = "";
        signUpEmailMessage.innerHTML = "";
    }

    closePopupButton.addEventListener('click', function(e) {
        closePopup();
    });

    document.querySelector('input[name="companyName"]').addEventListener('input', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('companyNameError').textContent = "";
        this.classList.remove('error-border');
    });


    document.querySelector('input[name="fullName"]').addEventListener('input', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('fullNameError').textContent = "";
        this.classList.remove('error-border');
    });

    document.querySelector('input[name="companyEmail"]').addEventListener('input', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('companyEmailError').textContent = "";
        this.classList.remove('error-border');
    });

    document.querySelector('input[name="phoneNumber"]').addEventListener('input', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('phoneNumberError').textContent = "";
        this.classList.remove('error-border');
    });

    document.querySelector('select[name="country"]').addEventListener('change', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('countryError').textContent = "";
        this.classList.remove('error-border');
    });

    document.querySelector('select[name="industry"]').addEventListener('change', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('industryError').textContent = "";
        this.classList.remove('error-border');
    });

    document.querySelector('input[name="terms"]').addEventListener('change', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('termsError').textContent = "";
    });

    function addGeneralError(message) {
        // Get the error container element
        const errorContainer = document.getElementById('error-container');

        // Clear the contents of the error container
        errorContainer.innerHTML = '';
        // Create the error div element
        const errorDiv = document.createElement('div');
        errorDiv.className = 'mt-3 alert fade show alert-danger alert-dismissible';

        // Create the close button element
        const closeButton = document.createElement('button');
        closeButton.type = 'button';
        closeButton.className = 'btn-close';
        closeButton.setAttribute('data-bs-dismiss', 'alert');

        // Create the text node for the custom message
        const messageText = document.createTextNode(message);

        // Append the elements to the error div
        errorDiv.appendChild(closeButton);
        errorDiv.appendChild(messageText);

        // Append the error div to the #error-container div
        document.getElementById('error-container').appendChild(errorDiv);
    }

    signUpForm.addEventListener('submit', function(e) {
        formLoader.classList.add("active");
        e.preventDefault();
        var companyName = document.querySelector('input[name="companyName"]');
        var fullName = document.querySelector('input[name="fullName"]');
        var companyEmail = document.querySelector('input[name="companyEmail"]');
        var phoneNumber = document.querySelector('input[name="phoneNumber"]');

        var country = document.querySelector('select[name="country"]');
        var industry = document.querySelector('select[name="industry"]');

        var terms = document.querySelector('input[name="terms"]');
        var newsletter = document.querySelector('input[name="newsletter"]');
        //var recaptchaResponse = grecaptcha.getResponse();

        var companyNameError = document.getElementById('companyNameError');
        var fullNameError = document.getElementById('fullNameError');
        var companyEmailError = document.getElementById('companyEmailError');
        var phoneNumberError = document.getElementById('phoneNumberError');
        var countryError = document.getElementById('countryError');
        var industryError = document.getElementById('industryError');

        var termsError = document.getElementById('termsError');

        var isValid = true;

        // Validate reCAPTCHA
        // if (recaptchaResponse.length === 0) {
        //     showError(false, recaptchaError, 'Please complete the reCAPTCHA.');
        //     isValid = false;
        // } else {
        //     clearError(false, recaptchaError);
        // }

        if (!companyName.value) {
            showError(companyName, companyNameError, 'Company Name is required.');
            isValid = false;
        } else if (hasSpaces(companyName.value)) {
            showError(companyName, companyNameError, 'Ensure there are no spaces at the beginning or end.');
            isValid = false;
        } else {
            clearError(companyName, companyNameError);
        }

        if (!fullName.value) {
            showError(fullName, fullNameError, 'Full Name is required.');
            isValid = false;
        } else if (hasSpaces(fullName.value)) {
            showError(fullName, fullNameError, 'Ensure there are no spaces at the beginning or end.');
            isValid = false;
        } else {
            clearError(fullName, fullNameError);
        }

        if (!companyEmail.value) {
            showError(companyEmail, companyEmailError, 'Company Email is required.');
            isValid = false;
        } else if (!isValidEmail(companyEmail.value)) {
            showError(companyEmail, companyEmailError, 'Please enter a valid email address.');
            isValid = false;
        } else {
            clearError(companyEmail, companyEmailError);
        }


        if (!phoneNumber.value) {
            showError(phoneNumber, phoneNumberError, 'Phone Number is required.');
            isValid = false;
        } else if (hasSpaces(phoneNumber.value)) {
            showError(phoneNumber, phoneNumberError, 'Ensure there are no spaces at the beginning or end.');
            isValid = false;
        } else {
            clearError(phoneNumber, phoneNumberError);
        }



        if (!country.value) {
            showError(country, countryError, 'Country is required.');
            isValid = false;
        } else if (hasSpaces(country.value)) {
            showError(country, countryError, 'Ensure there are no spaces at the beginning or end.');
            isValid = false;
        } else {
            clearError(country, countryError);
        }

        if (!industry.value) {
            showError(industry, industryError, 'Industry Name is required.');
            isValid = false;
        } else if (hasSpaces(industry.value)) {
            showError(industry, industryError, 'Ensure there are no spaces at the beginning or end.');
            isValid = false;
        } else {
            clearError(industry, industryError);
        }

        if (!terms.checked) {
            showError(terms, termsError, 'Please agree to the Terms & Conditions and Privacy Policy.');
            isValid = false;
        } else {
            clearError(terms, termsError);
        }

        if (isValid) {
            var data = new FormData();
            data.append('companyName', companyName.value);
            data.append('fullName', fullName.value);
            data.append('companyEmail', companyEmail.value);
            data.append('phoneNumber', phoneNumber.value);
            data.append('country', country.value);
            data.append('industry', industry.value);
            data.append('newsletter', newsletter.value);
            data.append('_wpcf7_unit_tag', 'rte');

            fetch('https://montymobile.com/wp-json/contact-form-7/v1/contact-forms/25777/feedback', {
                    method: 'POST',
                    headers: {
                        'LanguageCode': 'en',
                    },
                    body: data
                })
                .then(response => response.json())
                .then(data => {
                    // Reset reCAPTCHA
                    //grecaptcha.reset();
                    formLoader.classList.remove("active");
                    if (data && !data.status == "mail_sent") {
                        addGeneralError(data.message);
                        return;
                    }

                    if (data && data.status == "mail_sent") {
                        document.getElementById('error-container').innerHTML = '';
                        currentEmail = companyEmail.value;
                        openPopup(data, companyEmail.value, false);
                        // Call gtag_report_conversion here
                        //gtag_report_conversion();
                    }

                    signUpForm.reset();

                })
                .catch((error) => {
                    // Reset reCAPTCHA
                    //grecaptcha.reset();
                    formLoader.classList.remove("active");
                    //console.log('Error:', error);
                    //openPopup(error, companyEmail.value, true);
                    addGeneralError("An error occurred");
                    //signUpForm.reset();
                });
        }
    });
</script>
<?php get_footer(); ?>