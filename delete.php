<?php

if (isset($_GET['id'])){
       $id = $_GET["id"];


 $conn = new mysqli('localhost', 'root', "", 'bamkacademy');
 $x = mysqli_select_db($conn, 'bamkacademy');
 
 if($conn->connect_error){
     die("<h2 style='background:red; color:white; test-align:center;'>Error Kwenye Query:</h2>" .
     $conn->error);
 }


 $query = "DELETE FROM members WHERE id=$id";
 $result = $conn->query($query);

}
 header("location: /BAMKACADEMY PROJECT/table.php")

?>