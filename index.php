<?php


define("xy","php");
echo xy;
echo "<br>";

#connect to database

$connect=mysqli_connect('localhost','Parfaite','Perfect@S1','personal-info');
if(!$connect){
    echo "connection error: " .mysqli_connect_error();
}

$query='SELECT * FROM person ORDER BY id DESC';
$result=mysqli_query($connect,$query);
$persons=mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($connect);

print_r($persons);


?>
<!DOCTYPE html>
<html lang="en">
  


  <?php include('form2.php'); ?>
  <h4>personal information</h4>
  <div class="cards">
  <?php foreach($persons as $person){ ?>
  <div class="card bg-primary">
 
        <div class="card-header bg-danger">
          <?php echo htmlspecialchars("My password is " .$person['password']) ;?>
        </div>
        <div class="card-body">
          <?php  echo htmlspecialchars($person['firstName']); ?>
          <?php echo htmlspecialchars($person['lastName'] ); ?>
        </div>
        <div class="card-footer">
            <?php echo $person['email']; ?>
        </div>
        <a href="form.php">Another Form</a>
       
  </div>
   <?php } ?>

   <?php if(count($persons)>=4){ ?>
    <p>there are 4 or more than 4 person</p>
    <?php } else{?>
      <p>there are less than  person</p>
    <?php } ?>
  </div>
<?php
    include('insert.php');
 ?>
</html>