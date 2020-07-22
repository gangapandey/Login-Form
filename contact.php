<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'login'))
{
    echo 'database not selected';
}

$Username = $_POST['username'];
$Password = $_POST['password'];

$sql = "insert into record (Username,Password) value('$Username','$Password')";

if(!mysqli_query($con,$sql))
{
    echo 'Error. Please Try Again.';
}

else
{
    echo'Your data has been inserted.';
}

?>