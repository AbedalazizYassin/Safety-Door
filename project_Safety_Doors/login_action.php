<?php
session_start();

$con=mysqli_connect("localhost","root","","abedalaziz") or die("Connection failed: ". mysqli_connect_error());


$email=$_POST['txt_email'];
$password=$_POST['txt_password'];

$sql="SELECT * FROM doors WHERE  email='$email' AND password='$password'";
$result=mysqli_query($con,$sql);

if($result>0){
   $_SESSION['user']=$email; 
   header("location:index.php");
}
else{
   header("location:login.php");

}
?>