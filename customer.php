<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="register.css">

</head>

<body>
  <header class="header">
    <div class="logo">
      <img src="logo.png" alt="logo" class="gymlogo">
      <a href="index.html"><img src="homeicon.png" alt="logo" class="logo home"></a>
    </div>

  </header>


  <div class="container">
    <form>
      <div class="brand-logo"></div>
      <h1 style="text-align: center; color: rgb(67, 218, 67)">ThankYou</h1>
    <h3>You are registered successfully</h3>
    <h3>User ID : <?php
     $userId=$_POST['userId'];
     echo $userId;
    ?></h3>
  </div>
  <div class="footer" id="about">
    <div class="footerText">
      <h3>The Muscle Monstor Gym</h3>
      <p><br>Location : Raj Tower, Sonkatch Road<br>Pipalrawan (455118), Dewas (M.P.)</p>

    </div>
    <div class="footerText">
      <h2>Plans</h2> <br>
      <p>1 Month</p> <br>
      <p>3 Months</p> <br>
      <p>6 Months</p> <br>
      <p>1 Year</p> <br>

    </div>
    <div class="footerText">
      <h2>Programs</h2><br>
      <p>Dance</p> <br>
      <p>Cardio </p> <br>
      <p>Heavy Workout</p> <br>
      <p>Yoga Classes</p> <br>

    </div>
    <div class="footerText">
      <h2>Contact US</h2><br>
      <p>+91 99264 44096</p> <br>
      <a href="https://www.instagram.com/yuvrajfitness_club/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="
        target="_blank"><img src="instalogo.png" alt=""></a>
    </div>
  </div>
  
  
  <?php
    $res=false;
    if(isset($_POST['firstname'])){
    $server = "localhost";
    $username = "root";
    $password= "";
    
    $conn = mysqli_connect($server,$username,$password);
    
    if(!$conn)
    {
        die("Connection to database failed due to ". mysqli_connect_error());
    }
   
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $age= $_POST['age'];
    $bmi= $_POST['bmi'];
    $gender= $_POST['gender'];
    $address= $_POST['address'];
    $plan= $_POST['plan'];
   

    $sql1 = "INSERT INTO `gym`.`customer` (`firstname`, `lastname`, `email`, `contact`, `age`, `bmi`,`gender`, `address`,`plan`) VALUES ('$firstname', '$lastname', '$email', '$contact', '$age', '$bmi','$gender','$address','$plan');";
    $sql2 = "INSERT INTO `gym`.`user` (`userId`, `name`) VALUES ('$userId', '$firstname');";
   
    if(mysqli_query($conn,$sql1))
    {
        $res = true;
    }
    if(mysqli_query($conn,$sql2))
    {
        $res = true;
    }
    else{
        echo "Record not inserted";
    }
    $conn->close();
    }
        
    ?> 
</body>

</html>