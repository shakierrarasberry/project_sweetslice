<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
            <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <title>Locations</title>
    <style>
        body {
          font-family: 'Poppins';

            min-height: 100vh;
            margin: 0;
            background-color: #f3f3f3;
            padding: 20px;
            box-sizing: border-box;
        }
                .poppins-extralight {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: normal;
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
    </style>
</head>
<body>
     @if (Auth::check())
    <nav>
     <div class="button">
        <a href="/home" style=text-decoration: none;"><i class="bi bi-arrow-left"></i> kembali</a>
      </div>
  </nav>
  <br/>
</body>
<body>
<center>
    <div class="contact-section">
        <!-- Map -->
        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.2673843540595!2d107.46687296950851!3d-6.385027066813991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69726e02556809%3A0x9306772fbad89c65!2sJl.%20Opal%20Timur%205%2C%20Cikampek%20Utara%2C%20Kec.%20Kota%20Baru%2C%20Karawang%2C%20Jawa%20Barat%2041374!5e0!3m2!1sid!2sid!4v1728971260672!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- Contact Info -->
        <div class="contact-info">
            <h2>Location</h2>
            <p> 🍰 Hai sahabat Sweeties <br>
            Jangan khawatir jika Anda ingin berkunjung ke toko kami! Kami telah menyediakan peta yang jelas di atas untuk memudahkan perjalanan Anda. Dengan petunjuk yang mudah diikuti, Anda bisa sampai ke lokasi kami tanpa kesulitan. Ayo, datanglah dan temukan produk terbaik kami!</p>
            <a href="tel:+1234567890">📞 0858 sisanya kapan kapan</a>
            <a href="mailto:hello@modular.io">✉️ sweetslice@gmail.com</a>
            <a href="https://maps.app.goo.gl/8A6v23caNbEbXFQx8">📍 11 opal timur v - jawa barat indonesia 41373</a>
        </div>
    </div>
    </center>
</body>
@else
    <h1>kmu belum login,ayok login duluu
        <p>ke halaman login
            <a href="/auth">klik di sini untuk ke halaman login</a>
        </p>
    </h1>
@endif
</html>