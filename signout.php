<?php
session_start();


$_SESSION['MM_ID'] = NULL;
unset($_SESSION);

header("Location: index.php");
  $_SESSION['MM_ID']=NULL;
  unset($_SESSION['MM_ID']);
  header("Location: index.php");

?>