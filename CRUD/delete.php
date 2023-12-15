<?php
require_once '../lib/Database.php';
require_once '../package/Article.php';

$database = new Database();
$conn = $database->getConnect();

$article = new Article($conn);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $article->setId($_GET['id']);
    $article->deleteArticle();
}

header("Location: ../view/index.php");
exit();
?>
