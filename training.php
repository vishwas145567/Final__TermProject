<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training Sessions</title>
  <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="scss/bootstrap.scss" />
    <link rel="stylesheet" href="css/image.css" />
    <link rel="stylesheet" href="css/footer.css" />
  <style>
    body {
      background-image: url("images/man-2604149_1280.jpg");  
      background-size: cover;
      background-position: center;
      font-family: sans-serif;
      margin: 0;
    }
    .training-content {
      width: 600px;
      margin: 100px auto;
      padding: 30px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 5px;
    }
    .training-points {
      margin-top: 20px;
    }
    .training-points li {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<header>
      <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <i class="fas fa-dumbbell fa-2x mx-3"></i>Vishwas Fitness</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-align-right text-light"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html"
                  >HOME
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="loginform.php">LogIn </a>
              </li>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signupform.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">LogOut</a>
              </li>
            </ul>
          </div>
        </nav>

  <div class="training-content">
    <h1>Welcome to Training Sessions!</h1>
    <p>Get ready to achieve your fitness goals with our comprehensive training programs.</p>
    <ul class="training-points">
      <li>Personalized training plans based on your goals and experience.</li>
      <li>Expert guidance from certified trainers.</li>
      <li>A variety of equipment and classes to keep you motivated.</li>
      <li>Track your progress and celebrate your achievements.</li>
    </ul>
  </div>

  
</body>
<!--this is footer-->
<footer>
    <div class="footerContainer">
      <div class="socialIcons">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-twitter"></i></a>
        <a href=""><i class="fa-brands fa-google-plus"></i></a>
        <a href=""><i class="fa-brands fa-youtube"></i></a>
      </div>
      <div class="footerNav">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">News</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="">our Team</a></li>
        </ul>
      </div>
    </div>
    <div class="footerBottom">
      <p>Copyright &copy;2023<span class="designer"></span></p>
    </div>
  </footer>
</html>
