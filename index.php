<?php
$nama=$_REQUEST['nama'];
$email=$_REQUEST['email'];
$jk=$_REQUEST['jk'];
$telp=$_REQUEST['telp'];
$kerja=$_REQUEST['kerja'];
$asalkerja=$_REQUEST['asalkerja'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cangkru'an KLAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Cangkru'an KLAS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">Home</a>
                    </li>
                    <li>
                        <a href="#contact">Bottom</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 col-sm-push-1  col-sm-6">
                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Berbagi Pengalaman Menjadi System Adinistrator</h2>
                    <p class="lead">
                        Halo rek , kali ini Cangkruan KLAS edisi september 2017, kita akan mengupas pengalaman pembicara selama menjadi system administrator.<br><br> Penasaran dengan keseruan acara kali ini?<br> Yuk ikutan :D<br><br> 
Tanggal / Jam :<br>
30 September 2017 . Jam 10.00 - selesai<br><br>

Tempat :<br>
FAKULTAS ILMU KOMPUTER - UNIVERSITAS NAROTAMA<br>
Jl. Arief Rachman Hakim No.51, Surabaya, Jawa Timur 60117<br>
(031) 5946404<br>
Peta Lokasi https://s.id/4b9<br><br>

Pembicara :<br>
~ Andy Hidayat<br>
~ David Piragasan<br><br>

Silakan Registrasi di halaman ini<br><br>

Contact Person :<br>
Darian Rizaluddin (085-725-100-763)<br><br>

Untuk kehadiran tolong segera konfirmasi via kontak person sesuai keterangan di poster.<br>  
Dan Tolong hadir tepat waktu ya :D<br><br>

                    </p>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Form Pendaftaran</h2>
                    <p class="lead">
                    	<form method=post action=proses.php>
                        <table>
                         <tr>
                          <td>
                          <table>
                           <tr height=40>
                            <td>Nama :</td><td width=80></td><td><input type=text name=nama value=<?php echo $nama; ?>></td>
                           </tr>
                           <tr height=40>
                            <td>E-Mail :</td><td width=80></td><td><input type=email name=email value=<?php echo $email; ?>></td>
                           </tr>
                           <tr height=40>
                            <td>Jenis Kelamin :</td><td width=10></td><td><input type=radio name=jk value=Laki-laki>Laki-laki<input type=radio name=jk value=Perempuan>Perempuan</td>
                           </tr>
                           <tr height=40>
                            <td>Telepon :</td><td width=70></td><td><input type=text name=telp value=<?php echo $telp; ?>></td>
                           </tr>
                           <tr height=40>
                            <td>Pekerjaan :</td><td width=60></td><td><select name=kerja>
                            <option value='Admin Sistem' <?php if ($prodi=='Admin Sistem') {echo 'selected';}?>>Admin Sistem</option>
                <option value='Akuntansi'>Akuntansi</option>
                <option value='Customer Service'>Customer Service</option>
                <option value='Dosen'>Dosen</option>
                <option value='Finansial'>Finansial</option>
                <option value='Guru'>Guru</option>
                <option value='Informatika'>Informatika</option>
                <option value='Kontraktor'>Kontraktor</option>
                <option value='Konsultan'>Konsultan</option>
                <option value='Logistik'>Logistik</option>
                <option value='Mahasiswa'>Mahasiswa</option>
                <option value='Marketing'>Marketing</option>
                <option value='Manajemen'>Manajemen</option>
                <option value='Mekanik'>Mekanik</option>
                <option value='Multimedia'>Multimedia</option>
                <option value='Network Administrator'>Network Administrator</option>
                <option value='Notaris'>Notaris</option>
                <option value='Operator Mesin'>Operator Mesin</option>
                <option value='Pelajar'>Pelajar</option>
                <option value='Pengacara'>Pengacara</option>
                <option value='Public Relation'>Public Relation</option>
                <option value='Resepsionis'>Resepsionis</option>
                <option value='Sekretatis'>Sekretaris</option>
                <option value='Software Developer'>Software Developer</option>
                <option value='Telekomunikasi'>Telekomunikasi</option>
                <option value='Other'>Other</option></select></td>
                           </tr>
                           <tr height=40>
                            <td>Asal Sekolah / Kampus / Perusahaan :</td><td width=10></td><td><textarea name=asalkerja><?php echo $asalkerja; ?></textarea></span></td>
                           </tr>
                          </table>
                          <table>
                          <tr height=80>
                            <td width=295></td><td><input type=submit value=submit></a></td><td width=50></td><td><input type=reset value=reset></td>
                          </tr>
                          </table>
                          </td>
                         </tr>
                        </table> 
                        </form>
                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/poster.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-11">
                    <h2><u>Nek nggolek'i info liyane :<u></h2>
                
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://klas.or.id" class="btn btn-default btn-lg"><i class="fa fa-globe fa-fw"></i> <span class="network-name">Website</span></a>
                        </li>
                        <li>
                            <a href="mailto:info@klas.or.id" class="btn btn-default btn-lg"><i class="fa fa-google fa-fw"></i> <span class="network-name">E-Mail</span></a>
                        </li>
                        <li>
                            <a href="https://facebook.com/groups/KLAS.Activity" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">Copyright &copy; Cangkru'an KLAS. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
