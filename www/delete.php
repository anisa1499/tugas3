<?php
 include "db.php";
 if(isset($_GET['nim']))
 {
 $id=$_GET['nim'];
 $q=mysqli_query($con,"delete from `skripsi` where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>