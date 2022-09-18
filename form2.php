<?php 
$firstName=$lastName=$email=$password=' ';
$errors=array('firstName'=>' ','lastName'=>' ','email'=>' ','password'=>' ');
if (isset($_GET['submit'])){
  
  if(!empty($_GET['firstName'])){
    $firstName=$_GET['firstName'];
    if(preg_match('/^[a-zA-Z\s]+$/',$firstName)){
     echo $firstName;
    }
    else{
      $errors['firstName']="name must include letters and spaces only";
    }
  }
  else{
   $errors['firstName']= "please enter name";
  }

  if(!empty($_GET['lastName'])){
    $lastName=$_GET['lastName'];
    if(preg_match('/^[a-zA-Z\s]+$/',$lastName)){
     echo $lastName;
    }else{
      $errors['lastName']="last name must be letters and space only";
    }
 
  }
  else{
    $errors['lastName']= "please enter lastName";
  }
  

    if(!empty ($_GET['email'])){
      $email=$_GET['email'];
      if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo $email;
      }
      else{
        $errors['email']= "email is  invalid";
      }
    }
    else{
      $email_error="email is required";
     
    }
    
if(isset($_GET['password'])){
  $password=$_GET['password'];
  if(empty($password)){
    $errors['password']="please enter password!";
  }
}
 
    
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
    <form action="form2.php" method="GET" class=" bg-success">
        <div class="mb-3 mt-3">
          <label for="" class="form-label">first name</label>
          <input type="text" class="form-control "   name="firstName" placeholder="enter first name">
          <div class="text-warning"><?php echo $errors['firstName']; ?> </div>
         
        </div>

        <div class="mb-3 mt-3">
          <label for="" class="form-label">last name</label>
          <input type="text" class="form-control" name="lastName" placeholder="enter last name">
          <div class="text-warning"><?php echo $errors['lastName']; ?> </div>
        </div>
        <div class="mb-3 mt-3">
          <label for="" class="form-label">email</label>
          <input type="text" class="form-control" name="email" placeholder="enter email">
          <span> <?php if(isset($email_error)) echo $email_error;?> </span>
          <div class="text-warning"><?php echo $errors['email']; ?> </div>
        </div>
        <div class="mb-3 mt-3">
          <label for="" class="form-label">password</label>
          <input type="password" class="form-control" name="password" placeholder="enter password">
          <div class="text-warning"><?php echo $errors['password']; ?> </div>
        </div>
     
        <button type="submit" class="btn btn-warning" name="submit"> submit</button>
     </form>
  </div>
</body>
</html>