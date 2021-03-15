<?php  
 
	// connect to the server and select database
	include('db.php');
// new code for testing starts here


session_start();



// initializing variables
$fullname = "";
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');


// Login for admin code starts here 
if (isset($_POST['adminLogin-submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = $password;
    $query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    // echo $result;
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
      header('location: admin-dashboard.php');
      // This code is working fine, it should take me to intern dashboard
  	  echo "Admin you don enter";
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($db, $_POST['username']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) {array_push($errors, "Fullname is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM interns WHERE Full_Name=$fullname, username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($db, $result);
  
  if ($user) { // if user exists
    if ($user['Full_Name'] === $fullname) {
      array_push($errors, "Full_Name already exists");
    }
    
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO interns (Full_Name, username, email, password) 
  			  VALUES('$fullname', '$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['Full_Name'] = $fullname;
  	$_SESSION['username'] = $username;
    $_SESSION['success'] = " Intern Registered Successfully";
    header('location: admin-dashboard.php');
  	// header('location: login.php');
  }
}



// Login code starts here 
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM interns WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
      // header('location: index.php');
      // This code is working fine, it should take me to intern dashboard
  	  echo "baba well done";
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}



// initializing variables
$title= "";
$texts = "";
$errors = array(); 



// SEND MESSAGE TO INTERN
if (isset($_POST['send_msg'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $texts = mysqli_real_escape_string($db, $_POST['texts']);

  // message validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($title)) { array_push($errors, "Title cannot be empty"); }
  if (empty($texts)) { array_push($errors, "Message cannot be empty"); }

  // Finally, register user if there are no errors in the form
  

    $query = "INSERT INTO notices (title, texts) 
          VALUES('$title', '$texts')";
    mysqli_query($db, $query);
    $_SESSION['title'] = $title;
    $_SESSION['success'] = "message sent";
    header('location: notices.php');
  }

 


//create assignment starts here
    
    if(isset($_POST["submit"])) {
        // Set image placement folder
        $target_dir = "img_dir/";
        // Get file path
        $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("jpg", "txt", "pdf", "jpeg", "png");
        

        if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
           $resMessage = array(
               "status" => "alert-danger",
               "message" => "Select image to upload."
           );
        } else if (!in_array($imageExt, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Allowed file formats .jpg, .pdf, .txt, .jpeg and .png."
            );            
        } else if ($_FILES["fileUpload"]["size"] > 2097152) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File is too large. File size should be less than 2 megabytes."
            );
        } else if (file_exists($target_file)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "File already exists."
            );
        } else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                $sql="INSERT INTO user (file_path) VALUES ('$target_file')";
                mysqli_query($db, $sql);
                ?>
                
  <script>
  alert('successfully uploaded');
        window.location.href='file-upload.php?success';
        </script>

             <?php   
            } else {
                $resMessage = array(
                    "status" => "alert-danger",
                    "message" => "Image coudn't be uploaded."
                );
            }
        }

    }

?>



<!-- 
// delete user starts here -->

<?php
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM interns WHERE id=$id");
    $_SESSION['message'] = "deleted!"; 
    header('location: updateDelete.php');
    echo "done bro";
}

// delete user ends here

// edit user starts here
 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM interns WHERE id=$id");

    if (count($record) == 1 ) {

      $n = mysqli_fetch_array($record);
      $name = $n['username'];
      $email= $n['email'];
    }
  }



if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['username'];
  $email = $_POST['email'];

  mysqli_query($db, "UPDATE interns SET username='$name', email='$email' WHERE id=$id");
  $_SESSION['message'] = "Intern updated!"; 
  header('location: updateDelete.php');
}

?>










