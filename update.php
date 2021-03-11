<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>
                <h1>UPDATE BOOK</h1>
            </th>
        </tr>
        <tr>
            <td>
                <form action="handle.php" method="post">
                    <?php
                        include_once("db.php");
                        $myconn = new Database();
                        $myconn->connect();
                        $rs = $myconn->getInfOnerecord($_POST['bookID']);
                    ?>
                    <h2>Fill the Form</h2>
                    <label for="">BookID</label>
                    <input type="text" name="bookid" id="" value="<?= $rs['BookID'] ?>" readonly><br>
                    <label for="">Book name</label>
                    <input type="text" name="bookname" id="" value="<?= $rs['BookName'] ?>" required><br>
                    <label for="">Publish:</label>
                    <input type="text" name="publish" id="" value="<?= $rs['Publish'] ?>" required><br>
                    <label for="">UnitPrice</label>
                    <input type="text" name="unitprice" id="" value="<?= $rs['UnitPrice'] ?>" required><br>
                    <label for="">UnitRent</label>
                    <input type="text" name="unitrent" id="" value="<?= $rs['UnitRent'] ?>" required><br>
                    <label for="">DayAmount</label>
                    <input type="text" name="dayamount" id="" value="<?= $rs['DayAmount'] ?>" required><br>
                    <hr>
                    <label for="">Select Picture</label>
                    <input type="file" name="img" id="" size='50'><br>
                    <label for="">Type ID</label>
                    <?php
                        require_once "db.php";
                        $myconn = new Database();
                        $myconn->connect();
                        $myconn->slt("TypeName" ,"typebook" ,"typeid");
                        $myconn->disconnect();
                    ?><br>
                    <label for="">Status ID</label>
                    <?php
                        require_once "db.php";
                        $myconn = new Database();
                        $myconn->connect();
                        $myconn->slt("StatusName", "statusbook" , "statusbook");
                        $myconn->disconnect();
                    ?><br>
                    <button Type="submit">ตกลง</button>
                    <button type="reset">รีเซ็ต</button>
                    <a href="home.php">back to main</a>
                </form>
            </td>
        </tr>
        <tr>
    </table>
</body>
</html>