<?php
include "header.php";
session_start();
?>

<html>
<body>
    <div class="container>
        <nav class="navbar navbar-default navbar-expand-lg navbar-light">
            <div class="navbar-header">
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">	
                    <?php
                    if(!isset($_SESSION["userid"])){		
                     ?><li>
                        <a href="login.php">Login</a>
                        
                    </li>
                    <li>
                        <a href="signup.php"
                        class="btn btn-primary get-started-btn mt-1 mb-1">Sign up</a>
                    </li>
                    <?php } else{
                        ?>
                        <li>
                        <a href="#"><?= $_SESSION["useruid"] ?></a>
                        <a href="./logout.inc.php">Logout</a>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>       
    
