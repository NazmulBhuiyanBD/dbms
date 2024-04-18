<?php
$conn=mysqli_connect("localhost","root","","dbms");
if($conn)
{
    echo "Connected";
}
else
echo "failed to connect";

$Name=$_POST['Name'];
$mobile=$_POST['mobile'];
$Address=$_POST['Address'];
$Package=$_POST['Package'];


$data="INSERT INTO client Values('','$Name','$mobile','$Address','$Package')";
$check=mysqli_query($conn,$data);
if($check)
{
    echo "data sended";
}
else
echo "data not send";
?>