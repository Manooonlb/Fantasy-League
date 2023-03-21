<?php
require_once('src/User.php');
session_start(); // Init session

// --------------------------------
// Check if the user is logged in, if not redirect him to login page
// --------------------------------

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['login'] === 'true') {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['userEmail'];
        $_SESSION['favoriteGame'] = $_POST['favoriteGame'];
    }
    if ($_POST['login'] === 'logout') {
        session_destroy();
    }
}

// --------------------------------
// Set language preferences and call language constants
// --------------------------------
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

// Set a cookie for the language
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

     <link rel="icon" type="image/x-icon" href="/assets/favicon.png" />

</head>


