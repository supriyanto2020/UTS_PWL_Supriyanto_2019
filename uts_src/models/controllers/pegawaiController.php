<?php
require_once '../koneksi.php’;
require_once '../models/pegawai.php';
//1.tangkap request form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$agama = $_POST['email'];
$keterangan = $_POST['email '];
$iddivisi = $_POST[‘iddivisi'];
$foto = $_POST['foto’]; 
//2.simpan ke sebuah array
$data = [ //ada 7 data
	$nip,$nama,$email,$agama,$keterangan,
	$iddivisi,$foto
];
