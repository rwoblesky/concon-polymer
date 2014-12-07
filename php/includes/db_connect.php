<?php
//include_once 'config.php';   // As functions.php is not included
require_once($_SERVER['DOCUMENT_ROOT']."/php/includes/config.php");

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
