<?php
session_start();
include "isConnected.php";
include_once 'UserRepository.php';
include_once 'ReviewRepository.php';

$revrepo= new ReviewRepository();


 if (isset($_POST['comment'])) {
  $reviewcontent = $_POST['comment'];
  $revinfo=array(
    'users_id'=>$_COOKIE["user_id"],
    'review_date'=>date("Y-m-d"),
    'review_content'=>$reviewcontent
    );
    $revrepo->create($revinfo);
    
}

?>
<html>
    <img style="margin-top: 30px; margin-left: 200px; height: auto; width: 70%;" src="./images/received.png" alt="" srcset="">
    <a style="margin-top: 30px; margin-left: 650px; backgroudncolor: orange"href="./home.php">Return to home page</a>
</html>
