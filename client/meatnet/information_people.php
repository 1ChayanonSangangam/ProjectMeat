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
</head>
<body>
    <!--header -->
    <?php
    require_once('header.php');
    require_once('func_helper.inc.php');
        $con = connect();
        $stmt = $con->query("SELECT Username,Password,Name,Surname,public_keys FROM member WHERE ID_Member= '$_GET[ID]'");   
        $result = $stmt->fetch();
        //print_r($result);
       
    ?> 
    <!--page -->
    <div class="midcolumn">
        <h1 align = "center"><b><?php echo $result["Name"]." ".$result["Surname"] ?></b></h1>
        <div class="card w3-responsive leftcolumn">
            <p><b>Public Key</b></p> <?php echo $result["public_keys"]?>
           
        </div>        
    </div>
</div>
</body>
</html>
