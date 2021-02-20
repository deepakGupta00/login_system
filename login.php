
<?php

$login =false;
$showErr=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){



 include 'parcials/dbconnect.php';

 // $username= $_POST["username"];
 $username=$_POST["username"];
 $password =$_POST["password"];


  //  $sql  = "select * from users where username='$username' AND password ='$password' ";

   $sql  = "select * from users where username='$username'  ";


   $result = mysqli_query($conn , $sql);

   $num= mysqli_num_rows($result);
   if($num==1){
      while($row=mysqli_fetch_assoc($result)){
        if(password_verify($password, $row['password'])){

          $login=true;
          // start session

          session_start();
          $_SESSION['loggedin']= true;
          $_SESSION['username']= $username;

          header("location:welcome.php");
          
        }
        else{
          $showErr="Invalid Credencial";
        }
      }

   }
   
 else{
   $showErr="Invalid Credencial";
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

   <title>Login</title>
 </head>
 <body>






  

<?php
 include("parcials/nav.php");
?>


<?php

if($login){
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> you are logged in. 
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




<h1 class="text-center my-5">Login to Our Website</h1> 



<form action="login.php" method="post">
<div class="container my-5 col-md-6">
       <div class="mb-4">

           <label for="exampleInputEmail1" class="form-label">Username</label>
           <input type="text" class="form-control" name="username" required aria-describedby="emailHelp">
           
       </div>
       <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Password</label>
           <input type="password" name="password" class="form-control" id="exampleInputPassword1">
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