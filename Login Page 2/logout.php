<?php

session_start();
session_destroy();
header('Location: ../mind/index.php');
?>
