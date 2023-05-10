<?php

session_start();
include('isConnected.php');
include('UsersRepository.php');
$user_id=$_SESSION['userid'];
$userRepository = new UsersRepository();
$user = $userRepository->delete($user_id);


include('logout.inc.php');




?>