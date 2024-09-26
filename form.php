<?php  
$insert=false;
if(isset($_POST['name'])){  
   $server="localhost";  
   $username="root";  
   $password="";  
   $dbname="trip";  
   $conn=mysqli_connect($server,$username,$password,$dbname);  
   if(!$conn){  
      die("connection to the database failed due to".mysqli_connect_error());  
   }  
   $name=$_POST['name'];  
   $age=$_POST['age'];  
   $address= $_POST['address'];  
   $email=$_POST['email'];  
   $password=$_POST['password'];  
   $mobileno=$_POST['mobileno'];  
   $parentno=$_POST['parentno'];  
     
$sql="INSERT INTO `trip`.`student`(`name`, `age`, `address`, `email`, `password`, `mobileno`, `parentno`,  `date`)VALUES ( '$name', '$age', 
'$address', '$email', '$password', '$mobileno', '$parentno',  current_timestamp());";
if($conn->query($sql)==true)
{
    $insert=true;
}
else{
    echo" ERROR : $sql <br> $conn->error"; 
}
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <img src="hampibg.jpg" alt="hampi image not available" class="bg">
    <div class="container">
<h1>Welcome to the  New Arts,Commerce and Science's  (TY BBA(ca)) Hampi trip login form.</h1>
<h3>Fill the form even if you are not interested in the trip.<br>
Enter the details....!!!</h3><br><br>
<?php
if($insert==true)
{
 echo"<p class='submitMsg'>Thanks for filling the data ,if you are positive about the trip 
 than we are good to go further</p>"; }
 ?>
<fieldset> 
<form action="form.php" method="post">
  <label >Enter your name : </label>
  <input type="text" name="name" id="name" placeholder="enter your full name">
  <label>Enter your age:</label>
  <input type="number" name="age" id="age" placeholder="If you are above 18 only then you are allowed">
  <label >Enter your address:</label>
  <input type="text" name="address" id="address" placeholder="short adress"> 
  <label >Enter your email :</label>
  <input type="text" name="email" id="email" placeholder="enter your own email id" > 
  <label >Enter your password :</label>
  <input type="password" name="password" id="password" placeholder="Give a strong password"> 
  <label >Enter your mobile number:</label>
  <input type="number" name="mobileno" id="mobileno" placeholder="10 digits"> 
  <label >Enter your parents contact No:</label>
  <input type="number" name="parentno" id="parentno" placeholder="10 digits"> 
  <textarea name="reason" id="reason" rows="7" cols="15" > If you are not coming to the trip give a reason :</textarea>
  <button class="button-56 " role="button">Submit</button>
</form>
</fieldset>
</div>
    <script src="index.js"></script>
</body>
</html>