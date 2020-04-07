<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $progdi=$_POST['progdi'];
 $judul=$_POST['judul'];
 $q=mysqli_query($con,"INSERT INTO `skripsi` (`nama`,`progdi`,`judul`) VALUES ('$nama','$progdi','$judul')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>