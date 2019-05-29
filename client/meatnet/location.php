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
  -webkit-animation-duration: 0.75s;
  animation-name: animatebottom;
  animation-duration: 0.75s
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
    <!--page -->
    <?php
    require_once('header.php');
    require_once( 'func_helper.inc.php');
    $ID = $_GET["ID"];
    require_once('plot_location.php');       
             $con = connect();
             $stmt = $con->query("SELECT lat,lng,time FROM tbl_location where ID_meat = '$ID'");   
             $result = $stmt->fetchAll();
             
    ?> 
    <div class="midcolumn animate-bottom" style="display:none;" id="myDiv">
    <h1 align = "center"><b> <?php echo $_GET["SN"] ?></b></h1>
    <center>
    <div id="map_canvas" style="width:90%;height:500px;"></div>
    <div id="divShow"></div>
   </center>
        <h1>Update History</h1>
        <table>
                <tr class="w3-text-white" style="background-color:#48C9B0">
                    <th>Latitude,Longitude</th>
                    <th>Reporter</th>
                    <th>Time</th>
                   
                </tr>
               <?php 
               $num = count($result); //กลับตารางให้เวลาล่าสุดอยู่บน
               for ($i=$num-1;$i>=0;$i--)
            {                   
                echo "<tr>
                    <td>".$result[$i][0].",".$result[$i][1]."</td>
                    <td> ...</td>
                    <td>".$result[$i][2]."</td>
                </tr>";
            }
        
           
            ?>          
           
            </table>
        
    </div>
</div>
<div class="loader" id="loader"></div>
</body>
</html>
