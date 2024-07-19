<?php
require 'models/User.php';
if (!empty($_GET)) {
    createUser($_GET['firstname'], $_GET['lastname'], $_GET['email'], $_GET['password']);
}
?>