<?php
require_once '../lib/Database.php';
require_once '../package/Article.php';

$database = new Database();
$conn = $database->getConnect();

$article = new Article($conn);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $article-> setTitre($_POST['titre']);
    $article-> setContenu($_POST['contenu']);
    $article-> setDateCeation($_POST['date_de_creation']);
    $article->setUserId($_POST['user_id']);

    $article->addArticle();

    header("Location: ../view/index.php");
exit();
}

?>