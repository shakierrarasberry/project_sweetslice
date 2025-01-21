<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Login</title>
  <style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
@import url("https://fonts.googleapis.com/css?family=Fira+Sans");

/* Reset CSS */
* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}

html, body {
	min-height: 100vh;

	align-items: center;
	justify-content: center;
}

/* Tampilan Desktop */


@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

.desktop-login {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #a69890;
	background-color: #a69890;
	color: #fff;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #a69890;
	background: -webkit-linear-gradient(to right, #D6ADAD, #a69890);
	background: linear-gradient(to right, #D6ADAD, #a69890);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}





/* Tampilan Mobile */
.mobile-login {
	background-color: #222;
	border-radius: 15px;
	height: 550px;
	width: 350px;
	display: none;
	overflow: hidden;
	
}

.mobile-login .form-structor {
  
	background-color: #222;
	border-radius: 15px;
	height: 550px;
	width: 350px;
	position: relative;
	overflow: hidden;
}

/* Media Query untuk Mobile */
@media only screen and (max-width: 768px) {
	.desktop-login {
		display: none;
	}
	.mobile-login {
		display: flex;
		margin-left: 6px;
		margin-top: 50px;
		
	}
}
  </style>
  <style>
        
@import url("https://fonts.googleapis.com/css?family=Fira+Sans");

html,body {
	color: #a69890;
	position: relative;
	min-height: 100vh;
	background-color: #f3ebea;
	align-items: center;
	justify-content: center;
	font-family: 'Poppins';
}

.form-structor {
	background-color: #222;
	border-radius: 15px;
	height: 550px;
	width: 350px;
	
	position: relative;
	overflow: hidden;
	
	&::after {
		content: '';
		opacity: .8;
		position: absolute;
		top: 0;right:0;bottom:0;left:0;
		background-repeat: no-repeat;
		background-position: left bottom;
		background-size: 500px;
		background-image: url('mobile.jpeg');
	}
	
	.signup {
		position: absolute;
		top: 50%;
		left: 50%;
		-webkit-transform: translate(-50%, -50%);
		width: 65%;
		z-index: 5;
		-webkit-transition: all .3s ease;
		
		
		&.slide-up {
			top: 5%;
			-webkit-transform: translate(-50%, 0%);
			-webkit-transition: all .3s ease;
		}
		
		&.slide-up .form-holder,
		&.slide-up .submit-btn {
			opacity: 0;
			visibility: hidden;
		}
		
		&.slide-up .form-title {
			font-size: 1em;
			cursor: pointer;
		}
		
		&.slide-up .form-title span {
			margin-right: 5px;
			opacity: 1;
			visibility: visible;
			-webkit-transition: all .3s ease;
		}
		
		.form-title {
			color: #fff;
			font-size: 1.7em;
			text-align: center;
			
			span {
				color: #fff;
				opacity: 0;
				visibility: hidden;
				-webkit-transition: all .3s ease;
			}
		}
		
		.form-holder {
			border-radius: 15px;
			background-color: #f3ebea;
			overflow: hidden;
			margin-top: 15px;
			opacity: 0.90;
			visibility: visible;
			-webkit-transition: all .3s ease;
			
			.input {
				border: 0;
				outline: none;
				box-shadow: none;
				display: block;
				height: 30px;
				line-height: 30px;
				padding: 8px 15px;
				border-bottom: 1px solid #eee;
				width: 100%;
				font-size: 12px;
				
				&:last-child {
					border-bottom: 0;
				}
				&::-webkit-input-placeholder {
					color: rgba(0,0,0,0.4);
				}
			}
		}
		
		.submit-btn {
			background-color: #a69890;
			color: rgba(256,256,256,0.7);
			border:0;
			border-radius: 15px;
			display: block;
			margin: 15px auto; 
			padding: 15px 45px;
			width: 100%;
			font-size: 13px;
			font-weight: bold;
			cursor: pointer;
			opacity: 1;
			visibility: visible;
			-webkit-transition: all .3s ease;
			
			&:hover {
				transition: all .3s ease;
				background-color: rgba(0,0,0,0.8);
			}
		}
	}
	
	.login {
		position: absolute;
		top: 20%;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #fff;
		z-index: 5;
		-webkit-transition: all .3s ease;
		
		&::before {
			content: '';
			position: absolute;
			left: 50%;
			top: -20px;
			-webkit-transform: translate(-50%, 0);
			background-color: #fff;
			width: 200%;
			height: 250px;
			border-radius: 50%;
			z-index: 4;
			-webkit-transition: all .3s ease;
		}
		
		.center {
			position: absolute;
			top: calc(50% - 10%);
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			width: 65%;
			z-index: 5;
			-webkit-transition: all .3s ease;
			
			.form-title {
				color: #a69890;
				font-size: 1.7em;
				text-align: center

				span {
										color: #a69890;
					opacity: 0;
			    visibility: hidden;
				  -webkit-transition: all .3s ease;
				}
			}

			.form-holder {
				border-radius: 15px;
				background-color: #fff;
				border: 1px solid #eee;
				overflow: hidden;
				margin-top: 50px;
				opacity: 1;
				visibility: visible;
				-webkit-transition: all .3s ease;

				.input {
					border: 0;
					outline: none;
					box-shadow: none;
					display: block;
					height: 30px;
					line-height: 30px;
					padding: 8px 15px;
					border-bottom: 1px solid #eee;
					width: 100%;
					font-size: 12px;

					&:last-child {
						border-bottom: 0;
					}
					&::-webkit-input-placeholder {
						color: rgba(0,0,0,0.4);
					}
				}
			}

			.submit-btn {
				background-color: #a69890;
				color: rgba(256,256,256,0.7);
				border:0;
				border-radius: 15px;
				display: block;
				margin: 15px auto; 
				padding: 15px 45px;
				width: 100%;
				font-size: 13px;
				font-weight: bold;
				cursor: pointer;
				opacity: 1;
				visibility: visible;
				-webkit-transition: all .3s ease;

				&:hover {
					transition: all .3s ease;
					background-color: rgba(0,0,0,0.8);
				}
			}
		}
		
		&.slide-up {
			top: 90%;
			-webkit-transition: all .3s ease;
		}
		
		&.slide-up .center {
			top: 10%;
			-webkit-transform: translate(-50%, 0%);
			-webkit-transition: all .3s ease;
		}
		
		&.slide-up .form-holder,
		&.slide-up .submit-btn {
			opacity: 0;
			visibility: hidden;
			-webkit-transition: all .3s ease;
		}
		
		&.slide-up .form-title {
			font-size: 1em;
			margin: 0;
			padding: 0;
			cursor: pointer;
			-webkit-transition: all .3s ease;
		}
		
		&.slide-up .form-title span {
			margin-right: 5px;
			opacity: 1;
			visibility: visible;
			-webkit-transition: all .3s ease;
		}
	}
}
  </style>
</head>
<body>
  <!-- Tampilan Desktop -->
  <div class="desktop-login">

<div class="container" id="container">
	<div class="form-container sign-up-container">
		 <form action="{{ url('prosesregister') }}" method="post">
              @csrf
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
            <input type="text" placeholder="name" name="name"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password"  name="password" />
             <br>
			<button  value="Daftar"  type='submit'>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		 <form action="{{ url('proseslogin') }}" method="post">
           @csrf
           @method("post")
			<h1>Sign in</h1>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name = "username"/>
			<input type="password" placeholder="Password" name = "password"/>
          
			<button type='submit'>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>

			</div>
		</div>
	</div>
</div>


  </div>



  

  <!-- Tampilan Mobile -->
     <div class="navkhususmobile" style = "display: flex; justify-content:space-between; margin-right :10px; margin-left:10px;">
            <img style="margin-top:17px" class="imgmobile" src="logo_copy.png" alt="logo">
             
             <a href="/home"><h5>masuk tanpa login</h5></a>
        </div>
    
  <div class="mobile-login">
       

  <div class="form-structor" style="">
	<div class="signup">
		<h2 class="form-title" id="signup"><span> or</span>Sign up</h2>
		<div class="form-holder">
			 <form action="{{ url('prosesregister') }}" method="post">
              @csrf
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password"  name="password" />
          
            <button class="submit-btn" value="Daftar">Sign up</button>
		</form>
		</div>
		
	</div>

	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span> or </span>Log in</h2>
			<div class="form-holder">
				 <form action="{{ url('proseslogin') }}" method="post">
           @csrf
           @method("post")
			<input type="email" placeholder="Email" name = "username"/>
			<input type="password" placeholder="Password" name = "password"/>
            <button class="submit-btn">Log in</button> 
		</form>
			</div>
			
		</div>
	</div>
</div>
  </div>
</body>
<script>
  // Js desktop 
  const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
<script>
  console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});
</script>
</html>