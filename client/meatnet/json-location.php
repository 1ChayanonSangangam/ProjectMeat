<?php

try {
        $user = "root";
        $pass = "scott5566";
        $con = new PDO("mysql:host=localhost;dbname=test",$user,$pass);
    $con -> exec("set names utf8");
    } catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
    }
    
    //$stmt = $con->query("SELECT * FROM tbl_location");   
    $stmt = $con->query("SELECT * FROM tbl_location where ID_meat = '$_GET[ID]'");
    $result = $stmt->fetchAll();
    $arr2 = array();
    for($i = 0 ; $i<count($result);$i++){
        $lat = $result[$i]["lat"];
        $lng = $result[$i]["lng"];
        $location_name = $result[$i]["location_name"];
        $id = $result[$i]["id"];
        $arr = array();
        
        $arr["id"] = $id;
        $arr["lat"] = $lat;
        $arr["lng"] = $lng;
        $arr["location_name"] = $location_name;
        
        array_push($arr2,$arr);
        
        }
        
        echo json_encode($arr2);
?>