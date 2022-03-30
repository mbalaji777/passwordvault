<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google fonts external CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- external styles reference -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- AOS external CDN  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Register</title>
  </head>
  <body>
  <!-- navbar starts here -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
    <div class="container-fluid">
      <a class="navbar-brand" href="../">Balaji Bharatwaj</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../login/">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  <!-- navbar ends here -->
  <div class="container">
    <div class="form-custom" data-aos = "fade-up">
      <form class="row row-cols-lg-auto g-3 align-items-center" action="../backend/register/" method = "POST">
        <div class="col-12" data-aos = "fade-up" data-aos-delay = "100">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Name</label>
          <div class="input-group">
            <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/identification-documents.png"/></div>
            <input type="text" class="form-control" id="inlineFormInputGroupName" name="inlineFormInputGroupName" placeholder="Name" required>
          </div>
        </div>
        <div class="col-12" data-aos = "fade-up" data-aos-delay = "200">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
          <div class="input-group">
            <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/username.png"/></div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="inlineFormInputGroupUsername" placeholder="Username" required>
          </div>
        </div>
        <div class="col-12" data-aos = "fade-up" data-aos-delay = "300">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Email Address</label>
          <div class="input-group">
            <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/filled-sent.png"/></div>
            <input type="Email" class="form-control" id="inlineFormInputGroupEmail" name="inlineFormInputGroupEmail" placeholder="Email Address" required>
          </div>
        </div>
        <div class="col-12" data-aos = "fade-up" data-aos-delay = "400">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Phone Number</label>
          <div class="input-group">
            <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/phone.png"/></div>
            <input type="text" class="form-control" id="inlineFormInputGroupPhoneNumber" name="inlineFormInputGroupPhoneNumber" placeholder="Phone Number (+1)" required>
          </div>
        </div>        
        <div class="col-12" data-aos = "fade-up" data-aos-delay = "500">
          <label class="visually-hidden" for="inlineFormInputGroupUsername">Password</label>
          <div class="input-group">
            <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/password-window.png"/></div>
            <input type="password" class="form-control" id="inlineFormInputGroupPassword" name="inlineFormInputGroupPassword" placeholder="Password" required>
          </div>
        </div>
        <div class="col-12" data-aos = "fade-up" data-aos-delay = "600">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>


  <!-- footer starts here -->
  <div class="footer-custom">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <div class="vertical-align-custom">
            <p class="footer-text">Designed and Developed with ❤️ by Balaji Bharatwaj</p>
          </div>
      </div>
      </div>
    </div>
  </div>    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- AOS JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      AOS.init();
    </script>
  </body>
</html>