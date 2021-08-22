<?php 

require_once("config.php");

class Database {

    public $connection;
    
    function __construct(){
        
        $this->open_db_connetion();
        
    }

    public function open_db_connetion(){
    
        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if(mysqli_errno()){
            
            die("Database connection failed badly" . mysqli_error());
            
        }       
    }
    
    public function query($sql) {
        
        $result = mysqli_query($this->connection, $sql);
        
        return $result;
    
    }

    private function confirm_query($query){

        if(!$result) {
        die("Quary Failed");
        }
    }

    public function escape_string($string){
        
        $esaped_string = mysqli_real_escape_string($this->connection,$string);
        return $esaped_string;
    }
}

$database = new Database();

?>