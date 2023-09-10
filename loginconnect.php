<?php

$servername="localhost";
$username="root";
$password="";
$db="loan";

// create connection

$conn = new mysqli($servername,$username,$password,$db);

// check connection
if($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
    
}

    $numbers=$_REQUEST['numbers'];
    $pass=$_REQUEST['pass'];
    
    
$sql= "insert into login values('$numbers','$pass')";

// $sql= "CREATE TABLE login(
//     numbers int(30),
//     pass varchar(50)
// )";
if($conn->query($sql)===TRUE){
    echo "LOGIN SUCCESSFULL";
}else{
    echo "Error : ".$conn->error;
}


$conn->close();
?>