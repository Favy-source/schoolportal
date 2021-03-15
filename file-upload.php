<?php include("server.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/c0fc838bea.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>ICE CUBICLE</title>
  <style>
    .container {
      max-width: 450px;
    }
  </style>
</head>

<body>
  <!---Nav bar-->
  <nav class="navbar navbar-expand-md navbar-light">
<button class="navbar-toggler ml-auto mb-2 bg-light" type="button" 
data-toggle="collapse" data-target="#navbar">
<span class="navbar-toggler-icon"></span>

</button>
<div class="collapse navbar-collapse" id="navbar">
    <div class="container-fluid">
        <div class="row">
            <!---Sidebar-->
            <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                <a href="#" class="navbar-brand text-white d-block
                mx-auto text-center py-3 mb-4"><i class="fas fa-cannabis text-light fa-3x"></i></a>
                <div class="bottom-border pb-3">
                    <!-- <img src="images\john.jpg" width="50" class="rounded-circle mr-3"> -->
                    <!-- <a href="#" class="text-white ">John Doe</a> -->
                </div>
                <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="./admin-dashboard.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-home text-light fa-lg mr-3"></i>
                Dashboard</a></li>
                <!-- <li class="nav-item"><a href="./profile.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>
                Profile</a></li> -->
                <li class="nav-item"><a href="./register-interns.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                    Register-Interns</a></li>
                    <!-- <li class="nav-item"><a href="./profile.html" class="nav-link text-white p-3 mb-2
                        sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>
                    Profile</a></li> -->
                    <li class="nav-item"><a href="./notices.php" class="nav-link text-white p-3 mb-2
                        sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                Notices</a></li>
                    <!-- <li class="nav-item"><a href="./duration.html" class="nav-link text-white p-3 mb-2 
                      sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>  
                Duration </a></li>   -->
                <li class="nav-item"><a href="./updateDelete.php" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i> 
                update/delete</a></li>
                <li class="nav-item"><a href="./file-upload.php" class="nav-link text-white p-3 mb-2
                     current"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i> 
                CA/VS</a></li>
                <!-- <li class="nav-item"><a href="./timetable.html" class="nav-link text-white p-3 mb-2
                   sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i> 
                Time Tables</a></li> -->
                <!-- <li class="nav-item"><a href="./settings.html" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i> 
                Settings</a></li> -->
                <li class="nav-item"><a href="./timetable.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>  
                timetable</a></li>
                <li class="nav-item"><a href="./adminlogin.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-sign-out-alt text-danger fa-lg"></i>  
                Log Out</a></li>
                </ul>

            </div>

            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto top-bar fixed-top py-2 top-nav">
    <div class="row align-item-center">
   <div class="col-md-4">
 <h4 class="text-light text-uppercase mb-0">ICE CUBICLE</h4>
   </div>
   <div class="col-md-5">
<form>
    <div class="input-group">
        <input type="text" class="form-control search-input" placeholder="search">
        <button type="button" class="btn btn-white search-button">
            <i class="fas fa-search text-dark"></i>
        </button>
    </div>
</form>
   </div>
  
        </div>
</div>
            <!---End of Top Nav-->
        </div>
    </div>
</div>
      </nav>
      <!----End of Navbar-->
     
      <!---Cards-->


      <!---End of Cards-->
      <!--table-->



  <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
      <h3 class="text-center mb-5">Upload File in PHP 7</h3>

      <div class="user-image mb-3 text-center">
        <div style="width: 100px; height: 100px; overflow: hidden; background: #cccccc; margin: 0 auto">
          <img src="..." class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
        </div>
      </div>

      <div class="custom-file">
        <input type="file" name="fileUpload" class="custom-file-input" id="chooseFile">
        <label class="custom-file-label" for="chooseFile">Select file</label>
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        Upload File
      </button>
    </form>

    <!-- Display response messages -->
    <?php if(!empty($resMessage)) {?>
    <div class="alert <?php echo $resMessage['status']?>">
      <?php echo $resMessage['message']?>
    </div>
    <?php }?>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('#imgPlaceholder').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#chooseFile").change(function () {
      readURL(this);
    });
  </script>
  <div class="container-fluid">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto mt-3 bd-bottom">
            <div class="row border-top pt-3">
                <div class="col-lg-6 text-center">
                    <ul class="list-inline">
                <li class="list-inline-item mr-2">
                    <a href="#" class="text-success">
                        Company Name
                    </a>
                </li>
                <li class="list-inline-item mr-2">
                        <a href="#" class="text-success">
                            About
                        </a>
                    </li>
                    <li class="list-inline-item mr-2">
                            <a href="#" class="text-success">
                                Support
                            </a>
                        </li>
                        <li class="list-inline-item mr-2">
                                <a href="#" class="text-success">
                                    Blog
                                </a>
                            </li>
                </ul>
             </div>
                <div class="col-lg-6 text-center text-success">
                    <p>&copy; 2019 Copyright</p>
                    
                    </div>
            </div>
        </div>
    </div>
</div>
      <!---End of Footer-->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
