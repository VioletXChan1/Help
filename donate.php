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
    $bloodgroup = $_POST['bloodgroup'];
    $address = $_POST['address'];
    $number=$_POST['number'];
    $gmail=$_POST['gmail'];

    $sql = "INSERT INTO `donate`.`donate` (`name`, `bloodgroup`, `address`,'number','gmail') VALUES ('$name', '$bloodgroup', '$address','$number','$gmail')";
    // echo $sql;
    if($con->query($sql) == true){
         echo "Successfully inserted";
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
    <title>Donate</title>
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
  <div class="">
    <h1 class="text-donation">Blood Donation Form</h1>
    <div class="inner-donation">
      <form class="" action="donate.php" method="post">
        <label class="name-donation" for="">Name:</label>
        <input class="input-donation" type="text" name="name" value="" placeholder="Enter your name">
        <br>
        <br>
        <label class="group-donation" for="">Blood Group:</label>
        <input class="group-input-donation" type="text" name="bloodgroup" value="" placeholder="Enter your Blood Group">
        <br>
        <br>
        <label class="address-donation" for="">Address:</label>
        <input class="address-input-donation" type="text" name="address" value="" placeholder="Enter your Address">
        <br>
        <br>
        <label class="number-donation" for="">P.Number:</label>
        <input class="number-input-donation" type="text" name="number" value="" placeholder="Enter your Number">
        <br>
        <br>
        <label class="gmail-donation" for="">Gmail:</label>
        <input class="gmail-input-donation" type="text" name="gmail" value="" placeholder="Enter your Gmail">
        <button type="submit" name="button">Submit</button>
        </form>
    </div>
  </div>
  </body>
</html>
