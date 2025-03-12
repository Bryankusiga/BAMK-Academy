<?php
$conn = new mysqli('localhost', 'root', "", 'bamkacademy');
$x = mysqli_select_db ($conn, 'bamkacademy');

if($conn->connect_error){
    die("<h2 style='background:red; color:white; text-align:center;'>Connection Failed!</h2>" .
    $conn->error);
}
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$address = $_POST['address'];
$comment = $_POST['comment'];

$query = "INSERT INTO members (id, fullname, email, password, phone, address, comment)
VALUE('', '$fullname', '$email', '$password', '$phone', '$address', '$comment')";

if($conn->query($query) ===TRUE){header('Location: /BAMKACADEMY PROJECT?table.php'); 
    exit;



  //echo "<h1 style='color:white; background-color:green; text-align:center;'>Your Registed successfully</h1>";
} else{  
    echo "Error: " . $conn->error;
}
       
  

$conn->close();

?>