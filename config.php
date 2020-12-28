<?php

session_start();
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('453382796666-kqoknggn9pgsou5d6cgtlevof3qga872.apps.googleusercontent.com');
$google_client->setClientSecret('ewp_r-4WkmwKoSJWsvz76zFG');
$google_client->setRedirectUri('http://localhost/Petoo_Project/signup.php');
$google_client->addScope('email');

$google_client->addScope('profile');

?>