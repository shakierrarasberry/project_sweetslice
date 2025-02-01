<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
  <title>Document</title>
  <style>
    body {
   margin : 5px;
  font-family: Poppins;
  color:#a69890;
  background-color:#f3ebea;
    }
    .judul{
            
            font-weight: 600 !important;
            font-style: normal !important;
            margin-right: 30% !important;
            color: #504646 
        
         }
    table {
      table-layout: fixed; /* biar kolom nya tetap */
      word-wrap: break-word; /* pembungkus teks panjang*/
      white-space: normal;
     
      
    }

    th, td {
      overflow: hidden; /* biar text nya gak ilang */
      text-overflow: ellipsis;
      vertical-align: middle;
    }

    th {
      background-color: #343a40;
      color: white;
    }

    tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }

    tbody tr:nth-child(odd) {
      background-color: #e9ecef;
    }



    td button, td a {
      margin: 0 5px;
    }
    .satu{
       background-color: #803D3B;
       color: #e9ecef;
    }
    .dua{
      margin-top: 5px;
      color: #e9ecef;
      background-color: #3E5879;
    }
  </style>
</head>
<body>
     <li class="nav-item dropdown" style="display:flex">
         <i class="bi bi-arrow-left-short"></i>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Back to 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tambahprodu.html">Tambah Product</a></li>
            <li><a class="dropdown-item" href="editcss.html">Edit Product</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Account.html">Account</a></li>
          </ul>
      </li>    
  

  <div class="container mt-5">
           @csrf
     <p style="margin-bottom:-5px;">Dashboard Admin</p>       
    <h2 class="judul">Daftar menu admin</h2>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" style="border-radius: 5px;
      overflow: hidden;">
        <thead>
          <tr>
            <th scope="col" style="background-color:#a69890">Nama</th>
            <th scope="col"style="background-color:#a69890">Harga</th>
            <th scope="col"style="background-color:#a69890">Deskripsi</th>
            <th scope="col"style="background-color:#a69890">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $products)
          <tr>
            <td>
              {{ $product->nama_product }}
            </td>
            <td>
              {{ $product->harga }}
            </td>
            <td>
              {{ $product->deskripsi }}
            </td>
            <td>
              <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                     @method('DELETE')
                <button type="submit" class="btn btn-sm satu" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
              </form>
              <a href="/products/edit/{{ $product->id }}" class="btn dua btn-sm">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>