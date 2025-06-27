<?php

include_once "session.php";

session_destroy();
// header('Location: login.php');
header('Location: index.php');

?>