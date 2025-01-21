
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
    <a href="/admin"style="text-decoration : none; color:#a69890; display:flex;">
        <i class="bi bi-arrow-left-short"></i>
  <p class="kehalamanmenu" style="text-align:start; font-size:12px"> Back To admin
  </p>
  </a>
  

  <div class="container mt-5">
           @csrf
     <p style="margin-bottom:-5px;">Dashboard Admin</p>       
    <h2 class="judul">Data User</h2>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" style="border-radius: 5px;
      overflow: hidden;">
        <thead>
          <tr>
            <th scope="col" style="background-color:#a69890">Nama</th>
            <th scope="col"style="background-color:#a69890">Email</th>
            <th scope="col"style="background-color:#a69890">Role</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
          <tr>
            <td>
                {{ $user->name }}
            </td>
            <td>
             {{ $user->email}}
            </td>
            <td>
              {{ $user->role }}
            </td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>