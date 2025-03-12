<?php
$conn = new mysqli('localhost', 'root', "", 'bamkacademy');
$x = mysqli_select_db($conn, 'bamkacademy');

if($conn->connect_error){
    die("<h2 style='background:red; color:white; test-align:center;'>Error Kwenye Query:</h2>" .
    $conn->error);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAMK Academy</title>
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">





  </head>
  <body>


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
    

<!-----------------table--------------------->



<div class="container my-5">
    <div class="tabl">
           <h1>MAMBERS OF BAMK ACADEMY</h1>  
    </div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>FULLNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>PHONENUMBER</th>
            <th>ADDRESS</th>
            <th>COMMENT</th>
            <th>REGISTER AT</th>
            <th>ACTION</th>
            <hr>
        </tr>
    </thead>
<tbody>

    <?php


$query = "SELECT * FROM members";
$result = ($conn->query($query));
    if(!$result){
        die("<h2 style='background:red; color:white; test-align:center;'>Error Kwenye Query:</h2>" .
        $conn->error);
    }
    while($row = $result->fetch_assoc()){
        echo"
           <tr>
               <td>$row[id]</td>
               <td>$row[fullname]</td>
              <td>$row[email]</td>
               <td>$row[password]</td>
               <td>$row[phone]</td>
               <td>$row[address]</td>
              <td>$row[comment]</td>
               <td>$row[registered_at]</td>
        <td>
            <a class='btn btn-primary btn-sm' href='/BAMKACADEMY PROJECT/edit.php?id=$row[id]'>Edit</a> 
           <a class='btn btn-danger btn-sm' href='/BAMKACADEMY PROJECT/delete.php?id=$row[id]'>Delete</a>
        </td>
    </tr>
        ";
    }
?>
</tbody>
</table>
</div> 
<footer>

        <p>&copy; 2025 BAMK Academy All Rights Reserved.
        <a href="mailto:kusigabryan7@gmail.com">kusigabryan7@gmail.com</a>
    </p>
         
</footer>

            <script src="css/bootstrap/js/bootstrap.bundle.min.js" ></script>
        
        </body>
        </html>