<?php
if(isset($_POST['submit'])){
    echo $_POST['first_name'];
    echo $_POST['last_name'];
    echo $_POST['email'];
    echo $_POST['password'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <style type="text/css">
    .container{
        background-color:"red";
        height:"450px";
    }
  </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="form.php">
            <label for="">first name</label>
            <input type="text" placeholder="enter your first name" name="first_name" ><br><br>
            <label for="">last name</label>
            <input type="text" placeholder="enter your last name" name="last_name" ><br><br>
            <label for="">email</label>
            <input type="email" placeholder="enter your email" name="email" ><br><br>
            <label for="">password</label>
            <input type="password" placeholder="enter your password" name="password" ><br><br>
            <button type="submit" name="submit" >submit</button>
        </form>
    </div>
</body>
</html>