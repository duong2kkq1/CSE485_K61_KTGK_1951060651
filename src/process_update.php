<?php

    include('config.php');
    
    if (isset($_POST['btnupdate'])) {
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
        $sql="update patient set firstname = '$firstname',
    lastname = '$lastname',mobile = '$mobile', gender='$gender', 
    mobile='$mobile',email = '$email',height = '$height',weight='$weight', blood_type = '$blood_type',
    created_on = '$created_on',modified_on = '$modified_on' where patientid = '$patientid'";
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