<?php 

class Session {

    private $signed_id;
    public $user_id;

function __construct() {
session_start();

}

private function check_the_login() {
    
    if(isset($_SESSION['user_id'])) {

        $this->user_id = $_SESSION['user_id'];
        $this->signed_id = true;
    } else {

        unset($this->user_id);
        $this->signed_id = false;
        
    }
    
}
    
}

$session = new Session();

?>