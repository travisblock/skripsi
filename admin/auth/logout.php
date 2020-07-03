<?php

session_start();
session_unset($_SESSION['login_adm']);
header('location: ../index.php');
