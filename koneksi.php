<?php
$koneksi =new mysqli("localhost", "root", "", "magang");


if (!$koneksi){
    die(mysqli_error($koneksi));
}
    


?>