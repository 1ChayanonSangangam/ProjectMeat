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
.midcolumn {   
    padding-left: 20%;
    padding-right: 20%;
    float: left;
    width: 100%;
}

/* Right column */
.rightcolumn {
    float: right;
    width: 40%;
    padding-left: 10px;
    padding-right: 10px;
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
    <?php
    require_once('header.php');
    error_reporting( error_reporting() & ~E_NOTICE );
    require_once('check_login.php');
    ?>
    <div class="midcolumn">
                <form class="card" method="post" action="/meatnet/login.php">
                    <h2 class="w3-text-black">Login Agent</h2>
                    <p>      
                    <label class="w3-text-black"><b>Username</b></label>
                    <input class="w3-text-blue w3-input w3-border w3-round-large w3-large" name="Username" type="text" autofocus required maxlength="15"></p>
                    <p>      
                    <label class="w3-text-black"><b>Password</b></label>
                    <input class="w3-text-blue w3-input w3-border w3-round-large w3-large" name="Password" type="password" required maxlength="15"></p>
                    <p>      
                    <button class="w3-btn w3-blue w3-right w3-round-large w3-large">Login</button></p>
                </form>
            <div class=" w3-center">
                <h5>Or you can <a href="signup.php"class=" w3-btn w3-round-large w3-large w3-text-blue w3-padding-small">create a new Agent</a>
            </div>
        
    </div>
    <?php
if (isset($_POST['Username'])) 
{
	echo"<center><h1> username or password is wrong !</h1></center>";

	exit();
}
?>
</div>
</body>
</html>
