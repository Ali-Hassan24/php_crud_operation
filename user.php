<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud`(name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo"Data inserted successfull";
        header('location:display.php');
    }else{

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud opation</title>
  </head>
  <body>
    <div class="container">
    <h1 class="text-center py-4 ">Add User</h1>

        <form method="post">
            <div class="mb-3 form-group">
                <label  class="form-label">Name</label>
                <input type="text" name="name" placeholder="enter your name" class="form-control"> 
            </div>
            <div class="mb-3 form-group">
                <label  class="form-label">Email</label>
                <input type="email" name="email" placeholder="enter your email" class="form-control"> 
            </div>
            <div class="mb-3 form-group">
                <label  class="form-label">Mobile Number</label>
                <input type="text" name="mobile" placeholder="enter your mobile number" class="form-control"> 
            </div>
            <div class="mb-3 form-group">
                <label  class="form-label">Password</label>
                <input type="password" name="password" placeholder="enter your password" class="form-control"> 
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 
    
    <!-- Optional JavaScript; choose one of the two! -->

    
  </body>
</html>