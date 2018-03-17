<?php
$_7fe116ac06b6078d0c6ef403f3bbdc28 = 'localhost'; # hostname
$_43ea23fc53c527d7ec2c5826a584b6d4 = 'root'; # username
$_2bc48b257d5d15a0a235f444fbec995f = ''; # password
$_bddc31963757f5f11835091cbdecb7ee = 'ujian'; # nama database
$_ac0af69b48420b435c2758a05bc80879 = 'yfu78-d2at2-8itg5-5h5ie'; /* serial number */
$_539382bd5884fdddd8e9a5a320c5ee1a = 'Panel Ujian'; /* nama sekolah/ instansi */

$_e343e503cb9623b59b7d7c30484aa086 = 'http://localhost/ujiansmk/'; # alamat web
$_28cd827e9a3b578c3cfbcd7f0fd18d96 = 'http://localhost/ujiansmk/adminujian/'; # alamat web admin
$_d3966c8b4bae569a925f1c80e9e8147d = 'http://localhost/ujiansmk/guru/'; # alamat web guru
$_714ca9eb87223ad2d6815f90173fde78 = '/'; # alamat path web

$_000b935637cea64cc7810fb0077f5ff1 = @mysqli_connect($_7fe116ac06b6078d0c6ef403f3bbdc28,$_43ea23fc53c527d7ec2c5826a584b6d4,$_2bc48b257d5d15a0a235f444fbec995f) or die('<link href="'.$_e343e503cb9623b59b7d7c30484aa086.'css/bootstrap.css" rel="stylesheet"><center><div class="alert alert-danger"><strong>Error!</strong> Koneksi ke server database tidak berhasil.</div></center>');
mysqli_select_db($_000b935637cea64cc7810fb0077f5ff1,$_bddc31963757f5f11835091cbdecb7ee) or die('<link href="'.$_e343e503cb9623b59b7d7c30484aa086.'css/bootstrap.css" rel="stylesheet"><center><div class="alert alert-danger"><strong>Error!</strong> Database tidak ditemukan.</div></center>');

?>