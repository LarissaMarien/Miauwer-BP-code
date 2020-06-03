<?php
class Sessie {
    public function __construct(){
        session_start();
    }
    public function isLoggedIn(){
        $sessionIsSet = isset($_SESSION['logged_in'] );
        if ( $sessionIsSet ) {
            $out = $_SESSION['logged_in'];
        } else {
            $out = false;
        }
        return $out;
    }
    public function login($gn,$gid) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $gn;
				$_SESSION['gebruiker_id'] = $gid;
    }
    public function logout() {
        $_SESSION['logged_in'] = false;
        $_SESSION['email'] = "";
				$_SESSION['gebruiker_id'] = "";
    }
}
