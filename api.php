<?php

include 'conn.php';

// Content-type:application/json :  nooca xogtaq meshan lagu qori dono waa app kana sii ah json
header("Content-type:application/json");

$action= $_POST['action'];
function Readall($conn){
    $data=array();
    $message=array();

    $query="SELECT * FROM student";

    // ecute query
    $result=$conn->query($query);

    if($result){
        while($row=$result->fetch_assoc()){
            $data []=$row;
        }
        $message =array("status"=>true, "data"=> $data);
    }else{
        $message =array("status"=>false, "data"=> $conn->error);
    }
    echo json_encode($message);
}
if(isset($action)){
    $action($conn);
}else{
    echo "action is reqried";
}
?>