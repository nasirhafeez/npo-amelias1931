<?php

session_start();

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$business_name = $_SERVER['BUSINESS_NAME'];
$venue_id = $_SERVER['VENUE_ID'];
$api_url = $_SERVER['API_URL'];