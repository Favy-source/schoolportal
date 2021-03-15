<?php include('db.php')?>
<?php include('server.php')?>
<!doctype html>
<html lang="en">
  <head>
    <title>ICE CUBICLE</title>
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
                   <li class="nav-item"><a href="./admin-dashboard.php" class="nav-link text-white p-3 mb-2
                    current"><i class="fas fa-home text-light fa-lg mr-3"></i>
                Dashboard</a></li>
                <!-- <li class="nav-item"><a href="./profile.html" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>
                Profile</a></li> -->
                <li class="nav-item"><a href="./register-interns.php" class="nav-link text-white p-3 mb-2
                    "><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                    Register-Interns</a></li>
                    <!-- <li class="nav-item"><a href="./profile.html" class="nav-link text-white p-3 mb-2
                        sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>
                    Profile</a></li> -->
                <li class="nav-item"><a href="notices.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                Notices</a></li>
                    <!-- <li class="nav-item"><a href="./duration.html" class="nav-link text-white p-3 mb-2 
                      sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>  
                Duration </a></li>   -->
                <li class="nav-item"><a href="./updateDelete.php" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i> 
                update/delete</a></li>
                <li class="nav-item"><a href="file-upload.php" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i> 
                CA/VS</a></li>
                <!-- <li class="nav-item"><a href="./timetable.html" class="nav-link text-white p-3 mb-2
                   sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i> 
                Time Tables</a></li> -->
                <!-- <li class="nav-item"><a href="./settings.html" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i> 
                Settings</a></li> -->
                <li class="nav-item"><a href="timetable.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>  
                timetable</a></li>
                <li class="nav-item"><a href="./adminlogin.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-sign-out-alt text-danger fa-lg"></i>  
                Log Out</a></li>
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
   
        </div>
</div>
            <!---End of Top Nav-->
        </div>
    </div>
</div>
      </nav>
      <!----End of Navbar-->
     
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
                                 <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                 <div class="text-right text-dark">
                                     <h5>INTERNS CURRENT ACTIVITY</h5>
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
                           always remember to update the interns 
                       </h3> 
                       <table class="table table-striped bg-light text-center">
                           <thead>
                               <tr class="text-dark">
                                   <th></th>
                                   <th></th>
                                   <th></th>
                                   <th></th>
                                   <th></th>

                               </tr>
                           </thead>
                          
                       </table>
                       <!---Pagination-->
                      



                       <!---End of Pagination-->
                      </div>
                <div class="col-xl-6 col-12">
        <h3 class="text-dark text-center mb-3">users</h3>
        <table class="table table-color  table-hover">
                <thead>
                        <tr class="text-dark">
                            <th>username</th>
                            <th>email</th>
                            <th>password</th>
                            <th>joined</th>
                            <th>delete</th>
                            <th>upd/grade</th>

                        </tr>
                    </thead> 
                     <tbody>
                            <tr>
                                    <th>chimgozilim</th>
                                    <td>baskyrichard@gmail.com</td>
                                    <td>100000</td>
                                    <td>12 5900</td>
             <td><span class="badge badge-success w-75 py-2"><a href="#"data-toggle="tooltip" title="Delete"
                data-placement="top">
                <i class="fas fa-trash-alt fa-lg text-danger">
                </i></a></span></td>
             <td> <div class="col-1">
                <a href="#"data-toggle="tooltip" title="Edit"
                data-placement="top">
                <i class="fas fa-edit fa-lg text-success mr-2">
                </i></a>
                          </div>
                     </td>
                                </tr> 
                                
                                <tr>
                                                    <th>you</th>
                                                    <td>Joseph@gmail.com</td>
                                                    <td>!!6000</td>
                                                    <td>10-09-2019</td>
                        <td><span class="badge badge-success w-75 py-2"><a href="#"data-toggle="tooltip" title="Delete"
                data-placement="top">
                <i class="fas fa-trash-alt fa-lg text-danger">
                </i></a></span></td>
             <td> <div class="col-1">
                <a href="#"data-toggle="tooltip" title="Edit"
                data-placement="top">
                <i class="fas fa-edit fa-lg text-success mr-2">
                </i></a>
                          </div>
                     </td>
                                                </tr>

                               
                    </tbody> 
        </table>
       

                        
                         </div>
                </div>
            </div>
        </div>
    </div>
</section>

      <!--End of table-->
      <!---Quick post-->
      <section>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                      <div class="row">
                            <div class="col-xl-6 col-12">
                                    <h4 class="text-dark p-3 mb-3">Tasks.</h4>
                                    <div class="container-fluid bg-1">
                                        <div class="row py-3 mb-4 task-border align-items-center">
                                            <div class="col-1">
                                                <input type="checkbox" checked>
                                
                                            </div>
                                            <div class="col-sm-9 col-8">
                                                Make sure to contact your tutors for your daily tasks
                                            </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                            </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                     </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid bg-2">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                              Always observe youor break 
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  <div class="container-fluid bg-3">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                              No food allowed in the class
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  <div class="container-fluid bg-4">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                              Lorem ipsum dolor sit amet, consectetur 
                                              adipisicing elit.
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-success mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-danger">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  </div>
                                  <!---End of Task List-->
            <!---Quick Post--->                      
         <div class="col-xl-6 mt-5">
            <div class="card rounded">
             <div class="card-body">
                 <h5 class="text-dark text-center mb-4">
                     Quick Status Post
                   </h5>
                <ul class="list-inline text-center py-3">
                 <li class="list-inline-item">
                     <a href="#"> <i class="fas fa-pencil-alt text-success"></i>
                    <span class="h6 text-dark">Status</span>
                    </a>
                    </li>
                    <li class="list-inline-item mr-4">
                            <a href="#"> <i class="fas fa-camera text-info"></i>
                           <span class="h6 text-dark">Photo</span>
                           </a>
                           </li>
                           <li class="list-inline-item mr-4">
                                <a href="#"> <i class="fas fa-map-marker text-danger"></i>
                               <span class="h6 text-dark">Check In</span>
                               </a>
                               </li>

                      </ul>
                      <form>
                          <div class="form-group">
                              <input type="text" class="form-control py-2 mb-3" 
                              placeholder="Your Status">
                              <button type="button" class="btn btn-block text-uppercase 
                              font-weight-bold text-light bg-button py-2 mb-5">Submit Post</button>
                          </div>
                      </form>
                      <div class="row align-items-center mb-5">
                          <div class="col-6">
                              <div class="card bg-light">
                                  <i class="far fa-calendar-alt fa-8x
                                  text-info d-block m-auto py-3"></i>
                                  <div class="card-body">
                           <p class="card-text text-center font-weight-bold 
                           text-uppercase">Tue,Dec 15</p>
                                  </div>
                              </div>

                          </div>
                          <div class="col-6">
                                <div class="card bg-light">
                                        <i class="far fa-clock fa-8x
                                        text-danger d-block m-auto py-3"></i>
                                        <div class="card-body">
                                 <p class="card-text text-center font-weight-bold 
                                 text-uppercase">12:15PM</p>
                                        </div>
                                    </div>
                            </div>
                      </div>

                </div>
              </div>


       </div>
           </div>
       </div>
              </div>

          </div>
      </section>
      
      <!---End of Quick post-->
      <!----Footer-->
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