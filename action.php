<?php


try{
    $con=new PDO("mysql:host=localhost;dbname=wdd","root","");
}catch(PDOExction $e){
    echo $e->getMessage();
}

$username=$_POST['username'];
$email=$_POST['email'];

$user_date=$_POST['user_date'];
$user_month=$_POST['user_month'];
$user_year=$_POST['user_year'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$Courses=$_POST['Courses'];

$sql = " insert into wdd_db (username,email,date,month,year,phone,password,Course) values ('$username','$email','$user_date','$user_month','$user_year','$phone','$password','$Courses') ";
$stmt=$con->prepare($sql);
$stmt->execute();
?>