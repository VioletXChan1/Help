<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `signup`.`signup` (`name`, `password`, `email`) VALUES ('$name', '$password', '$email');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#654062;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Appolo Blood Bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item1">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item2">
              <a class="nav-link active" aria-current="page" href="#">Explore</a>
            </li>
            <li class="nav-item3">
              <a class="nav-link active" aria-current="page" href="#">About Us</a>
            </li>
            <li class="nav-item4 ">
              <a class="nav-link active ml-5" aria-current="page" href="#">Team Members</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <img class="my-image" src="back.jpg" alt="">
    <div class="part">
      <div class="inner-part">
        <form class="" action="index.php" method="post">
          <h1 style="color:white;text-align:center;padding-top:30px;">Sign Up</h1>
          <label style="padding-left:30px;padding-top:32px;color:white;" for=""><h2>Name:</h2></label>
          <input class="Name_input" style="width:400px;margin-left:20px;"type="text" name="name" value="">
          <br>
          <label style="padding-left:30px;padding-top:32px;color:white;" for=""><h2>Password:</h2></label>
          <input class="Pass_input" style="width:400px;margin-left:20px;"type="text" name="password" value="">
          <br>
          <label style="padding-left:30px;padding-top:32px;color:white;" for=""><h2>Email:</h2></label>
          <input class="Email_input" style="width:400px;margin-left:20px;"type="text" name="email" value="">
          <br>
          <button class="btn-success" style="margin-left:30px;margin-top:32px;width:100px;border:0;height:50px;" type="submit" name="button"><a style="color:white;" href="signin.php">Register</a></button>
          <br>
          <a style="padding-left:30px;margin-top:20px;display:inline-block;color:white;" href="signin.php">Already have Account</a>
        </form>
      </div>
    </div>

  </body>
</html>
