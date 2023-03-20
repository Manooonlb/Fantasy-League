<?php
$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "Merci $username de nous avoir contacté !<br><br>";
echo "Nous t'apporterons une réponse à l’adresse $email dans les plus brefs délais :<br><br>";
echo "$message";
