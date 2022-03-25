<?php
session_start();
unset($_SESSION['connected']);
unset($_SESSION['Pseudo']);
header('Location: index');
exit();
?>