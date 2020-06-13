<?php
// Inicia sessoes, para assim poder destrua-las
session_start();
session_destroy();

header("Location: ../index.php");
?>