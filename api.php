<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");

$api_key = "3co7sp2kgusq3e887ta0j69wa8n0jkjl"; // Aapki Key
$action = $_GET['action'] ?? '';
$service = $_GET['service'] ?? '';
$country = $_GET['country'] ?? '';
$id = $_GET['id'] ?? '';
$status = $_GET['status'] ?? '';

$url = "https://otpget.com/stubs/handler_api.php?api_key=$api_key&action=$action";

if ($service) $url .= "&service=$service";
if ($country) $url .= "&country=$country";
if ($id) $url .= "&id=$id";
if ($status) $url .= "&status=$status";

// Server-to-server request (No CORS error)
$response = file_get_contents($url);
echo $response;
?>