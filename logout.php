<?php
include_once 'app/call.php';
session_start();
session_destroy();
redirect ('index.php');

?>
