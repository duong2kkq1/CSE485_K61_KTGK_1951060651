<?php
include("header.php");
?>
<?php

include('config.php');

if (isset($_POST['btnadd'])) {
    $patientid=$_POST['ipatientid'];
    $firstname = $_POST['ifirstname'];
    $lastname = $_POST['ilastname'];
    $dateofbirth = $_POST['idateofbirth'];
    $gender = $_POST['igender'];
    $mobile = $_POST['imobile'];
    $email = $_POST['iemail'];
    $height = $_POST['iheight'];
    $weight = $_POST['iweight'];
    $blood_type = $_POST['iblood_type'];
    $created_on = $_POST['icreated_on'];
    $modified_on = $_POST['imodified_on'];
    $sql="INSERT INTO `patient`(`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`)
    VALUES ('$patientid','$firstname','$lastname','$dateofbirth','$gender','$mobile','$email','$height','$weight','$blood_type','$created_on','$modified_on')";
echo $sql;
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