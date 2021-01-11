<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /GitHub/Project3/Greenify/HomePage.html');
?>