<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
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

  <title>contactus</title>
</head>
<style>
             body {
            overflow-x: hidden;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color:#f3ebea;
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
                .contact-section {
            
            justify-content: center;
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 800px;
            padding: 20px;
            

        }

        .map {
            flex: 1;
            min-width: 300px;
            border: 0;
            border-radius: 8px;
            height: 300px;
        }
        
        /* contact */
        .form{
          
        }
.form__group {
  margin-top: 20px;
  position: relative;
  padding: 20px 0 0;
  width: 100%;
  max-width: 180px;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: none;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 17px;
  color: #504646;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}

textarea.form__field {
  height: 100px;
  resize: none;
}

.form__field::placeholder {
  color: transparent;
}

.form_field:placeholder-shown ~ .form_label {
  font-size: 17px;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 17px;
  color: #9b9b9b;
  pointer-events: none;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #504646, #a69890);
  border-image-slice: 1;
}

.form_field:focus ~ .form_label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 17px;
  color: #a69890;
  font-weight: 700;
}

/* reset input */
.form_field:required, .form_field:invalid {
  box-shadow: none;
}

    .btn {
            background-color: #f3ebea;
            border-color: #f3ebea;
            color: #333;
        }
        
    .btn:hover{
      background-color:  #a69890;
      border-color: #a69890;
      color: #f3ebea;
    }   

        .contact-info {
            flex: 1;
            min-width: 300px;
            padding: 0 20px;
        }

        .contact-info h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-info p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .contact-info a {
            display: block;
            font-size: 14px;
            color: #333;
            text-decoration: none;
            margin-bottom: 8px;
        }

        .contact-info a:hover {
            color: #007bff;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .contact-section {
                flex-direction: column;
                align-items: center;
            }

            .map {
                width: 100%;
                height: 200px;
            }

            .contact-info {
                padding: 10px;
                text-align: center;
            }
        }
        

  @media (max-width: 576px) {
    .card {
      width: 150px !important; /* Ukuran lebih kecil untuk tampilan HP */
    }
  }


  @media (min-width: 576px) {
    .img{
      margin-top:50px !important;
    }
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
<body>

   <div id="content">
        <nav id="navbar-top" class="hidden">
            <div>
                <img class="img" src="logo.png" alt="">
            </div>
          <div class="navbartengah">
                <div class="nav-links"><b><a href="/home">Home</a></b></div>
                <div class="nav-links"><b><a href="/location">location</a></b></div>
                <div class="nav-links"><b><a href="#">menu</a></b></div>
                <div class="nav-links"><b><a href="/aboutus">contact us</a></b></div>
            </div>


            <label title="cart" for="cart" class="label">
  

            <label title="profile" for="profile" class="label">
                <input id="profile" name="page" type="radio" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20" height="20" width="18" class="icon profile"
                    id="label">
                     <a href="/account">
                            <path fill="inherit"
                                d="M9.14365 12.4805C4.51168 12.4805 0.782227 13.5748 0.782227 16.354C0.782227 19.1332 4.49365 20.2446 9.14365 20.2446C13.7756 20.2446 17.5051 19.1504 17.5051 16.3712C17.5051 13.592 13.7936 12.4805 9.14365 12.4805ZM9.14365 0.00641026C6.62518 0.00641026 4.59702 2.09744 4.59702 4.72051C4.59702 7.34359 6.62518 9.42564 9.14365 9.42564C11.6528 9.42564 13.6903 7.33461 13.6903 4.71154C13.6903 2.08846 11.6528 0.00641026 9.14365 0.00641026ZM9.14365 7.29359C7.69316 7.29359 6.51634 6.07282 6.51634 4.5959C6.51634 3.11897 7.69316 1.89821 9.14365 1.89821C10.5941 1.89821 11.7619 3.11897 11.7619 4.5959C11.7619 6.07282 10.5941 7.29359 9.14365 7.29359Z">
                            </path>
                        </a>
                </svg>
            </label>
        </nav>



        <!-- Navbar Bawah (Mobile) -->

        <section id="navbar-bottom">
           
            <label title="home" for="home" class="label">
                <input id="home" name="page" type="radio" checked="" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 20" height="20" width="21" class="icon home"
                    id="label">
                    <a href="/home">
                    <path fill="inherit"
                        d="M18.9999 6.01002L12.4499 0.770018C11.1699 -0.249982 9.16988 -0.259982 7.89988 0.760018L1.34988 6.01002C0.409885 6.76002 -0.160115 8.26002 0.0398848 9.44002L1.29988 16.98C1.58988 18.67 3.15988 20 4.86988 20H15.4699C17.1599 20 18.7599 18.64 19.0499 16.97L20.3099 9.43002C20.4899 8.26002 19.9199 6.76002 18.9999 6.01002ZM10.9199 16C10.9199 16.41 10.5799 16.75 10.1699 16.75C9.75988 16.75 9.41988 16.41 9.41988 16V13C9.41988 12.59 9.75988 12.25 10.1699 12.25C10.5799 12.25 10.9199 12.59 10.9199 13V16Z">
                    </path>
                    </a>
                </svg>
            </label>
            <label title="cart" for="cart" class="label">
                
                   <a  href="/location" class="icon-link" >
                     <i style="margin-left : 20px;" class="bi bi-geo-alt-fill" id="maps"></i>
                   </a>

            </label>
            <label title="profile" for="profile" class="label">
                <input id="profile" name="page" type="radio" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20" height="20" width="18" class="icon profile"
                    id="label">
                    <a href="/account"> <path fill="inherit"
                        d="M9.14365 12.4805C4.51168 12.4805 0.782227 13.5748 0.782227 16.354C0.782227 19.1332 4.49365 20.2446 9.14365 20.2446C13.7756 20.2446 17.5051 19.1504 17.5051 16.3712C17.5051 13.592 13.7936 12.4805 9.14365 12.4805ZM9.14365 0.00641026C6.62518 0.00641026 4.59702 2.09744 4.59702 4.72051C4.59702 7.34359 6.62518 9.42564 9.14365 9.42564C11.6528 9.42564 13.6903 7.33461 13.6903 4.71154C13.6903 2.08846 11.6528 0.00641026 9.14365 0.00641026ZM9.14365 7.29359C7.69316 7.29359 6.51634 6.07282 6.51634 4.5959C6.51634 3.11897 7.69316 1.89821 9.14365 1.89821C10.5941 1.89821 11.7619 3.11897 11.7619 4.5959C11.7619 6.07282 10.5941 7.29359 9.14365 7.29359Z">
                    </path></a>
                   
                </svg>
            </label>
        </section>
    </div>

    <div style="margin-top:45px;">
      <img class="img-fluid img" src="contact us.png" style="width:95%; object-fit:cover">
    </div>
    
    
    <h1 style="margin-top:40px; margin-left:5px; margin-right:5px;  text-align:center; color:#a69890"> Hubungi kita melalui kontak di bawah ini</h1>
        
          <div class="container mt-4"style = "display: flex; justify-content: center; font-weight: bold;">
           <center> 
        <div class="row">
            <!-- Card 1 -->
            <div class="col-6 col-lg-3 mb-4">
                <div class="card" style ="width : 250px">
                    <div class="card-body"   style = " color:#a69890;">
                      <i class="bi bi-telephone"></i>
                        <h5 class="card-title">phone</h5>
                        <p class="card-text">+62 895-0374-3099</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-6 col-lg-3 mb-4">
                <div class="card"  style ="width : 250px">
                    <div class="card-body"   style = " color:#a69890;">
                      <i class="bi bi-whatsapp"></i>
                        <h5 class="card-title">whatsapp</h5>
                        <p class="card-text">+62 895-0374-3099</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-6 col-lg-3 mb-4">
                <div class="card"  style ="width : 250px">
                    <div class="card-body"   style = " color:#a69890;">
                      <i class="bi bi-envelope"></i>
                        <h5 class="card-title">e-mail</h5>
                        <p class="card-text">sweetslice@gmail.com</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-6 col-lg-3 mb-4">
                <div class="card"  style ="width : 250px">
                    <div class="card-body"   style = " color:#a69890;">
                      <i class="bi bi-shop-window"></i>
                        <h5 class="card-title">online store</h5>
                        <p class="card-text">www.sweetslice.co.id</p>
                    </div>
                </div>
            </div>
            </div>
            </center>
    
            </div>

    <div class="container my-5">
    <div class="row">

        <!-- Map Section -->
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h1 style = "font-weight: bold; color:#a69890">kalian masi bingung lokasi kita dmn?</h1>
      <p style = "color:#a69890">klik maps di bawah ini untuk info lebih lengkap</p>
            <iframe class="map w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.2673843540595!2d107.46687296950851!3d-6.385027066813991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69726e02556809%3A0x9306772fbad89c65!2sJl.%20Opal%20Timur%205%2C%20Cikampek%20Utara%2C%20Kec.%20Kota%20Baru%2C%20Karawang%2C%20Jawa%20Barat%2041374!5e0!3m2!1sid!2sid!4v1728971260672!5m2!1sid!2sid"
                height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- Form Section -->
        <div class="col-12 col-lg-6" >
  <div class="form"style = "margin-left : 40px;">
   <h1 style="font-weight: bold; color:#a69890">
     Hubungi Kami
   </h1>
   <p style="color:#a69890">
     melalui form di bawah ini 
   </p>
<div class="form__group field">
    <input type="input" class="form__field" placeholder="Name" required="">
    <label for="name" class="form__label">name</label>
</div>

<div class="form__group field">
    <input type="input" class="form__field" placeholder="Name" required="">
    <label for="name" class="form__label">e-mail</label>
</div>

<div class="form__group field">
    <input type="input" class="form__field" placeholder="Name" required="">
    <label for="name" class="form__label">subject</label>
</div>

<div class="form__group field">
    <textarea class="form__field" placeholder="Message" required=""></textarea>
    <label for="message" class="form__label">message</label>
    <button class="btn" type="button" style = "background-color : #a69890; color:#fff">submit</button>

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
                    <li><a href="/home" style="text-decoration:none;">home</a></li>
                    <li><a href="/aboutus" style="text-decoration:none;">contactus</a></li>
                    <li><a href="#" style="text-decoration:none;">categories</a></a></li>
                    <li><a href="/location" style="text-decoration:none;">location</a></li>
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
            <p style="font-size: 14px;">Copyright &copy; 2024 SweetSlice. All rights reserved.</p>

            <div class="payment-methods" style="font-size: 14px; margin-left:5px;">
                <p>cash on delivery</p>
            </div>
        </div>
    </footer>
    <br>
    
</body>
</html>