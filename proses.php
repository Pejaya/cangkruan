<?php

$nama=$_REQUEST['nama'];
$email=$_REQUEST['email'];
$jk=$_REQUEST['jk'];
$telp=$_REQUEST['telp'];
$kerja=$_REQUEST['kerja'];
$asalkerja=$_REQUEST['asalkerja'];

require_once('config.inc.php');

$file = 'files/pendaftaran.pdf';

if (file_exists($file)) 
{
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
}

?>