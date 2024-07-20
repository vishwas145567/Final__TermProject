<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
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
        background-image: url("images/AF_HERO_PullDay-1024x683.jpg");
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
      }
      .signup-form {
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.8);
      }
      .signup-button {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
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
                <a class="nav-link" href="About.php">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
    <h1>Sign Up</h1>
    <div class="signup-form">
      <form method="post" action="recieve.php" id="signform">
        <label for="Name">First and Last Name:</label>
        <input
          type="text"
          id="Name"
          name="Name"
          required
        /><br /><br />
        <label for="username">username:</label>
        <input type="text" id="username" name="username" required /><br /><br />
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required /><br /><br />
        <label for="password">Password:</label>
        <input
          type="password"
          id="password"
          name="Password"
          required
        /><br /><br />
        <label for="confirm_password">Confirm_Password:</label>
        <input
          type="password"
          id="confirm_password"
          name="confirm_password"
          required
        /><br /><br />
        <input type="submit" value="Sign Up" class="signup-button" />
      </form>
    </div>
  </body>
  <script>
          document.getElementById('signform').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
             const confirmPassword = document.getElementById('confirm_password').value;
      
    if (password !== confirmPassword) 
    {
      event.preventDefault();
      alert('Passwords do not match!');
    }   });
</script>
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
        <li><a href="index.html">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="footerBottom">
      <p>Copyright &copy;2023<span class="designer"></span></p>
    </div>
  </footer>
</html>