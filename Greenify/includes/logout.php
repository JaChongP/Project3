<?php
    session_start();
    session_unset();
    session_destroy();
    header('Location: /Project3/Greenify/index.php');
?>