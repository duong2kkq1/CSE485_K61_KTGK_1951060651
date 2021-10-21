<?php
include('header.php');
include('config.php');
?>
<?php
    
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        $sql="select * from patient where patientid='$id'";
        $result=mysqli_query($Con, $sql);
        $row=mysqli_fetch_assoc($result);
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $dateofbirth = $row['dateofbirth'];
            $gender = $row['gender'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $height = $row['height'];
            $weight = $row['weight'];
            $blood_type = $row['blood_type'];
            $created_on = $row['created_on'];
            $modified_on = $row['modified_on'];
            ?>
}

<div class="container">
    <h1 style="text-align: center;">Sửa thông tin</h2>
        <form action="process_update.php" method="post">

            <div class="row">Mã bệnh nhân
                <input type="text" placeholder="Mã bệnh nhân" name="ipatientid" value="<?php echo $id; ?>">
                
            </div>
            <div class="row">Tên
                <input type="text" placeholder="Tên" name="ifirstname" value="<?php echo $firstname; ?>">
            </div>
            <div class="row">Tên đệm
                <input type="text" placeholder="Tên đệm" name="ilastname" value="<?php echo $lastname; ?>">
            </div>
            <div class="row">Ngày sinh
                <input type="date" placeholder="Ngày sinh" name="idateofbirth" value="<?php echo $dateofbirth; ?>">
            </div>
            <div class="row">Giới tính
                <input type="text" placeholder="Giới tính" name="igender" value="<?php echo $gender; ?>">
            </div>
            <div class="row">Số điện thoại
                <input type="text" placeholder="Số điện thoại" name="imobile" value="<?php echo $mobile; ?>">
            </div>
            <div class="row">Email
                <input type="email" placeholder="Email" name="iemail" value="<?php echo $email; ?>">
            </div>
            <div class="row">Chiều cao
                <input type="number" placeholder="Chiều cao" name="iheight" value="<?php echo $height; ?>">
            </div>
            <div class="row">Cân nặng
                <input type="number" placeholder="Cân nặng" name="iweight" value="<?php echo $weight; ?>">
            </div>
            <div class="row">Nhóm máu
                <input type="text" placeholder="Nhóm máu" name="iblood_type" value="<?php echo $blood_type; ?>">
            </div>
            <div class="row">Ngày lập sổ
                <input type="date" placeholder="Ngày lập sổ" name="icreated_on" value="<?php echo $created_on; ?>">
            </div>
            <div class="row">Ngày cập nhật
                <input type="date" placeholder="Ngày cập nhật" name="imodified_on" value="<?php echo $modified_on; ?>">
            </div>
                <button class= "btn btn-primary" name="btnupdate" type="sumbit">Sửa</button>
        </form>
</div>
<?php
include('footer.php');
?>