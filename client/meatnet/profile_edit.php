<?php
    session_start();
    require_once 'func_helper.inc.php';
    $con = connect();
if (isset($_POST['Username']))
    {
        $stmt = $con->prepare("UPDATE member SET Username = '$_POST[Username]' WHERE ID_Member= '$_SESSION[ID]'");
        $stmt->execute();
    }
else if (isset($_POST['Password']))
    {
        $stmt = $con->prepare("UPDATE member SET Password = '$_POST[Password]' WHERE ID_Member= '$_SESSION[ID]'");
        $stmt->execute();
    }
else if (isset($_POST['Email']))
    {
        $stmt = $con->prepare("UPDATE member SET Email = '$_POST[Email]' WHERE ID_Member= '$_SESSION[ID]'");
        $stmt->execute();
    }
    header("location:profile.php");
?>