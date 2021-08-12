<?php
// Nạp file kết nối cơ sở dữ liệu
include_once "connect.php";
$sql = "SELECT * FROM user_tiem";
$stmt = $connectMysql->prepare($sql);
$stmt->execute();

$data = $stmt->fetchAll();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P.T.Việt Anh</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row" style="margin: 20px 0 0 800px">
        <div class="col-md-12">
            Xin chào Admin
            <a href="logout.php" style="margin-right:20px ">
                <i class="fas fa-sign-in-alt"></i>
                Đăng Xuất
            </a>
        </div>
    </div>
    <h1 style="margin: 100px 0 30px 250px"> Danh Sách Đăng Ký Tiêm Chủng</h1>
    <div class="row" style="margin-bottom: 20px">
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên người tiêm</th>
                    <th>Nơi tiêm</th>
                    <th>Đối tượng ưu tiên</th>
                    <th>Ngày giờ tiêm</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach($data as $i => $value) { ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $value["ten"] ?></td>
                        <td><?php echo $value["noitiem"] ?></td>
                        <td><?php echo $value["doituong"] ?></td>
                        <td><?php echo $value["ngaytiem"] ?></td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
