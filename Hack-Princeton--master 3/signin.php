<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Assist</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a class="navbar-brand" href="signin.php">Code<span>Assist</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div>
        </div>
    </nav>
    

    </div>
    </div>
    <div class="banner">
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="banner-text text-center">
                        <div class="text-border">
                            <h2 class="text-dec">Useful | Reliable | Intelligent</h2>
                        </div>
                        <div class="intro-para text-center quote">
                            <p class="big-text">A Perfect Online Live Code Tutor!</p>
                            <p class="small-text">Having Trouble with Coding? <br> Or.... <br> Love To Help People With Coding? </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Banner-->
    <!--Testimonial-->
    <section id="testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2 class="white">Coach vs Student</h2>
                    <hr class="bottom-line bg-white">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-comment">
                        <p class="text-par">Coach</p>
                        <p class="text-name">Do you have experience in any of the following: Python, Ruby, Lua, HTML5, CSS3 or JavaScript. Join now to express and share your skills with students/learnes across the world looking for mentors!</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-comment">
                        <p class="text-par">Student</p>
                        <p class="text-name">Are you a seeker seeking for coding knowledge, need help on homework/assignments or projects? Join now to learn how to code from the simplest "Hello World" program to a complex program!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	</html>
	
	<!--/ Navigation bar-->
    <!--Modal box-->
	 <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tanush' && 
                  $_POST['password'] == '1234'){
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username""
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>
            <a href="./CoachOrStudent.php" class="button"><p style="text-align:center">Login</a>
         </form>
   
        </div>
    </div>
	
	<html>
    <!--/ Testimonial-->
    <!--Courses-->
    <section id="courses" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Courses</h2>
                    <p>Coachs help out on the following languages/frameworks:<br> Python, Lua, Ruby, HTML5, CSS3 and JavaScript.</p>
                    <hr class="bottom-line">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/course01.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Python</h3>
                            <p>Object-Orientated, High-Level programming language with dynamic semantics. Simple, Easy to Learn syntax!</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/course02.png" class="img-responsive">
                        <figcaption>
                            <h3>Lua</h3>
                            <p>Lightweight multi-paradigm programming language. Designed for embedded systems and clients!</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/ruby.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Ruby</h3>
                            <p>Dynamic, Reflective, Object-Orientated, General-Purpose programming language! Known as one of the Cleanest programming language out there.
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/html5.png" class="img-responsive">
                        <figcaption>
                            <h3>HTML5</h3>
                            <p>Markup Langauge for structure and presentation of World Wide Web contents.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/css.jpg" class="img-responsive">
                        <figcaption>
                            <h3>CSS3</h3>
                            <p>Stylesheet language used for describing the presantation of a document written in a markup language.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/js.jpg" class="img-responsive">
                        <figcaption>
                            <h3>JavaScript</h3>
                            <p>Cross-Platform, Object-Orientated Scripting language. A smalll and lightweight language. Can be combined with HTML5 and CSS3.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--/ Courses-->


    <!--Footer-->
    <!--<footer id="footer" class="footer">
        <div class="container text-center">

            <h3></h3>

            <form class="mc-trial row">
                <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
                    <div class=" controls">
                        <input name="name" placeholder="Enter Your Name" class="form-control" type="text">
                    </div>
                </div>
                <!-- End email input -->
    <!-- <div class="form-group col-md-3 col-sm-4">
                    <div class=" controls">
                        <input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
                    </div>
                </div>
                <!-- End email input -->
    <!--  <div class="col-md-2 col-sm-4">
                    <p>
                        <button name="submit" type="submit" class="btn btn-block btn-submit">
            Submit <i class="fa fa-arrow-right"></i></button>
                    </p>
                </div>
            </form>
            <!-- End newsletter-form -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>

</html>

