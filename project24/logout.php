<?php
session_start();
session_regenerate_id(true); // Generate a new session ID for enhanced security
session_destroy();
setcookie('logged_in', "", 1, "/"); // Secure cookiewith HTTP-only and HTTPS
header('Location: login.php');