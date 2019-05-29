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
     background-color: #f1f1f1;
     padding: 10px;
     margin-top: 20px;
     margin-left:20px;
     margin-bottom:30px;
     border-radius: 4px;
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<?php
 require_once('header.php');

?>

    <div class="w3-center">
        <img src="pic/Cowicon.png"  style="width:10%"><br>
        <h2 class="w3-opacity">
            <b>
                Welcome To<br>
                MeatNet<br>
                Powered by Sawtooth Supply Chain
            </b>
        </h2> 
    </div>
</div>

</body>
</html>
