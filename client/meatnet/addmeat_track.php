
<?php
    require_once('func_helper.inc.php');
    $con = connect();
    $stmt = $con->prepare("INSERT INTO meat (Serial_Number,Added,Species,Weight) VALUES ('$_GET[Serial_Number]',CURRENT_TIME(),'$_GET[Species]','$_GET[Weight]')");
    $stmt->execute();
    $stmt = $con->query("SELECT ID FROM meat  ORDER BY Added DESC");   
             $result = $stmt->fetchAll();
             $var = $result[0][0];
    $stmt = $con->prepare("INSERT INTO temperature (ID_meat,reporter,temp,time) VALUES ($var,'...',0,CURRENT_TIME())");
    $stmt->execute();
    $stmt = $con->prepare("INSERT INTO tbl_location (ID_Meat,lat,lng,location_name) VALUES ($var,14.0214115,99.9913526,CURRENT_TIME())");
    $stmt->execute();
header("location:meat.php");
?>
