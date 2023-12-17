<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nama=$_POST['nama'];
    $email=$_POST['email'];

    $sql="INSERT INTO login (nama,email) VALUES ('$nama','$email')";

    if ($conn->query($sql) === TRUE) {
        echo"
        <script>
            alert('Data berhasil ditambahkan');
            location.href='index.php'
        </script>
            ";
            var_dump($_POST);

        echo"Error: ".$sql."<br>".$conn->error;    
    }
}
?>
