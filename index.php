<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oriental Bank</title>
    <script src="https://kit.fontawesome.com/bc377a0067.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    
</head>

<body>
    <!-------------- NAV-LINKS ------------>

    <section id="header">
        <div class="bank">
            <h1><a href="https://orientalonlmb.org/" rel="home"><span>Oriental Bank</span></a></h1>
            <p>Personal Banking, Business Banking</p>
        </div>
        <div class="openBtn">
            <!-- <button class="openButton" onclick="openForm()"><i class="fa-solid fa-lock"></i> Client Login</button> -->
            <button class="openButton"><a href="./client_login.php"><i class="fa-solid fa-lock"></i> Client Login</a></button>
        </div>
    </section>
    
 <!--------------END OF NAV-LINKS ------------>
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
              <a class="nav-link text-white" href="#"> CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--------------END OF NAV-LINKS ------------>

    <!-- -------------- HERO ----------------- -->
    <SECtion id="hero">
        <div class="inner-hero">
            <h1>We have prove our customers <br>
                right on why they should <br>
                use our services </h1>
            <div class="client">
                <a href="signup.php"><button class="btn btn2"><i class="fa-solid fa-user-plus"></i> Create an account</button></a>
            </div>
        </div>
    </SECtion>
    <!-- --------------  END OF HERO ------------------->

    <!-- --------------- NUMBER STARTER -------------- -->
    <section id="number">
        <!-- single number -->
        <article class="num">
            <span class="number" data-value="90">0</span>
            <p>Countries Served</p>
        </article>
        <!-- END OF SINGLE NUMBER -->
        <!-- single number -->
        <article class="num">
            <span class="number" data-value="15">0K</span>
            <p>Consultants Worldwide</p>
        </article>
        <!-- END OF SINGLE NUMBER -->
        <article class="num">
            <span class="number" data-value="72">0</span>
            <p>Rewards & Accolades</p>
        </article>
        <!-- END OF SINGLE NUMBER -->
        <article class="num">
            <span class="number" data-value="20">0</span>
            <p>Years in Consulting</p>
        </article>
        <!-- END OF SINGLE NUMBER -->
    </section>
    <!-- ---------------  END OF NUMBER STARTER -------------- -->

    <!-- --------------- BANKING  -------------- -->
    <section>
        <div class="row">
            <div class="bank-col">
                <a href=""><i class="fa-solid fa-users"></i></a>
                <a href=""><h4>Personal Banking</h4></a>
                <p>Checking & Savings Accounts, Online & Mobile Banking,
                    Debit Cards, and more. Our products and services are
                    designed to fit your lifestyle.
                </p>
            </div>
            <div class="bank-col">
                <a href=""><i class="fa-regular fa-building"></i></a>
                <a href=""><h4>Business Banking</h4></a>
                <p>Business checking, business loans, merchant services,
                    treasury management, and more. See how we can help grow your business.
                </p>
            </div>
            <div class="bank-col">
                <a href=""><i class="fa-solid fa-house-chimney"></i></a>
                <a href=""><h4>Mortgage Loans</h4></a>
                <p>Revolving lines of credit, auto loans,
                    home improvement loans, mortgages, and more.
                    We want to help finance your needs.
                </p>
            </div>
        </div>
    </section>
    <!-- /* ****************** END OD BANKING ********************** */ -->


    <!-- /* ****************** WORKING PROCESS ********************** */ -->
    <section class="course" id="Courses">
        <div class="working-process-head">
        <h1>Working Process</h1>
        <h6>Workinghffhjhjdffjhgh</h6>
        <p>Oriental Bank understands that to help meet client challenges and <br>
           opportunities successfully in a global economy</p>
        </div>
        <div class="row">
            <div class="course-col">
                <a href="#"><i class="fa-solid fa-anchor"></i></a>
                <h3>Share Your Goal</h3>
                <p><b>Goal</b> gives our lives meaning.</p>
            </div>
            <div class="course-col">
                <a href="#"><i class="fa-solid fa-gear"></i></a>
                <h3>Find Challenges</h3>
                <p>Your character is formed by the <b>challenges</b> you face and overcome.</p>
            </div>
            <div class="course-col">
                <a href="#"><i class="fa-solid fa-globe"></i></a>
                <h3>Get a Solution</h3>
                <p>Focus on the <b>solution </b>, not on the problem.</p>
            </div>
        </div>

    </section>
    <!-- /* ****************** END OF WORKING PROCESS ********************** */ -->


    <!-- /* ****************** ABOUT US ********************** */ -->
    <section class="questions">
      
        <!-- <div class="title">
            <h1>FREQUENTLY ASKED QUESTIONS</h1>
            <p>ASKED</p>
        </div>  -->
        <!-- QUESTIONS -->
        <div class="section-center">
        <div class="title">
            <h1>FREQUENTLY ASKED QUESTIONS</h1>
            <p>ASKED</p>
        </div> 
            <!-- SINGLE QUESTION -->
            <article class="question">
            <!-- question-title -->
                <div class="question-title">
                   
                    <div class="question-btn">
                           <span class="plus-icon">
                           <i class="fa-solid fa-plus"></i>
                           </span>
                           <span class="minus-icon">
                           <i class="fa-solid fa-minus"></i>
                           </span>
                    </div>
                    <div class="question-header" >
                    <h5>How much can I borrow?</h5>
                    </div>
                </div>
                <!-- question text -->
                <div class="question-text">
                    <p>
                        There are no limitations to the amount you can borrow as far as
                        you have an asset that is equal or more than your requested amount.
                    </p>
                </div>
            </article>
            <!-- END OF SINGLE QUESTION -->

             <!-- SINGLE QUESTION -->
             <article class="question">
            <!-- question-title -->
                <div class="question-title">
                    <div type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="fa-solid fa-minus"></i>
                        </span>
                    </div>
                    <div class="question-header">
                    <h5>How can I refuse to accept the moratorium, 
                        if I received a message that the moratorium was approved,
                        but I do not want to take it?</h5>
                    </div>
                </div>
                <!-- question text -->
                <div class="question-text">
                    <p>
                    You can continue making your payments as usual.
                     If you have an automatic debit, keep your money available, and Oriental 
                    Bank will continue making the automatic debit for your loan.
                    </p>
                </div>
            </article>
            <!-- END OF SINGLE QUESTION -->

             <!-- SINGLE QUESTION -->
             <article class="question">
            <!-- question-title -->
                <div class="question-title">
                    <div type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="fa-solid fa-minus"></i>
                        </span>
                    </div>
                    <div class="question-header">
                    <h5>I received the email and/or text message stating that my moratorium
                         is in process, and that Oriental Bank will be contacting me.
                         What way will you be communicating with me?</h5>
                    </div>
                </div>
                <!-- question text -->
                <div class="question-text">
                    <p>
                    Once the evaluation process is complete, you will be receiving a statement by email, 
                    regular mail, or text message with the applicable terms and conditions. 
                    In case the moratorium requires additional evaluation, we will 
                    communicate with you to request the necessary documentation to evaluate it.
                    </p>
                </div>
            </article>
            <!-- END OF SINGLE QUESTION -->

             <!-- SINGLE QUESTION -->
             <article class="question">
            <!-- question-title -->
                <div class="question-title">
                    <div type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="fa-solid fa-minus"></i>
                        </span>
                    </div>
                    <div class="question-header">
                    <h5>I am covered by the Bankruptcy Law and received the email and/or
                         text message indicating that my moratorium is in process,
                         and they will be communicating with me.
                         Does the moratorium apply to me?</h5>
                    </div>
                </div>
                <!-- question text -->
                <div class="question-text">
                    <p>
                    If you receive such communication, it means that your request 
                    was referred to the Bankruptcy Area for validation and responses. 
                    If approved, you will be receiving a notification by 
                    email or regular mail with the applicable terms and conditions.
                    </p>
                </div>
            </article>
            <!-- END OF SINGLE QUESTION -->

             <!-- SINGLE QUESTION -->
             <article class="question">
            <!-- question-title -->
                <div class="question-title">
                    <div type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="fa-solid fa-plus"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="fa-solid fa-minus"></i>
                        </span>
                    </div>
                    <div class="question-header">
                    <h5>How are payments for the moratorium months rescheduled?</h5>
                    </div>
                </div>
                <!-- question text -->
                <div class="question-text">
                    <p>
                    They will be rescheduled into additional monthly payments after
                     the original loan maturity or at the end of any 
                     further moratorium previously granted to you. Also, this moratorium will not 
                     extend to any optional insurance coverage financed through or in 
                     connection with your loan, so you will be 
                    responsible for extending the insurance coverage when necessary.
                    </p>
                </div>
            </article>
            <!-- END OF SINGLE QUESTION -->

        </div>
        <div class="team">
            <div class="title">
            <h1>ABOUT US</h1>
            <p>ABOU</p>
            </div>
            <div class="about-us">
            <img src="about-us.jpg" alt="">
            </div>
           <h4>We are a global management consulting firm that serves a 
               private, public and social business  sector.</h4>
            <p>We help our client make significant and realize their most important goals. 
               Our <br> world is on point, with technology transforming our clients, our profession,
               and <br>society at large. Experience right to your home or office. 
               Our design <br>professionals are equipped to help you determine the products 
               and work best <br> for our customers. Over the last five years we have completed almost 4,000 <br> 
               project for Public Sectors, international governments and public sector bodies.</p>
        </div>
    </section>
    <!-- /* ****************** END OF ABOUT US ********************** */ -->



<!-- /* ****************** CONTACT US ********************** */ -->

    <section class="contact-us">
        <div>
            <h3>We help our clients make significant and realize their most important goals.</h3>
        </div>
        <div class="tap-in">
           <button class="btn btn4"><a href="#">Contact us</a></button>
        </div>
    </section>
<!-- /* ****************** END OF CONTACT US ********************** */ -->


<!--**************************** GOOGLE MAP**************************** -->

    
    <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070396.444427787!2d3.3771030999227443!3d9.00676967681728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1696426859534!5m2!1sen!2sng"
         width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<!--****************************END OF GOOGLE MAP**************************** -->


<!---------------------------- BANKING SERVICES ----------------->
   <section class="bank-service-provider">
    <h3>WE ARE EXPERIENCED BANKING SERVICES PROVIDER</h3>
    <div class="threeDivs">
       <div class="union">
        <img src="airpak.jpg" alt="">
        <h4>Western Union</h4>
        <p>Checking & Savings Accounts, Online & Mobile <br>Banking, Debit Cards, and more.
           Our products <br>and services are designed to fit your lifestyle.</p>
       </div>
       <div class="union">
        <img src="banksecurity.jpg" alt="">
        <h4>Security Center</h4>
        <p>Stay alert and up-to-date so you can stay <br>protected!</p>
       </div>
       <div class="union">
        <img src="contact-us.jpg" alt="">
        <h4>Contact Us</h4>
        <p>Live Chat Mon - Sat 7am - 8pm</p>
       </div>
    </div>
  </section>
<!---------------------------- END OF BANKING SERVICES ----------------->

<!---------------------------- ABOUT US ----------------->
<section class="oriental-bank-service">
    <div class="row">
        <div class="col">
            <h4>ABOUT US</h4>
            <!-- <h6>aboutmdj</h6> -->
            <p>Oriental Bank is one of the world’s best business consulting firms. <br>
               We help global leaders with their organization’s most critical issues and opportunities</p>
        </div>
        <div class="col">
            <h4>CONTACT US</h4>
            <!-- <h6>helloworld</h6> -->
            <br><br>
            <button class="appiontment"><a href="#"><i class="fa-solid fa-paper-plane"></i> MAKE AN APPIONTMENT</a></button>
        </div>
     </div>
     <!-- <div class="row">
        <div class="border"><p>hello world Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, 
            placeat! Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p></div>
        </div> -->
     <div class="row">
        <div class="col1">
            <p>Privacy Policy</p>
        </div>
     <div class="col2">
        <a href=""><i class="fa-brands fa-facebook custom-icon facebook-icon"></i></a>
        <a href=""><i class="fa-brands fa-twitter custom-icon twitter-icon"></i></a>
        <a href=""><i class="fa-brands fa-youtube custom-icon youtube-icon"></i></a>
        <a href=""><i class="fa-brands fa-linkedin-in custom-icon linkedin-icon"></i></a>
        <a href=""><i class="fa-brands fa-instagram custom-icon instagram-icon"></i></a>
     </div>
    </div>
</section>
<!---------------------------- END OF ABOUT US ----------------->


<!-- RIGHT -->

<section class="all-right">
    <div class="rights">
        <p>©2022 Orienal Bank. All Rights Reserved</p>
    </div>
</section>
<!-- RIGHT -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./app.js"></script>
</body>

</html>





