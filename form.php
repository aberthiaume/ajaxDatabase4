<?php 
    $formdata = explode('&', $_POST['data']);
     parse_str( $_POST['data'], $values);
   
    

     // connecting to database

     $server =  'localhost' ;
     $username = 'musikalex@hotmail.com';
     $password = '11275alx';
     $dbname = 'alex';

     $connection = mysqli_connect($server,$username,$password,$dbname);

     if (!$connection){
         echo "problem connecting";
     } 
     else {
         echo "connected successfully, ";
     }

     $encryptedPasswordencryptedPassword = password_hash($values['password'],PASSWORD_DEFAULT);
    $sqli = "Insert into userinfo (firstname,lastname,email,password,gender)
            VALUES('" 
            .$values['firstname'] . "', '" 
            .$values['lastname']  . "', '" 
            .$values['email']     . "', '" 
            .$values['password']  . "', '" 
            .$values['gender']    . "') ;";

    $query = mysqli_query($connection, $sql);
    if ($query){
        echo "1 row inserted";
    } else {
        echo "mysqli_query error - cound't insert to the signup table";
    }
?>