<?php
$first_name=$last_name=$emails=$password=$phone="";
$error=array('first_name'=>'','last_name'=>'','email'=>'','phone'=>'','password'=>'');

if(isset($_POST['submit'])){

    if(!empty($_POST['first_name'])){
       $fname=$_POST['first_name'] ;
       if(preg_match('/^[a-zA-Z\s]+$/',$fname)){
        echo $fname;
       } else{
        $error['first_name']="name must be only letters";
       }
    }
    else{
        $error['first_name']="please enter name";
    }

    if(!empty($_POST['last_name'])){
        $lname=$_POST['last_name'];
        if(preg_match('/^[a-zA-Z\s]+$/',$lname)){
            echo $lname;
        }
        else{
            $error['last_name']="name must be only letters";
        }
    }
    
    else{
        $error['last_name']="please enter last name" ;
    }

    if(!empty($_POST['email'])){
        $email=$_POST['email'];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo $email;
        }
        else{
            $error['email']="email is invalid";
        }
    }
    else{
        $error['email']="kindly enter your email";
    }
   

   if(!empty($_POST['phone'])){
    $phones=$_POST['phone'];
    if(preg_match('/^[0-9]*$/',$phones) && strlen($phones)==10){
        echo $phones;
    }
    // elseif(strlen($phones)>10){
    //     $error['phone']="phone number must not exceed ten digits";
    // }
    else{
        $error['phone']="phone must be only numbers neither greater nor less than 10 digits";
    }
   }
   else{
   $error['phone']="please enter phone number";
   }
    // echo $_POST['password'];

    if(!empty($_POST['confPswd']) && !empty($_POST['password'])){
        if($_POST['confPswd']===$_POST['password']){
            echo 'both password match';
        }
        else{
            $error['cnfPswd']= "password do not match";
        }
       
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
 <link rel="stylesheet" href="style.css">
  </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="form.php" id="form">
            <label for="">first name</label>
            <input type="text" placeholder="enter your first name" name="first_name" >
            <div class="text"><?php echo $error['first_name']; ?> </div>
            <br>
            <label for="">last name</label>
            <input type="text" placeholder="enter your last name" name="last_name" >
            <div class="text"> <?php echo $error['last_name']; ?></div>
            <br><br>
            <label for="">email</label>
            <input type="text" placeholder="enter your email" name="email" >
            <div class="text"> <?php echo $error['email']; ?></div>
            <br><br>
            <label for="">phone number</label>
            <input type="text" placeholder="enter phone number" name="phone" >
            <div class="text"> <?php echo $error['phone']; ?></div>
            <br><br>
            <label for="">password</label>
            <input type="password" placeholder="enter your password" name="password" ><br><br>
            <label for="">password</label>
            <input type="password" placeholder="confirm password" name="confPswd" ><br><br>
            <button type="submit" name="submit" >submit</button>
        </form>
    </div>
</body>
</html>