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
                    <h2>Fill the Form</h2>
                    <label for="">BookID</label>
                    <input type="text" name="bookid" id="" required><br>
                    <label for="">Book name</label>
                    <input type="text" name="bookname" id="" required><br>
                    <label for="">Publish:</label>
                    <input type="text" name="publish" id="" required><br>
                    <label for="">UnitPrice</label>
                    <input type="text" name="unitprice" id="" required><br>
                    <label for="">UnitRent</label>
                    <input type="password" name="unitrent" id="" required><br>
                    <label for="">DayAmount</label>
                    <input type="text" name="dayamount" id="" required><br>
                    <hr>
                    <label for="">Select Picture</label>
                    <input type="file" name="img" id="" size='50'><br>
                    <label for="">Type ID</label>
                    <select name="typeid" id="">
                        <option value="0">การ์ตูน</option>
                        <option value="1">นิยาย</option>
                        <option value="1">นิตยสาร</option>
                    </select><br>
                    <label for="">Status ID</label>
                    <select name="Statusid" id="">
                        <option value="0">ปกติ</option>
                        <option value="1">ชำรุด</option>
                        <option value="1">ส่งซ่อม</option>
                    </select><br>
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