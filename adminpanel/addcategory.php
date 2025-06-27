<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Category Page</title>
  </head>
  <body>
    <h1>Add Category Page</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="../code.php" method="post" enctype="multipart/form-data">
                <label for=""><b>Add Category Name</b></label>
                <br>
                <br>
                <input type="text" name="catname" class="form-control">
                <br>
                <br>
                <label for=""><b>Add Category Image</b></label>
                <br>
                <br>
                <input type="text" onclick="this.type='file'" name="catimage" class="form-control">
                <br>
                <button type="submit" name="addcat" class="btn btn-primary">+ Add Category</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>