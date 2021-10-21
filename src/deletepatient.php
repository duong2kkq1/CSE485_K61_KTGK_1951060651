<?php
include("header.php");
?>
<?php

include('config.php');


if(isset($_GET['id'])){
    $patientid=$_GET['id'];
    $sql="DELETE FROM `patient` WHERE  patientid = '$patientid'";
    $result = mysqli_query($Con, $sql);
if($result>0){
    header("location: index.php");
}
else{
    echo'Loi';
}
mysqli_close($Con);
}
?>
<?php
include("footer.php")
?>