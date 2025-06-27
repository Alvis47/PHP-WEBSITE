<?php
include_once "../code.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product Page</title>
  </head>
  <body>
    <h1>Add Product Page</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="../code.php" method="post" enctype="multipart/form-data">
                <label for=""><b>Product Name</b></label>
                <br>
                <br>
                <input type="text" name="proname" class="form-control">
                <br>
                <br>
                <label for=""><b>Product Price</b></label>
                <br>
                <br>
                <input type="text" name="proprice" class="form-control">
                <br>
                <br>
                <label for=""><b>Product Description</b></label>
                <br>
                <br>
                <input type="text" name="prodesp" class="form-control">
                <br>
                <br>
                <label for=""><b>Product Quality</b></label>
                <br>
                <br>
                <input type="text" name="proquality" class="form-control">
                <br>
                <br>
                <label for=""><b>Product Quantity</b></label>
                <br>
                <br>
                <input type="text" name="proqty" class="form-control">
                <br>
                <br>
                <label for=""><b>Choose Category</b></label>
                <br>
                <br>
                <select class="form-select" aria-label="Default select example" name="choosecat">
                  <option selected disabled>Select Category</option>
                  <?php
                  $getCategory=mysqli_query($connection,"select * from category");
                  foreach($getCategory as $row){
                    ?>
                    <option value="<?php echo $row['c_id']?>"><?php echo $row['c_name']?></option>
                    <?php
                  }
                  ?>
                  
                </select>
                <br>
                <br>
                <label for=""><b>Product Image</b></label>
                <br>
                <br>
                <input type="text" onclick="this.type='file'" name="proimage" class="form-control">
                <br>
                <button type="submit" name="addpro" class="btn btn-primary">+ Add Product</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>