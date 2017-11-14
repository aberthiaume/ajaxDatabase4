<?php

$lastname = "";
$firstname = "";

if(isset($_post[searchlastname]))
{
if(isset($_post[searchfirstname]))
    
}
$lastname = $_POST['searchlastname'];
$sql = "select * from user info where lastname='".$lastname .$firstname . "';";
}
else if (isset($_post['searchfirstname']))
{
    $firsttname = $_POST['searchfirstname'];
    $sql = "select * from user info where firstname='".$firstname .$lastname . "';";
}

$firstname = $_POST['searchlastname'];
$server =  'localhost' ;
$username = 'musikalex@hotmail.com';
$password = '11275alx';
$dbname = 'alex';

$connection = mysqli_connect($server,$username,$password,$dbname);+
if ($query){
    echo "<table></thead>
    <tr>
    <th>first name</th>
    <th>last name</th>
    <th>email</th>
    <th>phone</th>
    <th>gender</th>
    <tr>
    </thead></tbody>";

while($row=mysqli_fetch_row($query)){
    print("<tr>
        <td>%s</td>
        td>%s</td>
        td>%s</td>
        td>%s</td>
        td>%s</td>
    </tr>"
    ,$row[1],$row[2],$row[3],$row[6],$row[7];
}
  echo"<tbody><table>  ";
  mysqli_free_result($query);
  mysqli_close($connection);
} 
else {
    echo "connected successfully, ";
    $sql= "select * from userinfo where lastname='" .lastname . "';";
}
$query = mysqli_query($connection, $sql);
if ($query){
    echo "search query okay!";
} else {
    echo "mysql_query error - cound't insert to the signup table";
}
?>