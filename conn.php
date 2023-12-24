<?php
// object oriented
// procedural

$conn =new mysqli("localhost","root","","my_db");


if($conn->connect_error){
    echo $conn->error;
}else{
    echo "succes";
}
?>