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
                   <li class="nav-item"><a href="index-intern.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-home text-light fa-lg mr-3"></i>
                Dashboard</a></li>
                <li class="nav-item"><a href="./intern-profile.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>
                Profile</a></li>
                <li class="nav-item"><a href="./noticeview.php" class="nav-link text-white p-3 mb-2
                    sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                Broadcast</a></li>
                 <!-- <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2
                      sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>  
                Duration </a></li>  -->
                <!-- <li class="nav-item"><a href="grade.html" class="nav-link text-white p-3 mb-2
                     sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i> 
                Grade</a></li> -->
                <li class="nav-item"><a href="intern-submitassignment.php" class="nav-link text-white p-3 mb-2
                     current"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i> 
                SA/R</a></li>
                <li class="nav-item"><a href="intern-timetableview.php" class="nav-link text-white p-3 mb-2
                   sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i> 
                Time Tables</a></li>
                <li class="nav-item"><a href="./intern-login.php" class="nav-link text-white p-3 mb-2
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
      <!---Modal-->
    
      <!---Cards-->
    
      <!---End of Cards-->
      <!--table-->
 <!---End of Pagination-->
 </div>
 <section>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row align-items-center">
                    
                <div class="col-xl-6 col-12">
        <h3 class="text-dark text-center mb-3">Assignments from Admin</h3>
        <table class="table table-color  table-hover">
                <thead>
                        <tr class="text-dark">
                            <th>Id</th>
                            <th>Content</th>

                        </tr>
                    </thead> 
                     <tbody>
                            <tr>
                            <?php
                                $count = 0;
                                $query = mysqli_query($db,"SELECT * FROM user");
                                foreach($query as $row){
                                $count++;
                                ?>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["file_path"]; ?></td>
             
                                </tr> 
                                <?php } ?>       
                                </tbody>
        </table>
        </div>
        </div>
            </div>
        </div>
    </div>
</section>


                       <!---End of Pagination-->
            
        
              
                  

                        
                   
   
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
                                                Make sure your assignment is submitted!!!  
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
                                            Make sure your assignment is submitted!!!  
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
                                            Make sure your assignment is submitted!!!  
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
                                              Make sure your assignment is submitted!!!      
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
                     submit your assignment
                   </h5>
                
                      <form>
                          <div class="form-group">
                              <input type="text" class="form-control py-2 mb-3" 
                              placeholder="Send your Status to the email of the facilitator">
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
                    <p>&copy; 2020 Copyright</p>
                    
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