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
            //$this->dbConn->connect_close;
        }

        public function show_information(){
            $sql="SELECT * FROM `book`";
            $result=$this->dbConn->query($sql);
            echo "<table border='1'>";
            $counter=0;
            while ($row=$result->fetch_assoc()){
                if($counter==0){
                    echo "<tr><th colspan='11'><h1>รายชื่อหนังสือ</h1></th></tr>";
                    echo "<tr><th colspan='11' align='left'><a href='addbook.php'>+book</a></th></tr>";
                    echo "<tr>";
                    foreach($row as $key=>$value){
                        echo "<th>{$key}</th>";
                    }
                    echo "<th>OPERATION</th>";
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
    }
?>
