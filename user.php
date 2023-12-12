<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="user.css">

</head>

<body>
  <header class="header">
    <div class="logo">
      <img src="logo.png" alt="logo" class="gymlogo">
      <a href="index.html"><img src="homeicon.png" alt="logo" class="logo home"></a>
    </div>

  </header>


  <div class="container">
    <form action="user.php" name="form1" method="post">
      <div class="plus"><a href="exercise.php"><img src="plus.png" alt=""></a>
      
      </div>
        <p>Add</p>
      <div class="brand-logo"></div>
      <span id="error"></span>
      <div class="inputs">
        <div class="labels">
          <label>UserId</label><span id="userid"></span>
        </div>
        <input type="text" name="userId" placeholder="UserId" />
        <button type="submit">SEARCH</button>
      </div>
    </form>
  </div>
  <div class="container">
    <?php
    if(isset($_POST['userId'])){
    $server = "localhost";
    $username = "root";
    $password= "";
    
    $conn = mysqli_connect($server,$username,$password);
    
    
    if(!$conn)
    {
        die("Connection to database failed due to ". mysqli_connect_error());
    }
    $userId = $_POST['userId'];

    $sql = "SELECT * FROM `gym`.`exercise` WHERE userId ='$userId';";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
     while($row = mysqli_fetch_assoc($result)) {
      echo " Description : " . $row["description"]. " | Duration : " . $row["duration"]. " | Date : " . $row["date"]."<br></p><hr>";
     }
    } else {
     echo "0 results";
    }
}
    ?>
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


  <script src="validate.js"></script>
</body>

</html>