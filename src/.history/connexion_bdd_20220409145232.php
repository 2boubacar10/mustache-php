<?php
$pdo = new PDO('mysql:host=localhost;dbname=senegal', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));