<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: /~lipe4387/final/login.php");
?>