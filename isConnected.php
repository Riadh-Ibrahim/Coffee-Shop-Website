<?php
if(!(isset($_COOKIE['user_uid']))||!(isset($_COOKIE['user_id']))){
    echo "<script>alert('Please login');</script>";
    header("Location: ./login.php");
}