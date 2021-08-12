<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTVA</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container"style="margin-left: 400px">
        <h1>Đăng Ký Tiêm Chủng</h1>
        <div class="row">
            <div class="col-md-6">

                <form name="create" action="save.php" method="post">
                    <div class="form-group">
                        <label>Tên người tiêm:</label>
                        <input type="text" name="ten" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Nơi tiêm:</label>
                        <input type="text" name="noitiem" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Đối tượng ưu tiên:</label>
                        <input type="text" name="doituong" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Ngày giờ tiêm:</label>
                        <input type="date" name="ngaytiem" class="form-control" placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
