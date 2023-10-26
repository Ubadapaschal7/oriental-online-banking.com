<!DOCTYPE html>
<html>
<head>
    <title>Oriental Bank Signup</title>
    <script src="https://kit.fontawesome.com/bc377a0067.js" crossorigin="anonymous"></script>
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="bg-light">


    <!-------------- NAV-LINKS ------------>

    <section id="header2">
        <div class="bank2">
            <h1><a href="https://orientalonlmb.org/" rel="home"><span>Oriental Bank</span></a></h1>
            <p>Personal Banking, Business Banking</p>
        </div>
        <div class="email-us">
            <p><i class="fa-solid fa-phone-flip"></i> <a href="">support@orientalonlmb.org</a></p>
        </div>
        <div class="our-location"><h6>USA</h6></div>
        <div class="openBtn">
             <button class="openButton"><a href="./client_login.php"><i class="fa-solid fa-lock"></i> Client Login</a></button>
        </div>

    </section>


<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg text-white bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand fs-2 text-white d-lg-none" href="#"> MENU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fs-1"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="text-dark fs-3">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 custom-padding">
            <li class="nav-item  ps-3">
              <a class="nav-link active text-white" aria-current="page" href="#"> HOME</a>
            </li>
            <li class="nav-item ps-3">
              <a class="nav-link text-white" href="#"> ABOUT US</a>
            </li>
            <li class="nav-item dropdown ps-3">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               SERVICES
              </a>
              <ul class="dropdown-menu fs-3 bg-danger">
                <li><a class="dropdown-item ps-5" href="#"><i class="fa-solid fa-angles-right"></i> Online banking</a></li>
                <hr>
                <li><a class="dropdown-item ps-5" href="#"><i class="fa-solid fa-angles-right"></i> Personal banking</a></li>
              </ul>
            </li>
            <li class="nav-item ps-3">
              <a class="nav-link text-white"> CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END OF NAVBAR -->

<form action="./register.php" method="post" enctype="multipart/form-data">
 <div class="mb-5">
    <h2 class="pt-5 pb-5 ps-3 fs-1">Registration Form</h2>
    <div class="mb-3">
    <label for="username" class="form-label ps-3"><strong>Username</strong></label><br>
    <input type="text" id="username" class="form-control fs-5" name="username" placeholder=" Username" required> 
    </div>
    <br>
    
    <div class="mb-3">
    <label for="phone-number" class="form-label ps-3"><strong>Phone Number</strong></label><br>
    <input type="number" id="phone-number" class="form-control fs-5" name="phone-number" placeholder=" Phone Number" required pattern="^\+\(234\)\s[0-9]+$"> 
    </div>
    <br>
    
    <div class="mb-3">
    <label for="email" class="form-label ps-3"><strong>Email Address</strong></label><br>
    <input type="email" id="emailId" class="form-control fs-5" name="email" placeholder=" Email Address" required autocomplete="email">
    </div>
    <br>
   
    <div class="mb-3">
    <label for="fullname" class="form-label ps-3"><strong>Full Name</strong></label><br>
    <input type="text" id="fullname" class="form-control fs-5" name="fullname" placeholder=" FullName" required> 
    </div>
    <br>

    <div class="container-fluid">
    <label for="comment" class="form-label ps-3"><strong>Address</strong></label><br>
    <!-- <div class="row"> -->
        <!-- <div class="col"> -->
            <textarea name="address" id="comment" placeholder="Address" rows="2" class="form-control fs-5"></textarea>
        <!-- </div> -->
    <!-- </div> -->
   </div>
   <br>

    <div class="mb-3">
    <label for="account" class="form-label ps-3"><strong>Account Type</strong></label><br>
    <select name="account" class="form-control fs-3" id="account">
        <option value="saving">Savings</option>
        <option value="checking">Checking</option>
        <option value="current">Current</option>
    </select>
    </div>
    <br>

    <div class="mb-3">
    <label for="city" class="form-label ps-3"><strong>City</strong></label><br>
    <input type="text" id="city" class="form-control fs-5" name="city" placeholder=" City" required> 
    </div>
    <br>

    <div class="mb-3">
    <label for="state" class="form-label ps-3"><strong>State</strong></label><br>
    <input type="text" id="state" class="form-control fs-5" name="state" placeholder=" State" required> 
    </div>
    <br>

    <div class="mb-3">
    <label for="country" class="form-label ps-3"><strong>Nationality</strong></label><br>
    <input type="text" id="country" class="form-control fs-5" name="country" placeholder=" Country" required> 
    </div>
    <br>

    <div class="mb-3">
    <label for="occupation" class="form-label ps-3"><strong>Occupation</strong></label><br>
    <input type="text" id="occupation" class="form-control fs-5" name="occupation" placeholder=" Occupation" required> 
    </div>
    <br>

    <div class="mb-3">
    <label for="nextOfKin" class="form-label ps-3"><strong>Next of Kin's Name</strong></label><br>
    <input type="text" id="nextOfKin" class="form-control fs-5" name="nextOfKin" placeholder=" FirstName MiddleName LastName" required> 
    </div>
    <br>

    <div class="mb-3">
    <label for="kinsRel" class="form-label ps-3"><strong>Next of Kin's Relationship</strong></label><br>
    <input type="text" id="kinsRel" class="form-control fs-5" name="kinsRel" placeholder=" Next of Kin's Relationship" required> 
   </div>
   <br>

   <div class="mb-3">
    <label for="kinsAdd" class="form-label ps-3"><strong>Next of Kin's Address</strong></label><br>
    <input type="text" id="kinsAdd" class="form-control fs-5" name="kinsAdd" placeholder=" Next of Kin's Address" required> 
    </div>
    <br>

    <div class="mb-3">
    <label for="kinsphone" class="form-label ps-3"><strong>Next of Kin's Phone Number</strong></label><br>
    <input type="number" id="kinsphone" class="form-control fs-5" name="kinsphone" placeholder=" Next of Kin's Phone Number" required> 
    </div>
    <br>

    <div class="mb-3">
    <label for="pwd" class="form-label ps-3"><strong>Password</strong></label><br>
    <input type="text" id="pwd" class="form-control fs-5" name="pwd" placeholder=" Password"  required onfocus="this.type = 'password'" onblur="if (this.value == '') this.type = 'text'" >
    </div>

    <div class="mb-4">
    <label for="retypePwd" class="form-label ps-3"><strong>Re-type Password</strong></label><br>
    <input type="text" id="retypePwd" class="form-control fs-5" name="pwd" placeholder=" Password" required onfocus="this.type = 'password'" onblur="if (this.value == '') this.type = 'text'">
    </div>
    <br>
    
    <label for="file" class="form-label ps-3"><strong>Passport:</strong></label><br>
    <input type="file" class="form-control fs-5" name="file" id="file"><br>
    <a href="./index.php"><input type="submit" class="for-submit" value="Register"></a>
</div>
</form>


<section class="all-right">
    <div class="rights">
        <p>©2022 Orienal Bank. All Rights Reserved</p>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="./app.js"></script>
</body>
</html>