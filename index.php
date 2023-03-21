<?php
require_once('header.php');
?>

<body class="d-flex flex-column justify-content-between text-center">
    
    <?php
    require_once('config.php');
    include_once ('nav.php');
    ?>

    <?php
    if (!isset($_SESSION['username'])) {
        include_once('login.php');
    }
    else {
        include_once('landing_page.php');
        //echo '<main class="text-warning text-opacity-75 text-center">';
        //echo "<p>Bienvenue, ".$_SESSION['username'].", your registered email address is ".$_SESSION['email']." and your favorite game is ".$_SESSION['favoriteGame']." !</p>"; // This isn't translated because this is only a temporary/debug message
        ?>
        <!--<form action="logout.php" method="post" class="container">
            <button type="submit" name="login" value="logout" class="btn btn-danger"><?=TXT_LOGOUT?></button>
        </form>
        </main>-->
        <?php
    }
    //include_once('functions.php');
    
    include_once('footer.php');
    ?>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    
</body>

</html>