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
</head>
<style>
body{
  margin : 20px;
  font-family: Poppins;
  color:#a69890;
  background-color:#f3ebea;
  }
.judul{
            
            font-weight: 600 !important;
            font-style: normal !important;
            margin-right: 30% !important;
            color: #504646 
            
            
           /* margin-left: 80px !important; */
         }

.form-control{
 width : 50%; !important
 border : none;
 border-color: #a69890;
 background-color:#f3ebea; 

}
.form-control:focus {
  box-shadow: none; !important
  outline: none; !important 
  border-right-color:#a69890 ;
}
.form-control:hover{
   border-color: #a69890;
 background-color:#f3ebea; 
}
.btn{
  background-color:#504646;
  color: #fff;
  margin-top : 10px;
}
</style>
<body >
  <a href="daftarmenu.html"style="text-decoration : none; color:#a69890; ">
  <p class="kehalamanmenu" style="text-align:end; font-size:12px"> kehalaman daftar menu 
  <i class="bi bi-arrow-right-short"></i>
  </p>
  </a>
   <form method="post" action="{{ url('/admin/product') }}">
            @csrf
     <p style="margin-bottom:-5px;">Dashboard Admin</p>       
    <h2 class="judul">Tambah Product</h2>
  <div class="mb-3">
    <label  class="form-label" style="margin-top:30px">Nama Product</label>
      <input type="text" name="nama_product" class="form-control" >
  </div>
  
      <label class="form-label">Harga</label>
    <input type="text" name="harga" class="form-control" >

  
      <label class="form-label" style="margin-top:15px">Deskripsi</label>

      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="deskripsi"></textarea>
  
  
  <button type="submit" class="btn" value="Simpan">Submit</button>
</form>


</div>
</body>
</html>