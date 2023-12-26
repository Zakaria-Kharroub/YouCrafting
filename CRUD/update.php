<?php
require_once '../lib/Database.php';
require_once '../package/Article.php';

$database = new Database();
$conn = $database->getConnect();

$article = new Article($conn);



?>
