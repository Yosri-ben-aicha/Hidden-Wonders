<?php




$servername="localhost";
$username="root";
$password="";
$db="book_db";
$connection=mysqli_connect('localhost','root','','book_db');




if(isset($_POST['send'])){
  $phone=$_POST['phone'];
  $location=$_POST['location'];
  $guests=$_POST['guests'];
  $arrival=$_POST['arrival'];
  $leaving=$_POST['leaving'];
  $purpose=$_POST['purpose'];

  $request = "INSERT INTO book_form(phone, location, guests,arrivals,leaving, purpose) VALUES ('$phone', '$location', '$guests', '$arrival', '$leaving', '$purpose')";


  mysqli_query($connection, $request);

header('location:Book.php');
exit;


}else{
  echo'somthing went wrong please try again';
}

if(mysqli_query($connection, $request)) {
  $message = "Your booking was successful!";
} else {
  header('location:error.php');
 
}




?>






  




