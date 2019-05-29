<!DOCTYPE html>
<html>
<title>Meat NET</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
html,body {font-family: "Roboto", sans-serif; background: #f1f1f1;}
h1,h2,h3,h4,h5,h6{font-family: "Roboto", sans-serif;}
.loader {
    position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  border-bottom:  16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 0.5s linear infinite;
  animation: spin 0.5s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 0.5s;
  animation-name: animatebottom;
  animation-duration: 0.5s
}

@-webkit-keyframes animatebottom {
  from { bottom:-50px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-50px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
.card {
     background-color: #f1f1f1;
     padding: 10px;   
     border-radius: 4px;
     margin-top: 10px;
     padding-left: 10px;
     padding-right: 10px;
     padding-bottom: 50px;
     border: 0.2px solid gray;
     font-size: 20px;
}
.midcolumn {   
    padding-left: 20%;
    padding-right: 20%;
    float: left;
    width: 100%;
}
.leftcolumn {     
    float: left;
    width: 70%;
}
.rightcolumn {    
    float: right;
    width: 30%;
}
.button:hover {
    background-color: #008CBA;
    color: white;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    
    text-align: left;
    padding: 8px;
    
}
tr:nth-child(even) {
    background-color:white;
}
tr:nth-child(odd) {
    background-color:white;
}
@media screen and (max-width: 800px) {
    .midcolumn {   
    padding-left: 0%;
    padding-right: 0%;
    float: left;
    width: 100%;
}
.card {
     background-color: #f1f1f1;
     padding: 10px;   
     border-radius: 4px;
     margin-top: 10px;
     padding-left: 10px;
     padding-right: 10px;
     padding-bottom: 50px;
     border: 0.2px solid gray;
     font-size: 12px;
}
}
.material-icons {vertical-align:-14%}
</style>
<head>
</head>
<script>
var myVar;
function hideloader(){
    myVar = setTimeout(showPage, 200);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<body onload="hideloader()">
    <!--header -->
    <?php
    require_once('header.php');
    require_once('func_helper.inc.php');
        $con = connect();
        $stmt = $con->query("SELECT Username,Password,Name,Surname,Email,public_keys FROM member WHERE ID_Member='$_SESSION[ID]'");   
        $result = $stmt->fetch();
        //print_r($result);
       
    ?> 
    <!--page -->
   
    <div class="midcolumn animate-bottom" style="display:none;" id="myDiv">
        <h1 align = "center"><b><?php echo $result["Name"]." ".$result["Surname"] ?></b></h1>
        <div class="card w3-responsive leftcolumn">
            <p><b>Public Key</b></p> <?php echo $result["public_keys"]?>
            <p><b>Private Key</b>&emsp; <i class="material-icons" onclick="if(document.getElementById('spoiler') .style.display=='none') {document.getElementById('spoiler') .style.display='' ; document.getElementById('Notspoiler') .style.display='none'}else{document.getElementById('spoiler') .style.display='none'; document.getElementById('Notspoiler') .style.display=''}">remove_red_eye</i> </p>
            <div id="Notspoiler" style="display:block">
                ••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
            </div>
            <div id="spoiler" style="display:none">
                ใส่ข้อความตรงนี้
            </div>
            <form method="post" action="/meatnet/profile_edit.php">
                <p><b>Username</b> &emsp; <i class="material-icons"  onclick="if(document.getElementById('edituser') .style.display=='none') {document.getElementById('edituser') .style.display='' ; document.getElementById('user') .style.display='none'}else{document.getElementById('edituser') .style.display='none'; document.getElementById('user') .style.display=''}">create</i></p>
                <div id="user" style="display:block">
                    <?php echo $result["Username"]?>
                </div>
                <div id="edituser" style="display:none">
                    <div class="w3-row">
                        <input class=" w3-input w3-border w3-round-large w3-large w3-half" name="Username" type="text" autofocus maxlength="15"placeholder="<?php echo $result["Username"]?>">
                        <button  type="reset"  onclick="if(document.getElementById('edituser') .style.display=='none') {document.getElementById('edituser') .style.display='' ; document.getElementById('user') .style.display='none'}else{document.getElementById('edituser') .style.display='none'; document.getElementById('user') .style.display=''}" class="w3-btn w3-gray w3-border w3-left w3-round-large w3-large">Cancel</button>
                        <button class="w3-btn w3-blue w3-border w3-left w3-round-large w3-large">Update</button>
                    </div>
                </div>
            </form>

            <form method="post" action="/meatnet/profile_edit.php">
                <p><b>Password</b> &emsp; <i class="material-icons"  onclick="if(document.getElementById('editpassword') .style.display=='none') {document.getElementById('editpassword') .style.display='' ; document.getElementById('password') .style.display='none'}else{document.getElementById('editpassword') .style.display='none'; document.getElementById('password') .style.display=''}">create</i></p>
                <div id="password" style="display:block">
                    <?php echo $result["Password"]?>
                </div>
                <div id="editpassword" style="display:none">
                    <div class="w3-row">
                        <input class=" w3-input w3-border w3-round-large w3-large w3-half" name="Password" type="text" autofocus maxlength="15"placeholder="<?php echo $result["Password"]?>">
                        <button type="reset" onclick="if(document.getElementById('editpassword') .style.display=='none') {document.getElementById('editpassword') .style.display='' ; document.getElementById('password') .style.display='none'}else{document.getElementById('editpassword') .style.display='none'; document.getElementById('password') .style.display=''}" class="w3-btn w3-gray w3-border w3-left w3-round-large w3-large">Cancel</button>
                        <button class="w3-btn w3-blue w3-border w3-left w3-round-large w3-large">Update</button>
                    </div>
                </div>
            </form>

            <form method="post" action="/meatnet/profile_edit.php">
                <p><b>Email</b> &emsp; <i class="material-icons"  onclick="if(document.getElementById('editemail') .style.display=='none') {document.getElementById('editemail') .style.display='' ; document.getElementById('email') .style.display='none'}else{document.getElementById('editemail') .style.display='none'; document.getElementById('email') .style.display=''}">create</i></p>
                <div id="email" style="display:block">
                    <?php echo $result["Email"]?>
                </div>
                <div id="editemail" style="display:none">
                    <div class="w3-row">
                        <input class=" w3-input w3-border w3-round-large w3-large w3-half" name="Email" type="text" autofocus maxlength="30"placeholder="<?php echo $result["Email"] ?>">
                        <button type="reset"  onclick="if(document.getElementById('editemail') .style.display=='none') {document.getElementById('editemail') .style.display='' ; document.getElementById('email') .style.display='none'}else{document.getElementById('editemail') .style.display='none'; document.getElementById('email') .style.display=''}" class="w3-btn w3-gray w3-border w3-left w3-round-large w3-large">Cancel</button>
                        <button class="w3-btn w3-blue w3-border w3-left w3-round-large w3-large">Update</button>
                    </div>
                </div>
            </form>
            
        </div>        
    </div>
</div>
<div class="loader" id="loader"></div>
</body>
</html>
