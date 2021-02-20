
<?php

 $showAlert =false;
 $showErr=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){



  include 'parcials/dbconnect.php';

  // $username= $_POST["username"];
  $username=$_POST["username"];
  $password =$_POST["password"];
  $cpassword=$_POST["cpassword"];

  // $exists=false;

  $existsql="SELECT * FROM `users` WHERE username ='$username'  ";
  $result = mysqli_query($conn, $existsql);
  $numexistRows= mysqli_num_rows($result);
  
  if($numexistRows > 0){
  $showErr="Username Already Exists";
}
else{
  if(($password == $cpassword)){
        $hash= password_hash($password, PASSWORD_DEFAULT);
      $sql  = "INSERT INTO users ( `username`, `password`, `dt`) VALUES ( '$username', '$hash', current_timestamp());";

      $result = mysqli_query($conn , $sql);

    if($result){

      // echo "successfully";
       $showAlert=true;

    }
    
  }

  else{
    $showErr="password do not match";
  }

}

}


?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>






   

<?php
  include("parcials/nav.php");
?>


<?php

if($showAlert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your account is now created and you can login. 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
 }

if($showErr){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error ! </strong> ' .$showErr.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
 }


 
?>




<h1 class="text-center my-5">Signup to Our Website</h1> 



<form action="signup.php" method="post">
<div class="container my-5 col-md-6">
        <div class="mb-4">

            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" maxlength="15" Required aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" maxlength="25" required class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            
         
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>