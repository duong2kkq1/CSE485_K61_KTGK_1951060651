<?php
include ("header.php");
?>

<div class="container">
    <h1 style="text-align: center;">Thêm bệnh nhân</h2>
        <form action="process_add.php" method="post">

            <div class="row">Mã bệnh nhân
                <input type="text" placeholder="Mã bệnh nhân" name="ipatientid">
                
            </div>
            <div class="row">Tên
                <input type="text" placeholder="Tên" name="ifirstname">
            </div>
            <div class="row">Tên đệm
                <input type="text" placeholder="Tên đệm" name="ilastname">
            </div>
            <div class="row">Ngày sinh
                <input type="date" placeholder="Ngày sinh" name="idateofbirth">
            </div>
            <div class="row">Giới tính
                <input type="text" placeholder="Giới tính" name="igender">
            </div>
            <div class="row">Số điện thoại
                <input type="text" placeholder="Số điện thoại" name="imobile">
            </div>
            <div class="row">Email
                <input type="email" placeholder="Email" name="iemail">
            </div>
            <div class="row">Chiều cao
                <input type="number" placeholder="Chiều cao" name="iheight">
            </div>
            <div class="row">Cân nặng
                <input type="number" placeholder="Cân nặng" name="iweight">
            </div>
            <div class="row">Nhóm máu
                <input type="text" placeholder="Nhóm máu" name="iblood_type">
            </div>
            <div class="row">Ngày lập sổ
                <input type="date" placeholder="Ngày lập sổ" name="icreated_on">
            </div>
            <div class="row">Ngày cập nhật
                <input type="date" placeholder="Ngày cập nhật" name="imodified_on">
            </div>
            <br>
                <button class= "btn btn-primary" name="btnadd" type="sumbit">Thêm</button>
        </form>
</div>
<?php
include("footer.php");
?>