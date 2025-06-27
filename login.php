<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <div class="wrapper">
        <div class="logo">
            <img src="elogo.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Login Form
        </div>
        <form class="p-3 mt-3" action="code.php" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="userName" placeholder="Useremail">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="userpassword" id="pwd" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            Create Account? <a href="register.php">Sign up</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>