<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ../Public/homepage_public.php');
?>