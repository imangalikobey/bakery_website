<?php
session_start();
session_unset();
session_destroy();//destroys the all sections
header('Location: logout.html');//changes the website to the logout.html
?>