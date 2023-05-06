<?php

// On ouvre la session ici
include('UsersRepository.php');
//$id = htmlspecialchars($_GET['users_id']);
$userRepository = new UsersRepository();
$user = $userRepository->delete('8');
header("Location:join.php" );


?>