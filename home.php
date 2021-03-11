<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
    <?php
        require_once "db.php";
        $myconn = new Database();
        $myconn->connect();
        echo "<table border='1'>";
        echo "<tr><th colspan='11'><h1>รายชื่อหนังสือ</h1></th></tr>";
        echo "<tr><th colspan='11' align='left'><a href='addbook.php'>+book</a>";
        $myconn->slt("BookID" ,"book" ,"bookID");
        echo "<input type='submit' value='Update'></th></tr>";
        echo "<tr>";
        $myconn->show_information();
        $myconn->disconnect();
    ?>
    </form>
</body>
</html>
