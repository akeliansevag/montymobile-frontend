<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<style>
    body {
        background-color: white;
    }

    #wrapper {
        margin: 0;
        background-color: #ffffff;
    }

    a {
        color: var(--mmPink);
    }

    a:hover {
        text-decoration: underline;
    }

    .sign-ups {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 50px;
        flex: 1;
        min-height: 100vh;
        position: relative;
        z-index: 1;
    }

    .sign-up-one {
        flex: 1;
    }

    .sign-up-two {
        flex: 1;
    }

    .sign-up-one img.hands-background {
        width: 100%;
        border-radius: 70px;
    }

    .sign-up-content {
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 70px;
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

    .sign-up-form-container h2 {
        font-size: 38px;
        margin-bottom: 30px;
    }

    .sign-up-form input[type="text"],
    .sign-up-form input[type="datetime-local"],
    .sign-up-form input[type="email"],
    .sign-up-form input[type="submit"],
    .sign-up-form textarea {
        width: 100%;
    }

    .sign-up-form textarea {
        resize: none;
        height: 100px;
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
    .sign-up-form .input-wrapper select,
    .sign-up-form .input-wrapper textarea {
        border: 1px solid #9b9b9b;
        border-radius: 50px;
        padding: 10px;
        font-size: 14px;
        padding-left: 18px;
    }

    .sign-up-form .input-wrapper textarea {
        border-radius: 20px;
    }

    .logo-pattern {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 0;
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

        .sign-up-content p {
            font-size: 17px;
        }

        .sign-up-content ul li {
            margin-bottom: 17px;
        }
    }

    @media only screen and (max-width:1200px) {
        .sign-ups {
            flex-direction: column;
            padding-top: 50px;
        }

        .logo-pattern {
            display: none;
        }
    }

    @media only screen and (max-width:992px) {
        .sign-up-section {
            flex-direction: column;
            min-height: auto;
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
    <img class="logo-pattern" src="<?= get_template_directory_uri() ?>/assets/img/logo-pattern.webp" alt="logo Pattern">
    <div class="container">
        <div class="sign-ups">
            <div class="sign-up-one">
                <img class="hands-background" src="<?= get_template_directory_uri() ?>/assets/img/mwc-2025.webp" alt="MWC 2025">
            </div>
            <div class="sign-up-two">
                <div class="sign-up-form-container">
                    <h1><strong>Let’s Connect Internally @MWC25</strong>
                    </h1>

                    <div class="sign-up-form">
                        <form id="signUpForm" action="">
                            <div class="two-columns">
                                <div class="input-wrapper">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" name="fullName" placeholder="Full Name" />
                                    <div class="error" id="fullNameError"></div>
                                </div>
                                <div class="input-wrapper">
                                    <label for="companyEmail">Email</label>
                                    <input type="text" name="companyEmail" placeholder="Email" />
                                    <div class="error" id="companyEmailError"></div>
                                </div>
                            </div>

                            <div class="two-columns">

                                <div class="input-wrapper">
                                    <label for="companyName">Company Name</label>
                                    <input type="text" name="companyName" placeholder="Company Name" />
                                    <div class="error" id="companyNameError"></div>
                                </div>
                                <div class="input-wrapper">
                                    <label for="jobTitle">Job Title</label>
                                    <input type="text" name="jobTitle" placeholder="Job Title" />
                                    <div class="error" id="jobTitleError"></div>
                                </div>
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

                            <input type="submit" id="signUpSubmit" value="SUBMIT" />

                            <div class="loader-container" id="form-loader">
                                <span class="loader"></span>
                            </div>
                        </form>
                        <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
                </script> -->
                    </div>
                </div>
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

    document.querySelector('input[name="jobTitle"]').addEventListener('input', function(e) {
        document.getElementById('error-container').innerHTML = '';
        document.getElementById('jobTitleError').textContent = "";
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
        var jobTitle = document.querySelector('input[name="jobTitle"]');


        var terms = document.querySelector('input[name="terms"]');
        //var recaptchaResponse = grecaptcha.getResponse();

        var companyNameError = document.getElementById('companyNameError');
        var fullNameError = document.getElementById('fullNameError');
        var companyEmailError = document.getElementById('companyEmailError');
        var jobTitleError = document.getElementById('jobTitleError');



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
            showError(companyEmail, companyEmailError, 'Email is required.');
            isValid = false;
        } else if (!isValidEmail(companyEmail.value)) {
            showError(companyEmail, companyEmailError, 'Please enter a valid email address.');
            isValid = false;
        } else {
            clearError(companyEmail, companyEmailError);
        }


        if (!jobTitle.value) {
            showError(jobTitle, jobTitleError, 'Job Title is required.');
            isValid = false;
        } else if (hasSpaces(jobTitle.value)) {
            showError(jobTitle, jobTitleError, 'Ensure there are no spaces at the beginning or end.');
            isValid = false;
        } else {
            clearError(jobTitle, jobTitleError);
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
            data.append('jobTitle', jobTitle.value);

            data.append('_wpcf7_unit_tag', 'rte');

            fetch('https://montymobile.com/wp-json/contact-form-7/v1/contact-forms/25801/feedback', {
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