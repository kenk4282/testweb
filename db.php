<?php
    define("hostname","localhost");
    define("username",'user');
    define("password","iKcVk1uIMEZpuQbr");
    define("dbname","bookstore");

    class Database{
        public $dbConn=null;

        public function connect(){
            $this->dbConn=new mysqli(hostname, username, password, dbname);
            $this->dbConn->query("SET NAMES UTF8");
        }

        public function disconnect(){
            $this->dbConn->close();
        }

        public function show_information(){
            $sql="SELECT * FROM `book`";
            $result=$this->dbConn->query($sql);
            $counter=0;
            while ($row=$result->fetch_assoc()){
                if($counter==0){
                    foreach($row as $key=>$value){
                        echo "<th>{$key}</th>";
                    }
                    echo "<th colspan='2'>OPERATION</th>";
                    echo "</tr>";
                    $counter++;
                }
                echo "</tr>";
                foreach($row as $key=>$value){
                    echo "<td>{$value}</td>";
                }
                echo "<td><a href='handle.php?delId={$row['BookID']}'>Delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        public function insertData($data){
            $sql="INSERT INTO `book`(`BookID`, `BookName`, `TypeID`, `StatusID`, `Publish`, `UnitPrice`, `UnitRent`, `DayAmount`, `Picture`)
            VALUES ('{$data['bookid']}','{$data['bookname']}','{$data['typeid']}','{$data['statusid']}','{$data['publish']}','{$data['unitprice']}','{$data['unitrent']}','{$data['dayamount']}','{$data['img']}')";
            $rs=$this->dbConn->query($sql);
        }

        public function slt($key, $tablename, $id){
            $sql = "SELECT $key FROM $tablename";
            $result = $this->dbConn->query($sql);
            echo "<select name='{$id}'>";
            while ($row = $result->fetch_assoc()) {
            foreach ($row as $key => $value) {
                echo "<option value='{$value}'>{$value}</option>";
            }
        }
        echo "</select>";
        }

        public function getInfOnerecord($id) //แสดงข้อมูลที่เลือก
    {
        $sql = "SELECT * FROM `book` where BookId=$id";
        $result = $this->dbConn->query($sql);
        $row = $result->fetch_assoc();
        return ($row);
    }

    }
?>
