<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tmp_lahir = $_POST['tmp_lahir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_email= $_POST['email'];
   $_kartu_id= $_POST['kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data['kode']=$_kode; // ? 1
   $ar_data['nama']=$_nama; // ? 2
   $ar_data['jk']=$_jk;// 3
   $ar_data['tmp_lahir']= $_tmp_lahir;
   $ar_data['tgl_lahir']=$_tgl_lahir;
   $ar_data['email']=$_email;
   $ar_data['kartu_id']=$_kartu_id; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (kode,nama,jk,tmp_lahir,tgl_lahir,
    email,kartu_id) VALUES (?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET kode=?,nama=?,jk=?,tmp_lahir=?
    ,tgl_lahir=?,email=?, kartu_id=?, WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pelanggan.php');
?>