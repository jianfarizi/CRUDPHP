<?php
$koneksi = mysqli_connect("localhost", "root", "", "magang");


if (!$koneksi){
    die(mysqli_error($koneksi));
}
    


?>