<?php
include 'koneksi.php';


if ( isset($_POST['submit'] ) ) {
    $email= $_POST["email"];
    $name= $_POST["name"];
    $role=$_POST["role"];
    $avatar=$_POST["avatar"];
    $phone=$_POST["phone"];
    $address=$_POST["alamat"];
    $password=$_POST["password"];
    $created=$_POST["created"];
    $updated=$_POST["update"];

    $sql = "INSERT INTO `users` (email, name, role, avatar, phone, address, password, created_at, updated_at) VALUE
    ('$email', '$name', '$role', '$avatar', '$phone', '$address', '$password', '$created', '$updated')" ;
    $result = mysqli_query($koneksi,$sql);


 if ($result) {
    echo "data sukses";
 }else{
    die(mysqli_error($koneksi));
 }




              
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <meta$phone="";
    $password="";
    $created="";
    $updated=""; name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   <div class="container my-5">
    <h2>Tambahkan user</h2>

    <?php   

    ?>
    <form method="post">
    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="email" placeholder="masukan email anda dengan"value="">
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">Nama</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="name" value="" >
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">Role</label>
        <div class="col-sm-6">
        <select class="form-select" aria-label="Default select example" name="role"value="">
  <option selected>Pilih role anda</option>
  <option value="admin">admin</option>
  <option value="staf">staf</option>
 
</select>
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">avatar</label>
        <div class="col-sm-6">
            <input type="file" class="form-control" name="avatar" value="">
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">phone</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="phone" value="">
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="alamat" value="">
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="password" value="">
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">created</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" name="created" value="">
        </div> 
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-3 col-form-label">updated</label>
        <div class="col-sm-6">
            <input type="date" class="form-control" name="update" value="">
        </div> 
    </div>

    

<div class="row mb-3">
      <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
      </div>
      <div class="col-sm-3 d-grid">
        <a href="index.php" class="btn btn-outline-primary" role="button"></a>
      </div>
    </div>

    </form>
   </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>