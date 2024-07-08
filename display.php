<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
         <h2>Imformation of Users</h2>
        <button class="btn btn-primary my-5"><a class="text-light text-decoration-none" href="user.php">Add user</a></button>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Sr No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Password</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
<?php
    $sql="Select * from `crud`";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$password.'</td>
                <td>
                    <button class="btn btn-primary"><a class="text-light text-decoration-none" href="update.php?id='.$id.'">Update</a></button>
                    <button class="btn btn-danger"><a class="text-light text-decoration-none"  href="delete.php?delete='.$id.'">Deletes</a></button>
                </td>
                </tr>';
        }
    }
?>


            <tbody>
                <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>