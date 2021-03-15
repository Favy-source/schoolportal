<?php include('server.php')?>
<!doctype html>
<html lang="en">
  <head>
    <title>Fetch image from database in PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/c0fc838bea.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
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
                   <li class="nav-item"><a href="index-intern.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-home text-light fa-lg mr-3"></i>
                Dashboard</a></li>
                <li class="nav-item"><a href="./intern-profile.php" class="nav-link text-white p-3 mb-2
                    current"><i class="fas fa-user text-light fa-lg mr-3"></i>
                Profile</a></li>
                <li class="nav-item"><a href="./notices.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                Notices</a></li>
                <!-- <li class="nav-item"><a href="./duration.html" class="nav-link text-white p-3 mb-2
                      sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>  
                Duration</a></li> -->
                <!-- <li class="nav-item"><a href="grade.html" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i> 
                Grade</a></li> -->
                <li class="nav-item"><a href="download-assignments.php" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i> 
                SA/R</a></li>
                <li class="nav-item"><a href="intern-timetableview.php" class="nav-link text-white p-3 mb-2
                   sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i> 
                Time Tables</a></li>
               
                <li class="nav-item"><a href="intern-coursesdisplay.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>  
                Course materials</a></li>
                </ul>

            </div>
            <!---end of side bar-->
            <!---Top Nav-->
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
   <div class="col-md-3">
       <ul class="navbar-nav">
           <!-- <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"> -->
            <!-- <i class="fas fa-comments text-light fa-lg"></i></a> -->
            <!-- <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"> -->
             <!-- <i class="fas fa-bell text-light fa-lg"></i></a> -->
             <li class="nav-item ml-md-auto"><a href="#"class="nav-link"
            data-toggle="modal" data-target="#sign-out">
             <i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
       </ul>
   </div>
        </div>
</div>
            <!---End of Top Nav-->
        </div>
    </div>
</div>
      </nav>
      <!----End of Navbar-->
      <!---Modal-->
      <div class="modal" id="sign-out">
          <div class="modal-dialog">
             <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Signout</h4>
                <button type="button" class="close" data-dismiss="modal"
                 >&times;</button>
                </div>  
                <div class="modal-body">
                    press the button
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">
                 <a href="./index.php" > Leave    </a></button>
             <button type="button" class="btn btn-danger" data-dismiss="modal">
                    Cancel    </button>
                </div>
              </div>
          </div>
      </div>
      <!---End of Modal-->
      <!---Cards-->
    <section>
 <div class="container-fluid">
    <div class="row">
         <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
             <div class="row pt-md-5 mt-md-3 mb-5">
                 <div class="col-xl-3 col-sm-6 p-2">
                     <div class="card card-common">
                         <div class="card-body">
                             <div class="d-flex justify-content-between">
                                <i class="fas fa-users fa-3x text-warning"></i>
                                 <div class="text-right text-dark">
                                     <h5></h5>
                                     <h3>Esianaka chimgozilim</h3>
                                 </div>
                             </div>
                            </div>
                  </div>         
             </div>
         </div>
     </div>
 </div>
     
    </section>

    <section>
 <div class="container-fluid">
    <div class="row">
         <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
             <div class="row pt-md-5 mt-md-3 mb-5">
                 <div class="col-xl-3 col-sm-6 p-2">
                     <div class="card card-common">
                         <div class="card-body">
                             <div class="d-flex justify-content-between">
                                 <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                 <div class="text-right text-dark">
                                     <h5>CURRENT ACTIVITY</h5>
                                     <h3>HTML</h3>
                                 </div>
                             </div>
                         </div>
            <div class="card-footer text-dark">
                <i class="fas fa-spinner fa-pulse text-info mr-3"></i>
                <span>Updating</span>
            </div>
                     </div>

                 </div>
                 <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                        <div class="text-right text-dark">
                                            <h5>TIME TABLE</h5>
                                            <h3>kick off!!!</h3>
                                        </div>
                                    </div>
                                </div>
                   <div class="card-footer text-dark">
                    <i class="fas fa-spinner fa-pulse text-success mr-3"></i>
                       <span>Updating</span>
                   </div>
                            </div>
                     
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-commonn">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <i class="fas fa-users fa-3x text-warning"></i>
                                            <div class="text-right text-dark">
                                                <h5>GRADE</h5>
                                                <h3>10%</h3>
                                            </div>
                                        </div>
                                    </div>
                       <div class="card-footer text-dark">
                        <i class="fas fa-spinner fa-pulse text-warning mr-3"></i>
                           <span>Updating</span>
                       </div>
                                </div>
                     
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <i class="fas fa-chart-line fa-3x text-danger"></i>
                                                <div class="text-right text-dark">
                                                    <h5>DURATION</h5>
                                                    <h3>1%</h3>
                                                </div>
                                            </div>
                                        </div>
                           <div class="card-footer text-dark">
                            <i class="fas fa-spinner fa-pulse text-danger mr-3"></i>
                               <span>Updating</span>
                           </div>
                                    </div>
                     
                            </div>
             </div>
         </div>
     </div>
 </div>
     
    </section>

      <!---End of Cards-->
      <!--table-->
<section>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row align-items-center">
                     <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                       <h3 class="text-dark text-center mb-3">
                           always remember to check your SA/R
                       </h3> 
                       <table class="table table-striped bg-light text-center">
                           <thead>
                               <tr class="text-dark">
                                   <th>you have an outstanding result report immedaitely to your facilitattors to know your problem</th>
                                   <th></th>
                                   <th></th>
                                   <th></th>
                                   <th></th>

                               </tr>
                           </thead>
                        s
                       </table>
                       <!---Pagination-->
                       <nav class="color">
                           <ul class="pagination justify-content-center">
                               <li class="page-item">
                                   <a href="#" class="page-link py-2 px-3">
                                       <span>&laquo;</span>
                                   </a>
                               </li>
                               <li class="page-item active">
                                    <a href="#" class="page-link py-2 px-3">
                                        1
                                    </a>
                                </li>
                                <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                            <a href="#" class="page-link py-2 px-3">
                                                3
                                            </a>
                                        </li>
                               <li class="page-item">
                                    <a href="#" class="page-link py-2 px-3">
                                        <span>&raquo;</span>
                                    </a>
                                </li>

                           </ul>
                       </nav>




                       <!---End of Pagination-->
                      </div>




<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<h2>New Assignment</h2>

<table border="1">
  <tr>
    <td>Sr.No.</td>
    <td>Images</td>
  </tr>

<?php

 $db = mysqli_connect('localhost' , 'root' ,'' , 'login') or die("could not connect to database"); // Using database connection file here

$records = mysqli_query($db,"SELECT * FROM user  ORDER BY id DESC" ); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><a href="<?php echo $data['file_path']; ?>" download>View assignment!</a></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
</html>
<a href=""></a>
