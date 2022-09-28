<?php

$conn=mysqli_connect('localhost', 'Parfaite','Perfect@S1','personal-info');
if(!$conn){
    echo "mysql connection error: " .mysqli_connect_error();
}
if(isset($_POST['submit'])){
    if(!empty($_POST['firstName']) && !empty($_POST['lasttName']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lasttName'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="insert into person(firstName,lastName,email,password) values('$firstName', '$lastName', '$email', '$password')";
        $insert=mysqli_query($conn,$query);
        if($insert){
            echo "form submitted successfully";
        }
        else{
            echo "form not submitted";
        }
    }
    else{
        echo "all fields are required";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert into table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="insert.php" method="POST" class="bg-success">
        firstName: <input type="text" name="firstName"> <br> <br>
        lastName: <input type="text" name="lasttName"> <br> <br>
        email: <input type="text" name="email"> <br> <br>
        password: <input type="text" name="password"> <br> <br>
      <button class="bg-warning" type="submit" name="submit">submit</button><br> <br>
    </form>
</body>
</html>