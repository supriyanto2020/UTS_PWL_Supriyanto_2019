<?php
require_once 'models/pegawai.php';
//tangkap request id di url
$id = $_REQUEST['id'];
$obj = new pegawai();
print_r($rs); exit();
?>
<div class="card" style="width: 18rem;">
  <img src="image/<?= $rs['foto'] ?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama'] ?></h5>
    <p class="card-text">
        nip : <?= $rs['nip'] ?>
        <br/>agama : <?= $rs['agama'] ?>
        <br/>email : email <?= ($rs['email'] ?>
        <br/>divisi : <?= $rs['divisi'] ?>
        <br/>Kategori : <? $rs['Kategori'] ?>
      </p>
    <a href="#" class="index.php?hal=dataPegawai">Go Back</a>
  </div>
</div>