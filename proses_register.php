<?php 
 include "koneksi.php";
    if($_POST){
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        }  elseif(empty($nik)){
            echo "<script>alert('nik tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($alamat)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='login.php';</script>";
        } else {
            
                header("location: home.php");
            } 
        
    }
?>