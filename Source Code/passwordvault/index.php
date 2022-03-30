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

    <title>Password Vault</title>
  </head>
  <body>
    <!-- navbar starts here -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Balaji Bharatwaj</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login/">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="register/">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
    <!-- navbar ends here -->
    <!-- hero division starts here -->
    <div class="hero-division common-div-size">
      <div class="container">
        <div class="row">
          <div class="password-vault-header" data-aos="fade-up">
            <p>Password Vault</p>
          </div>
        </div>
        <div class="row">
          <div class="password-vault-slogan" data-aos="fade-up">
            <p>The most secure password storage in the world <img src="images/151.png"></p>
          </div>
        </div>        
      </div>
    </div>
    <!-- hero division ends here -->
    <!-- your password is secure division starts here -->
    <div class="common-div-size  secure-division">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div>
            <img class="image-lock"src="images/password-reveal.gif" data-aos="fade-right">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="secondary-slogan">
            <p class="secondary-slogan-text"  data-aos="fade-left">Security Redefined.</p>
            <p class="secondary-slogan-subtext"  data-aos="fade-left">Your passwords are stored in a <span style="background-color: #00ebc0;
"><b>Safe and Secure</b></span> vault. Even we don't have access to the passwords. The only person who can access the passwords is... YOU</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- your password is secure division ends here -->
    <!-- master password division starts here -->
    <div class="master-password common-div-size">
      <div class="container">
        <div class="row">
          <div class="master-password-header" data-aos = "fade-up">
            <p>One Password, One Key 🔑</p>
          </div>
        </div>
        <div class="row">
          <div class="master-password-content" data-aos = "fade-up" data-aos-delay="100">
            <p>Gone are the days of remembering multiple passwords in your mind. Once all of your passwords are in the vault, the only password that you need to keep in mind is the <span style="background-color: #00ebc0;"><b>Master Password</b></span>. Master Password is like a key to a unique door where you can only reveal the password with Master Password as a key.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- master password division ends here -->
    <!-- secure storage division starts here -->
    <div class="secure-storage common-div-size">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="secure-storage-content vertical-align-custom">
              <p class="secure-storage-header" data-aos="fade-right">Disguise at it's best 🎭</p>
              <p class="secure-storage-subcontent" data-aos="fade-right">The dangerous thing in the world is storing your precious password as a plain text. That's why we hash every password stored in the vault with <span style="background-color: #00ebc0;"><b>Argon2I</b></span>  and every hashed password is <span style="background-color: #00ebc0;"><b>Salted</b></span> for utmost entropy. Thanks! Your secret's safe with Us 😉</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <img class="image-lock"src="images/gon.png" data-aos="fade-left">
          </div>
        </div>
      </div>
    </div>
    <!-- secure storage division ends here -->
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
    <!-- footer ends here -->
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