<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        
  <title>Document</title>
  
</head>
<style>
 *{
   font-family : Poppins;
   margin: 0px;
 }
         ::selection {
            background-color: #504646;
            color: #ddd;
        }
.card {
  --main-color: #000;
  --submain-color: #78858f;
  --bg-color: #f3ebea;
  
  position: relative;
  width: 100%;
  height: 330px;
  display: flex;
  flex-direction: column;
  align-items: center;
  
  background: var(--bg-color);
}

.card__background {
  height: 170px;
  width: 100%;
  background-color: #a69890;
}

        .imgmobile {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-top: 10px;
        }


/* icon */ 
.setting-btn {
  width: 45px;
  height: 45px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 6px;
  background-color: #a69890;
  border-radius: 10px;
  cursor: pointer;
  border: none;
  
}
.bar {
  width: 50%;
  height: 2px;
  background-color: #f3ebea;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  border-radius: 2px;
}
.bar::before {
  content: "";
  width: 2px;
  height: 2px;
  
  position: absolute;
  border-radius: 50%;
  border: 2px solid white;
  transition: all 0.3s;
  box-shadow: 0px 0px 5px white;
}
.bar1::before {
  transform: translateX(-4px);
}
.bar2::before {
  transform: translateX(4px);
}
.setting-btn:hover .bar1::before {
  transform: translateX(4px);
}
.setting-btn:hover .bar2::before {
  transform: translateX(-4px);
}


.card__avatar {
  position: absolute;
  width: 114px;
  height: 114px;
  background: #f3ebea;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  top: calc(50% - 57px);
}


.card__title {
  margin-top: 60px;
  font-weight: 500;
  font-size: 18px;
  color: var(--main-color);
}

.card__subtitle {
  margin-top: 10px;
  font-weight: 400;
  font-size: 15px;
  color: var(--submain-color);
}

.card__btn {
  margin-top: 15px;
  width: 76px;
  height: 31px;
  border: 2px solid var(--main-color);
  border-radius: 4px;
  font-weight: 700;
  font-size: 11px;
  color: var(--main-color);
  background: var(--bg-color);
  text-transform: uppercase;
  transition: all 0.3s;
}


.Btn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 120px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
 background-color: #f3ebea;
}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 17px;
}

.sign svg path {
  fill: #a69890;
}
/* text */
.text {
 
  color: #a69890;
  font-size: 1.2em;
  font-weight: 600;
  
}


</style>
<body style="background-color:#f3ebea; color: #7c7275">
    @if (Auth::check())
<div class="card">
  <div class="card__background" style="display:flex; justify-content:space-between">
    <div class="logo">
                  <img style="margin-top:-20px;" class="imgmobile" src="logo.png" alt="rffje">
    </div>
    
        @if(Auth::user() && Auth::user()->role == "admin")
        <a href="/admin">
    <div class="conicon">
        <button class="setting-btn">
          <span class="bar bar1"></span>
          <span class="bar bar2"></span>
          <span class="bar bar1"></span>
        </button>
    </div></a>
        @endif
    
  </div>
  
  
  <div class="card__avatar">
  <img src="profile.jpeg"  style="width:114px; height:114px; border-radius:100%; object-fit:cover;">
  </div>
          @auth
  <div class="card__title" style="color:#504646">Hi, {{ Auth::user()->name }}</div>
  <div class="card__subtitle">{{ Auth::user()->email }}</div>
           @endauth

</div>
<div class="pesanan" style="margin-top:20px;">
  <div class="textpesanan" style="margin-left:25px">
    <h3 style="color:#504646">pesanan saya</h3>
  </div>
  
  <div class="statuspesanan" style="display:flex;gap:60px; justify-content:center; margin-top:20px; ">
  <div class="kemas" style="margin-left :10px;">
        <center><i class="bi bi-box-seam"></i></center>
   <br/> 
   <p>Dikemas</p>
  </div>
  
  <div class="kirim">
   <center><i class="bi bi-truck"></i></center> 
   <br/> 
   <p>Dikirim</p>
    </div>
    
  <div class="selesai" style="margin-right:10px;">
   <center><i class="bi bi-check-lg"></i></center> 
   <br/> 
   <p>Selesai</p>
  </div>
 </div>
</div>

    <hr/>
    
  <div class="bantuan" style="margin-top:2px;">
          <h3 style="margin-left:25px; color:#504646">Bantuan</h3>
          
  <a href="bantuan.html" style="text-decoration : none; color: #7c7275">   
    <div class="pusatbantuan" style="display:flex; margin-left:15px">
      <i class="bi bi-question-circle" style="margin-right:5px"></i>
      <p>pusat bantuan</p>
      <i class="bi bi-chevron-right" style="margin-right"></i>
    </div>
  </a>
          
  <a href="https://wa.me/qr/6EIZVQUVCU5DC1" style="text-decoration : none; color: #7c7275">   
    <div class="pusatbantuan" style="display:flex; margin-left:15px">
      <i class="bi bi-chat" style="margin-right:5px"></i>
      <p>Chat Dengan SweetSlice</p>
      <i class="bi bi-chevron-right" style="margin-right"></i>
    </div>
  </a>
  </div>
      <hr/>


    <div class="logout">
              <form action="{{ route('logout') }}" method="POST">
            @csrf

<button class="Btn" type="submit">
  
  <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
  
  <div class="text">Logout</div>
</button>



        </form>
      
    </div> 
  
      @else
     <div class="container " style="margin-top: 20px;">
            <div class="row " style=" display: flex; column-gap:70px">
                <div class="col ">
                       <center>
                         <h3 style="color:#a69890; font-weight: bold;">
                        PERINGATAN !!!
                    </h3>
                       </center>
                    <h1 style="font-weight: bold; color:#a69890;">
                        Anda belum masuk !
                    </h1>
                    <p style="color:#b6aaae;">
                        Silakan login terlebih dahulu.
                    </p>
                    
                    <h5 style="color:#b6aaae;">
                        Untuk menuju halaman login, klik button di bawah ini
                    </h5>
                    <a href="/auth"><button type="button" class="btn "
                        style="border-radius:20px;  height:20px; background-color:#a69890; margin-bottom: 40px; ">
                        <p style="margin-top:-8px; color:#f3ebea">login atau register<i class="bi bi-arrow-right-short"></i></p>
                    </button>
                    </a>
                </div>

                </div>
            </div>
        </div>
        @endif
</body>
</html>