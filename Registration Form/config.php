<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'mydb';

 //$conn = new mysqli($servername , $username , $password , $dbname);
 $conn = mysqli_connect($servername , $username , $password , $dbname) or die('Connection Failed'.mysqli_error($conn) );
 // if($conn -> connect_error){
 //  die('Connection Failed'.$conn -> connect_error);
 // }
?>