<?php
class pegawai{
//member1 var
private $koneksi;
//member2 konstruktor
public function __construct()
{
    global $dbh; //instance obj dbkoneksi.php
    $this->koneksi = $dbh;
}
//member3 method CRUD
public function dataPegawai(){
    $sql = "SELECT pegawai.*, divisi.nama as kategori
            FROM pegawai INNER JOIN divisi
            ON divisi.id = pegawai.iddivisi";
    //prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
public function datadivisi(){
        $sql = "SELECT  * from divisi";
        //fungsi query eksekusi query dan ambil datanya
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data){
            $sql = "INSERT INTO pegawai(nip,nama,email,agama,iddivisi,foto) VALUES (?,?,?,?,?,?,)";
            //prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        <?php
class Produk{
/*
Kode sebelumnya
*/
//member3 method tampilkan detail data
public function getpegawai($id){
        $sql = "SELECT pegawai.*, divisi.nama AS kategori 
				  FROM pegawai
                INNER JOIN divisi ON divisi.id = pegawai.idjenis
                WHERE pegawai.id = ?";
        //prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

public function ubah($data){
        $sql = "UPDATE pegawai SET nip=?,nama=?,email=?,agama=?,iddivisi=?,foto=? WHERE id=?"; 
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
/*
Kode sesudahnya
*/
}
