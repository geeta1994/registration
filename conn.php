<?php
$username ="localhost";
$root="";
$password="";               
$dbname="form";



$db =mysqli_connect('localhost','root','','form');

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$emailaddress=$POST['emailaddress'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $password=$password['password'];


    $query ="INSERT INTO west (username,emailaddress,fname,lname,password)
    VALUES('$username','$emailaddress','$fname','$lname','$password')
     mysqli_query($db,$query);

  	if($db->connect_error){
  		die("connection failed:".$db->connect_error);
  	}
  	else{
  		echo "connected successfully";
  	}
  	
  	header('Location:index.php');
  }



