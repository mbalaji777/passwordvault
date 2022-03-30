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

    <title>Dashboard</title>
    <?php 
      include_once '../backend/connection/index.php';
      error_reporting(E_ALL ^ E_NOTICE);
      session_start();

      $arr = array( "a"=>"background: #667db6;  /* fallback for old browsers */background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */", 
        "b"=>"background: #DA4453;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #89216B, #DA4453);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #89216B, #DA4453); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */", 
        "c"=>"background: #f12711;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */", 
        "d"=>"background: #373B44;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #4286f4, #373B44); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */" , 
        "e"=>"background: #8E2DE2;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */" , 
        "f"=>"background: #0f0c29;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */" , 
        "g"=>"background: #00bf8f;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #001510, #00bf8f);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #001510, #00bf8f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */" , 
        "h"=>"background: #0F2027;  /* fallback for old browsers */
              background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
              background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */" );

     ?>
  </head>
  <body>
    <!-- navigation bar starts here -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Hello <?php echo $_SESSION["username"]; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a href="../backend/logout/"><button class="btn btn-small btn-danger" type="submit" name="logout_submit">Logout</button></a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </div>
    <!-- navigation bar ends here -->
    <div class="container">
      <div class="add-button">
        <button class="btn btn-md btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><span style="font-weight: 700;">Add</span> <img src="https://img.icons8.com/fluency/25/000000/plus.png"/></button>
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">              
              <div class="form-custom" data-aos = "fade-up">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="../backend/addPassword/" method = "POST">
                  <div class="col-12" data-aos = "fade-up" data-aos-delay = "100">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Website Name</label>
                    <div class="input-group">
                      <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/identification-documents.png"/></div>
                      <input type="text" class="form-control" id="inlineFormInputGroupName" name="inlineFormInputGroupWebsiteName" placeholder="Website Name" required>
                    </div>
                  </div>
                  <div class="col-12" data-aos = "fade-up" data-aos-delay = "200">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/username.png"/></div>
                      <input type="text" class="form-control" id="inlineFormInputGroupUsername" name="inlineFormInputGroupUsername" placeholder="Username" required>
                    </div>
                  </div>       
                  <div class="col-12" data-aos = "fade-up" data-aos-delay = "500">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Password</label>
                    <div class="input-group">
                      <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/password-window.png"/></div>
                      <input type="password" class="form-control" id="inlineFormInputGroupPassword" name="inlineFormInputGroupPassword" placeholder="Password" required>
                    </div>
                  </div>
                  <div class="col-12" data-aos = "fade-up" data-aos-delay = "300">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Email Address</label>
                    <div class="input-group">
                      <div class="input-group-text"><img src="https://img.icons8.com/fluency/48/000000/filled-sent.png"/></div>
                      <input type="Email" class="form-control" id="inlineFormInputGroupEmail" name="inlineFormInputGroupEmail" placeholder="Email Address" required>
                    </div>
                  </div>
                  <div class="col-12" data-aos = "fade-up" data-aos-delay = "600">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      
    <?php 
      //assigning session variable to local PHP variable
      $username = $_SESSION["username"];
      $id = $_SESSION["id"];

      //sql query string
      $get_details = "SELECT * FROM passwords where id = ?";

      //preparing the query
      $get_details_prepared = $connection->prepare($get_details);

      //BIND param
      $get_details_prepared->bind_param("d", $id);

      //execute the query
      $get_details_prepared->execute();

      //store the result
      $result_get_details = $get_details_prepared->get_result();

      //delay variable
      $delay = 100;

      if ($result_get_details->num_rows > 0) {
        while ($row = $result_get_details->fetch_assoc()) {
          echo '
                <div class="row cards" style = "'.$arr[array_rand($arr)].'" data-aos = "fade-up" data-aos-delay ="'.intval($delay).'">
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">          
                    <div class="cards-header">
                      <p>'.$row["websitename"].'</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">         
                    <div class="cards-credentials">
                      <p>'.$row["email"].'</p>
                    </div> 
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">          
                    <div class="cards-buttons">
                      <a href="../backend/showpassword/showConfirmation.php?delID='.$row["passwords_id"].'"><button class="btn btn-md btn-info"><b>Show Password</b></button></a>                       
                      <a href="../backend/delete/deleteConfirmation.php?delID='.$row["passwords_id"].'"><button class="btn btn-md btn-danger"><b>Delete</b></button></a>                      
                    </div>
                  </div>
                </div>';

          $delay = $delay + 100;
        }
      }
     ?>
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