<?php
require_once('src/League.php');

$user = new User();
$leagues = $user->getMyLeagues();
?>
<main class="text-warning text-opacity-75 text-center d-flex justify-content-center">
    <?php
    if (!isset($_GET['league'])) {    
       foreach($leagues as $id => $name) { ?>
        <a class="btn btn-primary text-white" href="index.php?league=<?=$id?>"><?=$name?></a>
        <?php }
    } else {
        $league = new League($_GET['league']);
        $league->buildScoreboard();
    } ?>
</main>