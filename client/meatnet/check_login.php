<?php
        require_once 'func_helper.inc.php';
        $con = connect();
        $stmt = $con->query("SELECT * FROM member WHERE Username='$_POST[Username]' AND Password='$_POST[Password]'");   
        $result = $stmt->fetch();
        if($result!=NULL)
        {   
            $_SESSION['ID'] = $result["ID_Member"];
            $_SESSION['username'] = $result["Username"];
            $_SESSION['password'] = $result["Password"];
            $_SESSION['type'] = $result["Type"];                      
            header("location:index.php");
        }
        else
            return false;
    
?>