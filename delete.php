<?php
$lastname = "";
$firstname = "";
$email ="";
$sql = "";
if (isset($_POST['searchlastname']))
{
    $lastname =  $_POST['searchlastname'];
    $sql = "Delete from signup where lastname='" .$lastname . "';";
}
else if (isset($_POST['searchfirstname']))
{
    $firstname = $_POST['searchfirstname'];
    $sql = "Delete from signup where firstname='" .$firstname . "';";
}
else if (isset($_POST['searchemail']))
{
    $email = $_POST['searchemail'];
    $sql = "Delete from signup where email='" .$email . "';";
}
//echo $sql;
$server =  'localhost' ;
$username = 'alex';
$password = '11275alx';
$dbname = 'alex';

$connection = mysqli_connect($server,$username,$password,$dbname);


if (!$connection){
    echo "problem connecting";
} 
else {
    //echo "connected successfully, ";
}

$query = mysqli_query($connection, $sql);
if ($query){
    echo"Record Deleted:" .mysqli_affected_rows($connection);
    mysqli_close($connection);
} else{

    echo"mysql_query error *could not delete from signup table";
    mysqli_close($connection);
}




?>