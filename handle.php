<?php
require_once "db.php";
$mycon = new Database();
$mycon->connect();

if (isset($_POST['insert_bookid'])) {
    $data['bookid'] = $_POST['insert_bookid'];
    $data['bookname'] = $_POST['insert_bookname'];
    $data['publish'] = $_POST['insert_publish'];
    $data['unitprice'] = $_POST['insert_unitprice'];
    $data['unitrent'] = $_POST['insert_unitrent'];
    $data['dayamount'] = $_POST['insert_dayamount'];
    $data['img'] = $_POST['insert_img'];
    $data['typeid'] = $_POST['insert_typeid'];
    $data['statusid'] = $_POST['insert_statusid'];
    $mycon->insertData($data);
    header("location: home.php");
} else if (isset($_GET['upId'])) {
    header("location: update.php");
} else if (isset($_GET['delId'])) {
    //$mycon->deleteId($_GET['delId']);
    header("location: home.php");
}