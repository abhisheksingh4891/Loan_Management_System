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

    $types=$_REQUEST['types'];
    $amount=$_REQUEST['amount'];
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $age=$_REQUEST['age'];
    $pnumber=$_REQUEST['pnumber'];
    $address1=$_REQUEST['address1'];
    $aadhar=$_REQUEST['aadhar'];
    $code=$_REQUEST['code'];
    $purpose=$_REQUEST['purpose'];
    
    
$sql= "insert into register values('$types','$amount','$fname','$lname','$age','$pnumber','$address1','$aadhar','$code','$purpose')";

// $sql= "CREATE TABLE register(
//     types varchar(50),
//     amount int(30),
//     fname varchar(50),
//     lname varchar(50),
//     age int(10),
//     pnumber int(12),
//     address1 varchar(50),
//     aadhar int(15),
//     code int(6),
//     purpose varchar(50)
// )";
if($conn->query($sql)===TRUE){
    echo "FORM SuBMITTED SUCCESSFULLY";
}else{
    echo "Error inserting data :".$conn->error;
}


$conn->close();
?>