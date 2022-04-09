<?php 
    include "../../config/koneksi.php";

   
    $Nama_petugas        = $_POST['Nama_petugas'];
    $Alamat              = $_POST['Alamat'];
    $No_Hp               = $_POST['No_Hp'];
    $Jabatan             = $_POST['Jabatan'];


    $sql = "INSERT INTO petugas 
    (
        Nama_petugas,
        Alamat,
        No_Hp,
        Jabatan
    ) 
    VALUES 
    (
        '".$Nama_petugas."',
        '".$Alamat."',
        '".$No_Hp."',
        '".$Jabatan."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=Petugas');

?>

