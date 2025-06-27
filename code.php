<?php

// connection with database

$connection= mysqli_connect("localhost","root","","php");

// session use and start

include_once "session.php";

// if($connection){
//     echo "working";
// }

// crud operations
// insert

if(isset($_POST['datainsert'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // file uploading code 

    $file_name = $_FILES['profile_pic']['name'];
    $file_size = $_FILES['profile_pic']['size'];
    $file_tmp_name = $_FILES['profile_pic']['tmp_name'];
    $file_type =pathinfo($file_name,PATHINFO_EXTENSION);

    $destination="images/".$file_name;

    if($file_type == "jpg" || $file_type == "jpeg" || $file_type == "png"){
        // give data here into bytes
        if($file_size <= 2000000){

            if(move_uploaded_file($file_tmp_name,$destination)){

                $query = mysqli_query($connection,"insert into students (name,email,password,image) values ('$name','$email','$password','$file_name')");

            if($query){
            echo "<script>
            alert('Your data inserted successfully')
            location.assign('form.php')
            </script>";
    }
        }
    }
    else{
        echo "<script>
        alert('File must be 2MB or less than 2MB')
        location.assign('form.php')
        </script>";
    }
}
else{
    echo "<script>
    alert('File must be jpg,png and jpeg')
    location.assign('form.php')
    </script>";
}
}


// delete code modal

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $delete_query=mysqli_query($connection,"delete from register where id = '$id' ");

    if($delete_query){
        echo "<script>
        alert('Your data deleted successfully!')
        location.assign('adminpanel/public.php?index')
        </script>";
    }
}


// update code modal

if(isset($_POST['update'])){
    $update_id = $_POST['id'];
    $update_username = $_POST['username'];
    $update_useremail = $_POST['useremail'];
    $update_userpassword = $_POST['userpassword'];


    $update_query = mysqli_query($connection,"update register set name = '$update_username', email = '$update_useremail', password = '$update_userpassword'
    where id = '$update_id'");

    if($update_query){
        echo "<script>
        alert('Your data updated successfully!')
        location.assign('adminpanel/public.php?index')
        </script>";
    }
}


// Proper code start here

// registeration form code

if(isset($_POST['register'])){
    $name = $_POST['userName'];
    $email = $_POST['useremail'];
    $password = $_POST['password'];
    $role = "user";


    $checkemail=mysqli_query($connection,"select * from register where email = '$email'");

    if(mysqli_num_rows($checkemail) > 0){
    echo "<script>
        alert('this email is already exist ')
        location.assign('register.php')
        </script>";
   }
    else { 
        $registerdata = mysqli_query($connection,"insert into register (name,email,password,role)values ('$name','$email','$password','$role')");
    }
    if($registerdata){
        // echo "<script>
        // alert('Registered Successfully!')
        // location.assign('register.php')
        // </script>";
        $_SESSION['message']="Account created successfully!";
        header('location:register.php');
    }
}

// login form code

if(isset($_POST['login'])){
    $useremail = $_POST['email'];
    $userpassword = $_POST['userpassword'];

    $matchlogin = mysqli_query($connection,"select * from register where 
    email = '$useremail' && password = '$userpassword'");

    if(mysqli_num_rows($matchlogin) > 0){
        $data = mysqli_fetch_assoc($matchlogin);
        if($data['role']=="admin"){
            // echo "welcome admin panel";
            $_SESSION['adminname']=$data['name'];
            $_SESSION['id']=$data['id'];
            header('location:adminpanel/public.php?index');
        }
        else{
            // echo "welcome user";
            $_SESSION['id']=$data['id'];
            header('location:index.php');
        }
    }
    else{
        echo "<script>
        alert('your email or password is incorrect please try again!')
        location.assign('login.php')
        </script>";
    }
}


// add catgory code

if(isset($_POST['addcat'])){
    $catname = $_POST['catname'];

    // image uploading code
    $file_name = $_FILES['catimage']['name'];
    $file_size = $_FILES['catimage']['size'];
    $file_tmp_name = $_FILES['catimage']['tmp_name'];
    $file_type =pathinfo($file_name,PATHINFO_EXTENSION);

    $destination="images/".$file_name;

    // if($file_type == "jpg" || $file_type == "jpeg" || $file_type == "png"){
    //     // give data here into bytes
    //     if($file_size <= 2000000){

            if(move_uploaded_file($file_tmp_name,$destination)){

                $query = mysqli_query($connection,"insert into category (c_name,c_image) values ('$catname','$file_name')");

            if($query){
            echo "<script>
            alert('Add category successfully')
            location.assign('adminpanel/public.php?addcategory')
            </script>";
    }
        }
    // }
//     else{
//         echo "<script>
//         alert('File must be 2MB or less than 2MB')
//         location.assign('adminpanel/public.php?addcategory')
//         </script>";
//     }
// }
// else{
//     echo "<script>
//     alert('File must be jpg,png and jpeg')
//     location.assign('adminpanel/public.php?addcategory')
//     </script>";
// }
}



// add product code

if(isset($_POST['addpro'])){
    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $prodesp = $_POST['prodesp'];
    $proquality = $_POST['proquality'];
    $proqty = $_POST['proqty'];
    $choosecat = $_POST['choosecat'];

    // image uploading code
    $file_name = $_FILES['proimage']['name'];
    $file_size = $_FILES['proimage']['size'];
    $file_tmp_name = $_FILES['proimage']['tmp_name'];
    $file_type =pathinfo($file_name,PATHINFO_EXTENSION);

    $destination="images/".$file_name;

    // if($file_type == "jpg" || $file_type == "jpeg" || $file_type == "png"){
    //     // give data here into bytes
    //     if($file_size <= 2000000){

            if(move_uploaded_file($file_tmp_name,$destination)){

                $query = mysqli_query($connection,"insert into product (p_name,p_price,p_description,p_quality,p_qty,category_id,p_image) values ('$proname','$proprice','$prodesp','$proquality','$proqty','$choosecat','$file_name')");

            if($query){
            echo "<script>
            alert('Add product successfully')
            location.assign('adminpanel/public.php?addproduct')
            </script>";
    }
        }
    // }
//     else{
//         echo "<script>
//         alert('File must be 2MB or less than 2MB')
//         location.assign('adminpanel/public.php?addproduct')
//         </script>";
//     }
// }
// else{
//     echo "<script>
//     alert('File must be jpg,png and jpeg')
//     location.assign('adminpanel/public.php?addproduct')
//     </script>";
// }
}


// add to cart code

if(isset($_POST['addtocart'])){
    $user_data = $_SESSION['id'];
    $p_id = $_POST['pro_id'];
    $p_qty = $_POST['num-product'];
    $p_price = $_POST['proprice'];


    $addtocart=mysqli_query($connection,"insert into add_to_cart (users_id,product_id,product_qty,product_price) values ('$user_data','$p_id','$p_qty','$p_price')");

    if($addtocart){
        echo "<script>
        alert('Add to cart successfully')
        location.assign('product-detail.php?id=.'$p_id'')
        </script>";

    }
}


// final order place checkout code

if(isset($_POST['checkout'])){
    $user_data = $_SESSION['id'];
    $grand_amount =$_SESSION['g_total'];

    $getAddtoCart=mysqli_query($connection,"select * from add_to_cart where users_id='$user_data'");
    foreach($getAddtoCart as $dataCart){

        $ordersPlace = mysqli_query($connection,"insert into order_place (customer_id,products_id,products_price,products_qty,grand_amount) values ('$user_data','".$dataCart['product_id']."','".$dataCart['product_price']."','".$dataCart['product_qty']."','$grand_amount')");

        if($ordersPlace){
            echo "<script>
            alert('Your order place successfully. Thanl You!')
            location.assign('shoping-cart.php')
            </script>";
        }
    }


    // data delete oin ad to cart table

    $removeAddCart = mysqli_query($connection,"delete from add_to_cart where users_id = '$user_data'");
}
?>