<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if(!(isset($_COOKIE['user_uid']))||!(isset($_COOKIE['user_id']))){
    /*header("Location: ./login.php");
    ?>
    <script>alert('Please login');</script>
    <?php
}
?>


<?php*/
echo '<script>
alert("Please Login");
window.location.href="./login.php";
</script>';
}?>