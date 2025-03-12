<?php
$id ="";


$conn = new mysqli('localhost', 'root', "", 'bamkacademy');
$x = mysqli_select_db($conn, 'bamkacademy');

if($conn->connect_error){
    die("<h2 style='background:red; color:white; test-align:center;'>Error Kwenye Query:</h2>" .
    $conn->error);
}

$fullname ="";
$email="";
$password ="";
$phone ="";
$address ="";
$comment  ="";   

$errorMessage = "";

$successMessage = "";


if( $_SERVER['REQUEST_METHOD'] == 'GET'){
    //GET method show data from of the member
    if (!isset($_GET["id"])){
        header("location:/BAMKACADEMY PROJECT/table.php");
        exit;
    }

$id = $_GET["id"];

$query = "SELECT * FROM members WHERE id = $id";
$result = $conn->query($query);

$row = $result->fetch_assoc();

if (!$row){
    header("location:/BAMKACADEMY PROJECT/table.php");
    exit;
}

$fullname = $row['fullname'];
$email = $row['email'];
$password = $row['password'];
$phone = $row['phone'];
$address = $row['address'];
$comment = $row['comment'];

}else{
    //POST method update the data of the members
    $id = $_POST["id"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $comment = $_POST["comment"];


    do{
        if (empty($id) || empty($fullname) || empty($email)|| empty($password) ||empty($phone) || empty($address)){
            $errorMessage = "<h3 style='background:red; color:white; text-align:center;'>All the fields are required!</h3>";    
            break;
            }
            //add new new member to database
            $query = "UPDATE members " . 
            "SET fullname = '$fullname', email = '$email', password = '$password', phone = '$phone', address = '$address', comment='$comment' " .
            "WHERE id = $id";
             
            $result = $conn->query($query);

            if (!$result){
                $errorMessage = "Invalid query: " .$conn->error;
                break;
            }
           
            $successMessage = "<h3 style='background-color:green; color:white;'>Client added correctly<h3>";
       
            header("location:/BAMKACADEMY PROJECT/table.php");
      exit; 
    
        }while (true);
    }
    
    ?>
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
 <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--------bootstrap CDN-------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<!-------------navbar-------------->
    
<nav class="navbar navbar-expand-lg" style="background-color: rgba(240, 173, 86, 0.2);">
            <div class="container-fluid">
                
            <img class=" logo10 navbar-brand" src="images/Academy logo10.png" alt="logo">
   
              <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: blue;">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="about.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Study Notes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="mathematics.html">Mathematics</a></li>
                        <li><a class="dropdown-item" href="computer.html">Computer</a></li>
                        
                        <li><a class="dropdown-item" href="physics.html">Physics</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Past papers
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="math-papers.html">Mathematics </a></li>
                        <li><a class="dropdown-item" href="comp-papers.html">Computer</a></li>
                        
                        <li><a class="dropdown-item" href="phy-papers.html">Physics</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true"></a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    


<!-------------form-------------------->


<div class="container my-5">
    <div class="tabl">
           <h1>EDIT MAMBERS</h1>  
    </div>

    <?php
if(!empty($errorMessage)) {
    echo"
    <div class='alert alert-warning alert-dismissible fade  show' role='alert'>
    <strong>$errorMessage</strong>
    <button type='button' class='btn-close' data-s-dismiss='alert' aria-label='Close'></button>
    </div>
    ";
}
?>
    <form action="" method="post" id="RegForm">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row" mb-3>
            <div class="col-sm6">
                <label for="" style="font-size: 35px; color: green;" >Fullname:</label><br>
       <input type="text" class="input" name="fullname"  value="<?php echo $fullname; ?>">
       </div>
       </div>

       <div class="row" mb-3>
            <div class="col-sm6">
                <label for="" style="font-size: 35px; color: green;">Email:</label><br>
       <input type="text" name="email" class="input" value="<?php echo $email; ?>">
       </div>
       </div>

       <div class="row" mb-3>
            <div class="col-sm6">
                <label for="" style="font-size: 35px; color: green;">Password:</label><br>
       <input type="text" name="password" class="input" value="<?php echo $password; ?>">
       </div>
       </div>

       <div class="row" mb-3>
            <div class="col-sm6">
                <label for="" style="font-size: 35px; color: green;">Phonenumber:</label><br>
       <input type="text" name="phone" class="input" value="<?php echo $phone; ?>">
       </div>
       </div>

       <div class="row" mb-3>
            <div class="col-sm6">
                <label for="" style="font-size: 35px; color: green;">Address:</label><br>
       <input type="text" name="address" class="input" value="<?php echo $address; ?>">
       </div>
       </div>
       <label for="" style="font-size: 35px; color: green;">Comment</label><br>
<textarea cols="40%" rows="5%" name="comment"  value="<?php echo $comment; ?>"></textarea>

  <?php
                 if (!empty($successMessage)){
                    echo"
                    <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                      <div class='alert alert-success alert-dismissible fade show' role='alert'> 
                                <strong>$successMessage</strong>
                               <button type='button' class='btn-close' data-s-dismiss='alert' aria-label='Close'></button>
                      </div>
                     </div>
                    </div>
                    ";
                 }
              ?>

       
  <div class='row mb-4'>
               <div class='offset-sm-2 col-sm-2 d-grid'>
                <button type="submit" class='btn btn-primary'>Submit</button>
               </div>
               <div class="col-sm-3 d-grid">
                    <a  class="btn btn-outline-primary" href="/BAMKACADEMY PROJECT/table.php" role"button">Cancel</a>
               </div>
            </div>

            </form> 
</tbody>
</table>
</div> 


<footer>
    <p>&copy; 2025 BAMK Academy All Rights Reserved.
        <a href="mailto:kusigabryan7@gmail.com">kusigabryan7@gmail.com</a>
    </p>
</footer>
</div>




<script src="css/bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>