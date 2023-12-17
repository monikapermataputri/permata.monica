<?php 
require 'koneksi.php';
$result = mysqli_query($conn,'SELECT * FROM `login`');
$data = mysqli_fetch_assoc($result);
?>