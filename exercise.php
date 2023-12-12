<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="user.css">

</head>

<body onload="getDate()">
  <header class="header">
    <div class="logo">
      <img src="logo.png" alt="logo" class="gymlogo">
      <a href="index.html"><img src="homeicon.png" alt="logo" class="logo home"></a>
    </div>
  </header>


  <div class="container">
    <form action="exercise.php" name="form1" method="post">
      <div class="search">
        <a href="user.php"><img src="se.png" alt=""></a>
      </div>
      <p>Find</p>
      <div class="brand-logo"></div>
      <span id="error"></span>
      <div class="inputs">
        <div class="labels">
          <label>UserID</label><span id="firstname"></span>
        </div>
        <input type="text" name="userId" placeholder="UserID" />
        <div class="labels">
          <label>Description</label><span id="lastname"></span>
        </div>
        <select name="description" class="select">
          <option value="Chest ">Chest</option>
          <option value="Back">Back</option>
          <option value="Bicep">Bicep</option>
          <option value="Triceps & Abs">Triceps & Abs</option>
          <option value="Shoulder">Shoulder</option>
          <option value="Legs">Legs</option>
        </select>
        <div class="labels">
          <label>duration</label><span id="email"></span>
        </div>
        <input type="number" name="duration" placeholder="duration" />
        <div class="labels">
          <label>Date</label><span id="contact"></span>
        </div>
        <input type="date" id="date" name="date" placeholder="Date" />
        <div class="labels">
        </div>
        <button type="submit">Add Exercise</button>
      </div>
    </form>
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
  $res = false ;
  if(isset($_POST['userId'])){
  $server = "localhost";
  $username = "root";
  $password= "";
  
  $conn = mysqli_connect($server,$username,$password);
  
  
  if(!$conn)
  {
      die("Connection to database failed due to ". mysqli_connect_error());
  }
  $userId= $_POST['userId'];
  $description= $_POST['description'];
  $duration= $_POST['duration'];
  $date= $_POST['date'];
 

  $sql = "INSERT INTO `gym`.`exercise` (`userId`, `description`, `duration`, `date`) VALUES ('$userId', '$description', '$duration', '$date');";
  
  if(mysqli_query($conn,$sql))
  {
      $res = true;
  }
  else{
      echo "Record not inserted";
  }
  $conn->close();
  }
      
  ?> 

  <script src="get.js"></script>
</body>

</html>