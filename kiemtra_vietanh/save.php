<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/27/2019
 * Time: 6:03 PM
 */

include_once "connect.php";

// gọi đến kết nối CSDL thì dùng $connectMysql

if (isset($_POST["ten"]) && isset($_POST["noitiem"]) && isset($_POST["doituong"]) && isset($_POST["ngaytiem"])) {

    $sql = "INSERT quanlytiemchung(ten,noitiem,doituong,ngaytiem) VALUES('".$_POST["ten"]."', '".$_POST["noitiem"]."', '".$_POST["doituong"]."','".$_POST["ngaytiem"]."')";

    echo $sql;


    // chuyển hướng về trang index.php bằng lệnh header
    header("Location: index3.php");
    exit;


} else {
    echo "dữ liệu không hợp lệ";
}
