<?php
class Database
{
    private $conn;

    function __construct($servername="localhost",$username="root", $password=""){
        $this->connect($servername, $username, $password);
    }

    function connect ($servername="localhost",$username="root", $password=""){
        // Create connection
        $this->conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }  
        return "Connected successfully";
    } 

    function selectAllFromTable($tableName){        
        $returnData = array();
        $sql = "SELECT * FROM $tableName";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {            
            while($row = $result->fetch_assoc()) {
                 echo $row["feild"];
            }
        } 
    }


    /*-----------FUNCTIONS WE NEED----------------------*/     
    /*---------------SELECTS----------------------------*/ 
    // SELECT * from (table name) WHERE (where condition)
    // SELECT (column name) FROM (table name)
    // SELECT (column name) FROM (table name) WHERE (where condition)
    // passing an array and determine how many vatiables to select
    function selectColsFromWhere($cols = array(), $tableName, $where)
    {
        for($index = 0,$index<$cols.length(),$index++ ){
            $columns+=$cols[$index] . ", ";
        }
        $sql = "SELECT $columns FROM $tableName where $where";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                return $row["field"];
            }
        } else {
            echo "0 results";
        }
    }
    /*---------------INSERTS----------------------------*/ 
    // INSERT INTO (table name) VALUES (values array)

    /*---------------UPDATES----------------------------*/ 
    // UPDATE (table name) SET (column Name) = (new value) WHERE (where condition)

    /*---------------DELETES----------------------------*/ 
    // DELETE FROM (table name) WHERE (where condition)




    
    function disconnect(){
        mysqli_close($this->conn);
    }
}

 ?>