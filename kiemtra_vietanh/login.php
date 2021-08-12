<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


if (isset($_POST["email"]) && isset($_POST["password"])) {

    include_once "connect.php";

    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM user WHERE email = '$email' AND password='$password'";

    $stmt = $connectMysql->prepare($sql);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $user = $stmt->fetchAll();
    $userLogin = isset($user[0]) ? $user[0] : false;

    echo $sql;


    if ( $userLogin) {
        $_SESSION["login"] = $userLogin["email"];

        header("Location: index.php");
        exit;
    } else {
        echo "<p>Username và password không đúng</p>";
    }
}
?>
<h3 style="margin-left: 500px">Đăng nhập để vào đăng ký tiêm</h3>
<form  style="width: 500px;margin: 0 auto" name="login" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>


