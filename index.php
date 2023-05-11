<?php
include 'koneksi.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h2  class="position-relative py-2 px-4">Tabel Users</h2>
    <a class="btn btn-primary" type="button" href="create.php" >Tambahkan</a>

  <div class="row g-3">




    <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NAMA</th>
            <th scope="col">ROLE</th>
            <th scope="col">AVATAR</th>
            <th scope="col">PHONE</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">CREATED </th>
            <th scope="col">UPDATE</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>

        <?php


        $no=0;
        $query=mysqli_query($koneksi, "SELECT * FROM users");
        while($row=mysqli_fetch_assoc($query)){
          $no++;
            $id=$row['id'];
            $email=$row['email']; 
            $name=$row ['name']; 
            $role= $row ['role'];
            $avatar=$row ['avatar'];
            $phone=$row ['phone']; 
            $address= $row ['address']; 
            $password= $row ['password']; 
             $created=$row ['created_at'];   
            $updated= $row ['updated_at'];
           echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$email.'</td>
              <td>'.$name.'</td>
              <td>'.$role.'</td>
              <td>'.$avatar.'</td>
              <td>'.$phone.'</td>
              <td>'.$address.'</td>
              <td>'.$password.'</td>
              <td>'.$created.'</td>  
              <td>'.$updated.'</td>
              <td><div class="d-grid gap-2 d-md-block">
              <button class="btn btn-warning" type="button" >Edit</button>
              <button class="btn btn-danger" type="button" ><a href="delete.php?deleteid='.$id.'">Delete</a></button>
              </div> </td>
              </tr>'
              
              ?>
<?php
        }

?>
                
         
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </div>
  </body>
</html>



