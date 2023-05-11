<?php 
include 'koneksi.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `users` WHERE id=$id";
    $result=mysqli_query($koneksi,$sql);
    if ($result){

        // echo"delete berhasil";
        header('location:index.php');
    }else{
        die(mysqli_error($koneksi));
    }
}





?>