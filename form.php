<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    <h1 class="bg-warning text-center">Form</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="code.php" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Enter your name" name="name" class="form-control">
                <br>
                <input type="email" placeholder="Enter your email" name="email" class="form-control">
                <br>
                <input type="text" placeholder="Enter your password" name="password" class="form-control">
                <br>
                <input type="text" onclick="this.type='file'" name="profile_pic" placeholder="Choose File" class="form-control">
                <br>
                <button type="submit" name="datainsert" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>