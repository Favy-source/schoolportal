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
                   <li class="nav-item"><a href="./index.php" class="nav-link text-white p-3 mb-2
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
                    current"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>  
                timetable</a></li>
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
   

      <!---End of Cards-->
      <!--table-->
      <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">
                         <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                           <h3 class="text-dark text-center mb-3">
                               timetable
                           </h3> 
                         
                           <table class="table table-striped bg-light text-center">
                               <thead>
                                   <tr class="text-dark">
                                       <th>sn</th>
                                       <th>1st week</th>
                                       <th>2nd week</th>
                                       <th>3rd week</th>
                                       <th>4th week</th> 
                                       <th>5th week</th>
    
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <th>1</th>
                                       <td>introduction to html</td>
                                       <td>....</td>
                                       <td>....</td>
                                       <td>....</td> 
                 <td>end of html</td> 
                                   </tr>
                                   <tr>
                                        <th></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                 <!-- <td><button type="button" class="btn btn-danger btn-sm">Message</button></td> -->
                                    </tr>
                                    <tr>
                                            <th>2</th>
                                            <td>introduction to css</td>
                                            <td>....</td>
                                            <td>....</td>
                                            <td>....</td>
                      <td>end of css</td> 
                                        </tr>
                                        <tr>
                                                <th></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                         <!-- <td><button type="button" class="btn btn-danger btn-sm">Message</button></td> -->
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>introduction to javascript</td>
                                                <td>....</td>
                                                <td>....</td>
                                                <td>....</td>
                         <td>end of javascript</td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                         <!-- <td><button type="button" class="btn btn-danger btn-sm">Message</button></td> -->
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>introduction to PHP</td>
                                                <td>....</td>
                                                <td>....</td>
                                                <td>....</td>
                          <td>end of php</td> 
                                            </tr>  
                                            
                                            <tr>
                                                <th></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                         <!-- <td><button type="button" class="btn btn-danger btn-sm">Message</button></td> -->
                                            </tr>

                                            <tr>
                                                <div class="col-1">
                                                    <a href="#"data-toggle="tooltip" title="Edit"
                                                    data-placement="top">
                                                    <i class="fas fa-edit fa-lg text-success mr-2">
                                                    </i></a>
                                                                </div>
                                                <th>5</th>
                                                <td>party!!!1</td>
                                                <td>party!!!!</td>
                                                <td>party!!!!</td>
                                                <td>party!!!!</td>
                         <td>party!!!!</td>
                          
                                            </tr>
                                            
                               </tbody>
                               
                           </table>
                           <!---Pagination-->
                          
    
    
           </div>
               </div>
           </div>
                  </div>
    
              </div>
          </section>

      <!--End of table-->
      <!---Quick post-->
     
      
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