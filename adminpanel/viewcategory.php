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

    <title>Category Show</title>
  </head>
  <body>
    <h1 class="bg-success text-center">Category Show</h1>
    <div class="container">
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CATEGORY Name</th>
      <th scope="col">CATEGORY IMAGE</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = mysqli_query($connection,"select * from category");

    foreach($query as $data){
        ?>
        <tr>
      <th scope="row"><?php echo $data['c_id']?></th>
      <td><?php echo $data['c_name']?></td>
      <td><img src="../images/<?php echo $data['c_image']?>" alt="Not Found" width="100px" height="100px"></td>
      <td>
        <!--delete button code  -->
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $data['c_id']?>">
  Delete
</button>
<!-- update button code -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update<?php echo $data['c_id']?>">
  Update
</button>
</td>
    </tr>

    <!-- delete modal code -->
     <!-- Modal -->
<div class="modal fade" id="delete<?php echo $data['c_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="../code.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Box</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Are you sure want to delete your data??</h5>
        <input type="hidden" name="id" class="form-control" value="<?php echo $data['id']?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>





 <!-- update modal code -->
     <!-- Modal -->
     <div class="modal fade" id="update<?php echo $data['c_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="../code.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Box</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Update your data</h5>
        <br>

        <input type="hidden" name="id" class="form-control" value="<?php echo $data['id']?>">

        <label><b>Name:</b></label>
        <input type="text" name="username" class="form-control" value="<?php echo $data['name']?>">

        <br>
        <label><b>Email:</b></label>
        <input type="email" name="useremail" class="form-control" value="<?php echo $data['email']?>">
        <br>
        <label><b>Password:</b></label>
        <input type="text" name="userpassword" class="form-control" value="<?php echo $data['password']?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

        <?php
    }
    ?>
    
   
  </tbody>
</table>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>