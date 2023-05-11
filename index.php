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
    <table class="table">
        <h2  class="position-relative py-2 px-4">Tabel Users</h2>
        <a class="btn btn-primary" type="button" href="create.php" >Tambahkan</a>
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
          </tr>
        </thead>
        <tbody>

        <?php
        $no=0;
        $query=mysqli_query($koneksi, "SELECT * FROM users");
        while($row=mysqli_fetch_assoc($query)){
            ?>
            <tr>
              <th scope="row"><?php echo $no ?></th>
              <td><?php echo $row ['email']; ?></td>
              <td><?php echo $row ['name'] ?></td>
              <td><?php echo $row ['role'] ?></td>
              <td><?php echo $row ['avatar'] ?></td>
              <td><?php echo $row ['phone'] ?></td>
              <td><?php echo $row ['address'] ?></td>
              <td><?php echo $row ['created_at'] ?></td>  
              <td><?php echo $row ['updated_at'] ?></td>
              <td><div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-warning" type="button" >Edit</button>
                  <button class="btn btn-danger" type="button">Hapus</button>
                </div> </td>
            </tr>

<?php
        }

?>
                
         
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>



