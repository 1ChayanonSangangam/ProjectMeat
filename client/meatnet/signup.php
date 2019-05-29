<!DOCTYPE html>
<html>
<title>Meat NET</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body {font-family: "Roboto", sans-serif; background: #f1f1f1;}
h1,h2,h3,h4,h5,h6{font-family: "Roboto", sans-serif;}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.card {
     background-color: white;
     padding: 10px;   
     border-radius: 4px;
     margin-top: 10px;
     padding-left: 10px;
     padding-right: 10px;
     padding-bottom: 50px;
     border: 0.2px solid gray;
}
.leftcolumn {   
    float: left;
    width: 60%;
}

/* Right column */
.rightcolumn {
    float: right;
    width: 40%;
    padding-left: 10px;
    padding-right: 10px;
}
.midcolumn {   
    padding-left: 20%;
    padding-right: 20%;
    float: left;
    width: 100%;
}
.button {
  background-color: teal; 
    color: white; 
    border: 2px solid #008CBA;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 8px;
    margin-right:10%;
}
.button:hover {
    background-color: #008CBA;
    color: white;
}
</style>
</head>
<body>
    <!--header -->
    <?php
    require_once('header.php');
    ?> 
    <!--page -->
    <div class="midcolumn">
        <form class="card" action="/meatnet/signup_insert.php" method="post">
                <h2 class="w3-text-black">Create Agent</h2>
                <p><label class="w3-text-black"><b>Name</b></label></p>
                <input class="w3-text-blue w3-input w3-border w3-round-large w3-large" name="Name" type="text" required autofocus>
                <p><label class="w3-text-black"><b>Email</b></label></p>
                <input class="w3-text-blue w3-input w3-border w3-round-large w3-large" name="Email" type="email" required >   
                <p><label class="w3-text-black"><b>Username</b></label></p>
                <input class="w3-text-blue w3-input w3-border w3-round-large w3-large" name="Username" type="text" required >                                 
                <p><label class="w3-text-black"><b>Password</b></label></p>
                <div class="card  w3-pale-red w3-border-red " style="">
                     <div class=" w3-red w3-center w3-panel">
                        <h2 class="w3-opacity ">WARNING!</h2>
                    </div>
                    <p class="w3-center w3-text-red">This password will be used as a secret key to encrypt important account information. Although it can be changed later, if lost or forgotten it will be impossible to recover your account. Keep it secure.</p>
                    <input id="pwd" class="w3-text-red w3-input w3-border-red w3-round-large w3-large" name="Password" type="password" placeholder="Enter password...">
                    <p><input id="cpwd" class="w3-text-red w3-input w3-border-red w3-round-large w3-large" name="Password2" type="password"  placeholder="Confirm password...">  </p>            
                    <div class=w3-text-red id="errorMsg"></div>
                </div>
               
                <p><button id="myBtn" class="w3-btn w3-blue w3-right w3-round-large w3-large " disabled>Create Agent</button></p>
        </form>
         <div class=" w3-center">
         <h5>Or you can <a href="login.php"class=" w3-btn w3-round-large w3-large w3-text-blue w3-padding-small">login an existing Agent</a>
         
        </div>
        
    </div>
</div>
<script>
var password = document.getElementById('pwd'), confirm_password = document.getElementById('cpwd');
function validatePassword() {
		if ((password.value != confirm_password.value) ||(password.value == '')) {
			document.getElementById('errorMsg').innerHTML = ('Passwords Don\'t Match');
            document.getElementById("myBtn").disabled = true;
		} else {
			document.getElementById('errorMsg').innerHTML = '';
            document.getElementById("myBtn").disabled = false;
		}    
	}
    password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;

function check(){
    if (password.value != confirm_password.value) {
        alert("Passwords Don\'t Match.");
        location.href = 'signup.php';
    }
}
</script>
</body>
</html>
