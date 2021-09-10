<?php 

class Session {

    private $signed_id = false;
    public $user_id;

function __construct() {
session_start();
$this->check_the_login();

}

public function signed_in() {
    
    return $this->$signed_id;
    
}

public function login($user) {
    
if($user) {

    $this->user_id = $_SESSION['user_id'] = $user_id;
    $this->signed_id = true;
}
    
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