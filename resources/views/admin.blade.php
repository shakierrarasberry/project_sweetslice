<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Kode+Mono:wght@400..700&family=Lora:ital,wght@0,400..700;1,400..700&family=Manrope:wght@300&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&family=Questrial&family=Rozha+One&display=swap" rel="stylesheet">    
        
  <title>admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .hero-section {
      background-color: #a69890;
      color: #fff;
      padding: 50px 20px;
      position: relative;
      z-index: 1;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .text-content {
      max-width: 50%;
    }

    .text-content h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }

    .text-content p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }




    .image-content img {
      max-width: 100%;
      height: auto;
    }

    .wave {
      position: relative;
      top: -5px;
    }

    .about-section {
      background-color: #f3ebea;
      text-align: center;
      padding: 50px 20px;
    }

    .about-section h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .about-section p {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

               ::selection {
            background-color: #504646;
            color: #ddd;}
            
    .kumpulncard {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
      margin-top: 24px; 
      
    }

    .card {
      display: block;
      position: relative;
      max-width: 300px;
      height: 230px;
      background-color: #a69890; 
      border-radius: 10px;
      padding: 2em 1.2em;
      text-decoration: none;
      z-index: 0;
      overflow: hidden;
      font-family: Arial, Helvetica, sans-serif;
      margin-left: 30px;
    }

    .card:before {
      content: '';
      position: absolute;
      z-index: -1;
      top: -16px;
      right: -16px;
      background: #504646;
      height: 32px;
      width: 32px;
      border-radius: 32px;
      transform: scale(1);
      transform-origin: 50% 50%;
      transition: transform 0.35s ease-out;
    }

    .card:hover:before {
      transform: scale(28);
    }

    .card:hover .small-desc {
      transition: all 0.5s ease-out;
      color: rgba(255, 255, 255, 0.8);
    }

    .card:hover .card-title {
      transition: all 0.5s ease-out;
      color: #ffffff;
    }

    .card-title {
      margin-top: -20px;
      color: #262626;
      font-size: 1.5em;
      line-height: normal;
      font-weight: 700;
      font-family: Poppins;
      margin-bottom: 0.5em;
    }

    .small-desc {
      margin-top: -40px;
      font-size: 1em;
      font-weight: 400;
      line-height: 1.5em;
      color: #452c2c;
      font-family: Poppins;
    }

    .go-corner {
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      width: 2em;
      height: 2em;
      overflow: hidden;
      top: 0;
      right: 0;
      background: linear-gradient(135deg, #a69890, #504646);
      border-radius: 0 4px 0 32px;
    }

    .go-arrow {
      margin-top: -4px;
      margin-right: -4px;
      color: white;
      font-family: courier, sans;
    }

    @media (max-width: 768px) {
      .kumpulncard {
        flex-direction: column;
      }
    }
    .judul{
             font-family: "Prata", serif;
            font-weight: 400;
            font-style: normal;
            
    }
    .p{
      font-family: Poppins;
    }
  </style>
</head>
<body style="background-color:#f3ebea">
  <nav style="display: flex; align-items: center; background-color:#a69890; padding-top:10px;">
  <a href="/account" style="text-decoration: none; display: flex; align-items: center; color: #fff;">
    <i class="bi bi-arrow-left" style="font-size: 1.5rem; margin-right: 0.9rem; margin-left: 0.9rem;"></i>
  </a>
  <p style="margin: 0; font-size:20px; color:#fff; font-family:Poppins">Back</p>
</nav>
  <header class="hero-section">
    <div class="container">
      <div class="text-content">
        <p style="margin-bottom:-2px;font-family:Poppins;font-weight:bold;">Dasbord Admin</p>
        <h1 class="judul">Manage With Ease</h1>
        <p class="p">Kelola data pengguna, produk, dan sistem dengan cepat dan efisien melalui dasbor ini.</p>
      </div>
      <div class="image-content">
        <img src="admin.png" alt="">
      </div>
    </div>
  </header>

  <!-- SVG Wavy Border -->
  <div class="wave">
    <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
      <path fill="#a69890" d="M0,160L60,170.7C120,181,240,203,360,213.3C480,224,600,224,720,202.7C840,181,960,139,1080,133.3C1200,128,1320,160,1380,176L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
  </div>

  <section class="about-section">
    <div class="container">
      <div class="row" style="justify-content:center;">
        <div class="col-12 col-md-6">
      <h2 class="judul">Simple, Efficient, Reliable</h2>
      </div>
      <div>
      <p class="p">Kami menyediakan alat terbaik untuk memastikan pengelolaan sistem berjalan lancar.</p>
      </div>
      

  <div class="kumpulncard">
    <div class="card">
      <p class="card-title">Lihat User</p>
      <p class="small-desc">
        Pada form ini, Anda dapat melihat daftar pengguna yang terdaftar dalam sistem, termasuk detail informasi mereka untuk keperluan manajemen.
      </p>
      <div class="go-corner">
        <a href="/admin/users" style="text-decoration:none; color:#fff"><div class="go-arrow">→</div>
      </div>
    </div>

    <div class="card">
      <p class="card-title">Edit Product</p>
      <p class="small-desc">
        Di form ini, Anda dapat melakukan berbagai tindakan terkait produk, seperti mengedit informasi produk,  menghapus produk yang sudah tidak diperlukan.
      </p>
      <div class="go-corner">
        <a href="/admin/product" style="text-decoration:none; color:#fff"><div class="go-arrow">→</div>
      </div></a>
    </div>

  
      <div class="card">
      <p class="card-title">Tambah Product</p>
      <p class="small-desc">
        Di form ini, Anda dapat melakukan  tindakan yaitu menambahkan produk baru.
      </p>
      <div class="go-corner">
        <a href="/tambah_product" style="text-decoration:none; color:#fff"><div class="go-arrow">→</div>
      </div></a>
    </div>
  </div>
    </div>
  </section>
    <footer style="margin-top:10%">
    <center>
              <p>&copy; 2025 Sweetslice. Semua Hak Dilindungi.</p>
    </center>
  </footer>
</body>
</html>