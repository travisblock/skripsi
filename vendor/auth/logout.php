<?php

session_start();
session_unset($_SESSION['login_vendor']);
header('location: ../index.php');
