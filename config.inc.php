<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','pendaftaran');

$conn = mysqli_connect(HOST,USER,PASS,DB);

if (!$conn) {
    die("Unable to connect : " . mysqli_connect_error());
}
echo "";

$sql = "INSERT INTO peserta (Nama, Email, Jenis_Kelamin, Telepon, Pekerjaan, Asal_Pekerjaan) VALUES ('$nama', '$email', '$jk', '$telp', '$kerja', '$asalkerja')";

if (mysqli_query($conn, $sql)) 
{
    echo ""; 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>