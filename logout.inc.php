<?php 
session_start();
session_unset();
session_destroy();
setcookie('user_uid', false, time()-1,'/');
setcookie('user_id', false, time()-1,'/');

header("Location: ./index.php?error=none");