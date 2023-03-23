<?php
require_once('header.php');
?>

<body class="d-flex flex-column justify-content-between">
    <?php
    require_once('config.php');
    include_once ('nav.php');
    ?>

    <main class="text-warning text-opacity-75 text-center">
        <p><?=TXT_LOGOUT_SUCCESS?></p>
        <p><?=TXT_REDIRECTION?></p>
        <?php header('refresh:3;url=index.php'); ?>
    </main>

    <?php
    include_once('footer.php');
    ?>

    <!-- MDB -->

</body>