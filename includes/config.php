<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$doc_root = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$dir = str_replace('\\', '/', __DIR__);
$project_dir = dirname($dir);

$base_url = str_replace($doc_root, '', $project_dir);
if (empty($base_url)) {
    $base_url = '/';
} else {
    $base_url = $base_url . '/';
}
define('BASE_URL', $base_url);

mysqli_report(MYSQLI_REPORT_OFF);
$conn = @mysqli_connect('localhost', 'root', '', 'user_db');
$con = @mysqli_connect('localhost', 'root', '', 'website');

if (!$conn || !$con) {
    // Attempt to auto-initialize the databases
    $temp_conn = @mysqli_connect('localhost', 'root', '');
    if ($temp_conn) {
        mysqli_query($temp_conn, "CREATE DATABASE IF NOT EXISTS user_db");
        mysqli_query($temp_conn, "CREATE DATABASE IF NOT EXISTS website");
        
        $conn = mysqli_connect('localhost', 'root', '', 'user_db');
        $con = mysqli_connect('localhost', 'root', '', 'website');
    }
}

if (!$conn) {
    die('User DB connection failed: ' . mysqli_connect_error());
}
if (!$con) {
    die('Website DB connection failed: ' . mysqli_connect_error());
}
?>
