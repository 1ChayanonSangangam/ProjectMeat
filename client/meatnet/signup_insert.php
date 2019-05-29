<?php 
    require_once('func_helper.inc.php');
    $con = connect();
    $stmt = $con->prepare("INSERT INTO member (Username,Password,Name,Email) VALUES ('$_POST[Username]','$_POST[Password]','$_POST[Name]','$_POST[Email]')");
    $stmt->execute();
    header("location:login.php");
?>