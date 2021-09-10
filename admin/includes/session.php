<?php 

class Session {

    private $signed_id;
    public $user_id;

function __construct() {
session_start();

}
    
}

$session = new Session();

?>