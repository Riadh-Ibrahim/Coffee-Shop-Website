<?php

class Signup extends Dbh{


    protected function checkUser($uid,$email,$tel) {

        $stmt=$this->connect()->prepare("SELECT users_id FROM users WHERE users_uid = ? OR users_email= ? OR users_tel= ?;");

        if(!$stmt->execute(array($uid,$email,$tel))) {

            $stmt=null;
            header("Location: ../index.php?error=stmtFailed");
            exit();
        }

        $resultCheck=false;

        if($stmt->rowCount() > 0) {
            $resultCheck=false;
        } else {
            $resultCheck=true;
        }
        return $resultCheck;
    }



    protected function setUser($uid,$pwd,$email,$tel/* ,$city */,$address) {

        $stmt=$this->connect()->prepare("INSERT INTO users(users_uid,users_pwd,users_email,users_tel/* ,users_city */,users_address) VALUES (?,?,?,?,?/* ,? */);");

        $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);

        if(!$stmt->execute(array($uid,$hashedPwd,$email,$tel/* ,$city */,$address))) {

            $stmt=null;
            header("Location: ../index.php?error=stmtFailed");
            exit();
        }

        $stmt=null;
    
}
    
}