<?php
//Class that is performing connection to Database
class dbconnect{

    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = 'harishabul97';
    public $connection;
    
    public function __construct(){
        global $host, $user, $pass;
        $this->connection = mysqli_connect($host, $user, $pass);
        mysqli_select_db($this->connection, 'people');
    }
    
      
}


?>