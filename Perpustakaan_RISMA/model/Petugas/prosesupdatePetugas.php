<?php 
    include "../../config/koneksi.php";

    $Id_petugas         = $_POST['Id_petugas'];
    $Nama_petugas       = $_POST['Nama_petugas'];
    $Alamat             = $_POST['Alamat'];
    $No_Hp              = $_POST['No_Hp'];
    $Jabatan            = $_POST['Jabatan'];


    $sql = "Update petugas set
        Id_petugas      = '".$Id_petugas."',
        Nama_petugas    = '".$Nama_petugas."',
        Alamat          = '".$Alamat."',
        No_Hp           = '".$No_Hp."',
        Jabatan         = '".$Jabatan."'
        
        where Id_petugas = '".$Id_petugas."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=Petugas');
     //echo '$sql';
    ?>

