<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
  <title>Document</title>
  <style>
          ::selection {
            background-color: #504646;
            color: #ddd;
        }
    .FAQ {
      gap: 15px;
      list-style: none;
      padding: 0;
      
    }

    .FAQ-item {
      margin-bottom: 10px;
      position: relative;
      margin-left: 15px;
    }

    .FAQ-link {
      text-decoration: none;
      font-family: "Poppins", sans-serif;
      font-size: 14px;
      font-weight: 500;
      color: #333;
      margin-left: 5px;
      transition: color 0.3s ease;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      display: none;
      z-index: 1000;
      padding: 10px 0;
      min-width: 150px;
      max-width: 300px;
      word-wrap: break-word;
      overflow-wrap: break-word;
      white-space: normal;
    }

    .dropdown-item {
      font-family: "Poppins", sans-serif;
      font-size: 13px;
      padding: 8px 15px;
      color: #333;
      text-decoration: none;
      display: block;
      transition: background-color 0.3s ease, color 0.3s ease;
      white-space: normal;
    }

    .dropdown-item:hover {
      background-color: #f8f9fa;
      color:  #D6ADAD;
    }

    .FAQ-item.dropdown:hover .dropdown-menu {
      display: block;
    }

    ul {
      list-style: none;
    }
    
  </style>
</head>
<body style="background-color:#f3ebea;">
<nav style="display: flex; align-items: center; margin-top: 15px;">
  <a href="/account" style="text-decoration: none; display: flex; align-items: center; color: inherit;">
    <i class="bi bi-arrow-left" style="font-size: 1.5rem; margin-right: 0.9rem; margin-left: 0.9rem;"></i>
  </a>
  <h2 style="margin: 0; font-size:35px;">Pusat Bantuan</h2>
</nav>

<div class="FAQ">
  <h5 style="margin-top:20px; margin-left:10px;">FAQ</h5>
  <ul id="FAQ-list" class="FAQ">
    <li class="FAQ-item dropdown">
      <a class="FAQ-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="max-width: 300px;
      word-wrap: break-word;
      overflow-wrap: break-word;
      white-space: normal;"></a>
      <ul class="dropdown-menu">
        <p class="dropdown-item"></p>
      </ul>
    </li>
  </ul>
</div>

<script>
  // Array data
  const judulFAQ = [" Bagaimana cara memesan bento cake?", "Apakah saya bisa memesan bento cake custom?", "Berapa lama waktu pengiriman?","Apakah ada minimum pemesanan?","Apa metode pembayaran yang tersedia?","Bagaimana cara melacak pesanan saya?","Apakah bento cake ini halal?","Apakah saya bisa memilih warna atau tema bento cake yang tersedia?","Apakah ada paket spesial untuk acara seperti ulang tahun atau Valentine?","Bagaimana jika pesanan saya tidak sesuai dengan yang dipesan?","Apakah bento cake aman untuk anak-anak?","Apakah saya bisa mengirim bento cake sebagai hadiah ke alamat lain?","Bisakah saya membatalkan pesanan setelah pesanan diproses?","Apakah aplikasi ini mendukung metode pembayaran dengan kartu kredit?","Apakah bento cake tetap enak jika tidak langsung dimakan?","Bagaimana jika saya ingin mengubah metode pembayaran setelah checkout?","Apakah tersedia layanan konsultasi untuk desain custom?"];
  const isiFAQ = [
    "Untuk memesan bento cake: 1)Pilih produk dari menu utama atau kategori yang tersedia. 2)Klik Tambah ke Keranjang.    3)klik Checkout.    4)Isi detail pengiriman dan pilih metode pembayaran. 5)Klik Pesan Sekarang. Anda akan menerima konfirmasi melalui  notifikasi aplikasi.","Ya, kami menyediakan layanan custom bento cake! 1)Custom Cake di aplikasi. 2)Isi formulir dengan desain, warna, atau pesan yang Anda inginkan.3)Klik Pesan. Tim kami akan menghubungi Anda untuk konfirmasi.",
    "Waktu pengiriman tergantung lokasi Anda: >>> Dalam kota: 1–2 jam. >>> Luar kota:  (mohon maaf kami tidak menyediakan pesanan di luar kota). >>> Pengiriman dilakukan setiap hari dari pukul 09.00–17.00.","Tidak ada minimum pemesanan untuk bento cake. Namun, untuk pesanan paket atau jumlah besar (seperti acara), minimal 5 pcs berlaku.", "Kami menerima pembayaran melalui: COD (Cash on Delivery) saja", "Untuk melacak pesanan:  1) Masuk ke akun Anda. 2) Buka menu Pesanan Saya.Klik pesanan yang ingin dilacak untuk melihat statusnya.","Ya, semua bahan yang kami gunakan bersertifikat halal dan aman dikonsumsi.","1. Kirim foto kerusakan melalui chat di aplikasi atau WhatsApp. 2. Kami akan memproses penggantian atau pengembalian dana sesuai kebijakan kami.","Ya, kami memiliki beberapa paket spesial, seperti: >>> Paket Ulang Tahun: Bento cake dengan lilin dan kartu ucapan. >>> Paket Valentine: Bento cake dengan desain romantis dan cokelat tambahan.>>> Lihat menu (Paket Spesial) untuk informasi lengkap.","Kami mohon maaf jika terjadi kesalahan. Silakan: 1). Foto produk yang diterima. 2). Kirim detail pesanan dan foto melalui fitur chat atau WhatsApp. 3). Kami akan memproses penggantian atau kompensasi sesuai kebijakan kami.","Ya, bento cake kami dibuat menggunakan bahan-bahan alami dan aman dikonsumsi oleh anak-anak.","Ya, Anda dapat mengirim bento cake sebagai hadiah. Masukkan alamat penerima saat checkout, dan tambahkan pesan khusus jika diperlukan.","Sayangnya, pesanan yang sudah diproses tidak dapat dibatalkan. Namun, jika terjadi masalah, silakan hubungi layanan pelanggan untuk solusi terbaik.","Saat ini, kami mendukung pembayaran melalui  COD. Dukungan untuk kartu kredit sedang kami persiapkan.","Bento cake tetap enak jika disimpan di kulkas hingga 24 jam. Pastikan untuk mengeluarkannya 15 menit sebelum dikonsumsi agar teksturnya lembut kembali.","Sayangnya, metode pembayaran tidak dapat diubah setelah checkout. Anda dapat membatalkan pesanan terlebih dahulu, lalu melakukan pemesanan ulang dengan metode pembayaran yang baru.","Ya, Anda dapat berkonsultasi dengan tim kami untuk desain custom melalui fitur chat di aplikasi.",];

  // Referensi elemen <ul> dan <li>
  const FAQList = document.getElementById('FAQ-list');
  const FAQItemTemplate = FAQList.querySelector('.FAQ-item'); // Template awal

  // Bersihkan daftar awal
  FAQList.innerHTML = '';

  // Loop untuk mengisi data ke elemen HTML
  for (let i = 0; i < judulFAQ.length; i++) {
    // Clone elemen template
    const FAQItem = FAQItemTemplate.cloneNode(true);

    // Isi judul dan isi
    FAQItem.querySelector('.FAQ-link').textContent = judulFAQ[i];
    FAQItem.querySelector('.dropdown-item').textContent = isiFAQ[i];

    // Tambahkan elemen ke dalam daftar
    FAQList.appendChild(FAQItem);
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>