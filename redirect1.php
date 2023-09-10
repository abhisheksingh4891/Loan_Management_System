<?php
if(isset($_REQUEST['SUBMIT'])){
// Fetching variables of the form which travels in URL
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
if($types !=''&& $amount !=''&& $fname !=''&& $lname !=''&& $age!=''&& $pnumber!=''&& $address1!=''&& $aadhar!=''&& $code!=''&& $purpose!='')
{
//  To redirect form on a particular page
header("Location:home.html");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>