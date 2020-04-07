<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $progdi=$_POST['progdi'];
 $judul=$_POST['judul'];
 $q=mysqli_query($con,"UPDATE `skripsi` SET `nama`='$nama',`progdi`='$progdi',`judul`='$judul' where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>