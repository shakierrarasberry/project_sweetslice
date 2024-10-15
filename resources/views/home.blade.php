<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <title>sweetslice</title>
    <style>
        body {
           
            overflow-x: hidden;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f3ebea;
            font-family: 'Poppins';
        }

        ::selection {
            background-color: #504646;
            color: #ddd;
        }

        .poppins-extralight {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        /* Navbar Atas (Desktop) */
        /* Navbar Atas (Desktop) */
        #navbar-top {
            background-color: #f3ebea;
            color: #504646;
            padding: 1rem;
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-around;
            z-index: 1000;
            height: 85px;
        }

        .nav-links a {
            color: #504646;
            text-decoration: none;
            padding: 10px;
            font-size: 15px;

        }

        .navbartengah {
            color: #504646;
            padding: 1rem;
            margin-left: -40px;
            margin-top: -10px;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
        }


        /* Navbar Bawah (Mobile) */
        #navbar-bottom {
            display: flex;
            /* Tampilkan navbar bawah di Mobile */
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #d0c5bd;
            /* Warna latar dari style kedua */
            justify-content: space-evenly;
            padding: 10px;
            z-index: 1000;
        }

        /* Media Query untuk Mobile */
        @media (max-width: 767px) {
            #navbar-top {
                display: none;
                /* Navbar atas tidak tampil di Mobile */
            }

            #navbar-bottom {
                display: flex;
                /* Navbar bawah tampil di Mobile */
            }
        }

        /* Media Query untuk Desktop */
        @media (min-width: 768px) {
            #navbar-top {
                display: flex;
                /* Navbar atas tampil di Desktop */
            }

            #navbar-bottom {
                display: none;
                /* Navbar bawah tidak tampil di Desktop */
            }
        }

        .dm-serif-display-regular {
            font-family: "DM Serif Display", system-ui;
            font-weight: 400;
            font-style: normal;
        }


        .label {
            padding: 8px 18px;
            transition: all 200ms;
            display: inline-block;
        }

        .label input[type="radio"] {
            display: none;
        }

        .label>svg {
            transition: all 200ms;
            fill: #a69890;
            width: 20px;
        }

        .label>svg:hover path {
            fill: #504646;
            /* Warna berubah saat di-hover */
        }

        #maps {
            transition: all 200ms;
            color: #a69890;
            width: 20px;
            font-size: 20px;
            margin-right: 35px;
        }

        #maps:hover {
            color: #504646;
            /* Warna berubah saat di-hover */
        }

        #keranjang {
            transition: all 200ms;
            color: #a69890;
            font-size: 20px;
            margin-right: 20px;
        }

        #keranjang:hover {
            color: #504646;
            /* Warna berubah saat di-hover */
        }





        /* Media Query untuk Mobile */
        @media (max-width: 767px) {
            #navbar-top {
                display: none;
                /* Navbar atas tidak tampil di Mobile */
            }

            #navbar-bottom {
                display: flex;
                /* Navbar bawah tampil di Mobile */
            }
        }


        .mobile-only {
            display: none;
        }

        @media (max-width: 767px) {
            .mobile-only {
                display: block;
                position: fixed;
                top: 0;
                right: 0;
                padding: 1rem;
                z-index: 1000;
                background: white;
                /* Warna latar belakang jika diperlukan */
            }
        }

        .navkhususmobile {
            display: flex;
            justify-content: space-between;
            margin-right: 20px;
            margin-top: 10px;
        }

        .img {
            width: 150px;
            margin-top: -30px;
            margin-left: 10px;
        }

        .imgmobile {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-top: 10px;
        }

        .responsive-img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            margin-top: -100px;
        }

        /* Gambar untuk tampilan PC (ubah ke 400px) */
        @media (min-width: 768px) {
            .responsive-img {
                width: 400px;
                height: 400px;
                margin-top: -110px;
            }
        }

        .responsive-img2 {
            width: 300px;
            height: 300px;
            object-fit: cover;
            margin-top: 50px;
        }

        /* Gambar untuk tampilan PC (ubah ke 400px) */
        @media (min-width: 768px) {
            .responsive-img2 {
                width: 400px !important;
                height: 400px !important;
                margin-top: -40px !important;
            }
        }

        /* Style untuk preloader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f3ebea;
            /* Warna background saat loading */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .preloader-logo {
            width: 150px;
        }

        /* Sembunyikan konten utama saat preloader muncul */
        #content {
            display: none;
        }

        .hidden {
            display: none;
        }




        /* css card*/
        .textpopuler {
            display: flex;
            justify-content: space-between;
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 40px;
        }

        .cardd {
            gap: 30px;
            justify-content: center;

        }

        .card {
            margin-top: 70px;
            margin-left: 20px;
            width: 190px;
            height: 254px;
            overflow: visible;
            cursor: pointer;
            position: relative;
            margin-right: 30px;

        }

        .card::before,
        .content {
            border-radius: 5px;
            box-shadow: 0px 0px 5px 1px #00000022;
            transition: transform 300ms, box-shadow 200ms;
        }

        .card::before {
            position: absolute;
            content: ' ';
            display: block;
            width: 100%;
            height: 100%;
            background-color: #b6aaae;
            transform: rotateZ(5deg);
        }

        .description {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .info {
            color: #00000066;

        }

        .price::before {
            content: '$';

        }

        .price {
            font-weight: bold;

            color: #a69890;
        }

        .description p {
            margin-bottom: 10px;

        }

        .card .content {

            position: absolute;
            width: 100%;
            height: 105%;
            background-color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transform: rotateZ(-5deg);
        }

        .imgcake {
            width: 140px;
            height: 100px;
            object-fit: cover;

        }

        .card:hover::before,
        .card:hover .content {
            transform: rotateZ(0deg);
        }

        .card:active::before,
        .card:active .content {
            box-shadow: none;
        }


        @media (max-width: 600px) {
            .cardd {

                gap: 30px;
                justify-content: center;


            }

            .card::before {
                position: absolute;
                content: ' ';
                display: block;
                width: 120%;
                height: 120%;
                background-color: #b6aaae;
                transform: rotateZ(5deg);
            }

            .card {
                width: 110px;
                height: 180px;
            }

            .card .content {
                width: 120%;
                height: 120%;
            }

            .imgcake {
                width: 120px;
                height: 100px;
                object-fit: cover;
                margin-bottom: -10px;

            }

            .description {
                width: 100%;
                text-align: center;
                margin-top: 20px;
            }

            .info {
                color: #00000066;
                margin-top: -10px;

            }

            .price::before {
                content: '$';

            }

            .price {
                font-weight: bold;

                color: #a69890;
            }

            .description p {
                margin-bottom: 10px;

            }

        }


        /* Style dasar untuk .saran */
        .saran {
            display: flex;
            justify-content: center;

            /* Kotak berada di tengah halaman */
            margin-top: 30px;

        }

        /* input di saran */
        .input-wrapper {
            width: fit-content;
            height: 45px;
            border-radius: 20px;
            padding: 5px;
            box-sizing: content-box;
            display: flex;
            align-items: center;
            background-color: #f3ebea;
        }

        .loader {
            width: 66.8px;
            height: 66.8px;
            position: relative;
            transform: rotate(45deg);
        }

        .loader:before,
        .loader:after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 50% 50% 0 50%;
            background: #0000;
            background-image: radial-gradient(circle 11.2px at 50% 50%, #0000 94%, #b6aaae);
        }

        .loader:after {
            animation: pulse-ytk0dhmd 1s infinite;
            transform: perspective(336px) translateZ(0px);
        }

        @keyframes pulse-ytk0dhmd {
            to {
                transform: perspective(336px) translateZ(168px);
                opacity: 0;
            }
        }


        .icon {
            width: 30px;
            fill: #b6aaae;
            margin-left: 8px;
            transition: all 0.3s;
        }

        .input {
            max-width: 170px;
            height: 100%;
            border: none;
            outline: none;
            padding-left: 15px;
            background-color: #f3ebea;
            color: #504646;
            font-size: 1em;
        }

        .input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0px 1000px #f3ebea inset;
            -webkit-text-fill-color: #ffffff;
        }

        .Subscribe-btn {
            height: 100%;
            width: 95px;
            border: none;
            border-radius: 15px;
            color: #f3ebea;
            cursor: pointer;
            background-color: #b6aaae;
            font-weight: 500;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.3s;
        }

        .arrow {
            /* display: none; */
            position: absolute;
            margin-right: 150px;
            transition: all 0.3s;
        }

        .input-wrapper:active .icon {
            transform: scale(1.3);
        }

        .Subscribe-btn:hover {
            color: white;
        }

        .Subscribe-btn:hover .arrow {
            margin-right: 0;
            animation: jello-vertical 0.9s both;
            transform-origin: right;
        }

        @keyframes jello-vertical {
            0% {
                transform: scale3d(1, 1, 1);
            }

            30% {
                transform: scale3d(0.75, 1.25, 1);
            }

            40% {
                transform: scale3d(1.25, 0.75, 1);
            }

            50% {
                transform: scale3d(0.85, 1.15, 1);
            }

            65% {
                transform: scale3d(1.05, 0.95, 1);
            }

            75% {
                transform: scale3d(0.95, 1.05, 1);
            }

            100% {
                transform: scale3d(1, 1, 1);
            }
        }

        .Subscribe-btn:active {
            transform: scale(0.9);
        }

        /* alert saran */
        .cookie-card {
            max-width: 320px;
            padding: 1rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, .05);
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .title {
            font-weight: 600;
            color: rgb(31 41 55);
        }

        .description {
            margin-top: 1rem;
            font-size: 0.875rem;
            line-height: 1.25rem;
            color: rgb(75 85 99);
        }

        .description a {
            --tw-text-opacity: 1;
            color: rgb(59 130 246);
        }

        .description a:hover {
            text-decoration-line: underline;
        }

        .actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem;
            column-gap: 1rem;
            flex-shrink: 0;
        }

        .pref {
            font-size: 0.75rem;
            line-height: 1rem;
            color: rgb(31 41 55);
            text-decoration-line: underline;
            background-color: transparent;
            border: none;
            transition: all .3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .pref:hover {
            color: rgb(156 163 175);
        }

        .accept {
            font-size: 0.75rem;
            line-height: 1rem;
            background-color: rgb(17 24 39);
            font-weight: 500;
            border-radius: 0.5rem;
            color: #fff;
            padding: 0.625rem 1rem;
            border: none;
            transition: all .15s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .accept:hover {
            background-color: rgb(55 65 81);
        }

        /* Untuk tampilan mobile (default) */
        .box {
            background-color: #b6aaae;
            width: 350px;
            height: 500px;
            border-radius: 10px;
            transform: translateY(200px);
            transform-origin: top;
            opacity: 0;
            transition: opacity 0.5s ease, transform 1s ease, height 1s ease;
        }

        /* Untuk tampilan PC (min-width: 768px ke atas) */
        @media (min-width: 768px) {
            .box {
                width: 900px;
            }
        }


        /* Style untuk elemen yang sudah mulai di-scroll (animasi dimulai) */
        .box.active {
            transform: translateY(0);
            /* Naik ke posisi semula */
            height: 200px;
            /* Membuka ke ukuran penuh */
            opacity: 1;
            /* Muncul sepenuhnya */
        }

        .footer {
            background-color: #f3ebea;
            padding: 40px 0;
            color: #333;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-section {
            width: 22%;
        }

        .logo-section h2 {
            font-size: 24px;
            color: #fc8403;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .logo-section span {
            color: #333;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }

        .footer-section p,
        .footer-section a {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }

        .footer-section a:hover {
            color: #d7b993;
            text-decoration: none;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            background-color: #f3ebea;
            margin-right: 10px;
            color: #a69890;
            padding-left: 10px;
        }

        .social-icons a {
            margin-left: 20px;
            margin-right: 10px;
            color: #a69890;
            font-size: 20px;
        }

        .social-icons a:hover {
            color: #504646;
        }

        .logo_footer {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-top: -20px;

        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="logo_copy.png"></img>
    </div>

    <!-- Konten Utama -->
    <div id="content">
        <nav id="navbar-top" class="hidden">
            <div>
                <img class="img" src="logo.png" alt="">
            </div>
            <div class="navbartengah">
                <div class="nav-links"><b><a href="#">Home</a></b></div>
                <div class="nav-links"><b><a href="#">location</a></b></div>
                <div class="nav-links"><b><a href="#">categories</a></b></div>
                <div class="nav-links"><b><a href="#">about us</a></b></div>
            </div>


            <label title="cart" for="cart" class="label">
                <input id="cart" name="page" type="radio" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="inherit" viewBox="0 0 18 20" height="20" width="18"
                    class="icon cart" id="keranjang">
                    <path fill="inherit"
                        d="M16.8035 6.96427C16.1335 6.22427 15.1235 5.79427 13.7235 5.64427V4.88427C13.7235 3.51427 13.1435 2.19427 12.1235 1.27427C11.6202 0.812823 11.025 0.462927 10.3771 0.247511C9.72909 0.032095 9.04292 -0.0439787 8.3635 0.0242742C5.9735 0.254274 3.9635 2.56427 3.9635 5.06427V5.64427C2.5635 5.79427 1.5535 6.22427 0.883496 6.96427C-0.0865043 8.04427 -0.0565042 9.48427 0.0534958 10.4843L0.753496 16.0543C0.963496 18.0043 1.7535 20.0043 6.0535 20.0043H11.6335C15.9335 20.0043 16.7235 18.0043 16.9335 16.0643L17.6335 10.4743C17.7435 9.48427 17.7635 8.04427 16.8035 6.96427ZM8.5035 1.41427C8.98813 1.36559 9.47758 1.41913 9.94023 1.57143C10.4029 1.72372 10.8284 1.97138 11.1894 2.29841C11.5503 2.62544 11.8387 3.02456 12.0357 3.46998C12.2328 3.91539 12.3343 4.39721 12.3335 4.88427V5.58427H5.3535V5.06427C5.3535 3.28427 6.8235 1.57427 8.5035 1.41427ZM5.2635 11.1543H5.2535C4.7035 11.1543 4.2535 10.7043 4.2535 10.1543C4.2535 9.60427 4.7035 9.15427 5.2535 9.15427C5.8135 9.15427 6.2635 9.60427 6.2635 10.1543C6.2635 10.7043 5.8135 11.1543 5.2635 11.1543ZM12.2635 11.1543H12.2535C11.7035 11.1543 11.2535 10.7043 11.2535 10.1543C11.2535 9.60427 11.7035 9.15427 12.2535 9.15427C12.8135 9.15427 13.2635 9.60427 13.2635 10.1543C13.2635 10.7043 12.8135 11.1543 12.2635 11.1543Z">
                    </path>
                </svg>
            </label>

        </nav>

        <div class="navkhususmobile">
            <img style="margin-top:-20px;" class="imgmobile" src="logo_copy.png" alt="">
            <i style="margin-right:-10px;" class="bi bi-bag-fill" id="keranjang"></i>
        </div>

        <!-- Navbar Bawah (Mobile) -->

        <section id="navbar-bottom">
            <label title="home" for="home" class="label">
                <input id="home" name="page" type="radio" checked="" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 20" height="20" width="21" class="icon home"
                    id="label">
                    <path fill="inherit"
                        d="M18.9999 6.01002L12.4499 0.770018C11.1699 -0.249982 9.16988 -0.259982 7.89988 0.760018L1.34988 6.01002C0.409885 6.76002 -0.160115 8.26002 0.0398848 9.44002L1.29988 16.98C1.58988 18.67 3.15988 20 4.86988 20H15.4699C17.1599 20 18.7599 18.64 19.0499 16.97L20.3099 9.43002C20.4899 8.26002 19.9199 6.76002 18.9999 6.01002ZM10.9199 16C10.9199 16.41 10.5799 16.75 10.1699 16.75C9.75988 16.75 9.41988 16.41 9.41988 16V13C9.41988 12.59 9.75988 12.25 10.1699 12.25C10.5799 12.25 10.9199 12.59 10.9199 13V16Z">
                    </path>
                </svg>
            </label>
            <label title="cart" for="cart" class="label">
                <input id="cart" name="page" type="radio" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="inherit" viewBox="0 0 18 20" height="20" width="18">
                    <i fill="inherit" class="bi bi-geo-alt-fill" id="maps"></i>
                </svg>
            </label>
            <label title="profile" for="profile" class="label">
                <input id="profile" name="page" type="radio" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20" height="20" width="18" class="icon profile"
                    id="label">
                    <path fill="inherit"
                        d="M9.14365 12.4805C4.51168 12.4805 0.782227 13.5748 0.782227 16.354C0.782227 19.1332 4.49365 20.2446 9.14365 20.2446C13.7756 20.2446 17.5051 19.1504 17.5051 16.3712C17.5051 13.592 13.7936 12.4805 9.14365 12.4805ZM9.14365 0.00641026C6.62518 0.00641026 4.59702 2.09744 4.59702 4.72051C4.59702 7.34359 6.62518 9.42564 9.14365 9.42564C11.6528 9.42564 13.6903 7.33461 13.6903 4.71154C13.6903 2.08846 11.6528 0.00641026 9.14365 0.00641026ZM9.14365 7.29359C7.69316 7.29359 6.51634 6.07282 6.51634 4.5959C6.51634 3.11897 7.69316 1.89821 9.14365 1.89821C10.5941 1.89821 11.7619 3.11897 11.7619 4.5959C11.7619 6.07282 10.5941 7.29359 9.14365 7.29359Z">
                    </path>
                </svg>
            </label>
        </section>
    </div>
    <!--  -->
    <div class="">
        <div class="container " style="margin-top: 20px;">
            <div class="row " style=" display: flex">
                <div class="col ">
                    <h1 style="font-weight: bold; color:#666;">
                        Enjoy Delicious Bento Cake
                    </h1>
                    <p style="color:#666;">
                        Small and Elegant, Bringing Joy.
                    </p>
                    <button type="button" class="btn btn-dark"
                        style="border-radius:20px;  height:20px; background-color:#504646; margin-bottom: 40px;">
                        <p style="margin-top:-8px; color:#f3ebea">order now<i class="bi bi-arrow-right-short"></i></p>
                    </button>
                </div>
                <div class="col ">
                    <img src="cakee.png" class="responsive-img">
                </div>
            </div>
        </div>
    </div>
    <!-- about us-->
    <div class="manfaat" style="color:#666;">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <img src="cakee.png" class="responsive-img2" style="margin-top: 50px;">
                </div>
                <div class="col">
                    <h6>about us</h6>
                    <h1 style="font-weight: bold;">
                        We provide aesthetic and delicious bento cakes
                    </h1>
                    <p>
                        In every slice, there is a story written. These cakes are not just about taste, but about
                        culture and memories engraved in beautiful moments, like the complementary relationship between
                        art and flavor.
                    </p>

                </div>
            </div>
        </div>
        <!-- menu favorit -->
        <div class=" textpopuler">
            <h1 style="margin-left: 10px; font-weight: bold">menu populer</h1>
            <p>see all</p>
        </div>
        <div>
            <div style="display: flex; margin-bottom:100px; margin-top: 30px;" class="cardd">

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="content">
                                <img src="bento.png" alt="" class="imgcake" id="imgdiy">
                                <div class="description">
                                    <p class="title">
                                        <strong style="color:#504646">diy cake</strong>
                                    </p>
                                    <p class="info">
                                        Size: 10cm
                                    </p>
                                    <p class="price">
                                        35.90
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card">
                            <div class="content">
                                <img src="bento.png" alt="" class="imgcake" id="imgdiy">
                                <div class="description">
                                    <p class="title">
                                        <strong style="color:#504646">bento cake</strong>
                                    </p>
                                    <p class="info">
                                        Size: 10cm
                                    </p>
                                    <p class="price">
                                        35.90
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="content">
                                <img src="bento.png" alt="" class="imgcake" id="imgdiy">
                                <div class="description">
                                    <p class="title">
                                        <strong style="color:#504646">ugly cake</strong>
                                    </p>
                                    <p class="info">
                                        Size: 10cm
                                    </p>
                                    <p class="price">
                                        35.90
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="content">
                                <img src="bento.png" alt="" class="imgcake" id="imgdiy">
                                <div class="description">
                                    <p class="title">
                                        <strong style="color:#504646">valentine edition</strong>
                                    </p>
                                    <p class="info">
                                        Size: 10cm
                                    </p>
                                    <p class="price">
                                        35.90
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- location -->
            <div class="container ">
                <div class="row">
                    <div class="col">
                        <h1 style="font-weight: bold;">
                            Masih Binggung Lokasi Toko Kita Dimana??
                        </h1>
                        <p>
                            klik maps di samping untuk mengetahui lokasi toko kami
                        </p>

                    </div>
                    <div class="col">
                        <div class="loader"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="saran">

            <div class="box" style="color: #f3ebea">
                <div>
                    <div class="container">
                        <img src="cake.jpeg" alt="" style="width: 100px; height: 100px;">
                        <div class="textsaran" style="margin-left:20px;">
                            <h6 style="margin-top:5px">
                                punya saran buat toko kami?
                            </h6>
                            <h2 style="margin-top: -12px; margin-bottom: -200px; font-weight: bold;">
                                kirim saran kalian lewat <br> e-mail
                            </h2>
                        </div>
                    </div>
                    <br>
                    <center>
                        <div class="input-wrapper">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g data-name="Layer 2">
                                    <g data-name="inbox">
                                        <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                        <path
                                            d="M20.79 11.34l-3.34-6.68A3 3 0 0 0 14.76 3H9.24a3 3 0 0 0-2.69 1.66l-3.34 6.68a2 2 0 0 0-.21.9V18a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3v-5.76a2 2 0 0 0-.21-.9zM8.34 5.55a1 1 0 0 1 .9-.55h5.52a1 1 0 0 1 .9.55L18.38 11H16a1 1 0 0 0-1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 0-1-1H5.62z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <input type="text" name="text" class="input" placeholder="ketik saran disini" />
                            <button class="Subscribe-btn" onclick="showCookieNotice()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="10" viewBox="0 0 38 15"
                                    class="arrow">
                                    <path
                                        d="M10 7.519l-.939-.344h0l.939.344zm14.386-1.205l-.981-.192.981.192zm1.276 5.509l.537.843.148-.094.107-.139-.792-.611zm4.819-4.304l-.385-.923h0l.385.923zm7.227.707a1 1 0 0 0 0-1.414L31.343.448a1 1 0 0 0-1.414 0 1 1 0 0 0 0 1.414l5.657 5.657-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM1 7.519l.554.833.029-.019.094-.061.361-.23 1.277-.77c1.054-.609 2.397-1.32 3.629-1.787.617-.234 1.17-.392 1.623-.455.477-.066.707-.008.788.034.025.013.031.021.039.034a.56.56 0 0 1 .058.235c.029.327-.047.906-.39 1.842l1.878.689c.383-1.044.571-1.949.505-2.705-.072-.815-.45-1.493-1.16-1.865-.627-.329-1.358-.332-1.993-.244-.659.092-1.367.305-2.056.566-1.381.523-2.833 1.297-3.921 1.925l-1.341.808-.385.245-.104.068-.028.018c-.011.007-.011.007.543.84zm8.061-.344c-.198.54-.328 1.038-.36 1.484-.032.441.024.94.325 1.364.319.45.786.64 1.21.697.403.054.824-.001 1.21-.09.775-.179 1.694-.566 2.633-1.014l3.023-1.554c2.115-1.122 4.107-2.168 5.476-2.524.329-.086.573-.117.742-.115s.195.038.161.014c-.15-.105.085-.139-.076.685l1.963.384c.192-.98.152-2.083-.74-2.707-.405-.283-.868-.37-1.28-.376s-.849.069-1.274.179c-1.65.43-3.888 1.621-5.909 2.693l-2.948 1.517c-.92.439-1.673.743-2.221.87-.276.064-.429.065-.492.057-.043-.006.066.003.155.127.07.099.024.131.038-.063.014-.187.078-.49.243-.94l-1.878-.689zm14.343-1.053c-.361 1.844-.474 3.185-.413 4.161.059.95.294 1.72.811 2.215.567.544 1.242.546 1.664.459a2.34 2.34 0 0 0 .502-.167l.15-.076.049-.028.018-.011c.013-.008.013-.008-.524-.852l-.536-.844.019-.012c-.038.018-.064.027-.084.032-.037.008.053-.013.125.056.021.02-.151-.135-.198-.895-.046-.734.034-1.887.38-3.652l-1.963-.384zm2.257 5.701l.791.611.024-.031.08-.101.311-.377 1.093-1.213c.922-.954 2.005-1.894 2.904-2.27l-.771-1.846c-1.31.547-2.637 1.758-3.572 2.725l-1.184 1.314-.341.414-.093.117-.025.032c-.01.013-.01.013.781.624zm5.204-3.381c.989-.413 1.791-.42 2.697-.307.871.108 2.083.385 3.437.385v-2c-1.197 0-2.041-.226-3.19-.369-1.114-.139-2.297-.146-3.715.447l.771 1.846z">
                                    </path>
                                </svg>
                                kirim
                            </button>
                    </center>
                </div>

                <!-- Cookie Notice -->
                <div class="cookie-card" id="cookieNotice" style="display: none;">
                    <span class="title">🍰 Hai sahabat Sweeties</span>
                    <p class="description">Email Anda berhasil terkirim! Terima kasih telah menghubungi kami. Kami akan
                        segera merespons pesan Anda.

                    <div class="actions">
                        <button class="pref" onclick="closeCookieNotice()">kembali ke home</button>
                        <button class="accept" onclick="closeCookieNotice()">oke</button>
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

    <footer class="footer">
        <div class="container">
            <div class="footer-section logo-section">
                <img src="logo_copy.png" class="logo_footer">
                <p>Small and Elegant, Bringing Joy.</p>
            </div>
            <div class="footer-section information">
                <h3>Information</h3>
                <ul>
                    <li><a href="#" style="text-decoration:none;">home</a></li>
                    <li><a href="#" style="text-decoration:none;">about us</a></li>
                    <li><a href="#" style="text-decoration:none;">categories</a></a></li>
                    <li><a href="#" style="text-decoration:none;">location</a></li>
                </ul>
            </div>
            <div class="footer-section address">
                <h3>Address</h3>
                <p>11 Oval Timur 5 Regency</p>
                <p>10:00 AM - 08:00 PM</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="social-icons">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
            <p>Copyright &copy; 2024 SweetSlice. All rights reserved.</p>
            <div class="payment-methods">
                <p>cash on delivery</p>
            </div>
        </div>
    </footer>

</body>


<script>
    //js buat di awal
    window.addEventListener('load', function () {
        setTimeout(function () {
            document.getElementById('preloader').style.display = 'none';
            document.getElementById('content').style.display = 'block';
            document.getElementById('navbar-top').classList.remove('hidden'); // Menampilkan navbar di desktop
        }, 1000); // waktu delay 2 detik untuk simulasi loading
    });
    //js saran
    // Mendeteksi elemen dengan Intersection Observer
    document.addEventListener("DOMContentLoaded", function () {
        const box = document.querySelector('.box');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    box.classList.add('active'); // Tambahkan class 'active' saat elemen terlihat
                }
            });
        });

        //js enjoyy


        // Amati elemen .box
        observer.observe(box);
    });
    // js alert di saran
    function showCookieNotice() {
        document.getElementById("cookieNotice").style.display = "block";
    }

    function closeCookieNotice() {
        document.getElementById("cookieNotice").style.display = "none";
    }


</script>



</html>