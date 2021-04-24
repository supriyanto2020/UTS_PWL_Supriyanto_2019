<h3>Data Pegawai</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Agama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Foto</th>
      <th scope="col">detail</th>
      <th scope="col">ubah</th>
      <th scope="col">hapus</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $
    <tr>
      <td><?=$no; ?></td>
      <td><?=$peg['nip']; ?></td>
      <td><?=$peg['nama']; ?></td>
      <td><?=$peg['email']; ?></td>
      <td><?=$peg['agama']; ?></td>
      <td><?=$peg['foto']; ?></td>
      <td><?=$peg['Katagori']; ?></td>
      <td>
      
      <from>
      <a href="index.php?hal=detailpegawai&id=<?= $peg['id']; ?>"
          class="btn btn-info">Detail</a>
      <a href=index.php?hal=formeditproduk&id=<?=$peg['id']; ?>"
          class="btn btn-warning">Ubah</a>
        <button name="proses" value="hapus"
            onclick="return confirm('Anda yakin Data dihapus?')"
            class=btn btn-danger">Hapus</button>
            <input type="hidden" name="idx" value="<?=$peg['id']; ?>" />
        </from>
      </td>
    </tr>
  <?php
  $no++;
}
?>
  </tbody>
</table>