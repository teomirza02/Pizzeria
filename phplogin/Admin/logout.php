<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: /opt/lampp/htdocs/Pizzeria/Public/hompage_public.php');
?>