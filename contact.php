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






    
  <nav class="navbar navbar-expand-lg" style="background-color: rgba(240, 173, 86, 0.2);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: rgb(86, 7, 160);">BAMK Academy</a>
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
                <a class="nav-link" href="contact.html">Contact Us</a>
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
<br>
<br>
   <form action="">
    <label for="" id="register" >Fullname</label><br>
    <input type="text" name="name" value="name" placeholder="Enter Your Fullname here">
    <br><br>
    <label for="">Email</label><br>
    <input type="text" name="email" value="email" placeholder="Enter Your Email here">
    <br><br>
    <label for="">Password</label><br>
    <input type="text" name="password" value="password" placeholder="Enter Your password here">
    <br><br>
    <label for="">Phonenumber</label>
    <input type="text" name="phonenumber" value="phonenumbername" placeholder="Enter Your Phonenumber here">
    <br><br>
    
    <textarea name="comment" id=""placeholder="Enter Your Phonenumber here"></textarea>

      <button type="submit">Submit</button> 
   </form> 
</body>
</html>