<?php

class LoginContr extends Login{
    private $uid_login;
    private $pwd_login;

    public function __construct($uid_login, $pwd_login) {
        $this->uid_login=$uid_login;
        $this->pwd_login=$pwd_login;
    }

    private function emptyInput(){
        $result=false;
        if((empty($this->uid_login)) || (empty($this->pwd_login))){
            $result=false;
        }
        else {
            $result=true;
        }
        return $result;
    }

    public function loginUser(){
        
        if($this->emptyInput() == false) {
            //echo "Empty Input!"
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        
        $this->getUser($this->uid_login,$this->pwd_login);
    }

}