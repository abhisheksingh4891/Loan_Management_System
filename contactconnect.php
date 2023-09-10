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

    $names=$_REQUEST['names'];
    $emails=$_REQUEST['emails'];
    $query=$_REQUEST['query'];
    
    
$sql= "insert into query values('$names','$emails','$query')";

// $sql= "CREATE TABLE query(
//     names varchar(30),
//     emails varchar(30),
//     query varchar(50)
// )";
if($conn->query($sql)===TRUE){
    echo "QUERY SUBMITTED SUCCESSFULLY";
}else{
    echo "Error inserting data :".$conn->error;
}


$conn->close();
?>