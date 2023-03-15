<?php
if(isset($_GET['lang'])){
    $lang=$_GET['lang'];
}
elseif(isset($_COOKIE['lang'])){
    $lang=$_COOKIE['lang'];
}
else{
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}

if ($lang =='fr'){
    include_once('language/fr_lang.php');
}
else if ($lang=='en'){
    include_once('language/en_lang.php');
}
else{
    include_once('language/fr_lang.php');
}
$expire= 365*24*3600;
setcookie('lang', $lang, time() +$expire);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Fantasy League</title>
    <meta charset="utf-8" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
     <link href="css/style.css" rel="stylesheet" />

</head>

<body class="bg-dark bg-gradient d-flex flex-column justify-content-between">
    
    <?php
    require('config.php');
    include_once ('nav.php');

    ?>
    <main class="text-warning text-opacity-75 text-center">
    <?php
    if (!isset($_SESSION['username'])) {
        include_once('login.php');
    }
    else {
        include_once('landing_page.php');
    }
    ?>
    </main>


    <?php
    include_once('footer.php');
    ?>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    
</body>

</html>