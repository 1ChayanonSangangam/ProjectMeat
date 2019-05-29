<?php
    function connect()
    {   
        $user = "root";
        $pass = "scott5566";
        try {
        $con = new PDO("mysql:host=localhost;dbname=test",$user,$pass);
        $con -> exec("set names utf8");
        
        } catch (PDOException $e) {
        echo "Error : " . $e->getMessage() . "<br/>";
        die();
        }
        return $con;
    }
    function update($ID)
    {
        $con = connect();
        $temp = $con->query("SELECT time FROM temperature  where ID_meat= '$ID' ORDER BY time DESC");   
        $result2 = $temp->fetchAll();
        $locate = $con->query("SELECT time FROM tbl_location where ID_meat = '$ID' ORDER BY time DESC");   
        $result3 = $locate->fetchAll();
        if($result3[0]["time"]>$result2[0]["time"])
        {
        $var = $result3[0]["time"];
        $stmt = $con->prepare("UPDATE meat SET Updated = '$var' where ID = '$ID' ");
        $stmt->execute();
        }
        else if($result3[0]["time"]<$result2[0]["time"])
        {
            $var = $result2[0]["time"];
            $stmt = $con->prepare("UPDATE meat SET Updated = '$var' where ID = '$ID' ");
            $stmt->execute();

        }

    }
?>