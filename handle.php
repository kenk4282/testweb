<?php
require_once "db.php";
$mycon = new Database();
$mycon->connect();

if (isset($_POST['bookid'])) {
    $data['bookid'] = $_POST['bookid'];
    $data['bookname'] = $_POST['bookname'];
    $data['publish'] = $_POST['publish'];
    $data['unitprice'] = $_POST['unitprice'];
    $data['unitrent'] = $_POST['unitrent'];
    $data['dayamount'] = $_POST['dayamount'];
    $data['img'] = $_POST['img'];
    $data['typeid'] = $_POST['typeid'];
    $data['statusid'] = $_POST['statusid'];
    $mycon->insertData($data);
    header("location: home.php");
} else if (isset($_GET['delId'])) {
    //$mycon->deleteId($_GET['delId']);
    header("location: home.php");
} else if (isset($_POST['log_user'])) {
    $rs = $mycon->varify_user($_POST['log_user'], $_POST['log_pass']);
    session_start();
    if ($rs['n'] == 1) {
        $_SESSION['user'] = $rs['USER_NAME'];
        $_SESSION['type'] = $rs['TYPE'];
        header("location: member.php");
    } else {
        echo "รหัสผ่านไม่ถูกต้อง";
        echo "  <a href='home.php'>Link back here...</a>";
    }
}