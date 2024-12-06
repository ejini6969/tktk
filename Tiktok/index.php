<?php
include("./auth/connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Advertising on TikTok | Tiktok Ads</title>

    <link rel="icon" href="img/ads-icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/739d991940.js" crossorigin="anonymous"></script>

    <!-- Tiktok Icons -->
    <link rel="icon" href="https://lf16-ttmp.tiktokstaticb.com/obj/ttastatic-sg/tt4b_main/favicon.ico">
    <link rel="preconnect" href="https://lf16-ttmp.byteintlstatic.com">

    <!-- Google Font CDN -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Own Stylesheets -->
    <link rel="preload" as="style" onload="this.onload=null; this.rel='stylesheet'" href="./css/style.css">
    <link rel="preload" as="style" onload="this.onload=null; this.rel='stylesheet'" href="./css/icons.css">
    <link rel="preload" as="style" onload="this.onload=null; this.rel='stylesheet'" href="./css/edit_tag.css">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- Popper.js --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>

    <!-- Include Moment.js if needed for Date Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- Date Picker JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>

</head>

<body>
    
    <!------------------------------------------------------------------------------------- SVG ----------------------------------------------------------------------------------------------->
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        style="position: absolute; width: 0; height: 0" aria-hidden="true" id="__SVG_SPRITE_NODE__"
        elementtiming="element-timing">
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.167"
            stroke-linejoin="round" viewBox="0 0 14 14" id="campaign-list-icon-clock" elementtiming="element-timing">
            <path
                d="M7 12.93a5.35 5.35 0 005.347-5.347A5.35 5.35 0 007 2.236a5.35 5.35 0 00-5.347 5.347A5.35 5.35 0 007 12.93z">
            </path>
            <path d="M6.93 4.478v3.211l2.267 2.267m-8.03-7.331l2.042-1.458m9.624 1.458l-2.042-1.458"
                stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="icon-account-checked"
            elementtiming="element-timing">
            <g id="icon-account-checked_check-one">
                <path id="icon-account-checked_Circle" fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 23C14.9562 23 17.7292 21.8271 19.7782 19.7782C21.8271 17.7292 23 14.9562 23 12C23 9.04378 21.8271 6.27076 19.7782 4.22183C17.7292 2.17289 14.9562 1 12 1C9.04378 1 6.27076 2.17289 4.22183 4.22183C2.17289 6.27076 1 9.04378 1 12C1 14.9562 2.17289 17.7292 4.22183 19.7782C6.27076 21.8271 9.04378 23 12 23Z"
                    fill="#009995" style="fill:#009995;fill:color(display-p3 0.0000 0.6000 0.5843);fill-opacity:1;">
                </path>
                <path id="icon-account-checked_check"
                    d="M11 13.5858L8.70711 11.2929C8.31658 10.9024 7.68342 10.9024 7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071L10.2929 15.7071C10.6834 16.0976 11.3166 16.0976 11.7071 15.7071L17.7071 9.70711C18.0976 9.31658 18.0976 8.68342 17.7071 8.29289C17.3166 7.90237 16.6834 7.90237 16.2929 8.29289L11 13.5858Z"
                    fill="white" style="fill:white;fill-opacity:1;"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" id="icon-account-icon"
            elementtiming="element-timing">
            <g fill="none" fill-rule="evenodd">
                <path
                    d="M19.835 19.495c.027.218.04.44.04.663 0 .224-.016.434-.048.63-.032.197-.08.344-.144.442-.042.066-.167.131-.375.197a6.232 6.232 0 01-.774.18 25.343 25.343 0 01-2.148.278c-.378.033-.742.06-1.094.082-.35.022-.66.033-.926.033s-.572-.01-.918-.033c-.346-.022-.705-.049-1.077-.082-.373-.032-.74-.068-1.102-.106a18.252 18.252 0 01-.998-.131c-.304-.05-.559-.098-.767-.147-.207-.05-.337-.096-.39-.14-.086-.076-.155-.305-.208-.687-.054-.382-.038-.874.048-1.474.053-.35.189-.611.407-.786a2.73 2.73 0 01.774-.426c.298-.109.604-.204.918-.286a2.737 2.737 0 001.278-.729c.1-.11.175-.218.223-.327a.847.847 0 00.072-.344c0-.12-.005-.257-.016-.41a.806.806 0 00-.223-.515 5.647 5.647 0 00-.416-.369.876.876 0 01-.2-.278 3.47 3.47 0 01-.15-.36 7.739 7.739 0 01-.129-.443.799.799 0 01-.191-.098.91.91 0 01-.168-.196 1.608 1.608 0 01-.168-.36 1.064 1.064 0 01-.063-.434.936.936 0 01.08-.336c.042-.11.1-.208.175-.295-.01-.35.005-.704.048-1.064.043-.306.11-.625.2-.958a3.09 3.09 0 01.423-.925c.17-.262.362-.475.574-.639a2.808 2.808 0 011.325-.573c.224-.033.437-.049.64-.049.542 0 1.027.115 1.452.344.426.23.74.475.942.737.235.294.408.625.52.99.111.366.194.707.247 1.024.053.37.074.742.064 1.113a.619.619 0 01.143.18c.032.066.062.15.088.254.027.104.03.232.008.385a1.322 1.322 0 01-.127.475c-.064.12-.128.213-.192.278a.511.511 0 01-.256.148 7.752 7.752 0 01-.127.442c-.043.12-.096.24-.16.36a.762.762 0 01-.207.262 4.836 4.836 0 01-.232.196c-.07.055-.13.112-.184.172a.904.904 0 00-.135.205c-.038.076-.067.17-.088.278-.021.142-.03.287-.024.434.005.148.04.292.104.434.064.142.167.279.311.41.144.13.343.245.599.343.223.099.47.183.742.254.272.071.532.156.783.254.25.098.473.224.67.377.197.152.338.349.423.59.043.152.077.337.104.556z"
                    fill="#FFF"></path>
                <circle fill="#5A8DFC" cx="15" cy="15" r="15"></circle>
                <rect fill="#5A8DFC" width="30" height="30" rx="3"></rect>
                <path
                    d="M21.25 9a2 2 0 012 2v7.875a2 2 0 01-2 2H9a2 2 0 01-2-2V11a2 2 0 012-2h12.25zm-1.281 8.438H10.28a.469.469 0 100 .937h9.688a.469.469 0 100-.938zm0-2.813h-4.063a.469.469 0 100 .938h4.063a.469.469 0 100-.938zm-7.407-2.813h-1.75a1 1 0 00-1 1v1.75a1 1 0 001 1h1.75a1 1 0 001-1v-1.75a1 1 0 00-1-1zm7.407 0h-4.063a.469.469 0 100 .938h4.063a.469.469 0 100-.938z"
                    fill="#FFF"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="icon-account-user-icon"
            elementtiming="element-timing">
            <rect width="24" height="24" rx="2" fill="#009995"
                style="fill:#009995;fill:color(display-p3 0.0000 0.6000 0.5843);fill-opacity:1;"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.9999 5.46603C8.38776 5.46603 5.46066 8.39201 5.46066 12C5.46066 15.608 8.38776 18.5339 11.9999 18.5339C15.6121 18.5339 18.5392 15.608 18.5392 12C18.5392 8.39201 15.6121 5.46603 11.9999 5.46603ZM3.59375 12C3.59375 7.35969 7.35794 3.59912 11.9999 3.59912C16.6419 3.59912 20.4061 7.35969 20.4061 12C20.4061 16.6403 16.6419 20.4009 11.9999 20.4009C7.35794 20.4009 3.59375 16.6403 3.59375 12Z"
                fill="white" style="fill:white;fill-opacity:1;"></path>
            <path
                d="M14.2039 8.5097C14.2039 9.72659 13.2174 10.713 12.0006 10.713C10.7837 10.713 9.79723 9.72659 9.79723 8.5097C9.79723 7.29282 10.7837 6.30634 12.0006 6.30634C13.2174 6.30634 14.2039 7.29282 14.2039 8.5097Z"
                fill="white" style="fill:white;fill-opacity:1;"></path>
            <path
                d="M6.94857 14.4803C8.287 13.2753 10.0579 12.542 12.0006 12.542C13.9433 12.542 15.7137 13.2762 17.0521 14.4811C17.1142 14.5369 17.1755 14.5938 17.2357 14.6517C17.6576 15.057 18.0324 15.5115 18.3513 16.005C17.0066 18.0881 14.6647 19.4674 12.0006 19.4674H11.9993C9.33513 19.4674 6.99394 18.0881 5.64862 16.005C6.01298 15.4411 6.45142 14.9278 6.94857 14.4803Z"
                fill="white" style="fill:white;fill-opacity:1;"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-add-ad"
            elementtiming="element-timing">
            <path d="M14 0H0v14h14V0z" fill="#fff" fill-opacity=".01"></path>
            <path d="M.583 7A6.417 6.417 0 117 13.417H1.75A1.167 1.167 0 01.583 12.25V7z" fill="#F45858"></path>
            <path d="M7 4.083v5.834M4.083 7h5.834" stroke="#001F3E" stroke-width="1.167" stroke-linecap="round"
                stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 15" id="icon-announcement"
            elementtiming="element-timing">
            <path
                d="M14 4c.368 0 .667.298.667.667v8.424c0 .502-.299.909-.667.909H2c-.368 0-.667-.407-.667-.91V4.668C1.333 4.298 1.632 4 2 4h12z"
                stroke="currentColor" stroke-width="1.333" stroke-linejoin="round"></path>
            <path d="M4 5l4-3.667L12 5M4.667 10.666h3.666M4.667 8h6.666" stroke="currentColor" stroke-width="1.333"
                stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" id="icon-approval-status"
            elementtiming="element-timing">
            <path
                d="M1.667 12l.001-2.652c0-.184.15-.334.334-.334h3.334c.307 0 .305-.272.305-.92 0-.65-1.634-1.196-1.634-3.476 0-2.28 1.693-2.951 3.1-2.951 1.406 0 2.938.67 2.938 2.95 0 2.281-1.625 2.644-1.625 3.476 0 .833 0 .921.26.921H12c.184 0 .333.15.333.334V12H1.667z"
                stroke="currentColor" stroke-width="1.343" stroke-linejoin="round"></path>
            <path d="M1.667 14h10.666" stroke="currentColor" stroke-width="1.343" stroke-linecap="round"
                stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" id="icon-arrow"
            elementtiming="element-timing">
            <defs>
                <style></style>
            </defs>
            <path
                d="M948.56 281.18c-13.765-13.833-36.127-13.833-49.893 0L511.991 668.591 125.314 281.18c-13.764-13.798-36.093-13.798-49.857 0-13.8 13.798-13.8 36.162 0 49.994l410.858 411.674c7.067 7.085 16.402 10.521 25.675 10.33 9.275.192 18.61-3.245 25.678-10.33l410.891-411.71c6.864-6.898 10.332-15.94 10.332-24.98s-3.467-18.08-10.33-24.978z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="icon-asset"
            elementtiming="element-timing">
            <path d="M16 0H0V16H16V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M8 5.33325V7.99992" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M4.33301 10.5873V8H11.6663V11" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M10.3337 2H5.66699V5H10.3337V2Z" stroke="currentColor" stroke-width="1.33333"
                stroke-linejoin="round"></path>
            <path d="M6.66667 11H2V14H6.66667V11Z" stroke="currentColor" stroke-width="1.33333" stroke-linejoin="round">
            </path>
            <path d="M13.9997 11H9.33301V14H13.9997V11Z" stroke="currentColor" stroke-width="1.33333"
                stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24" fill="none" id="icon-bc-icon"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M7.8565 5.33203C7.84102 5.22347 7.83301 5.1125 7.83301 4.99966V4.33311C7.83301 3.04457 8.87758 2 10.1661 2H14.832C16.1205 2 17.1651 3.04457 17.1651 4.33311V4.99966C17.1651 5.1125 17.1571 5.22347 17.1416 5.33203H20.1639C21.4524 5.33203 22.497 6.3766 22.497 7.66514V19.6631C22.497 20.9517 21.4524 21.9962 20.1639 21.9962H4.83311C3.54457 21.9962 2.5 20.9517 2.5 19.6631V7.66514C2.5 6.3766 3.54457 5.33203 4.83311 5.33203H7.8565ZM9.83301 4.33311C9.83301 4.14914 9.98215 4 10.1661 4H14.832C15.016 4 15.1651 4.14914 15.1651 4.33311V4.99966C15.1651 5.17612 15.0279 5.32053 14.8544 5.33203H10.1437C9.97021 5.32053 9.83301 5.17612 9.83301 4.99966V4.33311ZM10.1068 7.33203H4.83311C4.64914 7.33203 4.5 7.48117 4.5 7.66514V11.4004H8.5V11C8.5 10.4477 8.94772 10 9.5 10C10.0523 10 10.5 10.4477 10.5 11V11.4004H14.5V11C14.5 10.4477 14.9477 10 15.5 10C16.0523 10 16.5 10.4477 16.5 11V11.4004H20.497V7.66514C20.497 7.48117 20.3478 7.33203 20.1639 7.33203H14.8913C14.8716 7.33252 14.8518 7.33277 14.832 7.33277H10.1661C10.1463 7.33277 10.1265 7.33252 10.1068 7.33203ZM4.5 19.6631V13.4004H8.5V14C8.5 14.5523 8.94772 15 9.5 15C10.0523 15 10.5 14.5523 10.5 14V13.4004H14.5V14C14.5 14.5523 14.9477 15 15.5 15C16.0523 15 16.5 14.5523 16.5 14V13.4004H20.497V19.6631C20.497 19.8471 20.3478 19.9962 20.1639 19.9962H4.83311C4.64914 19.9962 4.5 19.8471 4.5 19.6631Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24" fill="none" id="icon-bell-content-icon"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.8962 0C12.4264 0 12.8562 0.441582 12.8562 0.986301V1.20548C12.8562 1.22236 12.8558 1.23915 12.855 1.25582C16.5186 1.68957 19.3632 4.88716 19.3632 8.76737V16.4375H21.7093C22.2395 16.4375 22.6693 16.8791 22.6693 17.4238C22.6693 17.9685 22.2395 18.4101 21.7093 18.4101H2.29594C1.76574 18.4101 1.33594 17.9685 1.33594 17.4238C1.33594 16.8791 1.76574 16.4375 2.29594 16.4375H4.64323V8.76737C4.64323 4.96244 7.37859 1.81389 10.9392 1.28417C10.9372 1.25821 10.9362 1.23197 10.9362 1.20548V0.986301C10.9362 0.441582 11.366 0 11.8962 0ZM17.4438 8.76678C17.4438 5.68003 15.0082 3.17773 12.0038 3.17773C8.99937 3.17773 6.5638 5.68003 6.5638 8.76678V16.3916H17.4438V8.76678ZM15.2024 18.7397C15.7326 18.7397 16.1624 19.1813 16.1624 19.726C16.1624 22.0865 14.3 24 12.0024 24C9.70494 24 7.84245 22.0865 7.84245 19.726C7.84245 19.1813 8.27225 18.7397 8.80245 18.7397C9.33264 18.7397 9.76245 19.1813 9.76245 19.726C9.76245 20.997 10.7653 22.0274 12.0024 22.0274C13.2396 22.0274 14.2424 20.997 14.2424 19.726C14.2424 19.1813 14.6723 18.7397 15.2024 18.7397Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 18" id="icon-bell-ring"
            elementtiming="element-timing">
            <g fill-rule="nonzero" fill="none">
                <path
                    d="M12.08 6.575c0-2.315-1.827-4.191-4.08-4.191S3.92 4.26 3.92 6.575v5.719h8.16V6.575zM8.64.942c2.747.325 4.88 2.723 4.88 5.633v5.754h1.76a.73.73 0 01.72.74.73.73 0 01-.72.74H.72a.73.73 0 01-.72-.74.73.73 0 01.72-.74h1.76V6.575c0-2.853 2.052-5.215 4.722-5.612A.77.77 0 017.2.904V.74A.73.73 0 017.92 0a.73.73 0 01.72.74v.202zm2.48 13.853C11.12 16.565 9.723 18 8 18s-3.12-1.435-3.12-3.205a.73.73 0 01.72-.74.73.73 0 01.72.74c0 .953.752 1.726 1.68 1.726.928 0 1.68-.773 1.68-1.726a.73.73 0 01.72-.74.73.73 0 01.72.74z"
                    fill="currentColor"></path>
                <circle fill="#F45858" cx="14" cy="2" r="2"></circle>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 18" id="icon-bell" elementtiming="element-timing">
            <path
                d="M12.08 6.575c0-2.315-1.827-4.191-4.08-4.191S3.92 4.26 3.92 6.575v5.719h8.16V6.575zM8.64.942c2.747.325 4.88 2.723 4.88 5.633v5.754h1.76a.73.73 0 01.72.74.73.73 0 01-.72.74H.72a.73.73 0 01-.72-.74.73.73 0 01.72-.74h1.76V6.575c0-2.853 2.052-5.215 4.722-5.612A.77.77 0 017.2.904V.74A.73.73 0 017.92 0a.73.73 0 01.72.74v.202zm2.48 13.853C11.12 16.565 9.723 18 8 18s-3.12-1.435-3.12-3.205a.73.73 0 01.72-.74.73.73 0 01.72.74c0 .953.752 1.726 1.68 1.726.928 0 1.68-.773 1.68-1.726a.73.73 0 01.72-.74.73.73 0 01.72.74z"
                fill="currentColor" fill-rule="nonzero"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="icon-business"
            elementtiming="element-timing">
            <path d="M16 0H0v16h16V0z" fill="#fff" fill-opacity=".01"></path>
            <path
                d="M13.334 3.666H2.667c-.737 0-1.333.597-1.333 1.333v8.334c0 .736.596 1.333 1.333 1.333h10.666c.737 0 1.334-.597 1.334-1.333V4.999c0-.736-.597-1.333-1.333-1.333z"
                stroke="currentColor" stroke-width="1.343"></path>
            <path
                d="M10.333 1.333H5.667A.667.667 0 005 2v1c0 .368.298.666.667.666h4.666A.667.667 0 0011 3V2a.667.667 0 00-.667-.667z"
                stroke="currentColor" stroke-width="1.343"></path>
            <path d="M1.667 9l5.596 2.783c.36.18.783.186 1.149.018l5.754-2.634" stroke="currentColor"
                stroke-width="1.343" stroke-linecap="square"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 8.666a1 1 0 100-2 1 1 0 000 2z" fill="currentColor">
            </path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FAAD15" id="icon-circle-warning"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM13.5 17.5C13.5 16.6716 12.8284 16 12 16C11.1716 16 10.5 16.6716 10.5 17.5C10.5 18.3284 11.1716 19 12 19C12.8284 19 13.5 18.3284 13.5 17.5ZM12 5C10.9138 5 10.0507 5.91244 10.1109 6.99692L10.4168 12.5023C10.4635 13.3426 11.1584 14 12 14C12.8416 14 13.5365 13.3426 13.5832 12.5023L13.8891 6.99692C13.9493 5.91244 13.0862 5 12 5Z"
                fill="#FAAD15"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="#121415" id="icon-custom-mode"
            elementtiming="element-timing">
            <path d="M48 0H0V48H48V0Z" fill="currentColor" fill-opacity="0.01"></path>
            <path d="M44 14L24 4L4 14V34L24 44L44 34V14Z" stroke="currentColor" stroke-width="4"
                stroke-linejoin="round"></path>
            <path d="M4 14L24 24" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M24 44V24" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M44 14L24 24" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M34 9L14 19" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
            </path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="icon-feedback"
            elementtiming="element-timing">
            <path d="M0 0h16v16H0V0z" fill="#fff" fill-opacity=".01"></path>
            <path d="M11 12.667H7.333V10H12V7.333h2.667v5.334H13l-1 1-1-1z" stroke="currentColor" stroke-width="1.343"
                stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1.333 2H12v8H5.667l-1.334 1.333L3 10H1.333V2z" stroke="currentColor" stroke-width="1.343"
                stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M4 7.333h2M4 4.667h4" stroke="currentColor" stroke-width="1.343" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 87 68"
            id="icon-guide-account" elementtiming="element-timing">
            <defs>
                <path d="M3.906 0a3.91 3.91 0 013.906 3.914v7.827H0V3.914l.005-.202A3.91 3.91 0 013.906 0z"
                    id="icon-guide-account_a"></path>
                <path
                    d="M8.279.472a3.91 3.91 0 013.906 3.914v7.827H.466c1.061.016 1.983-.369 2.764-1.156.781-.788 1.162-1.714 1.142-2.78V4.385l.005-.202A3.91 3.91 0 018.28.472z"
                    id="icon-guide-account_b"></path>
            </defs>
            <g transform="translate(0 1)" fill="none" fill-rule="evenodd">
                <path d="M77.875 12.615V41.83l8.627 10.889V23.504l-8.627-10.889z" stroke="#1A3775" stroke-width=".5"
                    fill="#009995"></path>
                <path d="M70.375 16.047v29.468l16.127 7.53V23.575l-16.127-7.53z" stroke="#1A3775" stroke-width=".5"
                    fill="#FFF"></path>
                <g fill="#FFF" stroke="#1A3775" stroke-width=".5">
                    <path d="M31.625 61.072H37.6v5.678h-5.975z"></path>
                    <path d="M31.625 55.512H37.6v5.678h-5.975zM20.25 49.81h5.975v5.679H20.25z"></path>
                    <path d="M20.25 44.25h5.975v5.678H20.25zM37.483 61.072h5.975v5.678h-5.975z"></path>
                    <path d="M37.483 55.512h5.975v5.678h-5.975zM26.108 49.81h5.975v5.679h-5.975z"></path>
                    <path d="M26.108 44.25h5.975v5.678h-5.975zM43.342 61.072h5.975v5.678h-5.975z"></path>
                    <path d="M43.342 55.512h5.975v5.678h-5.975zM31.967 49.81h5.975v5.679h-5.975z"></path>
                    <path d="M31.967 44.25h5.975v5.678h-5.975zM49.2 61.072h5.975v5.678H49.2z"></path>
                    <path d="M49.2 55.512h5.975v5.678H49.2zM37.825 49.81H43.8v5.679h-5.975z"></path>
                    <path d="M37.825 44.25H43.8v5.678h-5.975z"></path>
                </g>
                <path
                    d="M20.063 3.955V32.86c0 1.726 1.399 3.125 3.125 3.125h36.01v-25c0-1.726-1.4-3.125-3.125-3.125h-24.24 0l-11.77-3.906z"
                    stroke="#1A3775" stroke-width=".5" fill="#FFF"></path>
                <path d="M47.457 19.58v28.906c0 1.726 1.4 3.125 3.125 3.125h36.01V23.486H59.229l-11.77-3.906z"
                    stroke="#1A3775" stroke-width=".5" fill="#FFF"></path>
                <use stroke="#1A3775" stroke-width=".5" fill="#E4E9ED" xlink:href="#icon-guide-account_a"
                    transform="matrix(0 1 1 0 20.063 .048)"></use>
                <use stroke="#1A3775" stroke-width=".5" fill="#E4E9ED" xlink:href="#icon-guide-account_b"
                    transform="matrix(0 1 1 0 46.985 11.301)"></use>
                <path
                    d="M77 47.589C60.946 32.703 48.76 23.177 40.444 19.01c-12.475-6.249-16.886-4.98-13.11 2.648 3.175 6.418 2.118 13.411-6.606 10.795-1.646-.493-4.434-2.019-7.421-3.316-17.217-7.479-11.557 1.265-7.682 6.848S9.89 43.832 0 43.832"
                    stroke="#121415" stroke-width=".5"></path>
                <path d="M86.502 23.527L67.25 30.608v29.487l19.252-7.081V23.527z" stroke="#1A3775" stroke-width=".5"
                    fill="#FFF"></path>
                <path d="M86.502 23.773L73.5 36.799V66.11l13.002-13.026V23.773z" stroke="#1A3775" stroke-width=".5"
                    fill="#009995"></path>
                <ellipse stroke="#1A3775" stroke-width=".5" cx="53.563" cy="4.07" rx="3.438" ry="3.444"></ellipse>
                <ellipse stroke="#1A3775" stroke-width=".5" cx="9.5" cy="57.514" rx="7.5" ry="7.514"></ellipse>
                <g stroke="#1A3775" stroke-width=".5">
                    <path fill="#009995" d="M25.375 38.447h6.375V66.75h-6.375z"></path>
                    <path fill="#FFF" d="M28.563 25.047L32 37.233h-6.875z"></path>
                    <path fill="#009995" d="M28.563 25.047l1.59 5.635h-3.18z"></path>
                </g>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 4" fill="none" id="icon-has-new-feature"
            elementtiming="element-timing">
            <path
                d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z"
                fill="#F45858"></path>
        </symbol>
        
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-header-account"
            elementtiming="element-timing">
            <path opacity=".01" fill="#fff" d="M0 0h14v14H0z"></path>
            <path
                d="M3.79 12.833H2.8c-.58 0-1.05-.522-1.05-1.166V2.333c0-.644.47-1.166 1.05-1.166h8.4c.58 0 1.05.522 1.05 1.166v2.369"
                stroke="#000" stroke-width="1.167" stroke-linecap="round"></path>
            <path d="M10.668 12.86l1.968-3.354-1.968-3.355H6.73L4.761 9.506l1.97 3.354h3.937z" stroke="#000"
                stroke-width="1.167" stroke-linejoin="round"></path>
            <path d="M8.699 10.527a1.02 1.02 0 100-2.042 1.02 1.02 0 000 2.042z" stroke="#000" stroke-width="1.167"
                stroke-linejoin="round"></path>
            <path d="M2.04 3.792h9.949" stroke="#000" stroke-width="1.167"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" id="icon-header-logout"
            elementtiming="element-timing">
            <path fill="#fff" fill-opacity=".01" d="M0 0h12v12H0z"></path>
            <path d="M5.998 1H1v10h5M8.5 8.5L11 6 8.5 3.5M3.778 5.998H11" stroke="#009995" stroke-linecap="round"
                stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-header-user"
            elementtiming="element-timing">
            <path fill="#fff" fill-opacity=".01" d="M0 0h14v14H0z"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M1.847 11.53h2.408a.611.611 0 110 1.223H1.199a.611.611 0 01-.61-.611 6.429 6.429 0 014.277-6.068 2.976 2.976 0 01-1.118-2.335 3.007 3.007 0 116.007 0 2.982 2.982 0 01-1.027 2.243.611.611 0 01-.367 1.161 5.03 5.03 0 00-1.417-.202 5.164 5.164 0 00-5.097 4.59zm6.554-8.478a1.784 1.784 0 10-3.294 1.374 1.784 1.784 0 003.294-1.374zM11.454 6.27l1.73 1.729a.611.611 0 010 .867l-4.321 4.32a.641.641 0 01-.434.178h-1.73a.611.611 0 01-.61-.611v-1.73a.642.642 0 01.176-.433l4.32-4.32a.611.611 0 01.869 0zM7.31 12.141h.862l3.715-3.71-.867-.867-3.71 3.715v.862z"
                fill="#333"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-infor-o"
            elementtiming="element-timing">
            <path fill="#D8D8D8" fill-opacity=".01" d="M0 0h14v14H0z"></path>
            <mask id="icon-infor-o_a" maskUnits="userSpaceOnUse" x="0" y="0" width="14" height="14">
                <path fill="#fff" d="M0 0h14v14H0z"></path>
            </mask>
            <g mask="url(#icon-infor-o_a)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7 14A7 7 0 107 0a7 7 0 000 14zm-.704-8.868a.844.844 0 01.694-.364c.34 0 .614.282.603.622l-.166 5.208h.771l-.385.511a.667.667 0 01-1.2-.401V5.985l-.771-.195.454-.658zm1.43-1.89a.722.722 0 11-1.444 0 .722.722 0 011.444 0z"
                    fill="#009995"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20" fill="none" id="icon-ks-close"
            elementtiming="element-timing">
            <path
                d="M5.0547 4.92807C4.8265 4.70065 4.45716 4.70128 4.22974 4.92947C4.00232 5.15767 4.00295 5.52701 4.23114 5.75443L8.49255 10.0014L4.2456 14.2628C4.01819 14.491 4.01881 14.8603 4.24701 15.0878C4.4752 15.3152 4.84455 15.3145 5.07196 15.0863L9.31891 10.8249L13.5803 15.0719C13.8085 15.2993 14.1779 15.2987 14.4053 15.0705C14.6327 14.8423 14.6321 14.4729 14.4039 14.2455L10.1425 9.99858L14.3894 5.73716C14.6168 5.50897 14.6162 5.13962 14.388 4.91221C14.1598 4.68479 13.7905 4.68542 13.5631 4.91361L9.31611 9.17502L5.0547 4.92807Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="icon-ks-error"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6.99967 13.4166C10.5435 13.4166 13.4163 10.5438 13.4163 6.99998C13.4163 3.45615 10.5435 0.583313 6.99967 0.583313C3.45585 0.583313 0.583008 3.45615 0.583008 6.99998C0.583008 10.5438 3.45585 13.4166 6.99967 13.4166Z"
                fill="#FFC6BD" style="fill:#FFC6BD;fill:color(display-p3 1.0000 0.7765 0.7412);fill-opacity:1;"></path>
            <rect x="3.20801" y="6.41666" width="7.58333" height="1.16667" rx="0.583333" fill="#4E0C0B"
                style="fill:#4E0C0B;fill:color(display-p3 0.3059 0.0471 0.0431);fill-opacity:1;"></rect>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" fill="none" id="icon-ks-info"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.8699 11.5372C10.6747 12.7325 9.05714 13.4166 7.33268 13.4166C5.60822 13.4166 3.99063 12.7325 2.79541 11.5372C1.6002 10.342 0.916016 8.72444 0.916016 6.99998C0.916016 5.27552 1.6002 3.65792 2.79541 2.46271C3.99063 1.2675 5.60822 0.583313 7.33268 0.583313C9.05714 0.583313 10.6747 1.2675 11.8699 2.46271C13.0652 3.65792 13.7493 5.27552 13.7493 6.99998C13.7493 8.72444 13.0652 10.342 11.8699 11.5372Z"
                fill="#9EE1DD" style="fill:#9EE1DD;fill:color(display-p3 0.6196 0.8824 0.8667);fill-opacity:1;"></path>
            <path
                d="M6.89583 9.3333H6.45833C6.13617 9.3333 5.875 9.59447 5.875 9.91664C5.875 10.2388 6.13617 10.5 6.45833 10.5H8.5C8.82217 10.5 9.08333 10.2388 9.08333 9.91664C9.08333 9.59447 8.82217 9.3333 8.5 9.3333H8.0625V5.8333C8.0625 5.51114 7.80133 5.24997 7.47917 5.24997H6.89583C6.57367 5.24997 6.3125 5.51114 6.3125 5.8333C6.3125 6.15547 6.57367 6.41664 6.89583 6.41664V9.3333Z"
                fill="#092A3A" style="fill:#092A3A;fill:color(display-p3 0.0353 0.1647 0.2275);fill-opacity:1;"></path>
            <path
                d="M7.33326 3.20831C7.73597 3.20831 8.06243 3.53477 8.06243 3.93748C8.06243 4.34019 7.73597 4.66665 7.33326 4.66665C6.93055 4.66665 6.6041 4.34019 6.6041 3.93748C6.6041 3.53477 6.93055 3.20831 7.33326 3.20831Z"
                fill="#092A3A" style="fill:#092A3A;fill:color(display-p3 0.0353 0.1647 0.2275);fill-opacity:1;"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="icon-ks-pagination-arrow"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.4717 16.4715C14.2114 16.7318 13.7893 16.7318 13.5289 16.4715L9.52892 12.4715C9.26857 12.2111 9.26857 11.789 9.52892 11.5286L13.5289 7.52865C13.7893 7.2683 14.2114 7.2683 14.4717 7.52865C14.7321 7.789 14.7321 8.21111 14.4717 8.47146L10.9431 12.0001L14.4717 15.5286C14.7321 15.789 14.7321 16.2111 14.4717 16.4715Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" fill="none" id="icon-ks-warning"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.8699 11.5373C10.6747 12.7325 9.05714 13.4167 7.33268 13.4167C5.60822 13.4167 3.99063 12.7325 2.79541 11.5373C1.6002 10.3421 0.916016 8.72447 0.916016 7.00001C0.916016 5.27555 1.6002 3.65796 2.79541 2.46274C3.99063 1.26753 5.60822 0.583344 7.33268 0.583344C9.05714 0.583344 10.6747 1.26753 11.8699 2.46274C13.0652 3.65796 13.7493 5.27555 13.7493 7.00001C13.7493 8.72447 13.0652 10.3421 11.8699 11.5373Z"
                fill="#FAD253" style="fill:#FAD253;fill:color(display-p3 0.9804 0.8235 0.3255);fill-opacity:1;"></path>
            <path
                d="M6.74942 8.16666V3.49999C6.74942 3.17782 7.01059 2.91666 7.33275 2.91666C7.65492 2.91666 7.91609 3.17782 7.91609 3.49999V8.16666C7.91609 8.48882 7.65492 8.74999 7.33275 8.74999C7.01059 8.74999 6.74942 8.48882 6.74942 8.16666Z"
                fill="#201507" style="fill:#201507;fill:color(display-p3 0.1255 0.0824 0.0275);fill-opacity:1;"></path>
            <path
                d="M8.06185 10.0625C8.06185 10.4652 7.73539 10.7917 7.33268 10.7917C6.92997 10.7917 6.60352 10.4652 6.60352 10.0625C6.60352 9.65979 6.92997 9.33333 7.33268 9.33333C7.73539 9.33333 8.06185 9.65979 8.06185 10.0625Z"
                fill="#201507" style="fill:#201507;fill:color(display-p3 0.1255 0.0824 0.0275);fill-opacity:1;"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 14" id="icon-new-features"
            elementtiming="element-timing">
            <path
                d="M7.333 11L4 13v-2H2a.667.667 0 01-.667-.667V1.667C1.333 1.298 1.632 1 2 1h12c.368 0 .667.298.667.667v8.666A.667.667 0 0114 11H7.333z"
                stroke="currentColor" stroke-width="1.333" stroke-linejoin="round"></path>
            <path
                d="M5.798 7.667V5.603c0-.342-.048-.648-.324-.924-.173-.174-.42-.276-.726-.276-.258 0-.551.102-.75.3v-.264h-.96v3.228h.985V5.735c0-.372.264-.444.396-.444s.396.072.396.444v1.932h.983zM8.934 6.37v-.438c0-.846-.516-1.53-1.452-1.53-.846 0-1.446.594-1.446 1.65 0 1.392.822 1.65 1.536 1.65.6 0 .924-.18 1.254-.51l-.588-.588c-.174.174-.324.27-.666.27-.366 0-.57-.24-.57-.504h1.932zm-.972-.654h-.96c0-.078.012-.168.054-.252.06-.138.192-.252.426-.252.234 0 .366.114.426.252a.563.563 0 01.054.252zm5.497-1.278h-1.038l-.402 1.674-.558-1.674h-.684l-.558 1.674-.402-1.674H8.78l.972 3.228h.786l.582-1.77.582 1.77h.786l.972-3.228z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 25" fill="none" id="icon-new"
            elementtiming="element-timing">
            <path
                d="M0 5.99999C0 4.34314 1.47746 3 3.3 3H29.7C31.5225 3 33 4.34315 33 6V18C33 19.6569 31.5225 21 29.7 21H3.3C1.47746 21 0 19.6569 0 18V5.99999Z"
                fill="#E9EBFF"></path>
            <path
                d="M4.49512 16.4131V7.95312H6.83512L9.93112 15.4411H9.99112V7.95312H11.3231V16.4131H8.98312L5.89912 8.92512H5.82712V16.4131H4.49512ZM18.7289 15.2131C18.4969 15.6451 18.1529 15.9771 17.6969 16.2091C17.2489 16.4411 16.6809 16.5571 15.9929 16.5571C15.3449 16.5571 14.7889 16.4171 14.3249 16.1371C13.8609 15.8571 13.5009 15.4651 13.2449 14.9611C12.9969 14.4491 12.8729 13.8531 12.8729 13.1731C12.8729 12.5171 13.0049 11.9451 13.2689 11.4571C13.5409 10.9611 13.9049 10.5771 14.3609 10.3051C14.8249 10.0251 15.3489 9.88512 15.9329 9.88512C16.8369 9.88512 17.5489 10.1571 18.0689 10.7011C18.5889 11.2371 18.8489 11.9691 18.8489 12.8971C18.8489 13.0091 18.8449 13.1251 18.8369 13.2451C18.8369 13.3571 18.8329 13.4491 18.8249 13.5211H14.2529C14.2849 14.1211 14.4529 14.5971 14.7569 14.9491C15.0609 15.3011 15.5049 15.4771 16.0889 15.4771C16.4249 15.4771 16.7289 15.4131 17.0009 15.2851C17.2729 15.1491 17.4969 14.9291 17.6729 14.6251L18.7289 15.2131ZM15.9329 10.8571C15.4769 10.8571 15.0969 10.9971 14.7929 11.2771C14.4889 11.5571 14.3129 12.0011 14.2649 12.6091H17.5289C17.5049 12.0411 17.3529 11.6091 17.0729 11.3131C16.7929 11.0091 16.4129 10.8571 15.9329 10.8571ZM21.1148 16.4131L19.6628 10.0291H21.0068L22.0268 15.5011H22.0748L23.1668 10.0291H25.0268L26.1188 15.5011H26.1668L27.1868 10.0291H28.5308L27.0788 16.4131H25.2308L24.1268 10.9411H24.0668L22.9628 16.4131H21.1148Z"
                fill="#665CD6"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 14"
            id="icon-question-icon" elementtiming="element-timing">
            <defs>
                <path
                    d="M7 0a7 7 0 110 14A7 7 0 017 0zm-.137 9.753a.52.52 0 00-.525.517.52.52 0 00.525.516.52.52 0 00.525-.516.52.52 0 00-.525-.517zM7 2.917c-1.235 0-2.246.943-2.328 2.138l-.005.157v.015a.525.525 0 101.05 0l-.002-.016h.002c0-.696.574-1.262 1.283-1.262s1.283.566 1.283 1.263c0 .404-.156.677-.67 1.228l-.242.259c-.188.205-.327.37-.455.548a3.768 3.768 0 00-.481.977c-.02.057-.034.123-.046.197l-.002.01a.524.524 0 00-.01.057l-.005.05c.002.002.002.004.002.007a.525.525 0 001.05 0v-.007c.022-.093.038-.125.098-.266.06-.14.142-.274.255-.433.544-.764 1.556-1.36 1.556-2.627C9.333 3.944 8.29 2.917 7 2.917z"
                    id="icon-question-icon_a"></path>
            </defs>
            <use fill="#D6D6D6" xlink:href="#icon-question-icon_a" fill-rule="evenodd"></use>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24" fill="none" id="icon-quick-contact"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.72183 4.22183C6.71134 2.23231 9.46271 1 12.5 1C15.5373 1 18.2887 2.23231 20.2782 4.22183C22.2677 6.21134 23.5 8.96271 23.5 12C23.5 15.0373 22.2677 17.7887 20.2782 19.7782C18.2887 21.7677 15.5373 23 12.5 23C9.46271 23 6.71134 21.7677 4.72183 19.7782C2.73231 17.7887 1.5 15.0373 1.5 12C1.5 8.96271 2.73231 6.21134 4.72183 4.22183ZM12.5 3C10.0144 3 7.76581 4.00626 6.13604 5.63604C4.50626 7.26581 3.5 9.51444 3.5 12C3.5 14.4856 4.50626 16.7342 6.13604 18.364C7.76581 19.9937 10.0144 21 12.5 21C14.9856 21 17.2342 19.9937 18.864 18.364C20.4937 16.7342 21.5 14.4856 21.5 12C21.5 9.51444 20.4937 7.26581 18.864 5.63604C17.2342 4.00626 14.9856 3 12.5 3Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8.5 9.3125C8.5 7.10336 10.2909 5.3125 12.5 5.3125C14.7091 5.3125 16.5 7.10336 16.5 9.3125C16.5 11.1763 15.2252 12.7424 13.5 13.1865V14.3125C13.5 14.8648 13.0523 15.3125 12.5 15.3125C11.9477 15.3125 11.5 14.8648 11.5 14.3125V12.3125C11.5 11.7602 11.9477 11.3125 12.5 11.3125C13.6046 11.3125 14.5 10.4171 14.5 9.3125C14.5 8.20793 13.6046 7.3125 12.5 7.3125C11.3954 7.3125 10.5 8.20793 10.5 9.3125C10.5 9.86478 10.0523 10.3125 9.5 10.3125C8.94772 10.3125 8.5 9.86478 8.5 9.3125Z"
                fill="currentColor"></path>
            <path
                d="M12.5 18.8125C13.1904 18.8125 13.75 18.2529 13.75 17.5625C13.75 16.8721 13.1904 16.3125 12.5 16.3125C11.8096 16.3125 11.25 16.8721 11.25 17.5625C11.25 18.2529 11.8096 18.8125 12.5 18.8125Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20" id="icon-refresh" elementtiming="element-timing">
            <g fill-rule="nonzero" fill="none">
                <path d="M-2.662-2h24v24h-24z"></path>
                <g fill="currentColor">
                    <path
                        d="M1.477 14.385l1.656-.652.04-.01a7.2 7.2 0 0013.363-3.59h1.8a9 9 0 01-16.86 4.252zM.339 9.862a9 9 0 0116.948-4.085l-1.74.577A7.2 7.2 0 002.139 9.858l-.012.004H.339z">
                    </path>
                    <path
                        d="M17.433 11.053a.9.9 0 100-1.8.9.9 0 000 1.8zM1.24 10.75a.9.9 0 100-1.8.9.9 0 000 1.8zM16.394.944a.9.9 0 01.9.9v4.2a.9.9 0 01-1.8 0v-4.2a.9.9 0 01.9-.9zM2.337 13.161a.9.9 0 01.9.9v4.2a.9.9 0 11-1.8 0v-4.2a.9.9 0 01.9-.9z">
                    </path>
                </g>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="icon-setting"
            elementtiming="element-timing">
            <path d="M16 0H0V16H16V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M11.3334 13.6667L14.6666 8L11.3334 2.33333H4.6667L1.33331 8L4.6667 13.6667H11.3334Z"
                stroke="#333333" stroke-width="1.33333" stroke-linejoin="round"></path>
            <path
                d="M7.99998 9.66667C8.92045 9.66667 9.66665 8.92048 9.66665 8C9.66665 7.07953 8.92045 6.33333 7.99998 6.33333C7.07951 6.33333 6.33331 7.07953 6.33331 8C6.33331 8.92048 7.07951 9.66667 7.99998 9.66667Z"
                stroke="#333333" stroke-width="1.33333" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="#121415" id="icon-simplified-mode"
            elementtiming="element-timing">
            <rect width="48" height="48" fill="currentColor" fill-opacity="0.01"></rect>
            <path d="M48 0H0V48H48V0Z" fill="currentColor" fill-opacity="0.01"></path>
            <path d="M15.5 9L7 14V24V34L15.5 39L24 44L32.5001 39L41 34V24V14L32.5001 9L24 4L15.5 9Z"
                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M41 14L24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M7 14L24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M24 44V24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M32 19L32 39" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M41.0002 24L24.0002 34" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M24 34L7 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M16 39L16 19" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M32 9L16 19" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M32 19L16 9" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            </path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 16"
            id="icon-success" elementtiming="element-timing">
            <defs>
                <path id="icon-success_a" d="M0 0h24v24H0z"></path>
            </defs>
            <g transform="translate(-1 -5)" fill="none" fill-rule="evenodd">
                <mask id="icon-success_b" fill="#fff">
                    <use xlink:href="#icon-success_a"></use>
                </mask>
                <path d="M7.82 1.152v17.3a.9.9 0 11-1.8 0V.252a.9.9 0 01.9-.9h10.2a.9.9 0 110 1.8h-9.3z"
                    fill="currentColor" mask="url(#icon-success_b)" transform="rotate(-135 12.02 9.352)"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16"
            id="campaign-list-icon-perf-tab-campaign" elementtiming="element-timing">
            <path
                d="M5.738.8H3.201A2.4 2.4 0 00.8 3.2V12A3.2 3.2 0 004 15.2h8a3.2 3.2 0 003.2-3.2V6.4A3.2 3.2 0 0012 3.2H9.132a.8.8 0 01-.566-.235L6.87 1.268A1.6 1.6 0 005.738.8z"
                fill="#C1C1C1"></path>
            <path d="M11.2 6.4H4.8" stroke="#fff" stroke-width="1.667" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="campaign-list-icon-perf-tab-ad"
            elementtiming="element-timing">
            <path d="M2.334 3.267a1.6 1.6 0 011.6-1.6h5.8a1.6 1.6 0 011.6 1.6v7.066h-9V3.267z" fill="#C1C1C1"
                stroke="#C1C1C1" stroke-width="1.6" stroke-linejoin="round"></path>
            <path d="M14.334 2.4v11.2" stroke="#C1C1C1" stroke-width="1.753" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M2.334 12.733a1.6 1.6 0 001.6 1.6h5.8a1.6 1.6 0 001.6-1.6v-2.4h-9v2.4z" fill="#C1C1C1"
                stroke="#C1C1C1" stroke-width="1.6" stroke-linejoin="round"></path>
            <path d="M5.334 12h3.2" stroke="#fff" stroke-width="1.664" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16"
            id="campaign-list-icon-perf-tab-creative-active" elementtiming="element-timing">
            <path d="M16 0H0v16h16V0z" fill="#fff" fill-opacity=".01"></path>
            <path
                d="M2.666 2.933a1.6 1.6 0 011.6-1.6h7.47a1.6 1.6 0 011.6 1.6v6.4H2.666v-6.4zM2.666 12.733a1.6 1.6 0 001.6 1.6h7.47a1.6 1.6 0 001.6-1.6v-3.4H2.666v3.4z"
                fill="#333" stroke="#333" stroke-width="1.6" stroke-linejoin="round"></path>
            <path d="M6.4 12h3.2" stroke="#fff" stroke-width="1.664" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" id="campaign-list-icon-bulk-pause"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2ZM19 16C20.1046 16 21 16.8954 21 18V30C21 31.1046 20.1046 32 19 32C17.8954 32 17 31.1046 17 30V18C17 16.8954 17.8954 16 19 16ZM29 16C30.1046 16 31 16.8954 31 18V30C31 31.1046 30.1046 32 29 32C27.8954 32 27 31.1046 27 30V18C27 16.8954 27.8954 16 29 16Z"
                fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" id="campaign-list-icon-bulk-play"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24,2C11.8,2,2,11.8,2,24c0,12.2,9.8,22,22,22s22-9.8,22-22C46,11.8,36.2,2,24,2z M33,25.7l-12,6.9c-0.6,0.4-1.4,0.4-2,0c-0.6-0.4-1-1-1-1.7V17.1c0-0.7,0.4-1.4,1-1.7c0.6-0.4,1.4-0.4,2,0l12,6.9c0.6,0.4,1,1,1,1.7C34,24.7,33.6,25.4,33,25.7z"
                fill="#2a9c49"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="campaign-list-icon-bulk-delete"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.0001 23C18.0753 23 23.0001 18.0751 23.0001 12C23.0001 5.92487 18.0753 1 12.0001 1C5.92499 1 1.00012 5.92487 1.00012 12C1.00012 18.0751 5.92499 23 12.0001 23Z"
                fill="#ef504b"></path>
            <path
                d="M13.4143 11.9998L15.5356 9.87862C15.9261 9.48809 15.9261 8.85493 15.5356 8.4644C15.145 8.07388 14.5119 8.07388 14.1213 8.4644L12.0001 10.5856L9.87888 8.4644C9.48836 8.07388 8.85519 8.07388 8.46467 8.4644C8.07414 8.85493 8.07414 9.48809 8.46467 9.87862L10.5859 11.9998L8.46449 14.1213C8.07397 14.5118 8.07397 15.1449 8.46449 15.5355C8.85502 15.926 9.48818 15.926 9.87871 15.5355L12.0001 13.4141L14.1215 15.5355C14.512 15.926 15.1452 15.926 15.5357 15.5355C15.9263 15.1449 15.9263 14.5118 15.5357 14.1213L13.4143 11.9998Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
            id="campaign-list-icon-vi-list-export" elementtiming="element-timing">
            <path d="M14 0H0v14h14V0z" fill="currentColor" fill-opacity=".01"></path>
            <path
                d="M2.661 1.167H8.86l3.1 2.916v8.167c0 .322-.278.583-.62.583H2.66c-.342 0-.62-.26-.62-.583V1.75c0-.322.278-.583.62-.583z"
                stroke="currentColor" stroke-width="1.167" stroke-linejoin="round"></path>
            <path d="M9.053 6.117l-2.05 2.05-2.045-2.045M7.004 4.083v3.938M8.972 9.917H5.035" stroke="currentColor"
                stroke-width="1.167" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-drag-handle"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.3776 4.08333C5.02192 4.08333 5.54427 3.56099 5.54427 2.91667C5.54427 2.27233 5.02192 1.75 4.3776 1.75C3.73328 1.75 3.21094 2.27233 3.21094 2.91667C3.21094 3.56099 3.73328 4.08333 4.3776 4.08333ZM5.54427 7C5.54427 7.64432 5.02192 8.16667 4.3776 8.16667C3.73328 8.16667 3.21094 7.64432 3.21094 7C3.21094 6.35568 3.73328 5.83333 4.3776 5.83333C5.02192 5.83333 5.54427 6.35568 5.54427 7ZM5.54427 11.0833C5.54427 11.7277 5.02192 12.25 4.3776 12.25C3.73328 12.25 3.21094 11.7277 3.21094 11.0833C3.21094 10.439 3.73328 9.91667 4.3776 9.91667C5.02192 9.91667 5.54427 10.439 5.54427 11.0833ZM9.6276 4.08333C10.2719 4.08333 10.7943 3.56099 10.7943 2.91667C10.7943 2.27233 10.2719 1.75 9.6276 1.75C8.98328 1.75 8.46094 2.27233 8.46094 2.91667C8.46094 3.56099 8.98328 4.08333 9.6276 4.08333ZM10.7943 7C10.7943 7.64432 10.2719 8.16667 9.6276 8.16667C8.98328 8.16667 8.46094 7.64432 8.46094 7C8.46094 6.35568 8.98328 5.83333 9.6276 5.83333C10.2719 5.83333 10.7943 6.35568 10.7943 7ZM10.7943 11.0833C10.7943 11.7277 10.2719 12.25 9.6276 12.25C8.98328 12.25 8.46094 11.7277 8.46094 11.0833C8.46094 10.439 8.98328 9.91667 9.6276 9.91667C10.2719 9.91667 10.7943 10.439 10.7943 11.0833Z"
                fill="#a9abac"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
            id="campaign-list-icon-column-arrow-up" elementtiming="element-timing">
            <path
                d="M7.41378 1.33687C7.18598 1.10906 6.81663 1.10906 6.58882 1.33687L3.08882 4.83687C2.86102 5.06468 2.86102 5.43402 3.08882 5.66183C3.31663 5.88963 3.68598 5.88963 3.91378 5.66183L6.41797 3.15764V12.2493C6.41797 12.5715 6.67914 12.8327 7.0013 12.8327C7.32347 12.8327 7.58464 12.5715 7.58464 12.2493V3.15764L10.0888 5.66183C10.3166 5.88963 10.686 5.88963 10.9138 5.66183C11.1416 5.43402 11.1416 5.06468 10.9138 4.83687L7.41378 1.33687Z"
                fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
            id="campaign-list-icon-column-arrow-down" elementtiming="element-timing">
            <path
                d="M7.58464 1.74935C7.58464 1.42718 7.32347 1.16602 7.0013 1.16602C6.67914 1.16602 6.41797 1.42718 6.41797 1.74935V10.8411L3.91378 8.33687C3.68598 8.10906 3.31663 8.10906 3.08882 8.33687C2.86102 8.56468 2.86102 8.93402 3.08882 9.16183L6.58882 12.6618C6.81663 12.8896 7.18598 12.8896 7.41378 12.6618L10.9138 9.16183C11.1416 8.93402 11.1416 8.56468 10.9138 8.33687C10.686 8.10906 10.3166 8.10906 10.0888 8.33687L7.58464 10.8411V1.74935Z"
                fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="campaign-list-icon-great"
            elementtiming="element-timing">
            <path d="M16 0H0v16h16V0z" fill="#fff" fill-opacity=".01"></path>
            <path
                d="M9.202 6.2V3.8a1.8 1.8 0 00-1.8-1.8l-2.4 5.4V14h6.972a1.2 1.2 0 001.2-1.02l.828-5.4a1.2 1.2 0 00-1.2-1.38h-3.6zM5 7.336H3.398c-.703-.012-1.304.57-1.398 1.267v4.2a1.386 1.386 0 001.398 1.2H5V7.336z"
                stroke="#999" stroke-width="1.333" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
            id="campaign-list-icon-great-blue-full" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8.06994 12.487C7.97631 12.6976 7.76741 12.8334 7.53688 12.8334C6.34488 12.8334 5.37855 11.8671 5.37855 10.675L5.37855 9.15837L2.81484 9.15837C2.337 9.16273 1.8811 8.95756 1.56747 8.59686C1.25304 8.23524 1.11324 7.75382 1.18515 7.28001L1.90965 2.55507C2.03199 1.75151 2.72672 1.15934 3.53927 1.16671L9.63688 1.16671C9.95905 1.16671 10.2202 1.42788 10.2202 1.75004L10.2202 7.52504C10.2202 7.60666 10.2031 7.68737 10.1699 7.76195L8.06994 12.487Z"
                fill="#009995"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.034 8.16665L9.63688 8.16665C9.31472 8.16665 9.05355 7.90548 9.05355 7.58332L9.05355 1.75016C9.05355 1.42799 9.31472 1.16671 9.63688 1.16671L11.034 1.16682C11.9424 1.15357 12.7181 1.82104 12.84 2.72197C12.8435 2.74788 12.8452 2.77401 12.8452 2.80016L12.8452 6.47516C12.8452 6.50131 12.8435 6.52743 12.84 6.55335C12.7233 7.4154 11.9799 8.18027 11.034 8.16665Z"
                fill="#009995"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-column-delete"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M1.16797 3.5C1.16797 3.17783 1.42914 2.91667 1.7513 2.91667H12.2513C12.5735 2.91667 12.8346 3.17783 12.8346 3.5C12.8346 3.82217 12.5735 4.08333 12.2513 4.08333H1.7513C1.42914 4.08333 1.16797 3.82217 1.16797 3.5Z"
                fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.02022 1.19947C5.11863 1.00074 5.32121 0.875 5.54297 0.875H8.45964C8.68308 0.875 8.8869 1.00264 8.98445 1.20367L9.97516 3.24534C10.0629 3.42612 10.0514 3.63932 9.94473 3.80962C9.83808 3.97992 9.65129 4.08333 9.45035 4.08333H4.53194C4.33017 4.08333 4.14273 3.97906 4.03632 3.80763C3.92991 3.6362 3.91965 3.42195 4.00919 3.24114L5.02022 1.19947ZM5.90504 2.04167L5.47174 2.91667H8.5189L8.09431 2.04167H5.90504Z"
                fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M2.6263 3.5C2.6263 3.17783 2.88747 2.91667 3.20964 2.91667H10.793C11.1151 2.91667 11.3763 3.17783 11.3763 3.5V12.5417C11.3763 12.8638 11.1151 13.125 10.793 13.125H3.20964C2.88747 13.125 2.6263 12.8638 2.6263 12.5417V3.5ZM3.79297 4.08333V11.9583H10.2096V4.08333H3.79297Z"
                fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.83464 5.54167C6.1568 5.54167 6.41797 5.80283 6.41797 6.125V9.625C6.41797 9.94717 6.1568 10.2083 5.83464 10.2083C5.51247 10.2083 5.2513 9.94717 5.2513 9.625V6.125C5.2513 5.80283 5.51247 5.54167 5.83464 5.54167Z"
                fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8.16797 5.54167C8.49014 5.54167 8.7513 5.80283 8.7513 6.125V9.625C8.7513 9.94717 8.49014 10.2083 8.16797 10.2083C7.8458 10.2083 7.58464 9.94717 7.58464 9.625V6.125C7.58464 5.80283 7.8458 5.54167 8.16797 5.54167Z"
                fill="#333333"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none"
            id="campaign-list-icon-common-drawer-close" elementtiming="element-timing">
            <path
                d="M5.13807 4.19526C4.87772 3.93491 4.45561 3.93491 4.19526 4.19526C3.93491 4.45561 3.93491 4.87772 4.19526 5.13807L7.05719 8L4.19526 10.8619C3.93491 11.1223 3.93491 11.5444 4.19526 11.8047C4.45561 12.0651 4.87772 12.0651 5.13807 11.8047L8 8.94281L10.8619 11.8047C11.1223 12.0651 11.5444 12.0651 11.8047 11.8047C12.0651 11.5444 12.0651 11.1223 11.8047 10.8619L8.94281 8L11.8047 5.13807C12.0651 4.87772 12.0651 4.45561 11.8047 4.19526C11.5444 3.93491 11.1223 3.93491 10.8619 4.19526L8 7.05719L5.13807 4.19526Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
            id="campaign-list-icon-common-drawer-edit" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M2.0415 12.25H12.5415" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round"
                stroke-linejoin="round"></path>
            <path d="M3.2085 7.79329V9.91667H5.34268L11.3752 3.88154L9.24455 1.75L3.2085 7.79329Z" fill="currentColor"
                stroke="currentColor" stroke-width="1.16667" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
            id="campaign-list-icon-common-drawer-viewdata" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M1.85718 7L3.85718 7.89552V12.5714H1.85718V7Z" fill="currentColor" stroke="currentColor"
                stroke-width="1.14286" stroke-linejoin="round"></path>
            <path d="M5.85718 7.71428L7.85718 6.57142V12.5714H5.85718V7.71428Z" fill="currentColor"
                stroke="currentColor" stroke-width="1.14286" stroke-linejoin="round"></path>
            <path d="M10.1423 5.24735L12.1423 4.00001V12.5714H10.1423V5.24735Z" fill="currentColor"
                stroke="currentColor" stroke-width="1.14286" stroke-linejoin="round"></path>
            <path d="M1.85718 4.4569L4.56504 5.71429L12.1429 1.42858H8.08271" stroke="currentColor"
                stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
            id="campaign-list-icon-common-drawer-log" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M2.91593 0.583385C2.2716 0.583385 1.74927 1.10572 1.74927 1.75005V12.2501C1.74927 12.8944 2.2716 13.4167 2.91593 13.4167H11.0826C11.7269 13.4167 12.2493 12.8944 12.2493 12.2501V4.08339C12.2493 3.92868 12.1878 3.7803 12.0784 3.67091L9.16175 0.75424C9.05235 0.644844 8.90398 0.583385 8.74927 0.583385H2.91593ZM4.08293 5.41673C4.08293 5.09456 4.34409 4.8334 4.66626 4.8334H9.33293C9.65509 4.8334 9.91626 5.09456 9.91626 5.41673C9.91626 5.73889 9.65509 6.00006 9.33293 6.00006H4.66626C4.34409 6.00006 4.08293 5.73889 4.08293 5.41673ZM4.66626 8.3334C4.34409 8.3334 4.08293 8.59456 4.08293 8.91673C4.08293 9.2389 4.34409 9.50006 4.66626 9.50006H9.33293C9.65509 9.50006 9.91626 9.2389 9.91626 8.91673C9.91626 8.59456 9.65509 8.3334 9.33293 8.3334H4.66626Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
            id="campaign-list-icon-common-drawer-analysis" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M1.86682 0.583401C1.15806 0.583401 0.583496 1.15796 0.583496 1.86672V12.1333C0.583496 12.842 1.15806 13.4166 1.86682 13.4166H12.1334C12.8421 13.4166 13.4167 12.842 13.4167 12.1333V1.86672C13.4167 1.15796 12.8421 0.583401 12.1334 0.583401H1.86682ZM6.7189 3.89205C6.66982 3.6314 6.45107 3.43667 6.18649 3.41809C5.92191 3.39952 5.67811 3.56177 5.59309 3.81301L4.33062 7.5436H2.99998C2.67781 7.5436 2.41665 7.80476 2.41665 8.12693C2.41665 8.4491 2.67781 8.71026 2.99998 8.71026H4.74905C4.99915 8.71026 5.22143 8.55083 5.3016 8.31392L5.98442 6.29616L6.70219 10.1079C6.74861 10.3545 6.94745 10.5437 7.19597 10.5779C7.4445 10.6121 7.68704 10.4835 7.79829 10.2587L8.8582 8.11638L9.35231 8.56069C9.4594 8.65699 9.59833 8.71026 9.74235 8.71026H11C11.3221 8.71026 11.5833 8.4491 11.5833 8.12693C11.5833 7.80476 11.3221 7.5436 11 7.5436H9.96605L9.06643 6.73465C8.93073 6.61263 8.74574 6.56114 8.56652 6.59552C8.38729 6.62989 8.23448 6.74616 8.15355 6.90973L7.52598 8.17817L6.7189 3.89205Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" id="campaign-list-icon-view-data-bar"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M26.111 3a2 2 0 100 4h8.61L17.56 15.807 5.734 11.14a2 2 0 10-1.468 3.72l12.666 5a2 2 0 001.648-.08l25.333-13A2 2 0 0043 3H26.111zm14.913 9.92A2 2 0 0142 14.636V42a3 3 0 01-3 3H8a3 3 0 01-3-3V22a2 2 0 012.683-1.88L18 23.872l9.878-4.94c.055-.037.112-.071.17-.103l11-5.95a2 2 0 011.976.04zM27 23.843V41h-7V27.344l7-3.5zM38 41h-7V21.78l7-3.787V41zm-22 0V27.4l-7-2.545V41h7z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" id="campaign-list-icon-preview1"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M41 40a6 6 0 01-6 6H13a6 6 0 01-6-6V8a6 6 0 016-6h22a6 6 0 016 6v32zm-6 2a2 2 0 002-2v-2.999H11v3a2 2 0 002 2h22zm2-34a2 2 0 00-2-2H13a2 2 0 00-2 2v25.001h26v-25zm-11 4.001a2 2 0 000-4h-4a2 2 0 000 4h4z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" id="icon-single-video-ads-icon">
            <path d="M20 0H0V20H20V0Z" fill="none" fill-opacity="0.01"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75008 3.33366C3.51996 3.33366 3.33341 3.52021 3.33341 3.75033V16.2503C3.33341 16.4804 3.51996 16.667 3.75008 16.667H16.2501C16.4802 16.667 16.6667 16.4804 16.6667 16.2503V3.75033C16.6667 3.52021 16.4802 3.33366 16.2501 3.33366H3.75008ZM1.66675 3.75033C1.66675 2.59973 2.59949 1.66699 3.75008 1.66699H16.2501C17.4007 1.66699 18.3334 2.59973 18.3334 3.75033V16.2503C18.3334 17.4009 17.4007 18.3337 16.2501 18.3337H3.75008C2.59949 18.3337 1.66675 17.4009 1.66675 16.2503V3.75033Z" fill="#currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5001 6.25228C17.5 6.71252 17.1269 7.08555 16.6666 7.08547L3.33328 7.08312C2.87305 7.08304 2.50002 6.70988 2.5001 6.24964C2.50018 5.7894 2.87334 5.41637 3.33358 5.41645L16.6669 5.4188C17.1271 5.41888 17.5002 5.79204 17.5001 6.25228Z" fill="#currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.24476 6.38497C5.8445 6.1578 5.70896 5.65192 5.94204 5.25506L7.55662 2.50589C7.78969 2.10903 8.30311 1.97148 8.70337 2.19866C9.10363 2.42583 9.23917 2.93171 9.00609 3.32857L7.39151 6.07774C7.15844 6.4746 6.64502 6.61215 6.24476 6.38497Z" fill="#currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.505 6.38497C11.1047 6.1578 10.9692 5.65192 11.2023 5.25506L12.8169 2.50589C13.0499 2.10903 13.5634 1.97148 13.9636 2.19866C14.3639 2.42583 14.4994 2.93171 14.2663 3.32857L12.6518 6.07774C12.4187 6.4746 11.9053 6.61215 11.505 6.38497Z" fill="#currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92275 8.44215C8.18401 8.29423 8.50464 8.29828 8.76208 8.45274L12.9287 10.9527C13.1798 11.1033 13.3333 11.3746 13.3333 11.6673C13.3333 11.96 13.1798 12.2313 12.9287 12.3819L8.76208 14.8819C8.50464 15.0364 8.18401 15.0404 7.92275 14.8925C7.66149 14.7446 7.5 14.4675 7.5 14.1673V9.16732C7.5 8.86709 7.66149 8.59007 7.92275 8.44215ZM9.16667 10.6391V12.6955L10.8803 11.6673L9.16667 10.6391Z" fill="#currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"
            id="campaign-list-icon-suggestion-center-operation" elementtiming="element-timing">
            <path d="M12 0H0V12H12V0Z" fill="white" fill-opacity="0.01"></path>
            <rect x="0.75" y="0.75" width="10.5" height="10.5" rx="1.16667" stroke="currentColor"
                stroke-linejoin="round"></rect>
            <path d="M2.57031 6.96706H4.06951L5.26659 3.42969L6.235 8.57254L7.43581 6.14547L8.34949 6.96706H9.42746"
                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" id="campaign-list-icon-more"
            elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12 27a3 3 0 100-6 3 3 0 000 6zm12 0a3 3 0 100-6 3 3 0 000 6zm15-3a3 3 0 11-6 0 3 3 0 016 0z"
                fill="currentColor"></path>
        </symbol>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; width: 0; height: 0" aria-hidden="true" id="__SVG_SPRITE_NODE__" elementtiming="element-timing">
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.167" stroke-linejoin="round" viewBox="0 0 14 14" id="campaign-list-icon-clock" elementtiming="element-timing">
            <path d="M7 12.93a5.35 5.35 0 005.347-5.347A5.35 5.35 0 007 2.236a5.35 5.35 0 00-5.347 5.347A5.35 5.35 0 007 12.93z"></path>
            <path d="M6.93 4.478v3.211l2.267 2.267m-8.03-7.331l2.042-1.458m9.624 1.458l-2.042-1.458" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="icon-account-checked" elementtiming="element-timing">
            <g id="icon-account-checked_check-one">
                <path id="icon-account-checked_Circle" fill-rule="evenodd" clip-rule="evenodd" d="M12 23C14.9562 23 17.7292 21.8271 19.7782 19.7782C21.8271 17.7292 23 14.9562 23 12C23 9.04378 21.8271 6.27076 19.7782 4.22183C17.7292 2.17289 14.9562 1 12 1C9.04378 1 6.27076 2.17289 4.22183 4.22183C2.17289 6.27076 1 9.04378 1 12C1 14.9562 2.17289 17.7292 4.22183 19.7782C6.27076 21.8271 9.04378 23 12 23Z" fill="#009995" style="fill:#009995;fill:color(display-p3 0.0000 0.6000 0.5843);fill-opacity:1;"></path>
                <path id="icon-account-checked_check" d="M11 13.5858L8.70711 11.2929C8.31658 10.9024 7.68342 10.9024 7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071L10.2929 15.7071C10.6834 16.0976 11.3166 16.0976 11.7071 15.7071L17.7071 9.70711C18.0976 9.31658 18.0976 8.68342 17.7071 8.29289C17.3166 7.90237 16.6834 7.90237 16.2929 8.29289L11 13.5858Z" fill="white" style="fill:white;fill-opacity:1;"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" id="icon-account-icon" elementtiming="element-timing">
            <g fill="none" fill-rule="evenodd">
                <path d="M19.835 19.495c.027.218.04.44.04.663 0 .224-.016.434-.048.63-.032.197-.08.344-.144.442-.042.066-.167.131-.375.197a6.232 6.232 0 01-.774.18 25.343 25.343 0 01-2.148.278c-.378.033-.742.06-1.094.082-.35.022-.66.033-.926.033s-.572-.01-.918-.033c-.346-.022-.705-.049-1.077-.082-.373-.032-.74-.068-1.102-.106a18.252 18.252 0 01-.998-.131c-.304-.05-.559-.098-.767-.147-.207-.05-.337-.096-.39-.14-.086-.076-.155-.305-.208-.687-.054-.382-.038-.874.048-1.474.053-.35.189-.611.407-.786a2.73 2.73 0 01.774-.426c.298-.109.604-.204.918-.286a2.737 2.737 0 001.278-.729c.1-.11.175-.218.223-.327a.847.847 0 00.072-.344c0-.12-.005-.257-.016-.41a.806.806 0 00-.223-.515 5.647 5.647 0 00-.416-.369.876.876 0 01-.2-.278 3.47 3.47 0 01-.15-.36 7.739 7.739 0 01-.129-.443.799.799 0 01-.191-.098.91.91 0 01-.168-.196 1.608 1.608 0 01-.168-.36 1.064 1.064 0 01-.063-.434.936.936 0 01.08-.336c.042-.11.1-.208.175-.295-.01-.35.005-.704.048-1.064.043-.306.11-.625.2-.958a3.09 3.09 0 01.423-.925c.17-.262.362-.475.574-.639a2.808 2.808 0 011.325-.573c.224-.033.437-.049.64-.049.542 0 1.027.115 1.452.344.426.23.74.475.942.737.235.294.408.625.52.99.111.366.194.707.247 1.024.053.37.074.742.064 1.113a.619.619 0 01.143.18c.032.066.062.15.088.254.027.104.03.232.008.385a1.322 1.322 0 01-.127.475c-.064.12-.128.213-.192.278a.511.511 0 01-.256.148 7.752 7.752 0 01-.127.442c-.043.12-.096.24-.16.36a.762.762 0 01-.207.262 4.836 4.836 0 01-.232.196c-.07.055-.13.112-.184.172a.904.904 0 00-.135.205c-.038.076-.067.17-.088.278-.021.142-.03.287-.024.434.005.148.04.292.104.434.064.142.167.279.311.41.144.13.343.245.599.343.223.099.47.183.742.254.272.071.532.156.783.254.25.098.473.224.67.377.197.152.338.349.423.59.043.152.077.337.104.556z" fill="#FFF"></path>
                <circle fill="#5A8DFC" cx="15" cy="15" r="15"></circle>
                <rect fill="#5A8DFC" width="30" height="30" rx="3"></rect>
                <path d="M21.25 9a2 2 0 012 2v7.875a2 2 0 01-2 2H9a2 2 0 01-2-2V11a2 2 0 012-2h12.25zm-1.281 8.438H10.28a.469.469 0 100 .937h9.688a.469.469 0 100-.938zm0-2.813h-4.063a.469.469 0 100 .938h4.063a.469.469 0 100-.938zm-7.407-2.813h-1.75a1 1 0 00-1 1v1.75a1 1 0 001 1h1.75a1 1 0 001-1v-1.75a1 1 0 00-1-1zm7.407 0h-4.063a.469.469 0 100 .938h4.063a.469.469 0 100-.938z" fill="#FFF"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="icon-account-user-icon" elementtiming="element-timing">
            <rect width="24" height="24" rx="2" fill="#009995" style="fill:#009995;fill:color(display-p3 0.0000 0.6000 0.5843);fill-opacity:1;"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9999 5.46603C8.38776 5.46603 5.46066 8.39201 5.46066 12C5.46066 15.608 8.38776 18.5339 11.9999 18.5339C15.6121 18.5339 18.5392 15.608 18.5392 12C18.5392 8.39201 15.6121 5.46603 11.9999 5.46603ZM3.59375 12C3.59375 7.35969 7.35794 3.59912 11.9999 3.59912C16.6419 3.59912 20.4061 7.35969 20.4061 12C20.4061 16.6403 16.6419 20.4009 11.9999 20.4009C7.35794 20.4009 3.59375 16.6403 3.59375 12Z" fill="white" style="fill:white;fill-opacity:1;"></path>
            <path d="M14.2039 8.5097C14.2039 9.72659 13.2174 10.713 12.0006 10.713C10.7837 10.713 9.79723 9.72659 9.79723 8.5097C9.79723 7.29282 10.7837 6.30634 12.0006 6.30634C13.2174 6.30634 14.2039 7.29282 14.2039 8.5097Z" fill="white" style="fill:white;fill-opacity:1;"></path>
            <path d="M6.94857 14.4803C8.287 13.2753 10.0579 12.542 12.0006 12.542C13.9433 12.542 15.7137 13.2762 17.0521 14.4811C17.1142 14.5369 17.1755 14.5938 17.2357 14.6517C17.6576 15.057 18.0324 15.5115 18.3513 16.005C17.0066 18.0881 14.6647 19.4674 12.0006 19.4674H11.9993C9.33513 19.4674 6.99394 18.0881 5.64862 16.005C6.01298 15.4411 6.45142 14.9278 6.94857 14.4803Z" fill="white" style="fill:white;fill-opacity:1;"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-add-ad" elementtiming="element-timing">
            <path d="M14 0H0v14h14V0z" fill="#fff" fill-opacity=".01"></path>
            <path d="M.583 7A6.417 6.417 0 117 13.417H1.75A1.167 1.167 0 01.583 12.25V7z" fill="#F45858"></path>
            <path d="M7 4.083v5.834M4.083 7h5.834" stroke="#001F3E" stroke-width="1.167" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 15" id="icon-announcement" elementtiming="element-timing">
            <path d="M14 4c.368 0 .667.298.667.667v8.424c0 .502-.299.909-.667.909H2c-.368 0-.667-.407-.667-.91V4.668C1.333 4.298 1.632 4 2 4h12z" stroke="currentColor" stroke-width="1.333" stroke-linejoin="round"></path>
            <path d="M4 5l4-3.667L12 5M4.667 10.666h3.666M4.667 8h6.666" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15" id="icon-approval-status" elementtiming="element-timing">
            <path d="M1.667 12l.001-2.652c0-.184.15-.334.334-.334h3.334c.307 0 .305-.272.305-.92 0-.65-1.634-1.196-1.634-3.476 0-2.28 1.693-2.951 3.1-2.951 1.406 0 2.938.67 2.938 2.95 0 2.281-1.625 2.644-1.625 3.476 0 .833 0 .921.26.921H12c.184 0 .333.15.333.334V12H1.667z" stroke="currentColor" stroke-width="1.343" stroke-linejoin="round"></path>
            <path d="M1.667 14h10.666" stroke="currentColor" stroke-width="1.343" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" id="icon-arrow" elementtiming="element-timing">
            <defs>
                <style></style>
            </defs>
            <path d="M948.56 281.18c-13.765-13.833-36.127-13.833-49.893 0L511.991 668.591 125.314 281.18c-13.764-13.798-36.093-13.798-49.857 0-13.8 13.798-13.8 36.162 0 49.994l410.858 411.674c7.067 7.085 16.402 10.521 25.675 10.33 9.275.192 18.61-3.245 25.678-10.33l410.891-411.71c6.864-6.898 10.332-15.94 10.332-24.98s-3.467-18.08-10.33-24.978z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="icon-asset" elementtiming="element-timing">
            <path d="M16 0H0V16H16V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M8 5.33325V7.99992" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M4.33301 10.5873V8H11.6663V11" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M10.3337 2H5.66699V5H10.3337V2Z" stroke="currentColor" stroke-width="1.33333" stroke-linejoin="round"></path>
            <path d="M6.66667 11H2V14H6.66667V11Z" stroke="currentColor" stroke-width="1.33333" stroke-linejoin="round"></path>
            <path d="M13.9997 11H9.33301V14H13.9997V11Z" stroke="currentColor" stroke-width="1.33333" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24" fill="none" id="icon-bc-icon" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8565 5.33203C7.84102 5.22347 7.83301 5.1125 7.83301 4.99966V4.33311C7.83301 3.04457 8.87758 2 10.1661 2H14.832C16.1205 2 17.1651 3.04457 17.1651 4.33311V4.99966C17.1651 5.1125 17.1571 5.22347 17.1416 5.33203H20.1639C21.4524 5.33203 22.497 6.3766 22.497 7.66514V19.6631C22.497 20.9517 21.4524 21.9962 20.1639 21.9962H4.83311C3.54457 21.9962 2.5 20.9517 2.5 19.6631V7.66514C2.5 6.3766 3.54457 5.33203 4.83311 5.33203H7.8565ZM9.83301 4.33311C9.83301 4.14914 9.98215 4 10.1661 4H14.832C15.016 4 15.1651 4.14914 15.1651 4.33311V4.99966C15.1651 5.17612 15.0279 5.32053 14.8544 5.33203H10.1437C9.97021 5.32053 9.83301 5.17612 9.83301 4.99966V4.33311ZM10.1068 7.33203H4.83311C4.64914 7.33203 4.5 7.48117 4.5 7.66514V11.4004H8.5V11C8.5 10.4477 8.94772 10 9.5 10C10.0523 10 10.5 10.4477 10.5 11V11.4004H14.5V11C14.5 10.4477 14.9477 10 15.5 10C16.0523 10 16.5 10.4477 16.5 11V11.4004H20.497V7.66514C20.497 7.48117 20.3478 7.33203 20.1639 7.33203H14.8913C14.8716 7.33252 14.8518 7.33277 14.832 7.33277H10.1661C10.1463 7.33277 10.1265 7.33252 10.1068 7.33203ZM4.5 19.6631V13.4004H8.5V14C8.5 14.5523 8.94772 15 9.5 15C10.0523 15 10.5 14.5523 10.5 14V13.4004H14.5V14C14.5 14.5523 14.9477 15 15.5 15C16.0523 15 16.5 14.5523 16.5 14V13.4004H20.497V19.6631C20.497 19.8471 20.3478 19.9962 20.1639 19.9962H4.83311C4.64914 19.9962 4.5 19.8471 4.5 19.6631Z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24" fill="none" id="icon-bell-content-icon" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8962 0C12.4264 0 12.8562 0.441582 12.8562 0.986301V1.20548C12.8562 1.22236 12.8558 1.23915 12.855 1.25582C16.5186 1.68957 19.3632 4.88716 19.3632 8.76737V16.4375H21.7093C22.2395 16.4375 22.6693 16.8791 22.6693 17.4238C22.6693 17.9685 22.2395 18.4101 21.7093 18.4101H2.29594C1.76574 18.4101 1.33594 17.9685 1.33594 17.4238C1.33594 16.8791 1.76574 16.4375 2.29594 16.4375H4.64323V8.76737C4.64323 4.96244 7.37859 1.81389 10.9392 1.28417C10.9372 1.25821 10.9362 1.23197 10.9362 1.20548V0.986301C10.9362 0.441582 11.366 0 11.8962 0ZM17.4438 8.76678C17.4438 5.68003 15.0082 3.17773 12.0038 3.17773C8.99937 3.17773 6.5638 5.68003 6.5638 8.76678V16.3916H17.4438V8.76678ZM15.2024 18.7397C15.7326 18.7397 16.1624 19.1813 16.1624 19.726C16.1624 22.0865 14.3 24 12.0024 24C9.70494 24 7.84245 22.0865 7.84245 19.726C7.84245 19.1813 8.27225 18.7397 8.80245 18.7397C9.33264 18.7397 9.76245 19.1813 9.76245 19.726C9.76245 20.997 10.7653 22.0274 12.0024 22.0274C13.2396 22.0274 14.2424 20.997 14.2424 19.726C14.2424 19.1813 14.6723 18.7397 15.2024 18.7397Z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 18" id="icon-bell-ring" elementtiming="element-timing">
            <g fill-rule="nonzero" fill="none">
                <path d="M12.08 6.575c0-2.315-1.827-4.191-4.08-4.191S3.92 4.26 3.92 6.575v5.719h8.16V6.575zM8.64.942c2.747.325 4.88 2.723 4.88 5.633v5.754h1.76a.73.73 0 01.72.74.73.73 0 01-.72.74H.72a.73.73 0 01-.72-.74.73.73 0 01.72-.74h1.76V6.575c0-2.853 2.052-5.215 4.722-5.612A.77.77 0 017.2.904V.74A.73.73 0 017.92 0a.73.73 0 01.72.74v.202zm2.48 13.853C11.12 16.565 9.723 18 8 18s-3.12-1.435-3.12-3.205a.73.73 0 01.72-.74.73.73 0 01.72.74c0 .953.752 1.726 1.68 1.726.928 0 1.68-.773 1.68-1.726a.73.73 0 01.72-.74.73.73 0 01.72.74z" fill="currentColor"></path>
                <circle fill="#F45858" cx="14" cy="2" r="2"></circle>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 18" id="icon-bell" elementtiming="element-timing">
            <path d="M12.08 6.575c0-2.315-1.827-4.191-4.08-4.191S3.92 4.26 3.92 6.575v5.719h8.16V6.575zM8.64.942c2.747.325 4.88 2.723 4.88 5.633v5.754h1.76a.73.73 0 01.72.74.73.73 0 01-.72.74H.72a.73.73 0 01-.72-.74.73.73 0 01.72-.74h1.76V6.575c0-2.853 2.052-5.215 4.722-5.612A.77.77 0 017.2.904V.74A.73.73 0 017.92 0a.73.73 0 01.72.74v.202zm2.48 13.853C11.12 16.565 9.723 18 8 18s-3.12-1.435-3.12-3.205a.73.73 0 01.72-.74.73.73 0 01.72.74c0 .953.752 1.726 1.68 1.726.928 0 1.68-.773 1.68-1.726a.73.73 0 01.72-.74.73.73 0 01.72.74z" fill="currentColor" fill-rule="nonzero"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="icon-business" elementtiming="element-timing">
            <path d="M16 0H0v16h16V0z" fill="#fff" fill-opacity=".01"></path>
            <path d="M13.334 3.666H2.667c-.737 0-1.333.597-1.333 1.333v8.334c0 .736.596 1.333 1.333 1.333h10.666c.737 0 1.334-.597 1.334-1.333V4.999c0-.736-.597-1.333-1.333-1.333z" stroke="currentColor" stroke-width="1.343"></path>
            <path d="M10.333 1.333H5.667A.667.667 0 005 2v1c0 .368.298.666.667.666h4.666A.667.667 0 0011 3V2a.667.667 0 00-.667-.667z" stroke="currentColor" stroke-width="1.343"></path>
            <path d="M1.667 9l5.596 2.783c.36.18.783.186 1.149.018l5.754-2.634" stroke="currentColor" stroke-width="1.343" stroke-linecap="square"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 8.666a1 1 0 100-2 1 1 0 000 2z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FAAD15" id="icon-circle-warning" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM13.5 17.5C13.5 16.6716 12.8284 16 12 16C11.1716 16 10.5 16.6716 10.5 17.5C10.5 18.3284 11.1716 19 12 19C12.8284 19 13.5 18.3284 13.5 17.5ZM12 5C10.9138 5 10.0507 5.91244 10.1109 6.99692L10.4168 12.5023C10.4635 13.3426 11.1584 14 12 14C12.8416 14 13.5365 13.3426 13.5832 12.5023L13.8891 6.99692C13.9493 5.91244 13.0862 5 12 5Z" fill="#FAAD15"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="#121415" id="icon-custom-mode" elementtiming="element-timing">
            <path d="M48 0H0V48H48V0Z" fill="currentColor" fill-opacity="0.01"></path>
            <path d="M44 14L24 4L4 14V34L24 44L44 34V14Z" stroke="currentColor" stroke-width="4" stroke-linejoin="round"></path>
            <path d="M4 14L24 24" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 44V24" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M44 14L24 24" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M34 9L14 19" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="icon-feedback" elementtiming="element-timing">
            <path d="M0 0h16v16H0V0z" fill="#fff" fill-opacity=".01"></path>
            <path d="M11 12.667H7.333V10H12V7.333h2.667v5.334H13l-1 1-1-1z" stroke="currentColor" stroke-width="1.343" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M1.333 2H12v8H5.667l-1.334 1.333L3 10H1.333V2z" stroke="currentColor" stroke-width="1.343" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M4 7.333h2M4 4.667h4" stroke="currentColor" stroke-width="1.343" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 87 68" id="icon-guide-account" elementtiming="element-timing">
            <defs>
                <path d="M3.906 0a3.91 3.91 0 013.906 3.914v7.827H0V3.914l.005-.202A3.91 3.91 0 013.906 0z" id="icon-guide-account_a"></path>
                <path d="M8.279.472a3.91 3.91 0 013.906 3.914v7.827H.466c1.061.016 1.983-.369 2.764-1.156.781-.788 1.162-1.714 1.142-2.78V4.385l.005-.202A3.91 3.91 0 018.28.472z" id="icon-guide-account_b"></path>
            </defs>
            <g transform="translate(0 1)" fill="none" fill-rule="evenodd">
                <path d="M77.875 12.615V41.83l8.627 10.889V23.504l-8.627-10.889z" stroke="#1A3775" stroke-width=".5" fill="#009995"></path>
                <path d="M70.375 16.047v29.468l16.127 7.53V23.575l-16.127-7.53z" stroke="#1A3775" stroke-width=".5" fill="#FFF"></path>
                <g fill="#FFF" stroke="#1A3775" stroke-width=".5">
                    <path d="M31.625 61.072H37.6v5.678h-5.975z"></path>
                    <path d="M31.625 55.512H37.6v5.678h-5.975zM20.25 49.81h5.975v5.679H20.25z"></path>
                    <path d="M20.25 44.25h5.975v5.678H20.25zM37.483 61.072h5.975v5.678h-5.975z"></path>
                    <path d="M37.483 55.512h5.975v5.678h-5.975zM26.108 49.81h5.975v5.679h-5.975z"></path>
                    <path d="M26.108 44.25h5.975v5.678h-5.975zM43.342 61.072h5.975v5.678h-5.975z"></path>
                    <path d="M43.342 55.512h5.975v5.678h-5.975zM31.967 49.81h5.975v5.679h-5.975z"></path>
                    <path d="M31.967 44.25h5.975v5.678h-5.975zM49.2 61.072h5.975v5.678H49.2z"></path>
                    <path d="M49.2 55.512h5.975v5.678H49.2zM37.825 49.81H43.8v5.679h-5.975z"></path>
                    <path d="M37.825 44.25H43.8v5.678h-5.975z"></path>
                </g>
                <path d="M20.063 3.955V32.86c0 1.726 1.399 3.125 3.125 3.125h36.01v-25c0-1.726-1.4-3.125-3.125-3.125h-24.24 0l-11.77-3.906z" stroke="#1A3775" stroke-width=".5" fill="#FFF"></path>
                <path d="M47.457 19.58v28.906c0 1.726 1.4 3.125 3.125 3.125h36.01V23.486H59.229l-11.77-3.906z" stroke="#1A3775" stroke-width=".5" fill="#FFF"></path>
                <use stroke="#1A3775" stroke-width=".5" fill="#E4E9ED" xlink:href="#icon-guide-account_a" transform="matrix(0 1 1 0 20.063 .048)"></use>
                <use stroke="#1A3775" stroke-width=".5" fill="#E4E9ED" xlink:href="#icon-guide-account_b" transform="matrix(0 1 1 0 46.985 11.301)"></use>
                <path d="M77 47.589C60.946 32.703 48.76 23.177 40.444 19.01c-12.475-6.249-16.886-4.98-13.11 2.648 3.175 6.418 2.118 13.411-6.606 10.795-1.646-.493-4.434-2.019-7.421-3.316-17.217-7.479-11.557 1.265-7.682 6.848S9.89 43.832 0 43.832" stroke="#121415" stroke-width=".5"></path>
                <path d="M86.502 23.527L67.25 30.608v29.487l19.252-7.081V23.527z" stroke="#1A3775" stroke-width=".5" fill="#FFF"></path>
                <path d="M86.502 23.773L73.5 36.799V66.11l13.002-13.026V23.773z" stroke="#1A3775" stroke-width=".5" fill="#009995"></path>
                <ellipse stroke="#1A3775" stroke-width=".5" cx="53.563" cy="4.07" rx="3.438" ry="3.444"></ellipse>
                <ellipse stroke="#1A3775" stroke-width=".5" cx="9.5" cy="57.514" rx="7.5" ry="7.514"></ellipse>
                <g stroke="#1A3775" stroke-width=".5">
                    <path fill="#009995" d="M25.375 38.447h6.375V66.75h-6.375z"></path>
                    <path fill="#FFF" d="M28.563 25.047L32 37.233h-6.875z"></path>
                    <path fill="#009995" d="M28.563 25.047l1.59 5.635h-3.18z"></path>
                </g>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 4" fill="none" id="icon-has-new-feature" elementtiming="element-timing">
            <path d="M2 4C3.10457 4 4 3.10457 4 2C4 0.89543 3.10457 0 2 0C0.89543 0 0 0.89543 0 2C0 3.10457 0.89543 4 2 4Z" fill="#F45858"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-header-account" elementtiming="element-timing">
            <path opacity=".01" fill="#fff" d="M0 0h14v14H0z"></path>
            <path d="M3.79 12.833H2.8c-.58 0-1.05-.522-1.05-1.166V2.333c0-.644.47-1.166 1.05-1.166h8.4c.58 0 1.05.522 1.05 1.166v2.369" stroke="#000" stroke-width="1.167" stroke-linecap="round"></path>
            <path d="M10.668 12.86l1.968-3.354-1.968-3.355H6.73L4.761 9.506l1.97 3.354h3.937z" stroke="#000" stroke-width="1.167" stroke-linejoin="round"></path>
            <path d="M8.699 10.527a1.02 1.02 0 100-2.042 1.02 1.02 0 000 2.042z" stroke="#000" stroke-width="1.167" stroke-linejoin="round"></path>
            <path d="M2.04 3.792h9.949" stroke="#000" stroke-width="1.167"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" id="icon-header-logout" elementtiming="element-timing">
            <path fill="#fff" fill-opacity=".01" d="M0 0h12v12H0z"></path>
            <path d="M5.998 1H1v10h5M8.5 8.5L11 6 8.5 3.5M3.778 5.998H11" stroke="#009995" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-header-user" elementtiming="element-timing">
            <path fill="#fff" fill-opacity=".01" d="M0 0h14v14H0z"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.847 11.53h2.408a.611.611 0 110 1.223H1.199a.611.611 0 01-.61-.611 6.429 6.429 0 014.277-6.068 2.976 2.976 0 01-1.118-2.335 3.007 3.007 0 116.007 0 2.982 2.982 0 01-1.027 2.243.611.611 0 01-.367 1.161 5.03 5.03 0 00-1.417-.202 5.164 5.164 0 00-5.097 4.59zm6.554-8.478a1.784 1.784 0 10-3.294 1.374 1.784 1.784 0 003.294-1.374zM11.454 6.27l1.73 1.729a.611.611 0 010 .867l-4.321 4.32a.641.641 0 01-.434.178h-1.73a.611.611 0 01-.61-.611v-1.73a.642.642 0 01.176-.433l4.32-4.32a.611.611 0 01.869 0zM7.31 12.141h.862l3.715-3.71-.867-.867-3.71 3.715v.862z" fill="#333"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="icon-infor-o" elementtiming="element-timing">
            <path fill="#D8D8D8" fill-opacity=".01" d="M0 0h14v14H0z"></path>
            <mask id="icon-infor-o_a" maskUnits="userSpaceOnUse" x="0" y="0" width="14" height="14">
                <path fill="#fff" d="M0 0h14v14H0z"></path>
            </mask>
            <g mask="url(#icon-infor-o_a)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14A7 7 0 107 0a7 7 0 000 14zm-.704-8.868a.844.844 0 01.694-.364c.34 0 .614.282.603.622l-.166 5.208h.771l-.385.511a.667.667 0 01-1.2-.401V5.985l-.771-.195.454-.658zm1.43-1.89a.722.722 0 11-1.444 0 .722.722 0 011.444 0z" fill="#009995"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20" fill="none" id="icon-ks-close" elementtiming="element-timing">
            <path d="M5.0547 4.92807C4.8265 4.70065 4.45716 4.70128 4.22974 4.92947C4.00232 5.15767 4.00295 5.52701 4.23114 5.75443L8.49255 10.0014L4.2456 14.2628C4.01819 14.491 4.01881 14.8603 4.24701 15.0878C4.4752 15.3152 4.84455 15.3145 5.07196 15.0863L9.31891 10.8249L13.5803 15.0719C13.8085 15.2993 14.1779 15.2987 14.4053 15.0705C14.6327 14.8423 14.6321 14.4729 14.4039 14.2455L10.1425 9.99858L14.3894 5.73716C14.6168 5.50897 14.6162 5.13962 14.388 4.91221C14.1598 4.68479 13.7905 4.68542 13.5631 4.91361L9.31611 9.17502L5.0547 4.92807Z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="icon-ks-error" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99967 13.4166C10.5435 13.4166 13.4163 10.5438 13.4163 6.99998C13.4163 3.45615 10.5435 0.583313 6.99967 0.583313C3.45585 0.583313 0.583008 3.45615 0.583008 6.99998C0.583008 10.5438 3.45585 13.4166 6.99967 13.4166Z" fill="#FFC6BD" style="fill:#FFC6BD;fill:color(display-p3 1.0000 0.7765 0.7412);fill-opacity:1;"></path>
            <rect x="3.20801" y="6.41666" width="7.58333" height="1.16667" rx="0.583333" fill="#4E0C0B" style="fill:#4E0C0B;fill:color(display-p3 0.3059 0.0471 0.0431);fill-opacity:1;"></rect>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" fill="none" id="icon-ks-info" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8699 11.5372C10.6747 12.7325 9.05714 13.4166 7.33268 13.4166C5.60822 13.4166 3.99063 12.7325 2.79541 11.5372C1.6002 10.342 0.916016 8.72444 0.916016 6.99998C0.916016 5.27552 1.6002 3.65792 2.79541 2.46271C3.99063 1.2675 5.60822 0.583313 7.33268 0.583313C9.05714 0.583313 10.6747 1.2675 11.8699 2.46271C13.0652 3.65792 13.7493 5.27552 13.7493 6.99998C13.7493 8.72444 13.0652 10.342 11.8699 11.5372Z" fill="#9EE1DD" style="fill:#9EE1DD;fill:color(display-p3 0.6196 0.8824 0.8667);fill-opacity:1;"></path>
            <path d="M6.89583 9.3333H6.45833C6.13617 9.3333 5.875 9.59447 5.875 9.91664C5.875 10.2388 6.13617 10.5 6.45833 10.5H8.5C8.82217 10.5 9.08333 10.2388 9.08333 9.91664C9.08333 9.59447 8.82217 9.3333 8.5 9.3333H8.0625V5.8333C8.0625 5.51114 7.80133 5.24997 7.47917 5.24997H6.89583C6.57367 5.24997 6.3125 5.51114 6.3125 5.8333C6.3125 6.15547 6.57367 6.41664 6.89583 6.41664V9.3333Z" fill="#092A3A" style="fill:#092A3A;fill:color(display-p3 0.0353 0.1647 0.2275);fill-opacity:1;"></path>
            <path d="M7.33326 3.20831C7.73597 3.20831 8.06243 3.53477 8.06243 3.93748C8.06243 4.34019 7.73597 4.66665 7.33326 4.66665C6.93055 4.66665 6.6041 4.34019 6.6041 3.93748C6.6041 3.53477 6.93055 3.20831 7.33326 3.20831Z" fill="#092A3A" style="fill:#092A3A;fill:color(display-p3 0.0353 0.1647 0.2275);fill-opacity:1;"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="icon-ks-pagination-arrow" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 16.4715C14.2114 16.7318 13.7893 16.7318 13.5289 16.4715L9.52892 12.4715C9.26857 12.2111 9.26857 11.789 9.52892 11.5286L13.5289 7.52865C13.7893 7.2683 14.2114 7.2683 14.4717 7.52865C14.7321 7.789 14.7321 8.21111 14.4717 8.47146L10.9431 12.0001L14.4717 15.5286C14.7321 15.789 14.7321 16.2111 14.4717 16.4715Z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14" fill="none" id="icon-ks-warning" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8699 11.5373C10.6747 12.7325 9.05714 13.4167 7.33268 13.4167C5.60822 13.4167 3.99063 12.7325 2.79541 11.5373C1.6002 10.3421 0.916016 8.72447 0.916016 7.00001C0.916016 5.27555 1.6002 3.65796 2.79541 2.46274C3.99063 1.26753 5.60822 0.583344 7.33268 0.583344C9.05714 0.583344 10.6747 1.26753 11.8699 2.46274C13.0652 3.65796 13.7493 5.27555 13.7493 7.00001C13.7493 8.72447 13.0652 10.3421 11.8699 11.5373Z" fill="#FAD253" style="fill:#FAD253;fill:color(display-p3 0.9804 0.8235 0.3255);fill-opacity:1;"></path>
            <path d="M6.74942 8.16666V3.49999C6.74942 3.17782 7.01059 2.91666 7.33275 2.91666C7.65492 2.91666 7.91609 3.17782 7.91609 3.49999V8.16666C7.91609 8.48882 7.65492 8.74999 7.33275 8.74999C7.01059 8.74999 6.74942 8.48882 6.74942 8.16666Z" fill="#201507" style="fill:#201507;fill:color(display-p3 0.1255 0.0824 0.0275);fill-opacity:1;"></path>
            <path d="M8.06185 10.0625C8.06185 10.4652 7.73539 10.7917 7.33268 10.7917C6.92997 10.7917 6.60352 10.4652 6.60352 10.0625C6.60352 9.65979 6.92997 9.33333 7.33268 9.33333C7.73539 9.33333 8.06185 9.65979 8.06185 10.0625Z" fill="#201507" style="fill:#201507;fill:color(display-p3 0.1255 0.0824 0.0275);fill-opacity:1;"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 14" id="icon-new-features" elementtiming="element-timing">
            <path d="M7.333 11L4 13v-2H2a.667.667 0 01-.667-.667V1.667C1.333 1.298 1.632 1 2 1h12c.368 0 .667.298.667.667v8.666A.667.667 0 0114 11H7.333z" stroke="currentColor" stroke-width="1.333" stroke-linejoin="round"></path>
            <path d="M5.798 7.667V5.603c0-.342-.048-.648-.324-.924-.173-.174-.42-.276-.726-.276-.258 0-.551.102-.75.3v-.264h-.96v3.228h.985V5.735c0-.372.264-.444.396-.444s.396.072.396.444v1.932h.983zM8.934 6.37v-.438c0-.846-.516-1.53-1.452-1.53-.846 0-1.446.594-1.446 1.65 0 1.392.822 1.65 1.536 1.65.6 0 .924-.18 1.254-.51l-.588-.588c-.174.174-.324.27-.666.27-.366 0-.57-.24-.57-.504h1.932zm-.972-.654h-.96c0-.078.012-.168.054-.252.06-.138.192-.252.426-.252.234 0 .366.114.426.252a.563.563 0 01.054.252zm5.497-1.278h-1.038l-.402 1.674-.558-1.674h-.684l-.558 1.674-.402-1.674H8.78l.972 3.228h.786l.582-1.77.582 1.77h.786l.972-3.228z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 25" fill="none" id="icon-new" elementtiming="element-timing">
            <path d="M0 5.99999C0 4.34314 1.47746 3 3.3 3H29.7C31.5225 3 33 4.34315 33 6V18C33 19.6569 31.5225 21 29.7 21H3.3C1.47746 21 0 19.6569 0 18V5.99999Z" fill="#E9EBFF"></path>
            <path d="M4.49512 16.4131V7.95312H6.83512L9.93112 15.4411H9.99112V7.95312H11.3231V16.4131H8.98312L5.89912 8.92512H5.82712V16.4131H4.49512ZM18.7289 15.2131C18.4969 15.6451 18.1529 15.9771 17.6969 16.2091C17.2489 16.4411 16.6809 16.5571 15.9929 16.5571C15.3449 16.5571 14.7889 16.4171 14.3249 16.1371C13.8609 15.8571 13.5009 15.4651 13.2449 14.9611C12.9969 14.4491 12.8729 13.8531 12.8729 13.1731C12.8729 12.5171 13.0049 11.9451 13.2689 11.4571C13.5409 10.9611 13.9049 10.5771 14.3609 10.3051C14.8249 10.0251 15.3489 9.88512 15.9329 9.88512C16.8369 9.88512 17.5489 10.1571 18.0689 10.7011C18.5889 11.2371 18.8489 11.9691 18.8489 12.8971C18.8489 13.0091 18.8449 13.1251 18.8369 13.2451C18.8369 13.3571 18.8329 13.4491 18.8249 13.5211H14.2529C14.2849 14.1211 14.4529 14.5971 14.7569 14.9491C15.0609 15.3011 15.5049 15.4771 16.0889 15.4771C16.4249 15.4771 16.7289 15.4131 17.0009 15.2851C17.2729 15.1491 17.4969 14.9291 17.6729 14.6251L18.7289 15.2131ZM15.9329 10.8571C15.4769 10.8571 15.0969 10.9971 14.7929 11.2771C14.4889 11.5571 14.3129 12.0011 14.2649 12.6091H17.5289C17.5049 12.0411 17.3529 11.6091 17.0729 11.3131C16.7929 11.0091 16.4129 10.8571 15.9329 10.8571ZM21.1148 16.4131L19.6628 10.0291H21.0068L22.0268 15.5011H22.0748L23.1668 10.0291H25.0268L26.1188 15.5011H26.1668L27.1868 10.0291H28.5308L27.0788 16.4131H25.2308L24.1268 10.9411H24.0668L22.9628 16.4131H21.1148Z" fill="#665CD6"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 14" id="icon-question-icon" elementtiming="element-timing">
            <defs>
                <path d="M7 0a7 7 0 110 14A7 7 0 017 0zm-.137 9.753a.52.52 0 00-.525.517.52.52 0 00.525.516.52.52 0 00.525-.516.52.52 0 00-.525-.517zM7 2.917c-1.235 0-2.246.943-2.328 2.138l-.005.157v.015a.525.525 0 101.05 0l-.002-.016h.002c0-.696.574-1.262 1.283-1.262s1.283.566 1.283 1.263c0 .404-.156.677-.67 1.228l-.242.259c-.188.205-.327.37-.455.548a3.768 3.768 0 00-.481.977c-.02.057-.034.123-.046.197l-.002.01a.524.524 0 00-.01.057l-.005.05c.002.002.002.004.002.007a.525.525 0 001.05 0v-.007c.022-.093.038-.125.098-.266.06-.14.142-.274.255-.433.544-.764 1.556-1.36 1.556-2.627C9.333 3.944 8.29 2.917 7 2.917z" id="icon-question-icon_a"></path>
            </defs>
            <use fill="#D6D6D6" xlink:href="#icon-question-icon_a" fill-rule="evenodd"></use>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 24" fill="none" id="icon-quick-contact" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.72183 4.22183C6.71134 2.23231 9.46271 1 12.5 1C15.5373 1 18.2887 2.23231 20.2782 4.22183C22.2677 6.21134 23.5 8.96271 23.5 12C23.5 15.0373 22.2677 17.7887 20.2782 19.7782C18.2887 21.7677 15.5373 23 12.5 23C9.46271 23 6.71134 21.7677 4.72183 19.7782C2.73231 17.7887 1.5 15.0373 1.5 12C1.5 8.96271 2.73231 6.21134 4.72183 4.22183ZM12.5 3C10.0144 3 7.76581 4.00626 6.13604 5.63604C4.50626 7.26581 3.5 9.51444 3.5 12C3.5 14.4856 4.50626 16.7342 6.13604 18.364C7.76581 19.9937 10.0144 21 12.5 21C14.9856 21 17.2342 19.9937 18.864 18.364C20.4937 16.7342 21.5 14.4856 21.5 12C21.5 9.51444 20.4937 7.26581 18.864 5.63604C17.2342 4.00626 14.9856 3 12.5 3Z" fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 9.3125C8.5 7.10336 10.2909 5.3125 12.5 5.3125C14.7091 5.3125 16.5 7.10336 16.5 9.3125C16.5 11.1763 15.2252 12.7424 13.5 13.1865V14.3125C13.5 14.8648 13.0523 15.3125 12.5 15.3125C11.9477 15.3125 11.5 14.8648 11.5 14.3125V12.3125C11.5 11.7602 11.9477 11.3125 12.5 11.3125C13.6046 11.3125 14.5 10.4171 14.5 9.3125C14.5 8.20793 13.6046 7.3125 12.5 7.3125C11.3954 7.3125 10.5 8.20793 10.5 9.3125C10.5 9.86478 10.0523 10.3125 9.5 10.3125C8.94772 10.3125 8.5 9.86478 8.5 9.3125Z" fill="currentColor"></path>
            <path d="M12.5 18.8125C13.1904 18.8125 13.75 18.2529 13.75 17.5625C13.75 16.8721 13.1904 16.3125 12.5 16.3125C11.8096 16.3125 11.25 16.8721 11.25 17.5625C11.25 18.2529 11.8096 18.8125 12.5 18.8125Z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20" id="icon-refresh" elementtiming="element-timing">
            <g fill-rule="nonzero" fill="none">
                <path d="M-2.662-2h24v24h-24z"></path>
                <g fill="currentColor">
                    <path d="M1.477 14.385l1.656-.652.04-.01a7.2 7.2 0 0013.363-3.59h1.8a9 9 0 01-16.86 4.252zM.339 9.862a9 9 0 0116.948-4.085l-1.74.577A7.2 7.2 0 002.139 9.858l-.012.004H.339z"></path>
                    <path d="M17.433 11.053a.9.9 0 100-1.8.9.9 0 000 1.8zM1.24 10.75a.9.9 0 100-1.8.9.9 0 000 1.8zM16.394.944a.9.9 0 01.9.9v4.2a.9.9 0 01-1.8 0v-4.2a.9.9 0 01.9-.9zM2.337 13.161a.9.9 0 01.9.9v4.2a.9.9 0 11-1.8 0v-4.2a.9.9 0 01.9-.9z"></path>
                </g>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="icon-setting" elementtiming="element-timing">
            <path d="M16 0H0V16H16V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M11.3334 13.6667L14.6666 8L11.3334 2.33333H4.6667L1.33331 8L4.6667 13.6667H11.3334Z" stroke="#333333" stroke-width="1.33333" stroke-linejoin="round"></path>
            <path d="M7.99998 9.66667C8.92045 9.66667 9.66665 8.92048 9.66665 8C9.66665 7.07953 8.92045 6.33333 7.99998 6.33333C7.07951 6.33333 6.33331 7.07953 6.33331 8C6.33331 8.92048 7.07951 9.66667 7.99998 9.66667Z" stroke="#333333" stroke-width="1.33333" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="#121415" id="icon-simplified-mode" elementtiming="element-timing">
            <rect width="48" height="48" fill="currentColor" fill-opacity="0.01"></rect>
            <path d="M48 0H0V48H48V0Z" fill="currentColor" fill-opacity="0.01"></path>
            <path d="M15.5 9L7 14V24V34L15.5 39L24 44L32.5001 39L41 34V24V14L32.5001 9L24 4L15.5 9Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M41 14L24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M7 14L24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 44V24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M32 19L32 39" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M41.0002 24L24.0002 34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M24 34L7 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M16 39L16 19" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M32 9L16 19" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M32 19L16 9" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22 16" id="icon-success" elementtiming="element-timing">
            <defs>
                <path id="icon-success_a" d="M0 0h24v24H0z"></path>
            </defs>
            <g transform="translate(-1 -5)" fill="none" fill-rule="evenodd">
                <mask id="icon-success_b" fill="#fff">
                    <use xlink:href="#icon-success_a"></use>
                </mask>
                <path d="M7.82 1.152v17.3a.9.9 0 11-1.8 0V.252a.9.9 0 01.9-.9h10.2a.9.9 0 110 1.8h-9.3z" fill="currentColor" mask="url(#icon-success_b)" transform="rotate(-135 12.02 9.352)"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-ai-symbol" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.94653 0.878001C9.82015 1.41615 9.66478 2.07776 9.25811 2.48443C8.85144 2.8911 8.18983 3.04647 7.65168 3.17285C7.16192 3.28787 6.77441 3.37887 6.77441 3.61343C6.77441 3.84799 7.16192 3.93899 7.65168 4.05401C8.18983 4.18039 8.85144 4.33576 9.25811 4.74243C9.66478 5.1491 9.82015 5.81071 9.94653 6.34886C10.0615 6.83862 10.1525 7.22612 10.3871 7.22612C10.6217 7.22612 10.7127 6.83862 10.8277 6.34885C10.9541 5.81071 11.1094 5.1491 11.5161 4.74243C11.9228 4.33576 12.5844 4.18039 13.1225 4.05401C13.6123 3.93899 13.9998 3.84799 13.9998 3.61343C13.9998 3.37887 13.6123 3.28787 13.1225 3.17285C12.5844 3.04647 11.9228 2.8911 11.5161 2.48443C11.1094 2.07776 10.9541 1.41615 10.8277 0.878004C10.7127 0.388238 10.6217 0.000732422 10.3871 0.000732422C10.1525 0.000732422 10.0615 0.388236 9.94653 0.878001ZM5.54002 5.38193C5.36215 4.7235 5.22112 4.20142 4.89895 4.20142C4.57686 4.20142 4.43583 4.72344 4.25795 5.38182C4.0674 6.0871 3.83458 6.94887 3.29163 7.49305C2.74751 8.03601 1.88573 8.26883 1.18043 8.45938C0.522035 8.63725 0 8.77828 0 9.10037C0 9.42246 0.522019 9.56349 1.18041 9.74137C1.88568 9.93192 2.74745 10.1647 3.29163 10.7077C3.83459 11.2518 4.06741 12.1136 4.25796 12.8189C4.43583 13.4773 4.57687 13.9993 4.89895 13.9993C5.22104 13.9993 5.36208 13.4773 5.53995 12.8189C5.7305 12.1136 5.96332 11.2519 6.50628 10.7077C7.0504 10.1647 7.91218 9.93191 8.61748 9.74136C9.27587 9.56349 9.7979 9.42245 9.7979 9.10037C9.7979 8.77828 9.27589 8.63725 8.6175 8.45937C7.91222 8.26882 7.05046 8.036 6.50628 7.49305C5.96334 6.94895 5.73055 6.08721 5.54002 5.38193Z" fill="#017976"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="campaign-list-icon-perf-tab-campaign" elementtiming="element-timing">
            <path d="M5.738.8H3.201A2.4 2.4 0 00.8 3.2V12A3.2 3.2 0 004 15.2h8a3.2 3.2 0 003.2-3.2V6.4A3.2 3.2 0 0012 3.2H9.132a.8.8 0 01-.566-.235L6.87 1.268A1.6 1.6 0 005.738.8z" fill="#C1C1C1"></path>
            <path d="M11.2 6.4H4.8" stroke="#fff" stroke-width="1.667" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="campaign-list-icon-perf-tab-ad" elementtiming="element-timing">
            <path d="M2.334 3.267a1.6 1.6 0 011.6-1.6h5.8a1.6 1.6 0 011.6 1.6v7.066h-9V3.267z" fill="#C1C1C1" stroke="#C1C1C1" stroke-width="1.6" stroke-linejoin="round"></path>
            <path d="M14.334 2.4v11.2" stroke="#C1C1C1" stroke-width="1.753" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M2.334 12.733a1.6 1.6 0 001.6 1.6h5.8a1.6 1.6 0 001.6-1.6v-2.4h-9v2.4z" fill="#C1C1C1" stroke="#C1C1C1" stroke-width="1.6" stroke-linejoin="round"></path>
            <path d="M5.334 12h3.2" stroke="#fff" stroke-width="1.664" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="campaign-list-icon-perf-tab-creative-active" elementtiming="element-timing">
            <path d="M16 0H0v16h16V0z" fill="#fff" fill-opacity=".01"></path>
            <path d="M2.666 2.933a1.6 1.6 0 011.6-1.6h7.47a1.6 1.6 0 011.6 1.6v6.4H2.666v-6.4zM2.666 12.733a1.6 1.6 0 001.6 1.6h7.47a1.6 1.6 0 001.6-1.6v-3.4H2.666v3.4z" fill="#333" stroke="#333" stroke-width="1.6" stroke-linejoin="round"></path>
            <path d="M6.4 12h3.2" stroke="#fff" stroke-width="1.664" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" id="campaign-list-icon-bulk-pause" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2ZM19 16C20.1046 16 21 16.8954 21 18V30C21 31.1046 20.1046 32 19 32C17.8954 32 17 31.1046 17 30V18C17 16.8954 17.8954 16 19 16ZM29 16C30.1046 16 31 16.8954 31 18V30C31 31.1046 30.1046 32 29 32C27.8954 32 27 31.1046 27 30V18C27 16.8954 27.8954 16 29 16Z" fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" id="campaign-list-icon-bulk-play" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24,2C11.8,2,2,11.8,2,24c0,12.2,9.8,22,22,22s22-9.8,22-22C46,11.8,36.2,2,24,2z M33,25.7l-12,6.9c-0.6,0.4-1.4,0.4-2,0c-0.6-0.4-1-1-1-1.7V17.1c0-0.7,0.4-1.4,1-1.7c0.6-0.4,1.4-0.4,2,0l12,6.9c0.6,0.4,1,1,1,1.7C34,24.7,33.6,25.4,33,25.7z" fill="#2a9c49"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="campaign-list-icon-bulk-delete" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0001 23C18.0753 23 23.0001 18.0751 23.0001 12C23.0001 5.92487 18.0753 1 12.0001 1C5.92499 1 1.00012 5.92487 1.00012 12C1.00012 18.0751 5.92499 23 12.0001 23Z" fill="#ef504b"></path>
            <path d="M13.4143 11.9998L15.5356 9.87862C15.9261 9.48809 15.9261 8.85493 15.5356 8.4644C15.145 8.07388 14.5119 8.07388 14.1213 8.4644L12.0001 10.5856L9.87888 8.4644C9.48836 8.07388 8.85519 8.07388 8.46467 8.4644C8.07414 8.85493 8.07414 9.48809 8.46467 9.87862L10.5859 11.9998L8.46449 14.1213C8.07397 14.5118 8.07397 15.1449 8.46449 15.5355C8.85502 15.926 9.48818 15.926 9.87871 15.5355L12.0001 13.4141L14.1215 15.5355C14.512 15.926 15.1452 15.926 15.5357 15.5355C15.9263 15.1449 15.9263 14.5118 15.5357 14.1213L13.4143 11.9998Z" fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="campaign-list-icon-edit" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5548 2.29305C16.3672 2.10537 16.1127 1.99995 15.8473 2C15.582 2.00005 15.3275 2.10557 15.14 2.29332L4.79247 12.6532C4.60519 12.8407 4.5 13.0949 4.5 13.3599V17C4.5 17.5523 4.94772 18 5.5 18H9.15859C9.42389 18 9.67831 17.8946 9.86586 17.707L20.2073 7.36102C20.5976 6.97053 20.5976 6.33761 20.2073 5.94712L16.5548 2.29305ZM6.5 13.7738L15.8478 4.41479L18.0861 6.65407L8.74425 16H6.5V13.7738ZM3.5 20C2.94772 20 2.5 20.4477 2.5 21C2.5 21.5523 2.94772 22 3.5 22H21.5C22.0523 22 22.5 21.5523 22.5 21C22.5 20.4477 22.0523 20 21.5 20H3.5Z" fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="campaign-list-icon-close" elementtiming="element-timing">
            <path d="M4.70711 3.29289C4.31658 2.90237 3.68342 2.90237 3.29289 3.29289C2.90237 3.68342 2.90237 4.31658 3.29289 4.70711L10.5858 12L3.29289 19.2929C2.90237 19.6834 2.90237 20.3166 3.29289 20.7071C3.68342 21.0976 4.31658 21.0976 4.70711 20.7071L12 13.4142L19.2929 20.7071C19.6834 21.0976 20.3166 21.0976 20.7071 20.7071C21.0976 20.3166 21.0976 19.6834 20.7071 19.2929L13.4142 12L20.7071 4.70711C21.0976 4.31658 21.0976 3.68342 20.7071 3.29289C20.3166 2.90237 19.6834 2.90237 19.2929 3.29289L12 10.5858L4.70711 3.29289Z" fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14" id="campaign-list-icon-vi-list-export" elementtiming="element-timing">
            <path d="M14 0H0v14h14V0z" fill="currentColor" fill-opacity=".01"></path>
            <path d="M2.661 1.167H8.86l3.1 2.916v8.167c0 .322-.278.583-.62.583H2.66c-.342 0-.62-.26-.62-.583V1.75c0-.322.278-.583.62-.583z" stroke="currentColor" stroke-width="1.167" stroke-linejoin="round"></path>
            <path d="M9.053 6.117l-2.05 2.05-2.045-2.045M7.004 4.083v3.938M8.972 9.917H5.035" stroke="currentColor" stroke-width="1.167" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-drag-handle" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3776 4.08333C5.02192 4.08333 5.54427 3.56099 5.54427 2.91667C5.54427 2.27233 5.02192 1.75 4.3776 1.75C3.73328 1.75 3.21094 2.27233 3.21094 2.91667C3.21094 3.56099 3.73328 4.08333 4.3776 4.08333ZM5.54427 7C5.54427 7.64432 5.02192 8.16667 4.3776 8.16667C3.73328 8.16667 3.21094 7.64432 3.21094 7C3.21094 6.35568 3.73328 5.83333 4.3776 5.83333C5.02192 5.83333 5.54427 6.35568 5.54427 7ZM5.54427 11.0833C5.54427 11.7277 5.02192 12.25 4.3776 12.25C3.73328 12.25 3.21094 11.7277 3.21094 11.0833C3.21094 10.439 3.73328 9.91667 4.3776 9.91667C5.02192 9.91667 5.54427 10.439 5.54427 11.0833ZM9.6276 4.08333C10.2719 4.08333 10.7943 3.56099 10.7943 2.91667C10.7943 2.27233 10.2719 1.75 9.6276 1.75C8.98328 1.75 8.46094 2.27233 8.46094 2.91667C8.46094 3.56099 8.98328 4.08333 9.6276 4.08333ZM10.7943 7C10.7943 7.64432 10.2719 8.16667 9.6276 8.16667C8.98328 8.16667 8.46094 7.64432 8.46094 7C8.46094 6.35568 8.98328 5.83333 9.6276 5.83333C10.2719 5.83333 10.7943 6.35568 10.7943 7ZM10.7943 11.0833C10.7943 11.7277 10.2719 12.25 9.6276 12.25C8.98328 12.25 8.46094 11.7277 8.46094 11.0833C8.46094 10.439 8.98328 9.91667 9.6276 9.91667C10.2719 9.91667 10.7943 10.439 10.7943 11.0833Z" fill="#a9abac"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-column-arrow-up" elementtiming="element-timing">
            <path d="M7.41378 1.33687C7.18598 1.10906 6.81663 1.10906 6.58882 1.33687L3.08882 4.83687C2.86102 5.06468 2.86102 5.43402 3.08882 5.66183C3.31663 5.88963 3.68598 5.88963 3.91378 5.66183L6.41797 3.15764V12.2493C6.41797 12.5715 6.67914 12.8327 7.0013 12.8327C7.32347 12.8327 7.58464 12.5715 7.58464 12.2493V3.15764L10.0888 5.66183C10.3166 5.88963 10.686 5.88963 10.9138 5.66183C11.1416 5.43402 11.1416 5.06468 10.9138 4.83687L7.41378 1.33687Z" fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-column-arrow-down" elementtiming="element-timing">
            <path d="M7.58464 1.74935C7.58464 1.42718 7.32347 1.16602 7.0013 1.16602C6.67914 1.16602 6.41797 1.42718 6.41797 1.74935V10.8411L3.91378 8.33687C3.68598 8.10906 3.31663 8.10906 3.08882 8.33687C2.86102 8.56468 2.86102 8.93402 3.08882 9.16183L6.58882 12.6618C6.81663 12.8896 7.18598 12.8896 7.41378 12.6618L10.9138 9.16183C11.1416 8.93402 11.1416 8.56468 10.9138 8.33687C10.686 8.10906 10.3166 8.10906 10.0888 8.33687L7.58464 10.8411V1.74935Z" fill="#121415"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" id="campaign-list-icon-great" elementtiming="element-timing">
            <path d="M16 0H0v16h16V0z" fill="#fff" fill-opacity=".01"></path>
            <path d="M9.202 6.2V3.8a1.8 1.8 0 00-1.8-1.8l-2.4 5.4V14h6.972a1.2 1.2 0 001.2-1.02l.828-5.4a1.2 1.2 0 00-1.2-1.38h-3.6zM5 7.336H3.398c-.703-.012-1.304.57-1.398 1.267v4.2a1.386 1.386 0 001.398 1.2H5V7.336z" stroke="#999" stroke-width="1.333" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-great-blue-full" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.06994 12.487C7.97631 12.6976 7.76741 12.8334 7.53688 12.8334C6.34488 12.8334 5.37855 11.8671 5.37855 10.675L5.37855 9.15837L2.81484 9.15837C2.337 9.16273 1.8811 8.95756 1.56747 8.59686C1.25304 8.23524 1.11324 7.75382 1.18515 7.28001L1.90965 2.55507C2.03199 1.75151 2.72672 1.15934 3.53927 1.16671L9.63688 1.16671C9.95905 1.16671 10.2202 1.42788 10.2202 1.75004L10.2202 7.52504C10.2202 7.60666 10.2031 7.68737 10.1699 7.76195L8.06994 12.487Z" fill="#009995"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.034 8.16665L9.63688 8.16665C9.31472 8.16665 9.05355 7.90548 9.05355 7.58332L9.05355 1.75016C9.05355 1.42799 9.31472 1.16671 9.63688 1.16671L11.034 1.16682C11.9424 1.15357 12.7181 1.82104 12.84 2.72197C12.8435 2.74788 12.8452 2.77401 12.8452 2.80016L12.8452 6.47516C12.8452 6.50131 12.8435 6.52743 12.84 6.55335C12.7233 7.4154 11.9799 8.18027 11.034 8.16665Z" fill="#009995"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-column-delete" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.16797 3.5C1.16797 3.17783 1.42914 2.91667 1.7513 2.91667H12.2513C12.5735 2.91667 12.8346 3.17783 12.8346 3.5C12.8346 3.82217 12.5735 4.08333 12.2513 4.08333H1.7513C1.42914 4.08333 1.16797 3.82217 1.16797 3.5Z" fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.02022 1.19947C5.11863 1.00074 5.32121 0.875 5.54297 0.875H8.45964C8.68308 0.875 8.8869 1.00264 8.98445 1.20367L9.97516 3.24534C10.0629 3.42612 10.0514 3.63932 9.94473 3.80962C9.83808 3.97992 9.65129 4.08333 9.45035 4.08333H4.53194C4.33017 4.08333 4.14273 3.97906 4.03632 3.80763C3.92991 3.6362 3.91965 3.42195 4.00919 3.24114L5.02022 1.19947ZM5.90504 2.04167L5.47174 2.91667H8.5189L8.09431 2.04167H5.90504Z" fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.6263 3.5C2.6263 3.17783 2.88747 2.91667 3.20964 2.91667H10.793C11.1151 2.91667 11.3763 3.17783 11.3763 3.5V12.5417C11.3763 12.8638 11.1151 13.125 10.793 13.125H3.20964C2.88747 13.125 2.6263 12.8638 2.6263 12.5417V3.5ZM3.79297 4.08333V11.9583H10.2096V4.08333H3.79297Z" fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83464 5.54167C6.1568 5.54167 6.41797 5.80283 6.41797 6.125V9.625C6.41797 9.94717 6.1568 10.2083 5.83464 10.2083C5.51247 10.2083 5.2513 9.94717 5.2513 9.625V6.125C5.2513 5.80283 5.51247 5.54167 5.83464 5.54167Z" fill="#333333"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.16797 5.54167C8.49014 5.54167 8.7513 5.80283 8.7513 6.125V9.625C8.7513 9.94717 8.49014 10.2083 8.16797 10.2083C7.8458 10.2083 7.58464 9.94717 7.58464 9.625V6.125C7.58464 5.80283 7.8458 5.54167 8.16797 5.54167Z" fill="#333333"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-errortriangle-r" elementtiming="element-timing">
            <path d="M6.29904 2.62139C6.61058 2.08179 7.38942 2.08179 7.70096 2.62139L12.1404 10.3106C12.4519 10.8502 12.0625 11.5247 11.4394 11.5247H2.5606C1.93753 11.5247 1.54811 10.8502 1.85965 10.3106L6.29904 2.62139Z" fill="#EF504B"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="campaign-list-icon-common-drawer-close" elementtiming="element-timing">
            <path d="M5.13807 4.19526C4.87772 3.93491 4.45561 3.93491 4.19526 4.19526C3.93491 4.45561 3.93491 4.87772 4.19526 5.13807L7.05719 8L4.19526 10.8619C3.93491 11.1223 3.93491 11.5444 4.19526 11.8047C4.45561 12.0651 4.87772 12.0651 5.13807 11.8047L8 8.94281L10.8619 11.8047C11.1223 12.0651 11.5444 12.0651 11.8047 11.8047C12.0651 11.5444 12.0651 11.1223 11.8047 10.8619L8.94281 8L11.8047 5.13807C12.0651 4.87772 12.0651 4.45561 11.8047 4.19526C11.5444 3.93491 11.1223 3.93491 10.8619 4.19526L8 7.05719L5.13807 4.19526Z" fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-common-drawer-edit" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M2.0415 12.25H12.5415" stroke="currentColor" stroke-width="1.16667" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M3.2085 7.79329V9.91667H5.34268L11.3752 3.88154L9.24455 1.75L3.2085 7.79329Z" fill="currentColor" stroke="currentColor" stroke-width="1.16667" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-common-drawer-viewdata" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path d="M1.85718 7L3.85718 7.89552V12.5714H1.85718V7Z" fill="currentColor" stroke="currentColor" stroke-width="1.14286" stroke-linejoin="round"></path>
            <path d="M5.85718 7.71428L7.85718 6.57142V12.5714H5.85718V7.71428Z" fill="currentColor" stroke="currentColor" stroke-width="1.14286" stroke-linejoin="round"></path>
            <path d="M10.1423 5.24735L12.1423 4.00001V12.5714H10.1423V5.24735Z" fill="currentColor" stroke="currentColor" stroke-width="1.14286" stroke-linejoin="round"></path>
            <path d="M1.85718 4.4569L4.56504 5.71429L12.1429 1.42858H8.08271" stroke="currentColor" stroke-width="1.14286" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-common-drawer-log" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.91593 0.583385C2.2716 0.583385 1.74927 1.10572 1.74927 1.75005V12.2501C1.74927 12.8944 2.2716 13.4167 2.91593 13.4167H11.0826C11.7269 13.4167 12.2493 12.8944 12.2493 12.2501V4.08339C12.2493 3.92868 12.1878 3.7803 12.0784 3.67091L9.16175 0.75424C9.05235 0.644844 8.90398 0.583385 8.74927 0.583385H2.91593ZM4.08293 5.41673C4.08293 5.09456 4.34409 4.8334 4.66626 4.8334H9.33293C9.65509 4.8334 9.91626 5.09456 9.91626 5.41673C9.91626 5.73889 9.65509 6.00006 9.33293 6.00006H4.66626C4.34409 6.00006 4.08293 5.73889 4.08293 5.41673ZM4.66626 8.3334C4.34409 8.3334 4.08293 8.59456 4.08293 8.91673C4.08293 9.2389 4.34409 9.50006 4.66626 9.50006H9.33293C9.65509 9.50006 9.91626 9.2389 9.91626 8.91673C9.91626 8.59456 9.65509 8.3334 9.33293 8.3334H4.66626Z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="campaign-list-icon-common-drawer-analysis" elementtiming="element-timing">
            <path d="M14 0H0V14H14V0Z" fill="white" fill-opacity="0.01"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.86682 0.583401C1.15806 0.583401 0.583496 1.15796 0.583496 1.86672V12.1333C0.583496 12.842 1.15806 13.4166 1.86682 13.4166H12.1334C12.8421 13.4166 13.4167 12.842 13.4167 12.1333V1.86672C13.4167 1.15796 12.8421 0.583401 12.1334 0.583401H1.86682ZM6.7189 3.89205C6.66982 3.6314 6.45107 3.43667 6.18649 3.41809C5.92191 3.39952 5.67811 3.56177 5.59309 3.81301L4.33062 7.5436H2.99998C2.67781 7.5436 2.41665 7.80476 2.41665 8.12693C2.41665 8.4491 2.67781 8.71026 2.99998 8.71026H4.74905C4.99915 8.71026 5.22143 8.55083 5.3016 8.31392L5.98442 6.29616L6.70219 10.1079C6.74861 10.3545 6.94745 10.5437 7.19597 10.5779C7.4445 10.6121 7.68704 10.4835 7.79829 10.2587L8.8582 8.11638L9.35231 8.56069C9.4594 8.65699 9.59833 8.71026 9.74235 8.71026H11C11.3221 8.71026 11.5833 8.4491 11.5833 8.12693C11.5833 7.80476 11.3221 7.5436 11 7.5436H9.96605L9.06643 6.73465C8.93073 6.61263 8.74574 6.56114 8.56652 6.59552C8.38729 6.62989 8.23448 6.74616 8.15355 6.90973L7.52598 8.17817L6.7189 3.89205Z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" id="campaign-list-icon-view-data-bar" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.111 3a2 2 0 100 4h8.61L17.56 15.807 5.734 11.14a2 2 0 10-1.468 3.72l12.666 5a2 2 0 001.648-.08l25.333-13A2 2 0 0043 3H26.111zm14.913 9.92A2 2 0 0142 14.636V42a3 3 0 01-3 3H8a3 3 0 01-3-3V22a2 2 0 012.683-1.88L18 23.872l9.878-4.94c.055-.037.112-.071.17-.103l11-5.95a2 2 0 011.976.04zM27 23.843V41h-7V27.344l7-3.5zM38 41h-7V21.78l7-3.787V41zm-22 0V27.4l-7-2.545V41h7z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" id="campaign-list-icon-preview1" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M41 40a6 6 0 01-6 6H13a6 6 0 01-6-6V8a6 6 0 016-6h22a6 6 0 016 6v32zm-6 2a2 2 0 002-2v-2.999H11v3a2 2 0 002 2h22zm2-34a2 2 0 00-2-2H13a2 2 0 00-2 2v25.001h26v-25zm-11 4.001a2 2 0 000-4h-4a2 2 0 000 4h4z" fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none" id="campaign-list-icon-suggestion-center-operation" elementtiming="element-timing">
            <path d="M12 0H0V12H12V0Z" fill="white" fill-opacity="0.01"></path>
            <rect x="0.75" y="0.75" width="10.5" height="10.5" rx="1.16667" stroke="currentColor" stroke-linejoin="round"></rect>
            <path d="M2.57031 6.96706H4.06951L5.26659 3.42969L6.235 8.57254L7.43581 6.14547L8.34949 6.96706H9.42746" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" id="campaign-list-icon-more" elementtiming="element-timing">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 27a3 3 0 100-6 3 3 0 000 6zm12 0a3 3 0 100-6 3 3 0 000 6zm15-3a3 3 0 11-6 0 3 3 0 016 0z" fill="currentColor"></path>
        </symbol>
    </svg>

    <main class="ads col-12 m-0 p-0 row justify-content-center">

        <?php
        // -------------------------- User ------------------------
        $sqlSelectUser = "SELECT * FROM ad_user";
        $userResult = $conn->query($sqlSelectUser);
        $userRow = $userResult->fetch_assoc();
        $_SESSION["userid"] = $userRow["id"];

        // -------------------------- Date ------------------------
        $sqlSelectDate = "SELECT * FROM daterange";
        $dateResult = $conn->query($sqlSelectDate);
        $dateRow = $dateResult->fetch_assoc();
        $startdate = date('Y-m-d', strtotime($dateRow['startdate']));
        $enddate = date('Y-m-d', strtotime($dateRow['enddate']));

        // -------------------------- Timezone ------------------------
        $sqlSelectTz = "SELECT * FROM timezone";
        $tzResult = $conn->query($sqlSelectTz);
        $tzRow = $tzResult->fetch_assoc();
        $timezone = $tzRow['timezone'];

        // ------------------------- Currency ----------------------------
        $sqlSelectCurrency = "SELECT * FROM currency";
        $currencyResult = $conn->query($sqlSelectCurrency);
        $currencyRow = $currencyResult->fetch_assoc();
        $currency = $currencyRow["currency"];
        ?>

        <!------------------------------------------------------------------------------ HEADER -------------------------------------------------------------------------->
        <section class="header col-12 m-0 row mx-auto">
            <div class="col-6 m-0 p-0 row align-items-center">
                <div class="toggle-sidebar">
                    <svg width="24" height="24" viewBox="0 0 48 48" fill="none" elementtiming="element-timing">
                        <path d="M7.94971 11.9497H39.9497" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" elementtiming="element-timing"></path>
                        <path d="M7.94971 23.9497H39.9497" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" elementtiming="element-timing"></path>
                        <path d="M7.94971 35.9497H39.9497" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" elementtiming="element-timing"></path>
                    </svg>
                    <img src="img/img-1.jpg" class="acc-profile dropdown-toggle" id="profile-img" alt=""
                        data-toggle="dropdown">
                </div>
                <div class="logo">
                    <a class="logolink" href="#">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzUiIGhlaWdodD0iMTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwKSI+PHBhdGggZD0iTTAgLjA0NkgxMS43NzVsLTEuMDgzIDMuMzdINy42MzZsLjAwNiAxMS43NXYuNzAySDMuODI4VjMuNDFILjQ0OGwtLjQ0My4wMUwwIC4wNDd6TTMxLjM5LjA0Nkg0My40NGwtMS4wODQgMy4zN2gtMy4zMjVsLjAwNSAxMS43NXYuNzEyaC0zLjgxM1YzLjQxN2gtMy4zODZsLS40NDcuMDA1Vi4wNDZ6TTEyLjQ5NyA1LjQydi0uMzRoMy43NzNsLjAwNS4zNC4wMDUgOS40NTYtLjAxNS45OTJoLTMuNzQ4di0uNTRsLS4wMi05LjkwOHpNMTguMDkuNzQ3VjBoMy43MzF2LjY0NmwuMDA1IDYuNzI2IDMuNzczLTMuNjdoNC41bC00LjcyOSA0LjU5IDUuMjk4IDcuNTc2aC00LjE1OWwtMy41MzQtNS4yNTItMS4xMTggMS4wODN2NC4xNzRsLTMuNzUyLS4wMDV2LS4zMzZMMTguMDkuNzQ3ek01Ni44MzYuNzQ3VjBoMy43MzJ2LjY0NmwuMDA1IDYuNzI2IDMuNzczLTMuNjdoNC41bC00LjcyOSA0LjU5IDUuMjk4IDcuNTc2SDY1LjI2bC0zLjUzNC01LjI1Mi0xLjEyMyAxLjA4My4wMDUgNC4xNzQtMy43NTctLjAwNXYtLjMzNkw1Ni44MzYuNzQ3ek01NC43MDEgNi44NjRhNi41NTIgNi41NTIgMCAwMC0xLjM3OC0yLjA0NCA2LjMxMSA2LjMxMSAwIDAwLTIuMjY3LTEuNDVsLS4wODItLjAzLS4xMzctLjA0NWMtLjAzNi0uMDEtLjA3MS0uMDI2LS4xMDItLjAzNmwtLjEwNi0uMDNjLS4wNDEtLjAxLS4wODItLjAyNi0uMTI3LS4wMzYtLjAxNi0uMDA1LS4wMzEtLjAxLS4wNDYtLjAxYTkuNzE2IDkuNzE2IDAgMDAtLjU1NS0uMTIyYy0uMDA1IDAtLjAxIDAtLjAyLS4wMDVsLS4xOTgtLjAzYTUuOTEgNS45MSAwIDAwLS40MzItLjA0N2MtLjEwNy0uMDEtLjIxOS0uMDEtLjMyNi0uMDE1LS4wNTYgMC0uMTExLS4wMDUtLjE2Ny0uMDA1LS4wNTEgMC0uMTAyIDAtLjE1My4wMDUtLjExNy4wMDUtLjIzOS4wMDUtLjM1Ni4wMTUtLjI1NC4wMi0uNDk4LjA1MS0uNzQyLjA5Ny0uMDQuMDEtLjA4MS4wMTUtLjEyMi4wMjUtLjAzNi4wMS0uMDc2LjAxNi0uMTEyLjAyNmwtLjI1NC4wNmE2LjQyNyA2LjQyNyAwIDAwLTEuNTUuNjQxIDYuMDYgNi4wNiAwIDAwLTEuMzAyLjk5NyA2LjQ5NiA2LjQ5NiAwIDAwLTEuMDAyIDEuMjk2Yy0uMjguNDczLS40OTMuOTkyLS42NSAxLjU0NmE2LjUyNCA2LjUyNCAwIDAwLS4yMyAxLjczOWMwIC42LjA3NyAxLjE4LjIzNCAxLjczMy4xNTMuNTU1LjM3MSAxLjA2OC42NTEgMS41NDZzLjYxNS45MSAxLjAwMiAxLjMwMmMuMzkxLjM5MS44MjMuNzIyIDEuMzAxIDEuMDAxYTYuMjMgNi4yMyAwIDAwMS44Mi43MDdjLjAzLjAwNS4wNjEuMDE1LjA5Mi4wMi4wNi4wMTUuMTIyLjAyNi4xODMuMDM2LjAzNS4wMDUuMDcxLjAxNS4xMTIuMDIuMDYuMDEuMTIyLjAyLjE4OC4wMjZsLjA5Ni4wMTUuMy4wM2MuMTI3LjAxLjI1NS4wMTYuMzgyLjAxNmguMjM5Yy4xMjctLjAwNi4yNTQtLjAwNi4zODEtLjAxNi4xMTctLjAxLjIzOS0uMDIuMzU2LS4wMzVsLjIyNC0uMDNjLjA0LS4wMDYuMDgxLS4wMTYuMTIyLS4wMjFsLjE1Ny0uMDNjLjAzLS4wMDYuMDY2LS4wMTYuMDk3LS4wMi4wODYtLjAyMS4xNzMtLjA0Mi4yNi0uMDY3YTYuNjU2IDYuNjU2IDAgMDAxLjU0LS42NCA2LjM4NCA2LjM4NCAwIDAwMi4zMDMtMi4zMDNjLjI4LS40NzkuNDkzLS45OTIuNjUtMS41NDZhNi4yODcgNi4yODcgMCAwMC4yMy0xLjczNCA2LjIxNiA2LjIxNiAwIDAwLS41MDQtMi41NTJ6bS0yLjkyMyAzLjM4YTMuMTIzIDMuMTIzIDAgMDEtMi4xODEgMi4xODEgMy4yOTMgMy4yOTMgMCAwMS0uNzEyLjEwN2guMDRjLS4wMjUgMC0uMDUuMDA2LS4wODEuMDA2aC0uMDc2YTMuMzg5IDMuMzg5IDAgMDEtLjg0LS4xMDcgMy4xNyAzLjE3IDAgMDEtLjc1Mi0uMzEgMy4xMDYgMy4xMDYgMCAwMS0xLjQzOC0xLjg3MSAzLjA3MyAzLjA3MyAwIDAxLS4xMTItLjg0NCAzLjE3NyAzLjE3NyAwIDAxLjQyNy0xLjU5NiAzLjA1MyAzLjA1MyAwIDAxMS44NzEtMS40MjQgMy4yNTUgMy4yNTUgMCAwMS44MzktLjExMmguMTcyLS4wM2EzLjExIDMuMTEgMCAwMTEuMDgzLjIzOWMuMzgxLjE2My43MTIuMzgxLjk5Ni42Ni4yOC4yOC41MDQuNjEuNjcyLjk5Mi4xNjIuMzgyLjI0NC43OTMuMjQ5IDEuMjM2YTMuNzUgMy43NSAwIDAxLS4xMjcuODQ0ek0xNi4yODUgMS45NDJhMS44OTYgMS44OTYgMCAxMS0zLjc5MyAwIDEuODk2IDEuODk2IDAgMDEzLjc5MyAweiIgZmlsbD0iI2ZmZiIvPjxwYXRoIGQ9Ik03NC4zIDcuNTI0YTEuNTkgMS41OSAwIDExLTMuMTgyIDAgMS41OSAxLjU5IDAgMTEzLjE4MyAweiIgZmlsbD0iI0ZFMkM1NSIvPjxwYXRoIGQ9Ik03NC4zIDEyLjQxYTEuNTkgMS41OSAwIDExLTMuMTgyIDAgMS41OSAxLjU5IDAgMTEzLjE4MyAweiIgZmlsbD0iIzI1RjRFRSIvPjwvZz48ZGVmcz48Y2xpcFBhdGggaWQ9ImNsaXAwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMCAwaDc0LjY2N3YxNkgweiIvPjwvY2xpcFBhdGg+PC9kZWZzPjwvc3ZnPgo="
                            alt="TikTok Logo" class="logo">
                        <span class="ads-manager">Ads Manager</span>
                    </a>
                </div>
                <div class="header-left-inner">
                    <ul class="header-left-list m-0 p-0">
                        <li class="header-left-item"><span>Dashboard</span></li>
                        <li class="header-left-item">
                            <span class="cmp is-active">
                                Campaign
                                <div class="greendot"></div>
                            </span>
                        </li>
                        <li class="header-left-item tools-item">
                            <span>Tools</span>
                        </li>
                        <li class="header-left-item analytic-item">
                            <span>Analytics</span>
                            <div class="reddot"></div>
                        </li>
                        <li class="header-left-item gmv">
                            <span>GMV Max</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-6 m-0 p-0 row mx-auto align-items-center justify-content-end">

                <!-- <div class="email-dropdown">
                    <span class="email" contenteditable="true" onblur="saveUser()" id="user"><?php echo $userRow["username"] ?></span>
                    <svg aria-hidden="true" class="svg-icon" name="arrow" elementtiming="element-timing">
                        <use xlink:href="#icon-arrow" elementtiming="element-timing"></use>
                    </svg>
                </div> -->

                <!-- <div class="lang-dropdown">
                    <span class="lang" contenteditable="true">English</span>
                </div> -->

                <!-- <div class="avatar dropdown">
                    <img src="img/img-1.jpg" class="acc-profile dropdown-toggle" id="profile-img" alt=""
                        data-toggle="dropdown">
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item switch-img" id="img-1" type="button">Switch img-1</button>
                        <button class="dropdown-item switch-img" id="img-2" type="button">Switch img-2</button>
                        <button class="dropdown-item switch-img" id="img-3" type="button">Switch img-3</button>
                        <button class="dropdown-item switch-img" id="img-4" type="button">Switch img-4</button>
                        <button class="dropdown-item switch-img" id="img-5" type="button">Switch img-5</button>
                        <button class="dropdown-item switch-img" id="img-6" type="button">Switch img-6</button>
                    </div>
                </div> -->

                <!-- <div class="business-center">
                    <svg aria-hidden="true">
                        <use xlink:href="#icon-bc-icon"></use>
                    </svg>
                </div> -->

                <div class="notifications">
                    <svg aria-hidden="true">
                        <use xlink:href="#icon-bell-content-icon"></use>
                    </svg>
                    <div class="red-noti">4</div>
                </div>

                <div class="question">
                    <svg aria-hidden="true" data-toggle="dropdown">
                        <use xlink:href="#icon-quick-contact"></use>
                    </svg>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item switch-cur" id="cur-1" type="button">MYR</button>
                        <button class="dropdown-item switch-cur" id="cur-2" type="button">USD</button>
                        <button class="dropdown-item switch-cur" id="cur-3" type="button">TWD</button>
                        <button class="dropdown-item switch-cur" id="cur-4" type="button">IDR</button>
                        <button class="dropdown-item switch-cur" id="cur-5" type="button">VND</button>
                        <button class="dropdown-item switch-cur" id="cur-6" type="button">THB</button>
                    </div>
                </div>

                <!-- <div class="vertical-bar"></div> -->

                <!-- <div class="credit">
                    <img class="dropdown-toggle"
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTQuNSA4LjAwMDAxTDE2Ljk5OTkgM0wxOS4wMDAxIDguMDAwMDEiIGZpbGw9IiMwMzgzN0YiLz4KPHBhdGggZD0iTTQuNSA4LjAwMDAxTDE2Ljk5OTkgM0wxOS4wMDAxIDguMDAwMDEiIHN0cm9rZT0iIzAzODM3RiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTIgOEgyMlYxMUMyMC41IDExIDE5IDEyIDE5IDEzLjc1QzE5IDE1LjUgMjAuNSAxNyAyMiAxN1YyMEgyVjE3QzMuNTAwMDggMTcgNSAxNiA1IDE0QzUgMTIgMy41IDExIDIgMTFWOFoiIGZpbGw9IiM4OUJEQjkiIHN0cm9rZT0iIzg5QkRCOSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTguNSAxMi42OTI0SDExLjUiIHN0cm9rZT0iIzAwM0QzQiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KPHBhdGggZD0iTTguNSAxNS42OTI0SDE1LjUiIHN0cm9rZT0iIzAwM0QzQiIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KPC9zdmc+Cg=="
                        data-toggle="dropdown">
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item switch-cur" id="cur-1" type="button">MYR</button>
                        <button class="dropdown-item switch-cur" id="cur-2" type="button">USD</button>
                        <button class="dropdown-item switch-cur" id="cur-3" type="button">TWD</button>
                        <button class="dropdown-item switch-cur" id="cur-4" type="button">IDR</button>
                        <button class="dropdown-item switch-cur" id="cur-5" type="button">VND</button>
                        <button class="dropdown-item switch-cur" id="cur-6" type="button">THB</button>
                    </div>
                </div> -->

                <div class="name-account">
                    <span class="advertiser-name" contenteditable="true">
                        <?php echo $userRow["username"] ?>
                    </span>
                    <svg data-v-7754d2d4="" aria-hidden="true" class="svg-icon" name="arrow" elementtiming="element-timing">
                        <use xlink:href="#icon-arrow" elementtiming="element-timing"></use>
                    </svg>
                </div>


            </div>
        </section>
        <!--------------------------------------------------------------------------------- ADS CONTENT ----------------------------------------------------------------------------------->
        <section class="ads-content">
            <div class="ads-wrapper col-12 m-0 p-0 mx-auto">
                <!------------------------------------------------------ TOP CONTENT ------------------------------------------>
                <div class="top-content col-12 row m-0 p-0 mb-3 mx-auto">
                    <div class="col-12 row m-0 p-0 mx-auto py-3">
                        <div class="filters row m-0 p-0 justify-content-center align-items-center">
                            <button type="button" class="btn-filter">
                                <span>
                                    <i class="vi-icon-plus"></i>
                                    Filters
                                </span>
                            </button>
                        </div>

                        <div class="search input-with-select">
                            <input type="text" placeholder="Search by name or ID">
                            <span class="vi-input__prefix">
                                <i class="vi-input__icon vi-icon2-search"></i>
                            </span>
                        </div>

                        <div class="calendar ms-auto d-flex align-items-center">
                            <div id="reportrange">
                                <input value=<?php echo $startdate ?> placeholder="start date" class="start-date" id="start-date" readonly>
                                <span class="separator">~</span>
                                <input value=<?php echo $enddate ?> placeholder="end date" class="end-date" id="end-date" readonly>
                            </div>
                            <span class="utc">
                                <select class="timezone" id="timezone" name="timezone">
                                    <option value="kuala_lumpur" <?php echo $timezone == "kuala_lumpur" ? 'selected' : ''; ?>>(UTC+08:00) Kuala Lumpur Time</option>
                                    <option value="singapore" <?php echo $timezone == "singapore" ? 'selected' : ''; ?>>(UTC+08:00) Singapore Time</option>
                                    <option value="jakarta" <?php echo $timezone == "jakarta" ? 'selected' : ''; ?>>(UTC+07:00) Jakarta Time</option>
                                </select>
                                <i class="vi-icon-question calendar-question"></i>
                            </span>
                            <i class="vi-input__icon vi-icon-date"></i>
                        </div>
                    </div>
                </div>
                <!------------------------------------------------- 3 OPTIONS ----------------------------------------->
                <div class="options col-12 row m-0 p-0 mx-auto justify-content-start">
                    <div class="custom-col m-0 p-0">
                        <div class="options-box col-11-set row mx-auto align-items-center" data-selected="table-1">
                            <span class="opt1">
                                <svg aria-hidden="true" class="opt1-icon">
                                    <use xlink:href="#campaign-list-icon-perf-tab-campaign"></use>
                                </svg>
                                <span class="campaign-text">Campaign</span>
                                <span class="select-campaign-num" id="select-campaigns-num">
                                    1 selected
                                    <i class="vi-icon-error" onclick="cancelCampaign();"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="custom-col m-0 p-0">
                        <div class="options-box col-11-set row mx-auto align-items-center" data-selected="table-2">
                            <span class="opt2">
                                <svg aria-hidden="true" class="opt2-icon">
                                    <use xlink:href="#campaign-list-icon-perf-tab-ad"></use>
                                </svg>
                                <span class="ads-group-text">Ad group</span>
                                <span class="select-ads-group-num" id="select-ads-group-num">
                                    <span class="select-ad-group-count">1</span>&nbsp;selected
                                    <i class="vi-icon-error" onclick="cancelAdGroup();"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="custom-col m-0 p-0">
                        <div class="options-box col-11-set row mx-auto align-items-center active-tab"
                            data-selected="table-3">
                            <span class="opt3">
                                <svg aria-hidden="true" class="opt3-icon">
                                    <use xlink:href="#campaign-list-icon-perf-tab-creative-active"></use>
                                </svg>
                                <span class="ads-text">Ad</span>
                                <span class="select-ads-num" id="select-ads-num">
                                    1 selected
                                    <i class="vi-icon-error"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------------------------- CAMPAIGN table ------------------------------------------------------------------------>
                <div class="campaign-content col-12 m-0 p-0 mx-auto">
                    <div class="table-wrapper table-1-content d-none col-12 m-0 p-0">
                        <!------------------------------------------------- table header -------------------------------------------------->
                        <div class="table-header col-12 row m-0 mx-auto px-3">
                            <div class="col-6 row m-0 p-0 mx-auto">
                                <button class="create" onclick="addNewRowCampaigns()">
                                    <span> Create </span>
                                </button>
                                <button class="edit">
                                    <span class="edit-text">
                                        Edit
                                    </span>
                                    <span class="edit-icon">
                                        <i class="vi-icon-arrow-down"></i>
                                    </span>
                                </button>
                                <button class="bulk">
                                    <span>
                                        Bulk export/import
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="rules">
                                    <span>
                                        Automated rules
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="col-6 row m-0 p-0 mx-auto justify-content-end">
                                <button class="customize-column">
                                    <span>
                                        Default columns
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="breakdown">
                                    <span>
                                        Breakdown
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="refresh">
                                    <i class="vi-icon2-refresh"></i>
                                </button>
                                <button class="report">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <svg aria-hidden="true" class="svg-icon">
                                            <use xlink:href="#campaign-list-icon-vi-list-export"></use>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!---------------------------------------------------- table content header ------------------------------------------------------->
                        <div class="table-content-header col-12 row m-0 p-0 mx-auto">
                            <table class="table table-bordered m-0 table-resizable table-draggable">
                                <thead class="table-head">
                                    <tr>
                                        <th class="columns col1 stick">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <label class="containercheck">
                                                    <input type="checkbox" id="all-campaign-checkbox">
                                                    <span class="header-innercheck vi-checkbox__inner"></span>
                                                </label>
                                            </div>
                                        </th>

                                        <th class="columns col2 stick">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span>On/Off</span>
                                            </div>
                                        </th>

                                        <th class="columns col3 stick pl-3 shortcol">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Name</span>
                                            </div>
                                        </th>

                                        <th class="columns col4 stick">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Status</span>
                                            </div>
                                        </th>

                                        <th class="columns cost-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Cost</span>
                                            </div>
                                        </th>

                                        <th class="columns reach-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Reach</span>
                                            </div>
                                        </th>

                                        <th class="columns impr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Impressions</span>
                                            </div>
                                        </th>

                                        <th class="columns res-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Results</span>
                                            </div>
                                        </th>

                                        <th class="columns cpm-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CPM</span>
                                            </div>
                                        </th>

                                        <th class="columns cpc-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CPC (destination)</span>
                                            </div>
                                        </th>

                                        <th class="columns cpr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Cost per result</span>
                                            </div>
                                        </th>

                                        <th class="columns clicks-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Clicks (destination)</span>
                                            </div>
                                        </th>

                                        <th class="columns ctr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CTR (destination)</span>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!---------------------------------------------------- table content data ------------------------------------------------------->
                                <tbody class="table-content">

                                    <?php
                                    // ~~~~~~~~~~~~~~~~ Substatus ~~~~~~~~~~~~~~~~
                                    function getSubStatusTextCampaigns($statusValue)
                                    {
                                        switch ($statusValue) {
                                            case 'Active':
                                                return '';
                                            case 'Inactive':
                                                return 'Campaign Inactive';
                                            case 'Not delivering':
                                                return 'Review not approved';
                                            default:
                                                return '';
                                        }
                                    }

                                    // ~~~~~~~~~~~~~~~ Status Class ~~~~~~~~~~~~~~~~
                                    function getStatusDotClassCampaigns($statusValue)
                                    {
                                        switch ($statusValue) {
                                            case 'Active':
                                                return 'is-active';
                                            case 'Inactive':
                                                return 'is-not-active';
                                            case 'Not delivering':
                                                return 'is-rejected';
                                            default:
                                                return '';
                                        }
                                    }

                                    // ~~~~~~~~~~~~~~ PHP get Row Id and insert data (FOR EACH ROW) ~~~~~~~~~~~~~~~~
                                    $sqlSelectCampaignsData = "SELECT * FROM campaigndata";
                                    $campaignsDataResult = $conn->query($sqlSelectCampaignsData);
                                    while ($campaignsDataRow = $campaignsDataResult->fetch_assoc()) {
                                        $isOnOff = $campaignsDataRow['onoff'] == 1 ? 'checked' : '';
                                        $bgClass = $campaignsDataRow['onoff'] == 1 ? 'on-off-dark-bg' : '';
                                        $rowId   = $campaignsDataRow['id'];
                                    ?>
                                        <tr class="campaigns-rw-<?php echo $rowId; ?>" id="campaigns-rw-<?php echo $rowId; ?>" onmouseover="showCampaignsTools('campaigns-rw-<?php echo $rowId; ?>')" onmouseout="hideCampaignsTools('campaigns-rw-<?php echo $rowId; ?>')">
                                            <td class="content-col cbx-col">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <label class="containercheck">
                                                        <input type="checkbox" id="cbx-checkbox" onclick="tickCampaignsBrandRow('campaigns-rw-<?php echo $rowId; ?>')">
                                                        <span class="innercheck vi-checkbox__inner"></span>
                                                    </label>
                                                </div>
                                            </td>

                                            <td class="content-col onoff-col">
                                                <div
                                                    class="d-flex position-relative justify-content-center align-items-center">
                                                    <div role="switch" class="vi-switch vi-tooltip item <?php echo $bgClass; ?>"
                                                        aria-describedby="vi-tooltip-9378" tabindex="0">
                                                        <input type="checkbox" class="vi-switch__input" <?php echo $isOnOff; ?> disabled>
                                                        <span class="vi-switch__core"></span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="content-col name-col pl-3">
                                                <div class="col-12 m-0 p-0 d-flex mx-auto">
                                                    <div class="non-video m-0 p-0">
                                                        <span class="non-video-caption" id="non-video-caption" onclick="selectCampaign('campaigns-rw-<?php echo $rowId; ?>')"><?php echo $campaignsDataRow['campaignname'] ?></span>
                                                        <span class="pencil" id="pencil">
                                                            <i class="vi-tooltip item vi-icon2-edit vi-popover__reference"
                                                                aria-describedby="vi-popover-6619" tabindex="0"></i>
                                                        </span>
                                                        <div class="toolkit" id="toolkit">
                                                            <div class="view-data">
                                                                <svg aria-hidden="true" class="icon svg-icon">
                                                                    <use xlink:href="#campaign-list-icon-view-data-bar">
                                                                    </use>
                                                                </svg>
                                                                View data
                                                            </div>
                                                            <div class="edit-data" id="editCampaignsRowBtn" onclick="editCampaignsRow('campaigns-rw-<?php echo $rowId; ?>')">
                                                                <i class="vi-icon2-edit"></i>
                                                                Edit
                                                            </div>
                                                            <div class="copy-data">
                                                                <i class="vi-icon2-copy"></i>
                                                                Copy
                                                            </div>
                                                            <div class="dot-data" id="deleteRowBtn" onclick="deleteCampaignsRow('campaigns-rw-<?php echo $rowId; ?>')">
                                                                <svg aria-hidden="true" class="svg-icon">
                                                                    <use xlink:href="#campaign-list-icon-more"></use>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>

                                            <td class="content-col status-col">
                                                <div class="status-para">
                                                    <span class="status-dot <?php echo getStatusDotClassCampaigns($campaignsDataRow['status']); ?>">
                                                        <?php if ($campaignsDataRow['status'] === 'Not delivering'): ?>
                                                            <svg data-v-45e9d3fe="" aria-hidden="true" class="status-icon svg-icon" elementtiming="element-timing">
                                                                <use xlink:href="#campaign-list-icon-errortriangle-r" elementtiming="element-timing"></use>
                                                            </svg>
                                                        <?php endif; ?>
                                                    </span>
                                                    <span class="status-text"><?php echo $campaignsDataRow['status']; ?></span>
                                                </div>
                                                <div class="sub-status">
                                                    <span class="sub-status-text"><?php echo getSubStatusTextCampaigns($campaignsDataRow['status']); ?></span>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col do-col">
                                                    <span contenteditable="true">-</span>
                                                </td> -->

                                            <!-- <td class="content-col ad-grp-id-col">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="number" value="165465863484510">
                                                    </div>
                                                </td> -->

                                            <!-- <td class="content-col ad-id-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <input type="number" value="165465863484510">
                                                </div>
                                                </td> -->

                                            <!-- <td class="content-col net-cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="12.50 MYR" disabled>
                                                </div>
                                                </td> -->

                                            <td class="content-col cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['cost'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col reach-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['reach'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col impr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['imprs'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col res-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['result'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpm-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['cpm'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpc-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['cpc'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['cpr'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col clicks-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['click'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col ctr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($campaignsDataRow['ctr'], 2) . '%' ?>" disabled>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col conv-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="4567"
                                                        disabled>
                                                </div>
                                                </td>

                                                <td class="content-col cvr-col">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <input type="text" value="11.11%"
                                                            disabled>
                                                    </div>
                                                </td> -->

                                            <!-- <td class="content-col rate-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span contenteditable="true">0.00%</span>
                                                </div>
                                                </td> -->
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <!----------------------------- table content footer ----------------------------->
                                <tfoot class="table-footer">

                                    <?php
                                    $sqlSelectFooter = "SELECT * FROM totalcampaigndata";
                                    $campaignsFooterResult = $conn->query($sqlSelectFooter);
                                    $campaignsFooterRow = $campaignsFooterResult->fetch_assoc();

                                    $sqlCountCampaigns = "SELECT COUNT(*) AS totalcount FROM campaigndata";
                                    $countCampaignsResult = $conn->query($sqlCountCampaigns);
                                    if ($countCampaignsResult && $countCampaignsResult->num_rows > 0) {
                                        $row = $countCampaignsResult->fetch_assoc();
                                        $totalCampaigns = $row['totalcount'];
                                    } else {
                                        $totalCampaigns = 0;
                                    }
                                    ?>

                                    <tr>
                                        <td colspan="3" class="footer-col total-ads">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span class="total-ads-txt">
                                                    <?php echo "Total of $totalCampaigns " . ($totalCampaigns == 1 ? 'campaign' : 'campaigns'); ?>
                                                </span>
                                                <i class="vi-tooltip vi-icon-ex-circle-question item"
                                                    aria-describedby="vi-tooltip-1404" tabindex="0"></i>
                                            </div>
                                        </td>

                                        <td class="footer-col">
                                            <div>
                                                <span>- </span>
                                            </div>
                                        </td>

                                        <td class="footer-col cost-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalcost"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col reach-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalreach"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col impr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalimprs"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col res-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalresult"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpm-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalcpm"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpc-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalcpc"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalcpr"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col clicks-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalclick"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col ctr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($campaignsFooterRow["totalctr"], 2) . '%' ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!----------------------------------------------------------------- AD GROUP table ------------------------------------------------------------------------>
                <div class="ad-group-content col-12 m-0 p-0 mx-auto">
                    <div class="table-wrapper table-2-content d-none col-12 m-0 p-0">
                        <!------------------------------------------------- table header -------------------------------------------------->
                        <div class="table-header col-12 row m-0 mx-auto px-3">
                            <div class="col-6 row m-0 p-0 mx-auto">
                                <button class="create" onclick="addNewRowAdsGroup()">
                                    <span> Create </span>
                                </button>
                                <button class="edit">
                                    <span class="edit-text">
                                        Edit
                                    </span>
                                    <span class="edit-icon">
                                        <i class="vi-icon-arrow-down"></i>
                                    </span>
                                </button>
                                <button class="bulk">
                                    <span>
                                        Bulk export/import
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="rules">
                                    <span>
                                        Automated rules
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="col-6 row m-0 p-0 mx-auto justify-content-end">
                                <button class="customize-column">
                                    <span>
                                        Default columns
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="breakdown">
                                    <span>
                                        Breakdown
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="refresh">
                                    <i class="vi-icon2-refresh"></i>
                                </button>
                                <button class="report">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <svg aria-hidden="true" class="svg-icon">
                                            <use xlink:href="#campaign-list-icon-vi-list-export"></use>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!---------------------------------------------------- table content header ------------------------------------------------------->
                        <div class="table-content-header col-12 row m-0 p-0 mx-auto">
                            <table class="table table-bordered m-0 table-resizable table-draggable">
                                <thead class="table-head">
                                    <tr>
                                        <th class="columns col1 stick">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <label class="containercheck">
                                                    <input type="checkbox" id="all-ads-group-checkbox">
                                                    <span class="header-innercheck vi-checkbox__inner"></span>
                                                </label>
                                            </div>
                                        </th>

                                        <th class="columns col2 stick">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span>On/Off</span>
                                            </div>
                                        </th>

                                        <th class="columns col3 stick pl-3 shortcol">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Name</span>
                                            </div>
                                        </th>

                                        <th class="columns col4 stick">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Status</span>
                                            </div>
                                        </th>

                                        <!-- <th class="columns do-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span>Delivery Optimization</span>
                                                </div>
                                            </th> -->

                                        <th class="columns ad-grp-id-col">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Ad group ID</span>
                                            </div>
                                        </th>

                                        <!-- <th class="columns ad-grp-name-col">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Ad group name</span>
                                            </div>
                                        </th> -->

                                        <!-- <th class="columns ad-id-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span>Ad ID</span>
                                                </div>
                                            </th> -->

                                        <!-- <th class="columns net-cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Net cost</span>
                                                </div>
                                            </th> -->

                                        <th class="columns cost-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Cost</span>
                                            </div>
                                        </th>

                                        <th class="columns reach-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Reach</span>
                                            </div>
                                        </th>

                                        <th class="columns impr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Impressions</span>
                                            </div>
                                        </th>

                                        <th class="columns res-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Results</span>
                                            </div>
                                        </th>

                                        <th class="columns cpm-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CPM</span>
                                            </div>
                                        </th>

                                        <th class="columns cpc-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CPC (destination)</span>
                                            </div>
                                        </th>

                                        <th class="columns cpr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Cost per result</span>
                                            </div>
                                        </th>

                                        <th class="columns clicks-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Clicks (destination)</span>
                                            </div>
                                        </th>

                                        <th class="columns ctr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CTR (destination)</span>
                                            </div>
                                        </th>

                                        <!-- <th class="columns conv-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Conversions</span>
                                                </div>
                                            </th>

                                            <th class="columns cpc-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Cost per<br> conversion</span>
                                                </div>
                                            </th>

                                            <th class="columns cvr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Conversion<br>rate (CVR)</span>
                                                </div>
                                            </th> -->

                                        <!-- <th class="columns rate-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Result rate</span>
                                                </div>
                                            </th> -->
                                    </tr>
                                </thead>
                                <!---------------------------------------------------- table content data ------------------------------------------------------->
                                <tbody class="table-content">
                                    <?php
                                    // ---------------------------------------------- Ads Group Data --------------------------------------------------

                                    // ~~~~~~~~~~~~~~~~ Substatus ~~~~~~~~~~~~~~~~
                                    function getSubStatusTextAdsGroup($statusValue)
                                    {
                                        switch ($statusValue) {
                                            case 'Active':
                                                return '';
                                            case 'Inactive':
                                                return 'Campaign Inactive';
                                            case 'Not delivering':
                                                return 'Review not approved';
                                            default:
                                                return '';
                                        }
                                    }

                                    // ~~~~~~~~~~~~~~~ Status Class ~~~~~~~~~~~~~~~~
                                    function getStatusDotClassAdsGroup($statusValue)
                                    {
                                        switch ($statusValue) {
                                            case 'Active':
                                                return 'is-active';
                                            case 'Inactive':
                                                return 'is-not-active';
                                            case 'Not delivering':
                                                return 'is-rejected';
                                            default:
                                                return '';
                                        }
                                    }

                                    // ~~~~~~~~~~~~~~ PHP get Row Id and insert data (FOR EACH ROW) ~~~~~~~~~~~~~~~~
                                    $sqlSelectAdsGroupData = "SELECT * FROM adsgroupdata";
                                    $adsGroupDataResult = $conn->query($sqlSelectAdsGroupData);
                                    while ($adsGroupDataRow = $adsGroupDataResult->fetch_assoc()) {
                                        $isOnOff = $adsGroupDataRow['onoff'] == 1 ? 'checked' : '';
                                        $bgClass = $adsGroupDataRow['onoff'] == 1 ? 'on-off-dark-bg' : '';
                                        $rowId   = $adsGroupDataRow['id'];
                                    ?>

                                        <tr class="ads-group-rw-<?php echo $rowId; ?>" id="ads-group-rw-<?php echo $rowId; ?>" onmouseover="showAdsGroupTools('ads-group-rw-<?php echo $rowId; ?>')" onmouseout="hideAdsGroupTools('ads-group-rw-<?php echo $rowId; ?>')">
                                            <td class="content-col cbx-col">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <label class="containercheck">
                                                        <input type="checkbox" id="cbx-checkbox" onclick="tickAdsGroupBrandRow('ads-group-rw-<?php echo $rowId; ?>')">
                                                        <span class="innercheck vi-checkbox__inner"></span>
                                                    </label>
                                                </div>
                                            </td>

                                            <td class="content-col onoff-col">
                                                <div
                                                    class="d-flex position-relative justify-content-center align-items-center">
                                                    <div role="switch" class="vi-switch vi-tooltip item <?php echo $bgClass; ?>"
                                                        aria-describedby="vi-tooltip-9378" tabindex="0">
                                                        <input type="checkbox" class="vi-switch__input" <?php echo $isOnOff; ?> disabled>
                                                        <span class="vi-switch__core"></span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="content-col name-col pl-3">
                                                <div class="col-12 m-0 p-0 d-flex mx-auto">
                                                    <div class="non-video m-0 p-0">
                                                        <span class="non-video-caption" id="non-video-caption" onclick="selectAdGroup('ads-group-rw-<?php echo $rowId; ?>')"><?php echo $adsGroupDataRow['adsgroupname'] ?></span>
                                                        <span class="pencil" id="pencil">
                                                            <i class="vi-tooltip item vi-icon2-edit vi-popover__reference"
                                                                aria-describedby="vi-popover-6619" tabindex="0"></i>
                                                        </span>
                                                        <div class="toolkit" id="toolkit">
                                                            <div class="view-data">
                                                                <svg aria-hidden="true" class="icon svg-icon">
                                                                    <use xlink:href="#campaign-list-icon-view-data-bar">
                                                                    </use>
                                                                </svg>
                                                                View data
                                                            </div>
                                                            <div class="edit-data" id="editAdsGroupRowBtn" onclick="editAdsGroupRow('ads-group-rw-<?php echo $rowId; ?>')">
                                                                <i class="vi-icon2-edit"></i>
                                                                Edit
                                                            </div>
                                                            <div class="copy-data">
                                                                <i class="vi-icon2-copy"></i>
                                                                Copy
                                                            </div>
                                                            <div class="dot-data" id="deleteRowBtn" onclick="deleteAdsGroupRow('ads-group-rw-<?php echo $rowId; ?>')">
                                                                <svg aria-hidden="true" class="svg-icon">
                                                                    <use xlink:href="#campaign-list-icon-more"></use>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>

                                            <td class="content-col status-col">
                                                <div class="status-para">
                                                    <span class="status-dot <?php echo getStatusDotClassAdsGroup($adsGroupDataRow['status']); ?>">
                                                        <?php if ($adsGroupDataRow['status'] === 'Not delivering'): ?>
                                                            <svg data-v-45e9d3fe="" aria-hidden="true" class="status-icon svg-icon" elementtiming="element-timing">
                                                                <use xlink:href="#campaign-list-icon-errortriangle-r" elementtiming="element-timing"></use>
                                                            </svg>
                                                        <?php endif; ?>
                                                    </span>
                                                    <span class="status-text"><?php echo $adsGroupDataRow['status']; ?></span>
                                                </div>
                                                <div class="sub-status">
                                                    <span class="sub-status-text"><?php echo getSubStatusTextAdsGroup($adsGroupDataRow['status']); ?></span>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col do-col">
                                                    <span contenteditable="true">-</span>
                                                </td> -->

                                            <td class="content-col ad-grp-id-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <input type="text" value="<?php echo $adsGroupDataRow['adsgroupid'] ?>" disabled>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col ad-id-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <input type="number" value="165465863484510">
                                                </div>
                                                </td> -->

                                            <!-- <td class="content-col net-cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="12.50 MYR" disabled>
                                                </div>
                                                </td> -->

                                            <td class="content-col cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['cost'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col reach-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['reach'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col impr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['imprs'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col res-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['result'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpm-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['cpm'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpc-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['cpc'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['cpr'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col clicks-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['click'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col ctr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsGroupDataRow['ctr'], 2) . '%' ?>" disabled>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col conv-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="4567"
                                                        disabled>
                                                </div>
                                                </td>

                                                <td class="content-col cvr-col">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <input type="text" value="11.11%"
                                                            disabled>
                                                    </div>
                                                </td> -->

                                            <!-- <td class="content-col rate-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span contenteditable="true">0.00%</span>
                                                </div>
                                                </td> -->
                                        </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <!----------------------------- table content footer ----------------------------->
                                <tfoot class="table-footer">

                                    <?php
                                    $sqlSelectFooter = "SELECT * FROM totaladsgroupdata";
                                    $adsGroupFooterResult = $conn->query($sqlSelectFooter);
                                    $adsGroupFooterRow = $adsGroupFooterResult->fetch_assoc();

                                    $sqlCountAdsGroup = "SELECT COUNT(*) AS totalcount FROM adsgroupdata";
                                    $countAdsGroupResult = $conn->query($sqlCountAdsGroup);
                                    if ($countAdsGroupResult && $countAdsGroupResult->num_rows > 0) {
                                        $row = $countAdsGroupResult->fetch_assoc();
                                        $totalAds = $row['totalcount'];
                                    } else {
                                        $totalAds = 0;
                                    }
                                    ?>

                                    <tr>
                                        <td colspan="3" class="footer-col total-ads">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span class="total-ads-txt">
                                                    <?php echo "Total of $totalAds " . ($totalAds == 1 ? 'ad group' : 'ad groups'); ?>
                                                </span>
                                                <i class="vi-tooltip vi-icon-ex-circle-question item"
                                                    aria-describedby="vi-tooltip-1404" tabindex="0"></i>
                                            </div>
                                        </td>

                                        <td class="footer-col">
                                            <div>
                                                <span>- </span>
                                            </div>
                                        </td>

                                        <td class="footer-col">
                                            <div>
                                                <span>- </span>
                                            </div>
                                        </td>

                                        <td class="footer-col cost-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalcost"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col reach-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalreach"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col impr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalimprs"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col res-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalresult"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpm-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalcpm"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpc-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalcpc"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalcpr"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col clicks-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalclick"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col ctr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsGroupFooterRow["totalctr"], 2) . '%' ?></span>
                                            </div>
                                        </td>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------------------------- AD table --------------------------------------------------------------------------->
                <div class="ad-content col-12 m-0 p-0 mx-auto">
                    <div class="table-wrapper table-3-content col-12 m-0 p-0">
                        <!------------------------------------------------- table header -------------------------------------------------->
                        <div class="table-header col-12 row m-0 mx-auto px-3">
                            <div class="col-6 row m-0 p-0 mx-auto">
                                <button class="create" onclick="addNewRowAds()">
                                    <span> Create </span>
                                </button>
                                <button class="edit">
                                    <span class="edit-text">
                                        Edit
                                    </span>
                                    <span class="edit-icon">
                                        <i class="vi-icon-arrow-down"></i>
                                    </span>
                                </button>
                                <button class="bulk">
                                    <span>
                                        Bulk export/import
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="rules">
                                    <span>
                                        Automated rules
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="col-6 row m-0 p-0 mx-auto justify-content-end">
                                <button class="customize-column">
                                    <span>
                                        Default columns
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="breakdown">
                                    <span>
                                        Breakdown
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                                <button class="refresh">
                                    <i class="vi-icon2-refresh"></i>
                                </button>
                                <button class="report">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <svg aria-hidden="true" class="svg-icon">
                                            <use xlink:href="#campaign-list-icon-vi-list-export"></use>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!---------------------------------------------------- table content header ------------------------------------------------------->
                        <div class="table-content-header col-12 row m-0 p-0 mx-auto">
                            <table class="table table-bordered m-0 table-resizable table-draggable">
                                <thead class="table-head">
                                    <tr>
                                        <th class="columns col1 stick">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <label class="containercheck">
                                                    <input type="checkbox" id="all-ads-checkbox">
                                                    <span class="header-innercheck vi-checkbox__inner"></span>
                                                </label>
                                            </div>
                                        </th>

                                        <th class="columns col2 stick">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <span>On/Off</span>
                                            </div>
                                        </th>

                                        <th class="columns col3 stick pl-3">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Name</span>
                                            </div>
                                        </th>

                                        <th class="columns col4 stick">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Status</span>
                                            </div>
                                        </th>

                                        <!-- <th class="columns do-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span>Delivery Optimization</span>
                                                </div>
                                            </th> -->

                                        <!-- <th class="columns ad-grp-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span>Ad group ID</span>
                                                </div>
                                            </th> -->

                                        <th class="columns ad-grp-name-col">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span>Ad group name</span>
                                            </div>
                                        </th>

                                        <!-- <th class="columns ad-id-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <span>Ad ID</span>
                                                </div>
                                            </th> -->

                                        <!-- <th class="columns net-cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Net cost</span>
                                                </div>
                                            </th> -->

                                        <th class="columns cost-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Cost</span>
                                            </div>
                                        </th>

                                        <th class="columns reach-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Reach</span>
                                            </div>
                                        </th>

                                        <th class="columns impr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Impressions</span>
                                            </div>
                                        </th>

                                        <th class="columns res-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Results</span>
                                            </div>
                                        </th>

                                        <th class="columns cpm-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CPM</span>
                                            </div>
                                        </th>

                                        <th class="columns cpc-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CPC (destination)</span>
                                            </div>
                                        </th>

                                        <th class="columns cpr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Cost per result</span>
                                            </div>
                                        </th>

                                        <th class="columns clicks-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>Clicks (destination)</span>
                                            </div>
                                        </th>

                                        <th class="columns ctr-col draggable">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span>CTR (destination)</span>
                                            </div>
                                        </th>

                                        <!-- <th class="columns conv-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Conversions</span>
                                                </div>
                                            </th>

                                            <th class="columns cpc-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Cost per<br> conversion</span>
                                                </div>
                                            </th>

                                            <th class="columns cvr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Conversion<br>rate (CVR)</span>
                                                </div>
                                            </th> -->

                                        <!-- <th class="columns rate-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span>Result rate</span>
                                                </div>
                                            </th> -->
                                    </tr>
                                </thead>
                                <!---------------------------------------------------- table content data ------------------------------------------------------->
                                <tbody class="table-content">

                                    <?php
                                    // ---------------------------------------------- Ads Data --------------------------------------------------

                                    // ~~~~~~~~~~~~~~~~ Substatus ~~~~~~~~~~~~~~~~
                                    function getSubStatusTextAds($statusValue)
                                    {
                                        switch ($statusValue) {
                                            case 'Active':
                                                return '';
                                            case 'Inactive':
                                                return 'Campaign Inactive';
                                            case 'Not delivering':
                                                return 'Review not approved';
                                            default:
                                                return '';
                                        }
                                    }

                                    // ~~~~~~~~~~~~~~~ Status Class ~~~~~~~~~~~~~~~~
                                    function getStatusDotClassAds($statusValue)
                                    {
                                        switch ($statusValue) {
                                            case 'Active':
                                                return 'is-active';
                                            case 'Inactive':
                                                return 'is-not-active';
                                            case 'Not delivering':
                                                return 'is-rejected';
                                            default:
                                                return '';
                                        }
                                    }

                                    // ~~~~~~~~~~~~~~ PHP get Row Id and insert data (FOR EACH ROW) ~~~~~~~~~~~~~~~~
                                    $sqlSelectAdsData = "SELECT * FROM adsdata where date BETWEEN '$startdate' and '$enddate'";
                                    $adsDataResult = $conn->query($sqlSelectAdsData);
                                    while ($adsDataRow = $adsDataResult->fetch_assoc()) {
                                        $isOnOff = $adsDataRow['onoff'] == 1 ? 'checked' : '';
                                        $bgClass = $adsDataRow['onoff'] == 1 ? 'on-off-dark-bg' : '';
                                        $rowId   = $adsDataRow['id'];
                                    ?>

                                        <tr class="ads-rw-<?php echo $rowId; ?>" id="ads-rw-<?php echo $rowId; ?>" onmouseover="showAdsTools('ads-rw-<?php echo $rowId; ?>')" onmouseout="hideAdsTools('ads-rw-<?php echo $rowId; ?>')">
                                            <td class="content-col cbx-col">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <label class="containercheck">
                                                        <input type="checkbox" id="cbx-checkbox" onclick="tickAdsBrandRow('ads-rw-<?php echo $rowId; ?>')">
                                                        <span class="innercheck vi-checkbox__inner"></span>
                                                    </label>
                                                </div>
                                            </td>

                                            <td class="content-col onoff-col">
                                                <div
                                                    class="d-flex position-relative justify-content-center align-items-center">
                                                    <div role="switch" class="vi-switch vi-tooltip item <?php echo $bgClass; ?>"
                                                        aria-describedby="vi-tooltip-9378" tabindex="0">
                                                        <input type="checkbox" class="vi-switch__input" <?php echo $isOnOff; ?> disabled>
                                                        <span class="vi-switch__core"></span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="content-col name-col pl-3">
                                                <div class="col-12 m-0 p-0 d-flex mx-auto">
                                                    <div class="video m-0 p-0">
                                                        <a href="#" data-toggle="modal" data-target="#videoModal">
                                                            <canvas id="canv1" width="86" height="48"></canvas>
                                                        </a>
                                                        <video id="brand-video" width="86" height="48">
                                                            <source src="img/<?php echo $adsDataRow['videoname'] ?>" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                        <button id="triggerVideo" class="video-trigger" onclick="displayBrandVideo('<?php echo $adsDataRow['videoname']; ?>')"></button>
                                                    </div>
                                                    <div class="non-video">
                                                        <input type="text" value="<?php echo $adsDataRow['adsname'] ?>"
                                                            class="non-video-caption" id="non-video-caption" disabled>
                                                        <span class="pencil" id="pencil">
                                                            <i class="vi-tooltip item vi-icon2-edit vi-popover__reference"
                                                                aria-describedby="vi-popover-6619" tabindex="0"></i>
                                                        </span>
                                                        <div class="toolkit" id="toolkit">
                                                            <div class="view-data" id="editAdsRowBtn" onclick="editAdsRow('ads-rw-<?php echo $rowId; ?>')">
                                                                <svg aria-hidden="true" class="icon svg-icon">
                                                                    <use xlink:href="#campaign-list-icon-view-data-bar">
                                                                    </use>
                                                                </svg>
                                                                View data
                                                            </div>
                                                            <div class="edit-data" >
                                                                <i class="vi-icon2-edit"></i>
                                                                Edit
                                                            </div>
                                                            <div class="copy-data">
                                                                <i class="vi-icon2-copy"></i>
                                                                Copy
                                                            </div>
                                                            <div class="dot-data" id="deleteRowBtn" onclick="deleteAdsRow('ads-rw-<?php echo $rowId; ?>')">
                                                                <svg aria-hidden="true" class="svg-icon">
                                                                    <use xlink:href="#campaign-list-icon-more"></use>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>

                                            <td class="content-col status-col">
                                                <div class="status-para">
                                                    <span class="status-dot <?php echo getStatusDotClassAds($adsDataRow['status']); ?>">
                                                        <?php if ($adsDataRow['status'] === 'Not delivering'): ?>
                                                            <svg data-v-45e9d3fe="" aria-hidden="true" class="status-icon svg-icon" elementtiming="element-timing">
                                                                <use xlink:href="#campaign-list-icon-errortriangle-r" elementtiming="element-timing"></use>
                                                            </svg>
                                                        <?php endif; ?>
                                                    </span>
                                                    <span class="status-text"><?php echo $adsDataRow['status']; ?></span>
                                                </div>
                                                <div class="sub-status">
                                                    <span class="sub-status-text"><?php echo getSubStatusTextAds($adsDataRow['status']); ?></span>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col do-col">
                                                    <span contenteditable="true">-</span>
                                                </td> -->

                                            <!-- <td class="content-col ad-grp-id-col">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <input type="number" value="165465863484510">
                                                    </div>
                                                </td> -->

                                            <td class="content-col ad-grp-name-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <a href="#">
                                                        <input type="text" value="<?php echo $adsDataRow['adgroupname'] ?>" disabled>
                                                    </a>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col ad-id-col">
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <input type="number" value="165465863484510">
                                                </div>
                                                </td> -->

                                            <!-- <td class="content-col net-cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="12.50 MYR" disabled>
                                                </div>
                                                </td> -->

                                            <td class="content-col cost-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['cost'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col reach-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['reach'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col impr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['imprs'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col res-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['result'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpm-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['cpm'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpc-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['cpc'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col cpr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['cpr'], 2, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col clicks-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['click'], 0, '.', ','); ?>" disabled>
                                                </div>
                                            </td>

                                            <td class="content-col ctr-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="<?php echo number_format($adsDataRow['ctr'], 2) . '%' ?>" disabled>
                                                </div>
                                            </td>

                                            <!-- <td class="content-col conv-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <input type="text" value="4567"
                                                        disabled>
                                                </div>
                                                </td>

                                                <td class="content-col cvr-col">
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <input type="text" value="11.11%"
                                                            disabled>
                                                    </div>
                                                </td> -->

                                            <!-- <td class="content-col rate-col">
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <span contenteditable="true">0.00%</span>
                                                </div>
                                                </td> -->
                                        </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <!----------------------------- table content footer ----------------------------->
                                <tfoot class="table-footer">

                                    <?php
                                    $sqlSelectFooter = "SELECT * FROM totaladsdata";
                                    $adsFooterResult = $conn->query($sqlSelectFooter);
                                    $adsFooterRow = $adsFooterResult->fetch_assoc();

                                    $sqlCountAds = "SELECT COUNT(*) AS totalcount FROM adsdata";
                                    $countAdsResult = $conn->query($sqlCountAds);
                                    if ($countAdsResult && $countAdsResult->num_rows > 0) {
                                        $row = $countAdsResult->fetch_assoc();
                                        $totalAds = $row['totalcount'];
                                    } else {
                                        $totalAds = 0;
                                    }
                                    ?>

                                    <tr>
                                        <td colspan="3" class="footer-col total-ads">
                                            <div class="d-flex justify-content-start align-items-center">
                                                <span class="total-ads-txt">
                                                    <?php echo "Total of $totalAds " . ($totalAds == 1 ? 'ad' : 'ads'); ?>
                                                </span>
                                                <i class="vi-tooltip vi-icon-ex-circle-question item"
                                                    aria-describedby="vi-tooltip-1404" tabindex="0"></i>
                                            </div>
                                        </td>

                                        <td class="footer-col">
                                            <div>
                                                <span>- </span>
                                            </div>
                                        </td>

                                        <td class="footer-col">
                                            <div>
                                                <span>- </span>
                                            </div>
                                        </td>

                                        <td class="footer-col cost-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalcost"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col reach-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalreach"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col impr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalimprs"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col res-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalresult"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpm-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalcpm"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpc-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalcpc"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col cpr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalcpr"], 2, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col clicks-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalclick"], 0, '.', ',') ?></span>
                                            </div>
                                        </td>

                                        <td class="footer-col ctr-col">
                                            <div class="d-flex justify-content-end align-items-center">
                                                <span><?php echo number_format($adsFooterRow["totalctr"], 2) . '%' ?></span>
                                            </div>
                                        </td>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------------------------------------------------------------------- BLACK HELP ----------------------------------------------------->
            <div class="black-help">
                <div class="inner-black-help">
                    <span class="i-icon i-icon-help ab-entry2__help">
                        <svg width="24" height="24" viewBox="0 0 48 48" fill="none">
                            <path
                                d="M24 44C29.5228 44 34.5228 41.7614 38.1421 38.1421C41.7614 34.5228 44 29.5228 44 24C44 18.4772 41.7614 13.4772 38.1421 9.85786C34.5228 6.23858 29.5228 4 24 4C18.4772 4 13.4772 6.23858 9.85786 9.85786C6.23858 13.4772 4 18.4772 4 24C4 29.5228 6.23858 34.5228 9.85786 38.1421C13.4772 41.7614 18.4772 44 24 44Z"
                                fill="#fff" stroke="#fff" stroke-width="4" stroke-linejoin="round"
                                elementtiming="element-timing"></path>
                            <path
                                d="M24 28.6248V24.6248C27.3137 24.6248 30 21.9385 30 18.6248C30 15.3111 27.3137 12.6248 24 12.6248C20.6863 12.6248 18 15.3111 18 18.6248"
                                stroke="#121415" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                                elementtiming="element-timing"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24 37.6248C25.3807 37.6248 26.5 36.5055 26.5 35.1248C26.5 33.7441 25.3807 32.6248 24 32.6248C22.6193 32.6248 21.5 33.7441 21.5 35.1248C21.5 36.5055 22.6193 37.6248 24 37.6248Z"
                                fill="#121415">
                            </path>
                        </svg>
                        <span class="help-txt">Help</span>
                        <span class="i-icon i-icon-drag">
                            <svg width="14" height="14" viewBox="0 0 48 48" fill="none" elementtiming="element-timing">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19 10C19 12.2091 17.2091 14 15 14C12.7909 14 11 12.2091 11 10C11 7.79086 12.7909 6 15 6C17.2091 6 19 7.79086 19 10ZM15 28C17.2091 28 19 26.2091 19 24C19 21.7909 17.2091 20 15 20C12.7909 20 11 21.7909 11 24C11 26.2091 12.7909 28 15 28ZM15 42C17.2091 42 19 40.2091 19 38C19 35.7909 17.2091 34 15 34C12.7909 34 11 35.7909 11 38C11 40.2091 12.7909 42 15 42Z"
                                    fill="#fff" elementtiming="element-timing"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M37 10C37 12.2091 35.2091 14 33 14C30.7909 14 29 12.2091 29 10C29 7.79086 30.7909 6 33 6C35.2091 6 37 7.79086 37 10ZM33 28C35.2091 28 37 26.2091 37 24C37 21.7909 35.2091 20 33 20C30.7909 20 29 21.7909 29 24C29 26.2091 30.7909 28 33 28ZM33 42C35.2091 42 37 40.2091 37 38C37 35.7909 35.2091 34 33 34C30.7909 34 29 35.7909 29 38C29 40.2091 30.7909 42 33 42Z"
                                    fill="#fff"></path>
                            </svg>
                        </span>
                    </span>
                </div>
            </div>

            <!---------------------------------------------------------------------------- PAGE SEGMENTATION ------------------------------------------------------------------------------->
            <div class="page-segment col-12 m-0 p-0 pr-3">
                <div class="row">
                    <div class="col-12 m-0 p-0">
                        <div class="d-flex justify-content-end align-items-center">
                            <div class="d-flex page align-items-center">
                                <button type="button" disabled="disabled" class="btn-prev">
                                    <i class="vi-icon vi-icon-arrow-left"></i>
                                </button>
                                <div class="green-page mx-2">1</div>
                                <button type="button" disabled="disabled" class="btn-next">
                                    <i class="vi-icon vi-icon-arrow-right"></i>
                                </button>
                            </div>
                            <div class="per-page ms-3">
                                <button class="per-page-btn">
                                    <span>
                                        200/page
                                        <i class="arrow-icon vi-icon-arrow-down vi-icon--right"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- edit tab -->
            <div class="edit-tag sideslip">
                <div class="d-flex">
                    <div class=" m-0 p-0 side-left">
                        <div class="tab-item-close">
                           <div class="close-btn">
                            <svg data-v-0efd789f="" aria-hidden="true" class="close-button__icon svg-icon" elementtiming="element-timing">
                                    <use xlink:href="#campaign-list-icon-common-drawer-close" elementtiming="element-timing"></use>
                                </svg>
                           </div>
                        </div>
                        <div class="tab-item-others">
                            <div class="common-drawer-tab vi-tooltip tab-item tab-item--active">
                                <svg data-v-534b78c5="" aria-hidden="true" class="svg-icon tab-item__icon" elementtiming="element-timing">
                                    <use xlink:href="#campaign-list-icon-common-drawer-edit" elementtiming="element-timing"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="tab-item-others">
                            <div class="common-drawer-tab vi-tooltip tab-item">
                                <svg data-v-534b78c5="" aria-hidden="true" class="svg-icon tab-item__icon" elementtiming="element-timing">
                                    <use xlink:href="#campaign-list-icon-common-drawer-viewdata" elementtiming="element-timing"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="tab-item-others">
                            <div class="common-drawer-tab vi-tooltip tab-item">
                                <svg data-v-534b78c5="" aria-hidden="true" class="svg-icon tab-item__icon" elementtiming="element-timing">
                                    <use xlink:href="#campaign-list-icon-common-drawer-log" elementtiming="element-timing"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="tab-item-others">
                            <div class="common-drawer-tab vi-tooltip tab-item">
                                <svg data-v-534b78c5="" aria-hidden="true" class="svg-icon tab-item__icon" elementtiming="element-timing">
                                    <use xlink:href="#campaign-list-icon-common-drawer-analysis" elementtiming="element-timing"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="ppackage">
                            <div class="creation-app">
                                <div class="" style="height: calc(0px + 100vh);">
                                    <div class="index_creationContent_sDXMS">
                                        <div class="index_editCreative_KssUQ">
                                            <div class="index_editTitle_Bm3Ny">
                                                <div class="index_editTitleText_fDLPl">
                                                    <span>Edit ad</span>
                                                </div>
                                                <span class="index_editTitleId_w0jhq">Ad ID: 1817573122007073</span>
                                            </div>

                                            <!-- contnet -->
                                             <div class="index_creativeGateway_QieEM">
                                                <div class="index_container_QB1YE">
                                                    <div class="index_wrapper_MbXmy">
                                                        <div class="index_content_KjME1 index_infraPreviewContent_oXXGi">
                                                            <div class="index_normalCreative_tS2ek">
                                                                <div class="infra-preview-form-wrapper">
                                                                    <form action="">
                                                                        <section class="index_container_qIZOO card-container--mini index_creativeType_bJoYx d-none">
                                                                            <div class="card-cont index_bodyWrapper_qF6uZ card-container__body-wrapper--mini">
                                                                                <div class="switch-container" style="font-size: 18px;">
                                                                                    <div class="index_switchContent_BQSqd">
                                                                                        <div class="vi-tooltip index_switchWrapper_lVIeH">
                                                                                        <span content="" placement="bottom" effect="light" class="index_switch_fSi_w"><!---->
                                                                                            <div data-testid="switch-container-index-jW96vy" role="switch" aria-disabled="true" class="vi-switch is-disabled">
                                                                                                <input data-testid="switch-component-rZhLsB" type="checkbox" name="" true-value="true" disabled="disabled" class="vi-switch__input"><!---->
                                                                                                <span class="vi-switch__core" style="width: 40px;">

                                                                                                </span><!---->
                                                                                            </div>
                                                                                        </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                        <section class="index_container_qIZOO card-container--min">
                                                                            <div class="card-title index_title_gRuIn">
                                                                                <span> Ad name </span>
                                                                            </div>
                                                                            <div class="">
                                                                                <div class="card-cont index_bodyWrapper_qF6uZ card-container__body-wrapper--min">
                                                                                    <div class="" style="margin-top: 24px;">
                                                                                       <div class="vi-form-item">
                                                                                            <div class="vi-form-item__content">
                                                                                                <div class="vi-tag-input">
                                                                                                    <div class="vi-input">
                                                                                                    <input type="text" autocomplete="off" id="ad-base-name" data-testid="creative-name-content-48DpDT" placeholder="Enter ad name" data-tea-expose="new_create_ad_creative_name_expose,creation_component_show,topview_module_show" data-tea-click="new_create_ad_creative_name,creation_component_click,click_topview_module" data-tea-std_component_name="creative_name" data-tea-location="creative_name" class="vi-input__inner">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="">
                                                                                                <button data-testid="creative-name-content-mFsCQi" type="button" class="vi-button vi-byted-button vi-tooltip vi-button--text content_generateBtn_nhoCv" aria-describedby="vi-tooltip-7066" tabindex="0"><!----><!----><span>
                                                                                                    <i class="vi-icon-plus"></i> Add creative name </span>
                                                                                                </button>
                                                                                                </div>
                                                                                            </div>
                                                                                       </div> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>

                                                                        <div class="vui-section index_wrapper_Rzbdf">
                                                                            <section class="index_container_qIZOO card-container--small index_creativeIdentity_z5fTL index_container_ANo3M identity-container index_newAdPreviewCreativeIdentity_TgENK">
                                                                                <div class="index_header_ujMpj index_header_CI0MP">
                                                                                    <div class="index_titleWrapper_zkkmZ">
                                                                                        <div class="index_title_EZZfA">
                                                                                            <span class="index_titleContent_THeOd">Identity</span>
                                                                                            <i class="vi-icon-question vi-tooltip" aria-describedby="vi-tooltip-8652" tabindex="0"></i>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-cont index_bodyWrapper_qF6uZ card-container__body-wrapper--small">
                                                                                    <div class="index_identityTypeSelector_DUiuW identity-type-selector">
                                                                                        <div class="vi-tooltip index_tooltipWrap_S4jat">
                                                                                            <div class="vi-switch is-disabled">
                                                                                                <input data-testid="switch-component-rZhLsB" type="checkbox" name="" true-value="true" disabled="disabled" class="vi-switch__input">
                                                                                                <span class="vi-switch__core" style="width: 40px;"></span>
                                                                                            </div>
                                                                                            <span class="index_switchText_YhSUx index_disabledSwitch_ctiDl"> Use TikTok account to deliver Spark Ads </span>
                                                                                            <i class="vi-icon-question vi-tooltip" aria-describedby="vi-tooltip-2089" tabindex="0"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--  -->
                                                                                    <div class="vi-form-item">
                                                                                        <div class="vi-form-item__content">
                                                                                            <div class="index_customIdentityTitle_MRQNI">
                                                                                                Set custom identity 
                                                                                                <i class="vi-icon-question vi-tooltip" aria-describedby="vi-tooltip-2330" tabindex="0"></i>
                                                                                            </div>
                                                                                            <!--  -->
                                                                                            <div>
                                                                                                <div class="custom-identity-list_customIdentityWarpper_EfZzh">
                                                                                                    <div class="index_identitySelector_IpQui">
                                                                                                        <div class="d-flex">
                                                                                                            <div class="vi-input vi-input--prefix vi-input--suffix index_identityInputTag_uKsaY">
                                                                                                                <input type="text" autocomplete="off" placeholder="Select an identity" data-testid="creative_identity_select" readonly="readonly" class="vi-input__inner" value="asiagamecenter">
                                                                                                                <span class="vi-input__prefix">
                                                                                                                    <img data-v-307cd3e6="" src="https://lf16-ttmp.tiktokstaticb.com/obj/ttastatic-sg/biz_manager_creation/statics/images/identity-default-avatar81d7ba6f.png" class="index_identityAvator_CNpqR">
                                                                                                                </span>
                                                                                                                <span class="vi-input__suffix"><span class="vi-input__suffix-inner"><i class="vi-input__icon vi-icon-arrow-down"></i></span><!----></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button data-testid="creative_identity_customAddAccount" type="button" class="vi-button vi-byted-button vi-button--text custom-identity-list_addIcon_jwc8L" data-tea-expose="topview_module_show" data-tea-click="upgrade_identity_create_new_custom_identity,click_topview_module" data-tea-location="create_new_identity"><!----><i class="vi-icon2-add-small"></i><span><span class="custom-identity-list_text_q5HM6">Create new custom identity</span></span></button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>

                                                                            <!--  -->
                                                                            <section class="index_container_qIZOO card-container--small index_creativeDetail_YFxAd index_container_jJVLj index_newAdPreviewCreativeDetail_NeKQl">
                                                                                <div class="index_header_ujMpj">
                                                                                    <div class="card-title index_title_gRuIn">
                                                                                        <span> Ad details </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <div class="card-cont index_bodyWrapper_qF6uZ card-container__body-wrapper--small">
                                                                                        <div class="content_material_naFc3">
                                                                                            <div class="index_subFormGroupStyle_DLfEO" style="margin-top: -24px;margin-bottom: 32px;">
                                                                                                <div class="index_subFormTitle_Tw0sV"> Ad format </div>
                                                                                                <div class="vi-form-item index_container_rfbhC">
                                                                                                    <div class="vi-form-item__content">
                                                                                                        <ul class="index_list_c7P98">
                                                                                                            <span class="index_item_Bv1GU">
                                                                                                            <li data-tea-creative-type="2" data-tea="create_ad_creative_type,creation_component_click" data-tea-expose="create_ad_creative_type_expose,creation_component_show" data-tea-std_component_name="creative_ad_type_2" data-tea-is_aia="0" class="vi-popover__reference" aria-describedby="vi-popover-1459" tabindex="0">
                                                                                                                <div data-testid="creative_adType_item2" class="creative-type-selector-tab_typeSelectorWrap_i1TQl creative-type-selector-tab_active_QijEm creative-type-selector-tab_disabled_jFYDk">
                                                                                                                    <div class="creative-type-selector-tab_contentWrap_itt4r">
                                                                                                                        <div class="index_typeContent_d8hkl">
                                                                                                                            <svg aria-hidden="true" class="svg-icon index_icon_KaveR">
                                                                                                                                <use xlink:href="#icon-single-video-ads-icon"></use>
                                                                                                                            </svg>
                                                                                                                    <div class="index_titleWrap_sw9ty"><span class="index_title_HvT8l"> Single video <!----></span><span class="index_subTitle_HlO8W"> Create an ad with one video or multiple images. <span><div data-testid="popover-main-5Uvc3C" role="tooltip" id="vi-popover-6847" aria-hidden="true" class="vi-popover vi-popper" style="width: 150px; max-width: none; display: none;"><!----><!----><div class="index_musicCarouselIntroduceWrap_E7CKV"><img src="https://sf16-sg.tiktokcdn.com/obj/eden-sg/lm_zkh_rvarpa/ljhwZthlaukjlkulzlp/ads_manager_creation/music-carousel-introduce-hq.gif" class="index_musicCarouselIntroduceImage_DnO83"></div></div></span></span></div></div></div>
                                                                                                                </div>
                                                                                                            </li>

                                                                                                                    
                                                                                                            </span>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!--  -->
                                                                                            <div class="index_mediaMaterial_pydlm">
                                                                                                <div class="non-aco-compose_nonAco_P672R non-aco-compose_subFormGroupStyle__12eJ">
                                                                                                    <div class="non-aco-compose_subFormTitle_TYApu">
                                                                                                        <span>Ad creative</span>
                                                                                                    </div>
                                                                                                    <div class="index_videoOrImage_DDn_c">
                                                                                                        <div class="index_materialTitleBox_F2qbS index_materialTitleBoxHaveContent_BIYH6">
                                                                                                            <span class="index_materialTitleLabel_KwLCh">
                                                                                                                <span id="creative_material_detail_label">Video</span>
                                                                                                            </span>
                                                                                                            <div class="vi-badge new-feature-badge">
                                                                                                                <button data-testid="creative_detail_nonAcoSingleVideoVideoEditor" type="button" class="vi-button vi-byted-button vi-button--text vi-button--small index_editorBtn_eBfzh" data-tea-expose="creative_video_editor_expose,creation_component_show" data-tea-click="creative_video_editor_click,creation_component_click" data-tea-entry_type="video-editor-btn" data-tea-std_component_name="creative_video_editor" data-tea-editor_traffic_direction="Video editor"><!----><!----><span><i class="vi-icon2-video-o index_videoEditIcon_gaRNa"></i><span>TikTok Video Editor</span></span></button>
                                                                                                            </div>
                                                                                                            <sup class="vi-badge__content is-fixed">New</sup>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    
                                                                                                    <div class="vi-form-item" style="margin-bottom: 0px;">
                                                                                                        <div class="index_materialButtons_MHlWC">
                                                                                                            <div class="selected-video_videoMaterialDetail_Hwpva">
                                                                                                                <div class="index_selectedMaterial_flUcr index_selectedMaterialFirst_bwOhS material-detail-wrapper">
                                                                                                                    <div class="index_materialInfoBox_DHQJy material-info-box">
                                                                                                                        <div class="index_videoCover_IE4o0 material-cover">
                                                                                                                            <img src="https://p16-ad-sg.tiktokcdn.com/origin/tos-alisg-p-0051c001-sg/ochweuG7QLAfgHFkUKIASPMgGgT6e2RRcFfiAF" class="index_image_HuhDS">
                                                                                                                        </div>
                                                                                                                        <div class="index_materialDescBox_SFJ1s material-desc-wrapper">
                                                                                                                            <div class="index_leftCol_hTivQ left-col">
                                                                                                                                <div class="index_info_oKP9I material-info">
                                                                                                                                    <span class="vi-tooltip index_fileNameBox_Y5gc3 file-name" aria-describedby="vi-tooltip-6066" tabindex="0">KWAI VISUAL (5).mp4</span>
                                                                                                                                    <span class="index_videoInfo_RPWNi material-detail-wrapper"><span class="index_label_psoD1 video-duration">00:05 &nbsp;|</span><span class="index_label_psoD1 material-resolution">1080x1920</span></span>
                                                                                                                                </div>

                                                                                                                                <div class="index_controlBar_Ekzhz material-detail-control-bar">
                                                                                                                                    <div>
                                                                                                                                        <div style="display: inline-block;">
                                                                                                                                            <div class="vi-dropdown">
                                                                                                                                            <span class="vi-tooltip vi-dropdown-selfdefine" aria-describedby="vi-tooltip-8070" tabindex="0" aria-haspopup="list" aria-controls="dropdown-menu-9420" role="button"><button data-testid="creative_material_selectedUpdate" type="button" class="vi-button vi-byted-button vi-button--text vi-button--small material-update-dropdown-new_editBtn_bWPbG"><!----><i class="vi-icon2-edit"></i><span> Update </span></button></span>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <button data-testid="creative_detail_materialSelectedChangeCover" type="button" class="vi-button vi-byted-button vi-button--text vi-button--small selected-video_coverButton_KCOw0" style="margin-left: 10px;"><!----><!----><span><i class="vi-icon2-picture selected-video_pictureIcon_RQdqZ"></i><span>Thumbnail</span><!----></span></button> 
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="small-gap-form">
                                                                                                <div class="index_adDetailForm_ee8jc">
                                                                                                    <div class="vi-form-item index_creativeTitle_EsafH">
                                                                                                        <div class="vi-form-item__content">
                                                                                                            <div class="vi-form-item inline-item is-success">
                                                                                                                <div class="index_label_e6vx9">
                                                                                                                    <div>
                                                                                                                        <span id="material_title_label">Text</span>
                                                                                                                        <i class="vi-icon-question vi-tooltip" aria-describedby="vi-tooltip-311" tabindex="0" style="margin-left: 4px;"></i>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="index_warper_Xa3hd">
                                                                                                                    <div class="vi-tooltip index_textareaCounter_scUDE index_inputBox_kL_B8">
                                                                                                                        <div class="index_content_zzTib">
                                                                                                                            <div class="vi-textarea index_inputClass_GE6yT">
                                                                                                                                
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--------------------------------------------------------------------------- VIDEO MODAL -------------------------------------------------------------------------------------->
        <section>
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="icon-bg">
                                <i class="vi-icon-error close-icon"></i>
                            </div>

                            <video id="modalVideo" width="400" height="200" autoplay loop controls>
                                <source src="img/video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                            <!-- <div class="xgplayer-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                        <path transform="translate(15,15) scale(0.04,0.04)"
                                            d="M576,363L810,512L576,661zM342,214L576,363L576,661L342,810z"></path>
                                    </svg>
                                </div>

                                <div class="xgplayer-controls">
                                    <div class="xgplayer-progress"></div>
                                </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------- ADD CAMPAIGN ROW MODAL ---------------------------------------------------------------------------------------->
        <section>
            <div class="modal fade add-row-modal" id="add-row-modal-campaigns-rw-1" tabindex="-1" role="dialog" aria-labelledby="addCampaignRow"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Campaign Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="controller/campaigns/update_campaigns_data.php" method="post" enctype="multipart/form-data">
                                <!---------------------------------- Hidden input field to assign row ID to match with database ID ---------------------------->
                                <input type="hidden" name="id" id="modal-form-id" value="1">

                                <!--------------------------------------------------------------- Step 1 --------------------------------------------------------->
                                <div id="step-1">
                                    <div class="form-group">
                                        <label for="app-name" class="col-form-label">On / Off</label>
                                        <div class="button-cover position-relative">
                                            <div class="button r">
                                                <input type="checkbox" class="checkbox" name="onoff" id="onoff"
                                                    value="0" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="app-name" class="col-form-label">Campaign Name:</label>
                                        <input type="text" class="form-control" name="campaignname" id="campaignname" autocomplete="off"
                                            placeholder="Campaign Name (2nd Col)">
                                    </div>
                                    <div class="form-group">
                                        <label for="remark" class="col-form-label">Status:</label>
                                        <select class="form-control" name="delivery" id="delivery">
                                            <option value="Active" class="is-active" id="is-active">Active</option>
                                            <option value="Inactive" class="is-not-active" id="is-not-actice">Inactive</option>
                                            <option value="Not delivering" class="rejected" id="rejected">Not delivering</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb">
                                        <label for="app-name" class="col-form-label">Results:</label>
                                        <input type="text" class="form-control" name="results" id="results" autocomplete="off"
                                            placeholder="results...">
                                    </div>
                                    <div class="modal-footer pt-4">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="mx-3 btn px-5 btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="mx-3 btn px-5 btn-primary"
                                                onclick="showStep('campaigns-rw-1', 2)">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <!----------------------------------------------------------- Step 2 -------------------------------------------------------------->
                                <div id="step-2">
                                    <div class="form-group">
                                        <label for="campaign" class="col-form-label">Imprs:</label>
                                        <input type="text" class="form-control" name="imprs" id="imprs" autocomplete="off"
                                            placeholder="imprs...">
                                    </div>
                                    <div class="form-group">
                                        <label for="ad-group" class="col-form-label">Reach:</label>
                                        <input type="text" class="form-control" name="reach" id="reach" autocomplete="off"
                                            placeholder="reach...">
                                    </div>
                                    <div class="form-group">
                                        <label for="ad-group" class="col-form-label">Cost:</label>
                                        <input type="text" class="form-control" name="cost" id="cost" autocomplete="off"
                                            placeholder="cost...">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Clicks:</label>
                                        <input type="text" class="form-control" name="clicks" id="clicks" autocomplete="off"
                                            placeholder="clicks...">
                                    </div>
                                    <div class="modal-footer pt-4">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="mx-3 btn px-5 btn-secondary"
                                                onclick="showStep('campaigns-rw-1', 1)">Back</button>
                                            <input type="submit" name="edit" value="Edit" class="mx-3 btn px-5 btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------- ADD AD GROUP ROW MODAL ---------------------------------------------------------------------------------------->
        <section>
            <div class="modal fade add-row-modal" id="add-row-modal-ads-group-rw-1" tabindex="-1" role="dialog" aria-labelledby="addAdsGroupRow"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ads Group Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="controller/ads_group/update_ads_group_data.php" method="post" enctype="multipart/form-data">
                                <!---------------------------------- Hidden input field to assign row ID to match with database ID ---------------------------->
                                <input type="hidden" name="id" id="modal-form-id" value="1">

                                <!--------------------------------------------------------------- Step 1 --------------------------------------------------------->
                                <div id="step-1">
                                    <div class="form-group">
                                        <label for="app-name" class="col-form-label">On / Off</label>
                                        <div class="button-cover position-relative">
                                            <div class="button r">
                                                <input type="checkbox" class="checkbox" name="onoff" id="onoff"
                                                    value="0" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="app-name" class="col-form-label">Ads Group Name:</label>
                                        <input type="text" class="form-control" name="adsgroupname" id="adsgroupname" autocomplete="off"
                                            placeholder="Ads Group Name (2nd Col)">
                                    </div>
                                    <div class="form-group">
                                        <label for="remark" class="col-form-label">Status:</label>
                                        <select class="form-control" name="delivery" id="delivery">
                                            <option value="Active" class="is-active" id="is-active">Active</option>
                                            <option value="Inactive" class="is-not-active" id="is-not-actice">Inactive</option>
                                            <option value="Not delivering" class="rejected" id="rejected">Not delivering</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="app-grp-name" class="col-form-label">Ad Group ID:</label>
                                        <input type="text" class="form-control" name="adsgroupid" id="adsgroupid"
                                            autocomplete="off" placeholder="Ads Group ID (4th Col)">
                                    </div>
                                    <div class="form-group mb">
                                        <label for="app-name" class="col-form-label">Results:</label>
                                        <input type="text" class="form-control" name="results" id="results" autocomplete="off"
                                            placeholder="results...">
                                    </div>
                                    <div class="modal-footer pt-4">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="mx-3 btn px-5 btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="mx-3 btn px-5 btn-primary"
                                                onclick="showStep('ads-group-rw-1', 2)">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <!----------------------------------------------------------- Step 2 -------------------------------------------------------------->
                                <div id="step-2">
                                    <div class="form-group">
                                        <label for="campaign" class="col-form-label">Imprs:</label>
                                        <input type="text" class="form-control" name="imprs" id="imprs" autocomplete="off"
                                            placeholder="imprs...">
                                    </div>
                                    <div class="form-group">
                                        <label for="ad-group" class="col-form-label">Reach:</label>
                                        <input type="text" class="form-control" name="reach" id="reach" autocomplete="off"
                                            placeholder="reach...">
                                    </div>
                                    <div class="form-group">
                                        <label for="ad-group" class="col-form-label">Cost:</label>
                                        <input type="text" class="form-control" name="cost" id="cost" autocomplete="off"
                                            placeholder="cost...">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Clicks:</label>
                                        <input type="text" class="form-control" name="clicks" id="clicks" autocomplete="off"
                                            placeholder="clicks...">
                                    </div>
                                    <div class="modal-footer pt-4">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="mx-3 btn px-5 btn-secondary"
                                                onclick="showStep('ads-group-rw-1', 1)">Back</button>
                                            <input type="submit" name="edit" value="Edit" class="mx-3 btn px-5 btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------------------------------------------------------------- ADD AD ROW MODAL ---------------------------------------------------------------------------------------->
        <section>
            <div class="modal fade add-row-modal" id="add-row-modal-ads-rw-1" tabindex="-1" role="dialog" aria-labelledby="addAdRow"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ads Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form action="controller/ads/update_ads_data.php" method="post" enctype="multipart/form-data">
                                <!---------------------------------- Hidden input field to assign row ID to match with database ID ---------------------------->
                                <input type="hidden" name="id" id="modal-form-id" value="1">

                                <!--------------------------------------------------------------- Step 1 --------------------------------------------------------->
                                <div id="step-1">
                                    <div class="form-group">
                                        <label for="app-name" class="col-form-label">On / Off</label>
                                        <div class="button-cover position-relative">
                                            <div class="button r">
                                                <input type="checkbox" class="checkbox" name="onoff" id="onoff"
                                                    value="0" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="videoname" id="videoname">
                                    </div>
                                    <div class="form-group">
                                        <label for="app-name" class="col-form-label">AdsName:</label>
                                        <input type="text" class="form-control" name="adsname" id="adsname" autocomplete="off"
                                            placeholder="Ads Name (2nd Col)">
                                    </div>
                                    <div class="form-group">
                                        <label for="remark" class="col-form-label">Status:</label>
                                        <select class="form-control" name="delivery" id="delivery">
                                            <option value="Active" class="is-active" id="is-active">Active</option>
                                            <option value="Inactive" class="is-not-active" id="is-not-actice">Inactive</option>
                                            <option value="Not delivering" class="rejected" id="rejected">Not delivering</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="app-grp-name" class="col-form-label">Ad Group Name:</label>
                                        <input type="text" class="form-control" name="adsgroupname" id="adsgroupname"
                                            autocomplete="off" placeholder="Ads Group Name (4th Col)">
                                    </div>
                                    <div class="form-group mb">
                                        <label for="app-name" class="col-form-label">Results:</label>
                                        <input type="text" class="form-control" name="results" id="results" autocomplete="off"
                                            placeholder="results...">
                                    </div>
                                    <div class="modal-footer pt-4">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="mx-3 btn px-5 btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="mx-3 btn px-5 btn-primary"
                                                onclick="showStep('ads-rw-1', 2)">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <!----------------------------------------------------------- Step 2 -------------------------------------------------------------->
                                <div id="step-2">
                                    <div class="form-group">
                                        <label for="campaign" class="col-form-label">Imprs:</label>
                                        <input type="text" class="form-control" name="imprs" id="imprs" autocomplete="off"
                                            placeholder="imprs...">
                                    </div>
                                    <div class="form-group">
                                        <label for="ad-group" class="col-form-label">Reach:</label>
                                        <input type="text" class="form-control" name="reach" id="reach" autocomplete="off"
                                            placeholder="reach...">
                                    </div>
                                    <div class="form-group">
                                        <label for="ad-group" class="col-form-label">Cost:</label>
                                        <input type="text" class="form-control" name="cost" id="cost" autocomplete="off"
                                            placeholder="cost...">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Clicks:</label>
                                        <input type="text" class="form-control" name="clicks" id="clicks" autocomplete="off"
                                            placeholder="clicks...">
                                    </div>
                                    <div class="modal-footer pt-4">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="mx-3 btn px-5 btn-secondary"
                                                onclick="showStep('ads-rw-1', 1)">Back</button>
                                            <input type="submit" name="edit" value="Edit" class="mx-3 btn px-5 btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--------------------------------------------------------------------------- HEADER TOOLS SUBMENU ---------------------------------------------------------------------------------->
    <div class="header-tools-submenu py-2 px-3">
        <div class="column no-pad-left">
            <div class="title">Audience</div>
            <div class="item">Audience manager</div>
            <div class="item">Comments</div>
        </div>
        <div class="column bdl">
            <div class="title">Creative</div>
            <div class="item">Creative library</div>
            <div class="item">Instant page</div>
            <div class="item">Video editor</div>
        </div>
        <div class="column bdl">
            <div class="title">Management</div>
            <div class="item">Automated rules</div>
            <div class="item">Catalogs</div>
            <div class="item">Events</div>
            <div class="item">Leads</div>
            <div class="item">Pangle brand safety</div>
            <div class="item">Recommendation center</div>
        </div>

        <div class="column bdl">
            <div class="title">Settings</div>
            <div class="item">Account setup</div>
            <div class="item">
                Brand safety hub
                <button class="beta">Beta</button>
            </div>
            <div class="item">Documents</div>
            <div class="item">Payment</div>
        </div>
    </div>

    <!--------------------------------------------------------------------------- HEADER ANALYTIC SUBMENU ---------------------------------------------------------------------------------->
    <div class="header-analytic-submenu py-2 px-3">
        <div class="column">
            <div class="item">Custom reports</div>
            <div class="item">Attribution analytics</div>
            <div class="item">Audience insights</div>
            <div class="item">Comment insights</div>
            <div class="item">Creative inspirations</div>
            <div class="item">Video insights</div>
        </div>
    </div>

    <!--------------------------------------------------------------------------- HEADER BUSINESS CENTER SUBMENU ---------------------------------------------------------------------------------->
    <div class="header-bc-submenu">
        <div>Business Center</div>
        <div x-arrow="" class="arrow"></div>
    </div>

    <!--------------------------------------------------------------------------- HEADER NOTIFICATION SUBMENU ---------------------------------------------------------------------------------->
    <div class="header-noti-submenu">
        <div>Notifications</div>
        <div x-arrow="" class="arrow"></div>
    </div>

    <!---------------------------------------------------------------------------------- HEADER HELP SUBMENU ----------------------------------------------------------------------------------->
    <div class="header-help-submenu">
        <div class="help">
            <div class="item no-bd-top">Help Center</div>
            <div class="item">Customer Support</div>
            <div class="item">Learning Center</div>
        </div>
        <div x-arrow="" class="arrow"></div>
    </div>

    <!---------------------------------------------------------------------------------- CALENDAR SUBMENU --------------------------------------------------------------------------------------->
    <div class="calendar-submenu">
        <span>This time zone is based on your ad account settings.
            <span class="learn-more">Learn more</span>
        </span>
        <div x-arrow="" class="arrow"></div>
    </div>

    <!--------------------------------------------------------------------------------- DATE SUBMENU -------------------------------------------------------------------------------------------->$_COOKIE
    <div class="date-submenu">
        <div class="compare-row">
            <span class="compare-text">Compare</span>
            <div role="switch" class="vi-switch vi-tooltip item"
                aria-describedby="vi-tooltip-9378" tabindex="0">
                <input type="checkbox" class="vi-switch__input">
                <span class="vi-switch__core"></span>
            </div>
        </div>
        <div class=date-content>
            <div class="date-left">
                <button class="dl1">Lifetime</button>
                <button class="dl2">Today</button>
                <button class="dl3">Yesterday</button>
                <button class="dl4">Last 7 days</button>
                <button class="dl5">Last 14 days</button>
                <button class="dl6">Last 30 days</button>
                <button class="dl7">This week</button>
                <button class="dl8">Last week</button>
                <button class="dl9">This month</button>
                <button class="dl10">Last month</button>
            </div>
            <div class="date-right">
                <div class="nov">
                    <div class="nov-header justify-content-start">
                        <button class="back-to-jan vi-icon-d-arrow-left"></button>
                        <button class="back-to-prev vi-icon-arrow-left"></button>
                        <span class="nov-txt">November 2024</span>
                    </div>
                    <table class="nov-content">
                        <tbody>
                            <tr class="dayofweek">
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                            <tr>
                                <td class="greyout">27</td>
                                <td class="greyout">28</td>
                                <td class="greyout">29</td>
                                <td class="greyout">30</td>
                                <td class="greyout">31</td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td class="greyout">1</td>
                                <td class="greyout">2</td>
                                <td class="greyout">3</td>
                                <td class="greyout">4</td>
                                <td class="greyout">5</td>
                                <td class="greyout">6</td>
                                <td class="greyout">7</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dec">
                    <div class="dec-header justify-content-end">
                        <span class="dec-txt">December 2024</span>
                        <button class="back-to-next vi-icon-arrow-right"></button>
                        <button class="back-to-dec vi-icon-d-arrow-right"></button>
                    </div>
                    <table class="dec-content">
                        <tbody>
                            <tr class="dayofweek">
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                            <tr>
                                <td class="greyout">24</td>
                                <td class="greyout">25</td>
                                <td class="greyout">26</td>
                                <td class="greyout">27</td>
                                <td class="greyout">28</td>
                                <td class="greyout">29</td>
                                <td class="greyout">30</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td class="greyout">1</td>
                                <td class="greyout">2</td>
                                <td class="greyout">3</td>
                                <td class="greyout">4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="date-footer">
            <button class="date-cancel">Cancel</button>
            <button class="date-apply">Apply</button>
        </div>
    </div>

    <!-------------------------------------------------------------------------------- TABLE HEADER REFRESH SUBMENU ----------------------------------------------------------------------------->
    <<?php
        $randomMinutes = rand(30, 240);
        $lastUpdatedTime = date('Y-m-d H:i:s', strtotime("-$randomMinutes minutes"));
        ?>

        <div class="table-header-refresh-submenu">
        <span>Refresh<br>Last updated time: <?php echo $lastUpdatedTime ?></span>
        <div x-arrow="" class="arrow"></div>
        </div>

        <!-------------------------------------------------------------------------------- TABLE HEADER REPORT SUBMENU ----------------------------------------------------------------------------->
        <div class="table-header-report-submenu">
            <span>Export Report</span>
            <div x-arrow="" class="arrow"></div>
        </div>

        <!---------------------------------------------------------------------------------- FOOTER QUESTION SUBMENU ----------------------------------------------------------------------------------->
        <!-- <div class="footer-question-submenu">
        <span class="question-mark">Total data is displayed according to your filter settings. We won't display data for
            deleted ads unless you select this option in your filter.</span>
        <div x-arrow="" class="arrow"></div>
    </div> -->

        <!----------------------------------------------------------------------- Bootstrap JS (popper.js and bootstrap.js) ---------------------------------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>

        <!---------------------------------------------------------------------------------------- PHP + JS -------------------------------------------------------------------------------------->
        <script>
            // ================================================================================== USER ====================================================================
            function saveUser() {
                let user = document.getElementById("user").textContent;

                $.ajax({
                    url: 'controller/user/update_user.php',
                    type: 'POST',
                    data: {
                        user: user
                    },
                    success: function(response) {
                        try {
                            let result = JSON.parse(response);

                            if (result.userid) {
                                console.log(`User ID: ${result.userid}`);
                            }

                            if (result.currency) {
                                console.log(`Currency: ${result.currency}`);
                                displayCurrency(result.currency);
                            }

                            if (result.message) {
                                console.log(result.message);
                            }

                            if (result.error) {
                                console.error(result.error);
                            }
                        } catch (e) {
                            console.error("Error parsing JSON: ", response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            // ================================================================================= CURRENCY ==================================================================================
            // -------------------------- ADD currency to DB ------------------------
            function addCurrency(currency) {
                $.ajax({
                    url: 'controller/currency/update_currency.php',
                    type: 'POST',
                    data: {
                        currency: currency
                    },
                    success: function(response) {
                        console.log(response);
                        fetchStoredCurrency();
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }
            // ---------------------- FETCH currency from DB ----------------------
            function fetchStoredCurrency() {
                $.ajax({
                    url: 'controller/currency/fetch_currency.php',
                    type: 'GET',
                    success: function(response) {
                        const storedCurrency = response.currency;
                        if (storedCurrency) {
                            displayCurrency(storedCurrency);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }
            // -------------------- DISPLAY updated currency's UI ------------------------
            function displayCurrency(currencyCode) {
                const tableContent = Array.from(document.querySelectorAll('.table-content')); // Convert NodeList to an array
                const tableFooter = Array.from(document.querySelectorAll('.table-footer')); // Convert NodeList to an array

                const inputFields = tableContent.flatMap(x => Array.from(x.querySelectorAll('.cost-col input, .cpm-col input, .cpc-col input, .cpr-col input')));
                const spanElements = tableFooter.flatMap(x => Array.from(x.querySelectorAll('.cost-col span, .cpm-col span, .cpc-col span, .cpr-col span')));

                console.log(inputFields);

                let newCurrencySymbol; // Declare variable properly
                switch (currencyCode) {
                    case 'MYR':
                        newCurrencySymbol = 'MYR';
                        break;
                    case 'USD':
                        newCurrencySymbol = 'USD';
                        break;
                    case 'TWD':
                        newCurrencySymbol = 'TWD';
                        break;
                    case 'IDR':
                        newCurrencySymbol = 'IDR';
                        break;
                    case 'VND':
                        newCurrencySymbol = 'VND';
                        break;
                    case 'THB':
                        newCurrencySymbol = 'THB';
                        break;
                    default:
                        newCurrencySymbol = 'MYR';
                        break;
                }

                inputFields.forEach((inputField) => {
                    let currentValue = inputField.value;
                    currentValue = currentValue.replace(/\s+[A-Z]{3}$/, ''); // Remove existing currency if present
                    inputField.value = `${currentValue} ${newCurrencySymbol}`;
                });

                spanElements.forEach((spanField) => {
                    let currentValue = spanField.textContent;
                    currentValue = currentValue.replace(/\s+[A-Z]{3}$/, ''); // Remove existing currency if present
                    spanField.textContent = `${currentValue} ${newCurrencySymbol}`;
                });

                window.newCurrencySymbol = newCurrencySymbol; // Store the symbol globally if needed
            }


            // ---------------- Call displayCurrency to display currency when loaded 1st time ----------------
            displayCurrency('<?php echo $currency; ?>');

            // ------------------------- Trigger button click to change currency --------------------------
            document.addEventListener('DOMContentLoaded', function() {

                const currencyButtons = [{
                        id: 'cur-1',
                        currency: 'MYR'
                    },
                    {
                        id: 'cur-2',
                        currency: 'USD'
                    },
                    {
                        id: 'cur-3',
                        currency: 'TWD'
                    },
                    {
                        id: 'cur-4',
                        currency: 'IDR'
                    },
                    {
                        id: 'cur-5',
                        currency: 'VND'
                    },
                    {
                        id: 'cur-6',
                        currency: 'THB'
                    }
                ];

                currencyButtons.forEach(button => {
                    document.getElementById(button.id).addEventListener('click', function() {
                        addCurrency(button.currency);
                    });
                });

            });

            // ================================================================================ DATE ========================================================================
            function saveDates(startDate, endDate) {
                $.ajax({
                    url: 'controller/date/update_date.php',
                    type: 'POST',
                    data: {
                        start_date: startDate,
                        end_date: endDate
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }

            let start = moment('<?php echo $startdate; ?>');
            let end = moment('<?php echo $enddate; ?>');

            function setdaterange(start, end) {
                let today = moment();
                let displayText;
                const yesterday = moment().subtract(1, 'day');

                // Existing conditions for display text
                if (start.isSame(today, 'day') && end.isSame(today, 'day')) {
                    displayText = ("Today: ") + start.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 176.5px)');
                } else if (start.isSame(yesterday, 'day') && end.isSame(yesterday, 'day')) {
                    displayText = ("Yesterday: ") + start.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 200px)');
                } else if (start.isSame(end, 'day')) {
                    displayText = start.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 131px)');
                } else if (start.isSame(moment().subtract(6, 'days'), 'day') && end.isSame(today, 'day')) {
                    displayText = "Last 7 days: " + start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 297.5px)');
                } else if (start.isSame(moment().startOf('week'), 'day') && end.isSame(today, 'day')) {
                    displayText = "This Week: " + start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 291px)');
                } else if (start.isSame(moment().subtract(1, 'week').startOf('week'), 'day') && end.isSame(moment().subtract(1, 'week').endOf('week'), 'day')) {
                    displayText = "Last Week: " + start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 283px)');
                } else if (start.isSame(moment().startOf('month'), 'day') && end.isSame(today, 'day')) {
                    displayText = "This Month: " + start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 291px)');
                } else if (start.isSame(moment().subtract(1, 'month').startOf('month'), 'day') && end.isSame(moment().subtract(1, 'month').endOf('month'), 'day')) {
                    displayText = "Last Month: " + start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 291px)');
                } else if (start.isSame(end, 'month')) {
                    displayText = start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 226.2px)');
                } else {
                    displayText = start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                    $('.search-bar').css('width', 'calc(99.5% - 220px)');
                }

                // Set values in the inputs
                $('#start-date').val(start.format('YYYY-MM-DD'));
                $('#end-date').val(end.format('YYYY-MM-DD'));

                // AJAX call to save the selected dates
                saveDates(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
            }

            // Initialize the daterangepicker with ranges
            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'This Week': [moment().startOf('week'), moment()],
                    'Last Week': [moment().subtract(1, 'week').startOf('week'), moment().subtract(1, 'week').endOf('week')],
                    'This Month': [moment().startOf('month'), moment()],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, setdaterange);

            // ========================================================================================= TIMEZONE ===============================================================================
            function saveTimezone(timezone) {
                $.ajax({
                    url: 'controller/timezone/update_timezone.php',
                    type: 'POST',
                    data: {
                        timezone: timezone
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }

            $('#timezone').on('change', function() {
                const selectedTimezone = $(this).val();
                saveTimezone(selectedTimezone);
            });

            // ========================================================================================= CAMPAIGN DATA ===============================================================================
            // ----------------------------Triggers / Actions to Swap the columns (UPDATE TABLE TOO) ----------------------
            const campaignsTable = document.querySelector('.campaign-content .table-draggable');
            let lastFixedIndexCampaigns = Array.from(campaignsTable.querySelectorAll('th')).findIndex(th => th.textContent.trim() === 'Status');
            let draggingColumnIndexCampaigns = null;

            const setUpDragListenersCampaigns = () => {
                const headers = campaignsTable.querySelectorAll('th.draggable');
                headers.forEach((header) => {
                    header.setAttribute('draggable', true);

                    header.addEventListener('dragstart', (event) => {
                        const allHeaders = Array.from(campaignsTable.querySelectorAll('th'));
                        draggingColumnIndexCampaigns = allHeaders.indexOf(header);
                        event.dataTransfer.setData('text/plain', draggingColumnIndexCampaigns);
                    });

                    header.addEventListener('dragover', (event) => {
                        event.preventDefault();
                    });

                    header.addEventListener('drop', (event) => {
                        event.preventDefault();
                        const allHeaders = Array.from(campaignsTable.querySelectorAll('th'));
                        const targetIndex = allHeaders.indexOf(event.target.closest('th'));

                        if (draggingColumnIndexCampaigns !== targetIndex && targetIndex > lastFixedIndexCampaigns) {
                            swapColumnsAds(campaignsTable, draggingColumnIndexCampaigns, targetIndex);
                            draggingColumnIndexCampaigns = null;
                        }
                    });
                });
            }

            setUpDragListenersCampaigns();

            // ----------------------------Function to swap the columns in the table---------------------------
            function swapColumnsCampaigns(table, fromIndex, toIndex) {
                const rows = table.querySelectorAll('.table-head tr, .table-content tr');

                rows.forEach((row) => {
                    const cells = row.querySelectorAll('th, td');
                    if (cells[fromIndex] && cells[toIndex]) {
                        if (fromIndex < toIndex) {
                            row.insertBefore(cells[fromIndex], cells[toIndex].nextSibling);
                        } else {
                            row.insertBefore(cells[fromIndex], cells[toIndex]);
                        }
                    }
                });

                const footerRow = table.querySelector('.table-footer tr');
                if (footerRow) {
                    const footerCells = footerRow.querySelectorAll('td');
                    const footerFromIndex = fromIndex - 2; // Adjust index to account for the first 3 fixed columns
                    const footerToIndex = toIndex - 2; // Adjust index to account for the first 3 fixed columns

                    if (footerFromIndex >= 0 && footerToIndex >= 0) {
                        if (footerCells[footerFromIndex] && footerCells[footerToIndex]) {
                            if (footerFromIndex < footerToIndex) {
                                footerRow.insertBefore(footerCells[footerFromIndex], footerCells[footerToIndex].nextSibling);
                            } else {
                                footerRow.insertBefore(footerCells[footerFromIndex], footerCells[footerToIndex]);
                            }
                        }
                    }
                }
                setUpDragListenersCampaigns();
            }

            function selectCampaign(rowId) {

                const delay = Math.floor(Math.random() * 1500) + 500;

                setTimeout(() => {
                    const campaignTab = $(".options-box[data-selected='table-1']");
                    const adsGroupTab = $(".options-box[data-selected='table-2']");

                    $('.options-box').removeClass('active-tab');
                    adsGroupTab.addClass('active-tab');

                    $('.table-wrapper').addClass('d-none');
                    $('.table-2-content').removeClass('d-none');

                    const selectedCampaigns = $("#select-campaigns-num");
                    selectedCampaigns.css("display", "flex");

                    const adsGroupText = $(".opt2 .ads-group-text");
                    adsGroupText.text("Ad groups in 1 campaign");

                    const adsText = $(".opt3 .ads-text");
                    adsText.text("Ads in 1 campaign");

                }, delay);

            }

            function cancelCampaign() {
                const delay = Math.floor(Math.random() * 500) + 100;

                setTimeout(() => {
                    const selectedCampaigns = $("#select-campaigns-num");
                    selectedCampaigns.css("display", "none");

                    const adsGroupText = $(".opt2 .ads-group-text");
                    adsGroupText.text("Ad group");

                    const adsText = $(".opt3 .ads-text");
                    adsText.text("Ad");
                }, delay);
            }


            // ======================================================================== CREATE ==========================================================
            function addNewRowCampaigns() {
                let formData = new FormData();

                formData.append('create', 1);
                formData.append('onoff', 1);
                formData.append('campaignname', 'Sample Campaign Name');
                formData.append('delivery', 'Active');
                formData.append('results', 100);
                formData.append('imprs', 5000);
                formData.append('reach', 3000);
                formData.append('cost', 120.50);
                formData.append('clicks', 150);

                $.ajax({
                    url: "controller/campaigns/add_campaigns_data.php",
                    type: "POST",
                    data: formData,
                    processData: false, // Don't process the data (required for FormData)
                    contentType: false, // Don't set content type, let the browser handle it
                    success: function(response) {
                        const res = JSON.parse(response);
                        if (res.status === 'success') {
                            alert(res.message);
                            window.location.reload();
                        } else {
                            alert('Error: ' + res.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + error);
                    }
                });
            }

            // ====================================================================== EACH ROW FUNCTION ==============================================================

            // ----------------------------- Tick Brand Row -> 1 selected (FOR EACH ROW ) ----------------------
            function tickCampaignsBrandRow(rowId) {
                const checkbox = document.querySelector(`#${rowId} #cbx-checkbox`);
                const allCheckbox = document.getElementById("all-campaigns-checkbox");
                const selectNum = document.getElementById("select-campaigns-num");

                // Check if the checkbox is checked
                if (checkbox.checked) {
                    allCheckbox.checked = true;
                    selectNum.style.display = "flex";
                } else {
                    allCheckbox.checked = false;
                    selectNum.style.display = "none";
                }
            }

            // --------------------------- Hover Brand Title (FOR EACH ROW) ------------------------------------
            function showCampaignsTools(rowId) {
                const brandRow = document.getElementById(rowId);
                const pencil = brandRow.querySelector('.pencil');
                const toolkit = brandRow.querySelector('.toolkit');
                pencil.style.opacity = '1';
                pencil.style.visibility = 'visible';
                toolkit.style.opacity = '1';
                toolkit.style.visibility = 'visible';
                brandRow.style.backgroundColor = 'rgba(235, 235, 235, 1)';
            }

            function hideCampaignsTools(rowId) {
                const brandRow = document.getElementById(rowId);
                const pencil = brandRow.querySelector('.pencil');
                const toolkit = brandRow.querySelector('.toolkit');
                pencil.style.opacity = '0';
                pencil.style.visibility = 'hidden';
                toolkit.style.opacity = '0';
                toolkit.style.visibility = 'hidden';
                brandRow.style.backgroundColor = '';
            }

            // ------------------- Edit Campaign Row (Show Popup for corresponding MODAL) (FOR EACH ROW) ------------------------- 
            function editCampaignsRow(rowId) {
                let existingModal = document.getElementById(`add-row-modal-${rowId}`);

                // -------------------- Create modal if does not exist -----------------------
                if (!existingModal) {
                    let originalModal = document.getElementById('add-row-modal-campaigns-rw-1');
                    if (!originalModal) {
                        console.error('Template modal (add-row-modal-campaigns-rw-1) not found!');
                        return;
                    }

                    // Create new modal and copy from template modal content
                    let newModal = document.createElement('div');
                    newModal.className = 'modal fade add-row-modal';
                    newModal.id = `add-row-modal-${rowId}`;
                    newModal.tabIndex = -1;
                    newModal.role = 'dialog';
                    newModal.setAttribute('aria-labelledby', 'addCampaignRow');
                    newModal.setAttribute('aria-hidden', 'true');
                    // modify modal ID to match with each ROW
                    let clonedModalContent = originalModal.innerHTML;
                    clonedModalContent = clonedModalContent.replace(/add-row-modal-campaigns-rw-1/g, `add-row-modal-${rowId}`);
                    newModal.innerHTML = clonedModalContent;

                    // Modify input field with ID "modal-id" to dynamic rowId
                    let hiddenInput = newModal.querySelector('#modal-form-id');
                    if (hiddenInput) {
                        hiddenInput.value = rowId;
                    } else {
                        console.error('Hidden input with ID "modal-id" not found in modal.');
                    }

                    // Get the buttons and modify the onclick attribute with dynamic rowId
                    let buttons = newModal.querySelectorAll('button[onclick]');
                    for (let i = 0; i < buttons.length; i++) {
                        let button = buttons[i];
                        let onclickAttr = button.getAttribute('onclick');
                        onclickAttr = onclickAttr.replace(/'campaigns-rw-1'/g, "'" + rowId + "'");
                        button.setAttribute('onclick', onclickAttr);
                    }

                    document.body.appendChild(newModal);
                }

                // Preload data into modal
                $.ajax({
                    url: 'controller/campaigns/fetch_campaigns_data.php',
                    type: 'POST',
                    data: {
                        rowId: rowId
                    },
                    success: function(response) {
                        const data = JSON.parse(response);

                        if (data.status && data.status === "error") {
                            alert(data.message);
                        } else {
                            $(`#add-row-modal-${rowId} #onoff`).prop('checked', data.onoff == 1);
                            $(`#add-row-modal-${rowId} #campaignname`).val(data.campaignname);
                            $(`#add-row-modal-${rowId} #delivery`).val(data.status);
                            $(`#add-row-modal-${rowId} #results`).val(data.result);
                            $(`#add-row-modal-${rowId} #imprs`).val(data.imprs);
                            $(`#add-row-modal-${rowId} #reach`).val(data.reach);
                            $(`#add-row-modal-${rowId} #cost`).val(data.cost);
                            $(`#add-row-modal-${rowId} #clicks`).val(data.click);
                            $(`#add-row-modal-${rowId}`).modal('show');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert("There was an error fetching the data. Please try again.");
                    }
                });
            }

            // --------------------- Delete Ad Row (FOR EACH ROW) --------------------------
            function deleteCampaignsRow(rowId) {
                if (rowId === "ads-rw-1") {
                    alert("1st row cannot be deleted!");
                    return;
                }

                if (!confirm("Are you sure you want to delete this campaign? This action cannot be undone.")) {
                    return;
                }

                $.ajax({
                    url: 'controller/campaigns/delete_campaigns_data.php',
                    type: 'POST',
                    data: {
                        rowId: rowId
                    },
                    success: function(response) {
                        let res = JSON.parse(response);
                        if (res.status === "success") {
                            alert(res.message);
                            window.location.reload();
                        } else {
                            alert("Error: " + res.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert("There was an error deleting the row. Please try again.");
                    }
                });
            }

            // ========================================================================================= ADS GROUP DATA ===============================================================================
            // ----------------------------Triggers / Actions to Swap the columns (UPDATE TABLE TOO) ----------------------
            const adsGroupTable = document.querySelector('.ad-group-content .table-draggable');
            let lastFixedIndexAdsGroup = Array.from(adsGroupTable.querySelectorAll('th')).findIndex(th => th.textContent.trim() === 'Ad group ID');
            let draggingColumnIndexAdsGroup = null;

            const setUpDragListenersAdsGroup = () => {
                const headers = adsGroupTable.querySelectorAll('th.draggable');
                headers.forEach((header) => {
                    header.setAttribute('draggable', true);

                    header.addEventListener('dragstart', (event) => {
                        const allHeaders = Array.from(adsGroupTable.querySelectorAll('th'));
                        draggingColumnIndexAdsGroup = allHeaders.indexOf(header);
                        event.dataTransfer.setData('text/plain', draggingColumnIndexAdsGroup);
                    });

                    header.addEventListener('dragover', (event) => {
                        event.preventDefault();
                    });

                    header.addEventListener('drop', (event) => {
                        event.preventDefault();
                        const allHeaders = Array.from(adsGroupTable.querySelectorAll('th'));
                        const targetIndex = allHeaders.indexOf(event.target.closest('th'));

                        if (draggingColumnIndexAdsGroup !== targetIndex && targetIndex > lastFixedIndexAdsGroup) {
                            swapColumnsAdsGroup(adsGroupTable, draggingColumnIndexAdsGroup, targetIndex);
                            draggingColumnIndexAdsGroup = null;
                        }
                    });
                });
            }

            setUpDragListenersAdsGroup();

            // ----------------------------Function to swap the columns in the table---------------------------
            function swapColumnsAdsGroup(table, fromIndex, toIndex) {
                const rows = table.querySelectorAll('.table-head tr, .table-content tr');

                rows.forEach((row) => {
                    const cells = row.querySelectorAll('th, td');
                    if (cells[fromIndex] && cells[toIndex]) {
                        if (fromIndex < toIndex) {
                            row.insertBefore(cells[fromIndex], cells[toIndex].nextSibling);
                        } else {
                            row.insertBefore(cells[fromIndex], cells[toIndex]);
                        }
                    }
                });

                const footerRow = table.querySelector('.table-footer tr');
                if (footerRow) {
                    const footerCells = footerRow.querySelectorAll('td');
                    const footerFromIndex = fromIndex - 2; // Adjust index to account for the first 3 fixed columns
                    const footerToIndex = toIndex - 2; // Adjust index to account for the first 3 fixed columns

                    if (footerFromIndex >= 0 && footerToIndex >= 0) {
                        if (footerCells[footerFromIndex] && footerCells[footerToIndex]) {
                            if (footerFromIndex < footerToIndex) {
                                footerRow.insertBefore(footerCells[footerFromIndex], footerCells[footerToIndex].nextSibling);
                            } else {
                                footerRow.insertBefore(footerCells[footerFromIndex], footerCells[footerToIndex]);
                            }
                        }
                    }
                }

                setUpDragListenersAdsGroup();
            }

            // ======================================================================== SELECT 1 AD GROUP ====================================================================
            function selectAdGroup(rowId) {

                const delay = Math.floor(Math.random() * 1500) + 500;

                setTimeout(() => {
                    const adsGroupTab = $(".options-box[data-selected='table-2']");
                    const adTab = $(".options-box[data-selected='table-3']");

                    $('.options-box').removeClass('active-tab');
                    adTab.addClass('active-tab');

                    $('.table-wrapper').addClass('d-none');
                    $('.table-3-content').removeClass('d-none');

                    const selectedAdGroup = $("#select-ads-group-num");
                    selectedAdGroup.css("display", "flex");

                    const adsText = $(".opt3 .ads-text");
                    adsText.text("Ads in 1 ad group");
                }, delay);

            }

            function cancelAdGroup() {
                const delay = Math.floor(Math.random() * 500) + 100;

                setTimeout(() => {
                    const selectedAdGroup = $("#select-ads-group-num");
                    selectedAdGroup.css("display", "none");

                    const adsText = $(".opt3 .ads-text");
                    adsText.text("Ad");
                }, delay);
            }

            // ======================================================================== CANCEL 1 AD GROUP ====================================================================

            // ======================================================================== CREATE ==========================================================
            function addNewRowAdsGroup() {
                let formData = new FormData();

                formData.append('create', 1);
                formData.append('onoff', 1);
                formData.append('adsgroupname', 'Ad Group Name 1');
                formData.append('delivery', 'Active');
                formData.append('adsgroupid', '16534534645751');
                formData.append('results', 100);
                formData.append('imprs', 5000);
                formData.append('reach', 3000);
                formData.append('cost', 120.50);
                formData.append('clicks', 150);

                $.ajax({
                    url: "controller/ads_group/add_ads_group_data.php",
                    type: "POST",
                    data: formData,
                    processData: false, // Don't process the data (required for FormData)
                    contentType: false, // Don't set content type, let the browser handle it
                    success: function(response) {
                        const res = JSON.parse(response);
                        if (res.status === 'success') {
                            alert(res.message);
                            window.location.reload();
                        } else {
                            alert('Error: ' + res.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + error);
                    }
                });
            }

            // ====================================================================== EACH ROW FUNCTION ==============================================================

            // ----------------------------- Tick Brand Row -> 1 selected (FOR EACH ROW ) ----------------------
            function tickAdsGroupBrandRow(rowId) {
                const checkbox = document.querySelector(`#${rowId} #cbx-checkbox`);
                const allCheckbox = document.getElementById("all-ads-group-checkbox");
                const selectNum = document.getElementById("select-ads-group-num");

                // Check if the checkbox is checked
                if (checkbox.checked) {
                    allCheckbox.checked = true;
                    selectNum.style.display = "flex";
                } else {
                    allCheckbox.checked = false;
                    selectNum.style.display = "none";
                }
            }

            // --------------------------- Hover Brand Title (FOR EACH ROW) ------------------------------------
            function showAdsGroupTools(rowId) {
                const brandRow = document.getElementById(rowId);
                const pencil = brandRow.querySelector('.pencil');
                const toolkit = brandRow.querySelector('.toolkit');
                pencil.style.opacity = '1';
                pencil.style.visibility = 'visible';
                toolkit.style.opacity = '1';
                toolkit.style.visibility = 'visible';
                brandRow.style.backgroundColor = 'rgba(235, 235, 235, 1)';
            }

            function hideAdsGroupTools(rowId) {
                const brandRow = document.getElementById(rowId);
                const pencil = brandRow.querySelector('.pencil');
                const toolkit = brandRow.querySelector('.toolkit');
                pencil.style.opacity = '0';
                pencil.style.visibility = 'hidden';
                toolkit.style.opacity = '0';
                toolkit.style.visibility = 'hidden';
                brandRow.style.backgroundColor = '';
            }

            // ------------------- Edit Ad Group Row (Show Popup for corresponding MODAL) (FOR EACH ROW) ------------------------- 
            function editAdsGroupRow(rowId) {
                let existingModal = document.getElementById(`add-row-modal-${rowId}`);

                // -------------------- Create modal if does not exist -----------------------
                if (!existingModal) {
                    let originalModal = document.getElementById('add-row-modal-ads-group-rw-1');
                    if (!originalModal) {
                        console.error('Template modal (add-row-modal-ads-group-rw-1) not found!');
                        return;
                    }

                    // Create new modal and copy from template modal content
                    let newModal = document.createElement('div');
                    newModal.className = 'modal fade add-row-modal';
                    newModal.id = `add-row-modal-${rowId}`;
                    newModal.tabIndex = -1;
                    newModal.role = 'dialog';
                    newModal.setAttribute('aria-labelledby', 'addAdsGroupRow');
                    newModal.setAttribute('aria-hidden', 'true');
                    // modify modal ID to match with each ROW
                    let clonedModalContent = originalModal.innerHTML;
                    clonedModalContent = clonedModalContent.replace(/add-row-modal-ads-group-rw-1/g, `add-row-modal-${rowId}`);
                    newModal.innerHTML = clonedModalContent;

                    // Modify input field with ID "modal-id" to dynamic rowId
                    let hiddenInput = newModal.querySelector('#modal-form-id');
                    if (hiddenInput) {
                        hiddenInput.value = rowId;
                    } else {
                        console.error('Hidden input with ID "modal-id" not found in modal.');
                    }

                    // Get the buttons and modify the onclick attribute with dynamic rowId
                    let buttons = newModal.querySelectorAll('button[onclick]');
                    for (let i = 0; i < buttons.length; i++) {
                        let button = buttons[i];
                        let onclickAttr = button.getAttribute('onclick');
                        onclickAttr = onclickAttr.replace(/'ads-group-rw-1'/g, "'" + rowId + "'");
                        button.setAttribute('onclick', onclickAttr);
                    }

                    document.body.appendChild(newModal);
                }

                // Preload data into modal
                $.ajax({
                    url: 'controller/ads_group/fetch_ads_group_data.php',
                    type: 'POST',
                    data: {
                        rowId: rowId
                    },
                    success: function(response) {
                        const data = JSON.parse(response);

                        if (data.status && data.status === "error") {
                            alert(data.message);
                        } else {
                            $(`#add-row-modal-${rowId} #onoff`).prop('checked', data.onoff == 1);
                            $(`#add-row-modal-${rowId} #adsgroupname`).val(data.adsgroupname);
                            $(`#add-row-modal-${rowId} #delivery`).val(data.status);
                            $(`#add-row-modal-${rowId} #adsgroupid`).val(data.adsgroupid);
                            $(`#add-row-modal-${rowId} #results`).val(data.result);
                            $(`#add-row-modal-${rowId} #imprs`).val(data.imprs);
                            $(`#add-row-modal-${rowId} #reach`).val(data.reach);
                            $(`#add-row-modal-${rowId} #cost`).val(data.cost);
                            $(`#add-row-modal-${rowId} #clicks`).val(data.click);
                            $(`#add-row-modal-${rowId}`).modal('show');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert("There was an error fetching the data. Please try again.");
                    }
                });
            }

            // --------------------- Delete Ad Group Row (FOR EACH ROW) --------------------------
            function deleteAdsGroupRow(rowId) {
                if (rowId === "ads-group-rw-1") {
                    alert("1st row cannot be deleted!");
                    return;
                }

                if (!confirm("Are you sure you want to delete this ad group? This action cannot be undone.")) {
                    return;
                }

                $.ajax({
                    url: 'controller/ads_group/delete_ads_group_data.php',
                    type: 'POST',
                    data: {
                        rowId: rowId
                    },
                    success: function(response) {
                        let res = JSON.parse(response);
                        if (res.status === "success") {
                            alert(res.message);
                            window.location.reload();
                        } else {
                            alert("Error: " + res.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert("There was an error deleting the row. Please try again.");
                    }
                });
            }

            // ========================================================================================= ADS DATA ===============================================================================
            // ----------------------------Triggers / Actions to Swap the columns (UPDATE TABLE TOO) ----------------------
            const adsTable = document.querySelector('.ad-content .table-draggable');
            let lastFixedIndexAds = Array.from(adsTable.querySelectorAll('th')).findIndex(th => th.textContent.trim() === 'Ad group name');
            let draggingColumnIndexAds = null;

            const setUpDragListenersAds = () => {
                const headers = adsTable.querySelectorAll('th.draggable');
                headers.forEach((header) => {
                    header.setAttribute('draggable', true);

                    header.addEventListener('dragstart', (event) => {
                        const allHeaders = Array.from(adsTable.querySelectorAll('th'));
                        draggingColumnIndexAds = allHeaders.indexOf(header);
                        event.dataTransfer.setData('text/plain', draggingColumnIndexAds);
                    });

                    header.addEventListener('dragover', (event) => {
                        event.preventDefault();
                    });

                    header.addEventListener('drop', (event) => {
                        event.preventDefault();
                        const allHeaders = Array.from(adsTable.querySelectorAll('th'));
                        const targetIndex = allHeaders.indexOf(event.target.closest('th'));

                        if (draggingColumnIndexAds !== targetIndex && targetIndex > lastFixedIndexAds) {
                            swapColumnsAds(adsTable, draggingColumnIndexAds, targetIndex);
                            draggingColumnIndexAds = null;
                        }
                    });
                });
            }

            setUpDragListenersAds();

            // ----------------------------Function to swap the columns in the table---------------------------
            function swapColumnsAds(table, fromIndex, toIndex) {
                const rows = table.querySelectorAll('.table-head tr, .table-content tr');

                rows.forEach((row) => {
                    const cells = row.querySelectorAll('th, td');
                    if (cells[fromIndex] && cells[toIndex]) {
                        if (fromIndex < toIndex) {
                            row.insertBefore(cells[fromIndex], cells[toIndex].nextSibling);
                        } else {
                            row.insertBefore(cells[fromIndex], cells[toIndex]);
                        }
                    }
                });

                const footerRow = table.querySelector('.table-footer tr');
                if (footerRow) {
                    const footerCells = footerRow.querySelectorAll('td');
                    const footerFromIndex = fromIndex - 2; // Adjust index to account for the first 3 fixed columns
                    const footerToIndex = toIndex - 2; // Adjust index to account for the first 3 fixed columns

                    if (footerFromIndex >= 0 && footerToIndex >= 0) {
                        if (footerCells[footerFromIndex] && footerCells[footerToIndex]) {
                            if (footerFromIndex < footerToIndex) {
                                footerRow.insertBefore(footerCells[footerFromIndex], footerCells[footerToIndex].nextSibling);
                            } else {
                                footerRow.insertBefore(footerCells[footerFromIndex], footerCells[footerToIndex]);
                            }
                        }
                    }
                }
                setUpDragListenersAds();
            }

            // ======================================================================== CREATE ==========================================================
            function addNewRowAds() {
                let formData = new FormData();

                formData.append('create', 1);
                formData.append('onoff', 1);
                formData.append('adsname', 'Sample Ad Name');
                formData.append('delivery', 'Active');
                formData.append('adsgroupname', 'Sample Group');
                formData.append('results', 100);
                formData.append('imprs', 5000);
                formData.append('reach', 3000);
                formData.append('cost', 120.50);
                formData.append('clicks', 150);
                formData.append('videoname', 'dummy_video.mp4');

                $.ajax({
                    url: "controller/ads/add_ads_data.php",
                    type: "POST",
                    data: formData,
                    processData: false, // Don't process the data (required for FormData)
                    contentType: false, // Don't set content type, let the browser handle it
                    success: function(response) {
                        const res = JSON.parse(response);
                        if (res.status === 'success') {
                            alert(res.message);
                            window.location.reload();
                        } else {
                            alert('Error: ' + res.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + error);
                    }
                });
            }

            // ====================================================================== EACH ROW FUNCTION ==============================================================

            // ----------------------------- Tick Brand Row -> 1 selected (FOR EACH ROW ) ----------------------
            function tickAdsBrandRow(rowId) {
                const checkbox = document.querySelector(`#${rowId} #cbx-checkbox`);
                const allCheckbox = document.getElementById("all-ads-checkbox");
                const selectNum = document.getElementById("select-ads-num");

                // Check if the checkbox is checked
                if (checkbox.checked) {
                    // allCheckbox.checked = true;
                    selectNum.style.display = "flex";
                } else {
                    // allCheckbox.checked = false;
                    selectNum.style.display = "none";
                }
            }

            // --------------------------- Hover Brand Title (FOR EACH ROW) ------------------------------------
            function showAdsTools(rowId) {
                const brandRow = document.getElementById(rowId);
                const pencil = brandRow.querySelector('.pencil');
                const toolkit = brandRow.querySelector('.toolkit');
                pencil.style.opacity = '1';
                pencil.style.visibility = 'visible';
                toolkit.style.opacity = '1';
                toolkit.style.visibility = 'visible';
                brandRow.style.backgroundColor = 'rgba(235, 235, 235, 1)';
            }

            function hideAdsTools(rowId) {
                const brandRow = document.getElementById(rowId);
                const pencil = brandRow.querySelector('.pencil');
                const toolkit = brandRow.querySelector('.toolkit');
                pencil.style.opacity = '0';
                pencil.style.visibility = 'hidden';
                toolkit.style.opacity = '0';
                toolkit.style.visibility = 'hidden';
                brandRow.style.backgroundColor = '';
            }

            // -------------------------- Display Brand Video (FOR EACH ROW) --------------------------------
            function displayBrandVideo(videoFile) {
                const modalVideo = document.getElementById('modalVideo');
                const modalVideoSource = modalVideo.querySelector("source");

                modalVideoSource.setAttribute('src', 'img/' + videoFile);
                modalVideo.load();
                $('#videoModal').modal('show');
                modalVideo.play();

                $('#videoModal').on('hidden.bs.modal', function() {
                    modalVideo.pause();
                    modalVideo.currentTime = 0;
                });
            }

            // ------------------- Edit Ad Row (Show Popup for corresponding MODAL) (FOR EACH ROW) ------------------------- 
            function editAdsRow(rowId) {
                let existingModal = document.getElementById(`add-row-modal-${rowId}`);

                // -------------------- Create modal if does not exist -----------------------
                if (!existingModal) {
                    let originalModal = document.getElementById('add-row-modal-ads-rw-1');
                    if (!originalModal) {
                        console.error('Template modal (add-row-modal-ads-rw-1) not found!');
                        return;
                    }

                    // Create new modal and copy from template modal content
                    let newModal = document.createElement('div');
                    newModal.className = 'modal fade add-row-modal';
                    newModal.id = `add-row-modal-${rowId}`;
                    newModal.tabIndex = -1;
                    newModal.role = 'dialog';
                    newModal.setAttribute('aria-labelledby', 'addAdRow');
                    newModal.setAttribute('aria-hidden', 'true');
                    // modify modal ID to match with each ROW
                    let clonedModalContent = originalModal.innerHTML;
                    clonedModalContent = clonedModalContent.replace(/add-row-modal-ads-rw-1/g, `add-row-modal-${rowId}`);
                    newModal.innerHTML = clonedModalContent;

                    // Modify input field with ID "modal-id" to dynamic rowId
                    let hiddenInput = newModal.querySelector('#modal-form-id');
                    if (hiddenInput) {
                        hiddenInput.value = rowId;
                    } else {
                        console.error('Hidden input with ID "modal-id" not found in modal.');
                    }

                    // Get the buttons and modify the onclick attribute with dynamic rowId
                    let buttons = newModal.querySelectorAll('button[onclick]');
                    for (let i = 0; i < buttons.length; i++) {
                        let button = buttons[i];
                        let onclickAttr = button.getAttribute('onclick');
                        onclickAttr = onclickAttr.replace(/'ads-rw-1'/g, "'" + rowId + "'");
                        button.setAttribute('onclick', onclickAttr);
                    }

                    document.body.appendChild(newModal);
                }

                // Preload data into modal
                $.ajax({
                    url: 'controller/ads/fetch_ads_data.php',
                    type: 'POST',
                    data: {
                        rowId: rowId
                    },
                    success: function(response) {
                        const data = JSON.parse(response);

                        if (data.status && data.status === "error") {
                            alert(data.message);
                        } else {
                            $(`#add-row-modal-${rowId} #onoff`).prop('checked', data.onoff == 1);
                            $(`#add-row-modal-${rowId} #adsname`).val(data.adsname);
                            $(`#add-row-modal-${rowId} #delivery`).val(data.status);
                            $(`#add-row-modal-${rowId} #adsgroupname`).val(data.adgroupname);
                            $(`#add-row-modal-${rowId} #results`).val(data.result);
                            $(`#add-row-modal-${rowId} #imprs`).val(data.imprs);
                            $(`#add-row-modal-${rowId} #reach`).val(data.reach);
                            $(`#add-row-modal-${rowId} #cost`).val(data.cost);
                            $(`#add-row-modal-${rowId} #clicks`).val(data.click);
                            $(`#add-row-modal-${rowId}`).modal('show');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert("There was an error fetching the data. Please try again.");
                    }
                });
            }

            // --------------------- Delete Ad Row (FOR EACH ROW) --------------------------
            function deleteAdsRow(rowId) {
                if (rowId === "ads-rw-1") {
                    alert("1st row cannot be deleted!");
                    return;
                }

                if (!confirm("Are you sure you want to delete this ad? This action cannot be undone.")) {
                    return;
                }

                $.ajax({
                    url: 'controller/ads/delete_ads_data.php',
                    type: 'POST',
                    data: {
                        rowId: rowId
                    },
                    success: function(response) {
                        let res = JSON.parse(response);
                        if (res.status === "success") {
                            alert(res.message);
                            window.location.reload();
                        } else {
                            alert("Error: " + res.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                        alert("There was an error deleting the row. Please try again.");
                    }
                });
            }

            // ----------- Back && Next page (FOR EACH ROW) -----------------
            function showStep(rowId, step) {

                document.querySelector(`#add-row-modal-${rowId} #step-1`).style.display = (step === 1) ? 'block' : 'none';
                document.querySelector(`#add-row-modal-${rowId} #step-2`).style.display = (step === 2) ? 'block' : 'none';

                $('.edit-1').css('display', (step === 1) ? 'block' : 'none');
                $('.edit-2').css('display', (step === 2) ? 'block' : 'none');
            }
        </script>

        <!----------------------------------------------------------------------------------- Original Script --------------------------------------------------------------------------------------->
        <script>
            let newCurrencySymbol = '';

            $(document).ready(function() {

                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> HEADER <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ........... <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // ====================================================================== change image icon ==================================================================================== 
                $(document).on("click", ".switch-img", function() {
                    let imgId = $(this).attr("id");
                    let imgSrc = "./img/" + imgId + ".jpg";
                    $("#profile-img").attr("src", imgSrc);
                });

                // ===================================================================== change tools hover ===================================================================================
                const toolsItem = document.querySelector('.tools-item');
                const headerToolSubmenu = document.querySelector('.header-tools-submenu');

                toolsItem.addEventListener('mouseenter', () => {
                    setTimeout(() => {
                        headerToolSubmenu.style.display = 'flex';
                    }, 200);
                });

                toolsItem.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!headerToolSubmenu.matches(':hover')) {
                            headerToolSubmenu.style.display = 'none';
                        }
                    }, 200);
                });

                headerToolSubmenu.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        headerToolSubmenu.style.display = 'none';
                    }, 200);
                });

                headerToolSubmenu.addEventListener('mouseenter', () => {
                    headerToolSubmenu.style.display = 'flex';
                });

                // ===================================================================== change analytics hover ===================================================================================
                const analyticItem = document.querySelector('.analytic-item');
                const headerAnalyticSubmenu = document.querySelector('.header-analytic-submenu');

                analyticItem.addEventListener('mouseenter', () => {
                    setTimeout(() => {
                        headerAnalyticSubmenu.style.display = 'flex';
                    }, 200);
                });

                analyticItem.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!headerAnalyticSubmenu.matches(':hover')) {
                            headerAnalyticSubmenu.style.display = 'none';
                        }
                    }, 200);
                });

                headerAnalyticSubmenu.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        headerAnalyticSubmenu.style.display = 'none';
                    }, 200);
                });

                headerAnalyticSubmenu.addEventListener('mouseenter', () => {
                    headerAnalyticSubmenu.style.display = 'flex';
                });

                // // ===================================================================== change business center hover ==============================================================================
                // const bc = document.querySelector('.business-center');
                // const headerBcSubmenu = document.querySelector('.header-bc-submenu');

                // bc.addEventListener('mouseenter', () => {
                //     setTimeout(() => {
                //         headerBcSubmenu.style.display = 'flex';
                //     }, 200);
                // });

                // bc.addEventListener('mouseleave', () => {
                //     setTimeout(() => {
                //         if (!headerBcSubmenu.matches(':hover')) {
                //             headerBcSubmenu.style.display = 'none';
                //         }
                //     }, 200);
                // });

                // headerBcSubmenu.addEventListener('mouseleave', () => {
                //     setTimeout(() => {
                //         headerBcSubmenu.style.display = 'none';
                //     }, 200);
                // });

                // headerBcSubmenu.addEventListener('mouseenter', () => {
                //     headerBcSubmenu.style.display = 'flex';
                // });

                // ===================================================================== change notifications hover ================================================================================
                const noti = document.querySelector('.notifications');
                const headerNotiSubmenu = document.querySelector('.header-noti-submenu');

                noti.addEventListener('mouseenter', () => {
                    setTimeout(() => {
                        headerNotiSubmenu.style.display = 'flex';
                    }, 200);
                });

                noti.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!headerNotiSubmenu.matches(':hover')) {
                            headerNotiSubmenu.style.display = 'none';
                        }
                    }, 200);
                });

                headerNotiSubmenu.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        headerNotiSubmenu.style.display = 'none';
                    }, 200);
                });

                headerNotiSubmenu.addEventListener('mouseenter', () => {
                    headerNotiSubmenu.style.display = 'flex';
                });

                // ===================================================================== change help hover ==================================================================================
                const help = document.querySelector('.question');
                const headerHelpSubmenu = document.querySelector('.header-help-submenu');

                help.addEventListener('mouseenter', () => {
                    setTimeout(() => {
                        headerHelpSubmenu.style.display = 'flex';
                    }, 200);
                });

                help.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!headerHelpSubmenu.matches(':hover')) {
                            headerHelpSubmenu.style.display = 'none';
                        }
                    }, 200);
                });

                headerHelpSubmenu.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        headerHelpSubmenu.style.display = 'none';
                    }, 200);
                });

                headerHelpSubmenu.addEventListener('mouseenter', () => {
                    headerHelpSubmenu.style.display = 'flex';
                });

                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> TOP CONTENT <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ................ <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // =================================================== Calendar Question ===============================================
                const calendarSubmenu = document.querySelector(".calendar-submenu");
                const calendarQuestion = document.querySelector('.calendar-question');

                calendarQuestion.addEventListener('mouseenter', () => {
                    setTimeout(() => {
                        calendarSubmenu.style.display = 'flex';
                    }, 200);
                });

                calendarQuestion.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        if (!calendarSubmenu.matches(':hover')) {
                            calendarSubmenu.style.display = 'none';
                        }
                    }, 200);
                });

                calendarSubmenu.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        calendarSubmenu.style.display = 'none';
                    }, 200);
                });
                calendarSubmenu.addEventListener('mouseenter', () => {
                    calendarSubmenu.style.display = 'flex';
                });

                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 3 OPTIONS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ........... <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // ==================================================================== change 3 main tab category ==========================================================================
                $(".options-box").click(function() {
                    let dataselected = $(this).data('selected');
                    $('.options-box').removeClass('active-tab');
                    $(this).addClass('active-tab');
                    $('.table-wrapper').addClass('d-none');
                    $('.' + dataselected + '-content').removeClass('d-none');
                })

                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> TABLE HEADER <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ........... <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // ==================================================================== Refresh Submenu ==========================================================================
                const refreshSubmenu = document.querySelector(".table-header-refresh-submenu");
                const refresh = document.querySelectorAll(".refresh");

                refresh.forEach((refreshElement) => {
                    refreshElement.addEventListener('mouseenter', () => {
                        setTimeout(() => {
                            refreshSubmenu.style.display = 'flex';
                        }, 200);
                    });
                    refreshElement.addEventListener('mouseleave', () => {
                        setTimeout(() => {
                            if (!refreshSubmenu.matches(':hover')) {
                                refreshSubmenu.style.display = 'none';
                            }
                        }, 200);
                    });
                });

                refreshSubmenu.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        refreshSubmenu.style.display = 'none';
                    }, 200);
                });
                refreshSubmenu.addEventListener('mouseenter', () => {
                    refreshSubmenu.style.display = 'flex';
                });

                // ==================================================================== Report Submenu ==========================================================================
                const reportSubmenu = document.querySelector(".table-header-report-submenu");
                const report = document.querySelectorAll(".report");

                report.forEach(reportElement => {
                    reportElement.addEventListener('mouseenter', () => {
                        setTimeout(() => {
                            reportSubmenu.style.display = 'flex';
                        }, 200);
                    });
                    reportElement.addEventListener('mouseleave', () => {
                        setTimeout(() => {
                            if (!reportSubmenu.matches(':hover')) {
                                reportSubmenu.style.display = 'none';
                            }
                        }, 200);
                    });
                });

                reportSubmenu.addEventListener('mouseleave', () => {
                    setTimeout(() => {
                        reportSubmenu.style.display = 'none';
                    }, 200);
                });
                reportSubmenu.addEventListener('mouseenter', () => {
                    reportSubmenu.style.display = 'flex';
                });

                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> TABLE <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ........... <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                // ============================================================================ COLUMN RESIZE =====================================================================================

                // ----------------------------------------------Apply on ALL TABLE'S Headers' Columns------------------------------------------
                const tables = document.querySelectorAll('.table-resizable');
                tables.forEach(table => {
                    const headers = table.querySelectorAll('th');
                    let startX, startWidth, currentResizer;

                    // ----------------------------------------------------Resize the column---------------------------------------------
                    function resizeColumn(e) {
                        if (currentResizer) {
                            const header = currentResizer.parentElement;
                            const newWidth = startWidth + (e.pageX - startX);
                            header.style.width = `${newWidth}px`;
                        }
                    }

                    // ----------------------------------------------------Stop resizing----------------------------------------------
                    function stopResize() {
                        document.removeEventListener('mousemove', resizeColumn);
                        document.removeEventListener('mouseup', stopResize);
                        currentResizer = null;
                    }

                    // ----------------------------------------------------- Perform resize -------------------------------------------
                    headers.forEach(header => {
                        const resizer = document.createElement('div');
                        resizer.classList.add('resizer');
                        header.appendChild(resizer);

                        resizer.addEventListener('mousedown', (e) => {
                            currentResizer = e.target;
                            startX = e.pageX;
                            startWidth = header.offsetWidth;

                            document.addEventListener('mousemove', resizeColumn);
                            document.addEventListener('mouseup', stopResize);
                        });
                    });
                })

                // =========================================================================== Tick All Checkboxes ============================================================================
                const allCheckbox = document.getElementById('all-ads-checkbox');

                allCheckbox.addEventListener('click', function() {
                    const rows = document.querySelectorAll('tbody tr');

                    rows.forEach(function(row) {
                        const checkbox = row.querySelector('input[type="checkbox"]');
                        checkbox.checked = allCheckbox.checked;
                    });
                });
            })

            // =========================================================== change footer question mark hover ==============================================================
            // const questionMarkLabel = document.querySelector('.vi-icon-ex-circle-question');
            // const footerQuestionASubmenu = document.querySelector('.footer-question-submenu');

            // // Get the position of the question mark label
            // const labelRect = questionMarkLabel.getBoundingClientRect();

            // // Update the top property of the submenu
            // footerQuestionASubmenu.style.top = `${labelRect.top - 80}px`;

            // window.addEventListener('scroll', () => {
            //     const labelRect = questionMarkLabel.getBoundingClientRect();
            //     footerQuestionASubmenu.style.top = `${labelRect.top - 80}px`;
            // });
        </script>
</body>

</html>