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
.midcolumn {   
    padding-left: 20%;
    padding-right: 20%;
    float: left;
    width: 100%;
}
</style>
</head>
<body>
    <!--header -->
    <?php
    require_once('header.php');
    if (!isset($_SESSION['type']))
        header("location:index.php");

    ?> 
    <!--page -->
    <div class="midcolumn">
        <form class="card" method="get" action="/meatnet/addmeat_track.php">
                <h2 class="w3-text-black">Track new Meat</h2>
                <p><label class="w3-text-black"><b>Serial Number</b></label></p>
                <input class="w3-input w3-border w3-round-large w3-large" name="Serial_Number" type="text" required pattern="[A-Za-z]{1-20}" maxlength="20">
                <p><label class="w3-text-black"><b>Species (ASFIS 3-letter code)</b></label></p>
                <input class=" w3-input w3-border w3-round-large w3-large" name="Species" type="text" required pattern="[A-Za-z]{3}" maxlength="3">  
                <p><label class="w3-text-black"><b>Weight (kg)</b></label></p>
                <input class=" w3-input w3-border w3-round-large w3-large" name="Weight" type="number" required min="1" max="1000">    
                <p><button class="w3-btn w3-blue w3-right w3-round-large w3-large">Create Recode</button></p>
        </form>
    </div>
</div>
</body>
</html>
