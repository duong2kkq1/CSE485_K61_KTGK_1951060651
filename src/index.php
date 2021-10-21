<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Quản lý bệnh viện</title>
</head>

<body>
    <?php
        include('config.php');
    ?>
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
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Chiều cao</th>
                        <th scope="col">Cân nặng</th>
                        <th scope="col">Ngày lập sổ</th>
                        <th scope="col">Ngày cập nhật</th>
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
                        echo '</tr>';
                    }
                }
            ?>

                </tbody>
            </table>
            
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>