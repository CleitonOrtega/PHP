<?php
    session_start();
    session_destroy();
    require_once 'index.html';
	header("Location: index.html");
?>