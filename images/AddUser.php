<?php
require 'CnxDB.php';

$Username=htmlentities($_POST['name']);
$Pass=htmlentities($_POST['pass']);

$usernameErr=$passwordErr='';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["name"])) {
      $usernameErr = "Name is required";
    } else {
      $username = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
        $usernameErr = "Only letters and white space allowed";
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pass"])) {
          $passwordErr = "password is required";
        } else {
          $password = test_input($_POST["pass"]);
          // check if password coontains more than 8 characters
          if (strlen ($password < 8)) {
             $passwordErr = "Password must contain at least 8 characters";
          }
           }
            }

        }
    



if ($passwordErr == $usernameErr){
$cnxPDO = CnxDB::getInstance();

$user_id = 44;


$stmt = $cnxPDO->prepare("UPDATE users SET users_uid = :Username, users_pwd=:Pass WHERE users_id = :user_id");
$stmt->bindParam(':Username', $Username);
$stmt->bindParam(':Pass', $Pass);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
}

else echo "try again";
?>

