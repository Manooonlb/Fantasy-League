<?php
require_once('header.php');
?>

<body class="d-flex flex-column justify-content-between">
    
    <?php
    require_once('config.php');
    include_once ('nav.php');
    ?>

    <main class="text-warning text-opacity-75 text-center">
    <?php
    if (!isset($_SESSION['username'])) {
        include_once('login.php');
    }
    else {
        //include_once('landing_page.php');
        echo "<p>Bienvenue, ".$_SESSION['username'].", your registered email address is ".$_SESSION['email']." and your favorite game is ".$_SESSION['favoriteGame']." !</p>";
        ?>
        <form action="logout.php" method="post" class="container">
            <button type="submit" name="login" value="logout" class="btn btn-danger"><?=TXT_LOGOUT?></button>
        </form>
        <?php
    }
    //include_once('functions.php');
    ?>

    </main>


    <?php
    include_once('footer.php');
    ?>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    
</body>

</html>