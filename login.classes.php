<?php

class Login extends Dbh{


    protected function getUser($uid_login,$pwd_login) {

        $stmt=$this->connect()->prepare("SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;");


        if(!($stmt->execute(array($uid_login,$uid_login)))) {

            $stmt=null;
            header("Location: ./login.php?error=stmtFailed");
            exit();
        }

       

        if($stmt->rowCount()==0){
            $stmt=null;
            header("Location: ./login.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd_login,$pwdHashed[0]["users_pwd"]);

        if($checkPwd==false){
            $stmt=null;
            header("Location: ./login.php?error=wrongpassword");
            exit();
        } elseif($checkPwd==true){
            $stmt=$this->connect()->prepare("SELECT * FROM users WHERE users_uid = ? OR users_email = ?/*AND users_pwd = ?*/;");
            
            if(!$stmt->execute(array($uid_login,$uid_login))) {

                $stmt=null;
                header("Location: ./index.php?error=stmtFailed");
                exit();
            }

            

            if($stmt->rowCount()==0){
                $stmt=null;
                header("Location: ./index.php?error=usernotfound");
                exit();
            }

            $user= $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            session_start();

            $_SESSION["userid"]=$user[0]["users_id"];
            $_SESSION["useruid"]=$user[0]["users_uid"];
            $_SESSION["userpwd"]=$user[0]["users_pwd"];

            $expire = time() + 86400 * 30; // 30 days

            // Set cookie value to user UID
            setcookie('user_uid', $_SESSION["useruid"], $expire,'/');
            setcookie('user_id', $_SESSION["userid"], $expire,'/');
            /* $_COOKIE['user_uid']=$_SESSION["useruid"];
            $_COOKIE['user_id']=$_SESSION["userid"]; */
            $stmt=null;
        }  
    
}
    
}