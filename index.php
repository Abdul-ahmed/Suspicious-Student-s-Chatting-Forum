<?php
  session_start();
  include_once 'header.php';
?>
  <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img src="img/sociallogo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a href="index.php" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                      <a href="signup.php" class="nav-link">Sign Up</a>
                  </li>
                  <li class="nav-item">
                      <a href="aboutforum.php" class="nav-link">About Forum</a>
                  </li>
                  <li class="nav-item">
                      <a href="tc.php" class="nav-link">Terms & Condition</a>
                  </li>
                  
              </ul>
            </div>
        </div>
      </nav>

      <div id="intro" class="view hm-black-strong">
        <div class="caption text-center">
          <h1>WELCOME TO KWARA STATE POLYTECHNIC STUDENTS' FORUM</h1>
          <h3>Already Gotten Matric No.:</h3>
          <a href="signin.php" class="btn btn-outline-white">Sign In<i class="fas fa-sign-in-alt ml-2"></i></a>
        </div>
      </div>
  </header>

<?php
    include_once 'footer.php';
?>