<?php 

class Database {

    private $connection;

    public function open_db_connetion(){
    
        $this->connection = mysqli_connection(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if(mysqli_errno()){
            
            die("Database connection failed badly" . mysqli_error());
            
        }       
    }      
}

$database = new Database();
$database->open_db_connetion();

?>