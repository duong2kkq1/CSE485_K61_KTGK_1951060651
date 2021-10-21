   <?php
   include('header.php');
        include('config.php');
    ?>
    <a href="addpatient.php">
    <button class="btn btn-success">Thêm bệnh nhân</button>
    </a>
    <div class="container-fluid text-center">
        <h1>Danh sách bệnh nhân</h1>
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã bệnh nhân</th>
                        <th scope="col">Tên bệnh nhân</th>
                        <th scope="col">Họ đệm bệnh nhân</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Chiều cao</th>
                        <th scope="col">Cân nặng</th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Ngày lập sổ</th>
                        <th scope="col">Ngày cập nhật</th>
                        <th scope="col">Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sql="select * from patient";
                $result = mysqli_query($Con, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['patientid'].'</th>';
                        echo '<td>'.$row['firstname'].'</td>';
                        echo '<td>'.$row['lastname'].'</td>';
                        echo '<td>'.$row['dateofbirth'].'</td>';
                        echo '<td>'.$row['gender'].'</td>';
                        echo '<td>'.$row['mobile'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['height'].'</td>';
                        echo '<td>'.$row['weight'].'</td>';
                        echo '<td>'.$row['blood_type'].'</td>';
                        echo '<td>'.$row['created_on'].'</td>';
                        echo '<td>'.$row['modified_on'].'</td>';
                        echo '<td><a href="editpatient.php?id='.$row['patientid'].'"><i class="fas fa-edit"></i> Sửa</a></td>';
                        echo '<td><a href="deletepatient.php?id='.$row['patientid'].'"><i class="fas fa-trash-alt"></i> Xóa</a></td>';
                    }
                }
            ?>

                </tbody>
            </table>

        </div>
    </div>






<?php
include('footer.php');
?>