<!-- <?php
    $conn = mysqli_connect('localhost','root','','cart');
    mysqli_set_charset($conn,"utf8");   
?> -->

<!-- <?php 
    /**
     * 
     */
    class DB 
    {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "cart";
        private $conn;
        function __construct()
        {
            $this->conn = $this->connectDB();
        }
        function connectDB(){
            $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
            return $conn;
        }
        function runQuery($query){
            $result = mysqli_query($this->conn,$query);
            while ($row = mysqli_fetch_assoc($result)) {
                $resultset[]=$row;
            }
            if(!empty($resultset)){
                return $resultset;
            }
        }
        function numRows($query){
            $result = mysqli_query($this->conn, $query);
            $rowcount = mysqli_num_rows($result);
            return $rowcount;
        }

    }
 ?> -->