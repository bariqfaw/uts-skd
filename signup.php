<!DOCTYPE html>
<html>
  <head>
    <title>REGISTER | UTS</title>
    <link rel="stylesheet" type="text/css" href="css/style.css  " />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <img class="wave" src="img/wave.png" />
    <div class="container">
      <div class="img">
        <img src="img/student.svg" />
      </div>
      <div class="login-content">
        <form action="signup_process.php" method="POST">
          <img src="img/schools.svg" />
          <h2 class="title">Register</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Nama Lengkap</h5>
              <input type="text" name="fullname" class="input" />
            </div>
          </div>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Username</h5>
              <input type="text" name="username" class="input" />
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
              <input type="password" name="password" class="input" />
            </div>
          </div>
          <input type="submit" name="submit" class="btn" value="Register" />
          <p>
            Have an account?
            <a href="index.php" style="text-align: center;">Login</a>
          </p>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
