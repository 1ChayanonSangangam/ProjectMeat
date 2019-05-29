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
  -webkit-animation: spin 0.75s linear infinite;
  animation: spin 0.75s linear infinite;
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
    width: 50%;
}
.rightcolumn {    
    float: right;
    width: 50%;
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
</style>
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
        $stmt = $con->query("SELECT * FROM meat WHERE ID= '$_GET[ID]'");   
        $result = $stmt->fetch();
        $tem = $con->query("SELECT temp,time FROM temperature where ID_meat= '$_GET[ID]' ORDER BY time DESC");   
        $result2 = $tem->fetchAll();
        $te = $con->query("SELECT lat,lng FROM tbl_location where ID_meat = '$_GET[ID]' ORDER BY time DESC");   
        $result3 = $te->fetchAll();
        //print_r($result);
        
       
    ?> 
    <!--page -->
    <div class="midcolumn animate-bottom" style="display:none;" id="myDiv">
        <h1 align = "center"><b><?php echo $result["Serial_Number"]?></b></h1>
        <div class="card w3-responsive leftcolumn">
            <p><b>Created</b></p><?php echo $result["Added"]?>
            <p><b>Owner</b></p>----
            <p><b>Custodian</b></p>----
            <p><b>Species</b></p><?php echo $result["Species"]?>
            
        </div>
        <div class="card w3-responsive rightcolumn">
            <p><b>Updated</b></p><?php echo $result["Updated"]?>
            <p><b>Weight (kg)</b></p><?php echo $result["Weight"]?>
            <?php echo "<p><b>Location</b></p><a href ='location.php?ID=".$result["ID"]."&SN=".$result["Serial_Number"]."' style='text-decoration:none; color:#2E86C1;'>".$result3[0]["lat"].",".$result3[0]["lng"]?></a>
            <?php echo "<p><b>Temperature</b></p><a href ='temperature.php?ID=".$result["ID"]."&SN=".$result["Serial_Number"]."' style='text-decoration:none; color:#2E86C1;'>". $result2[0][0]."°C"?></a>
        </div>
    </div>
</div>
<div class="loader" id="loader"></div>
</body>
</html>
