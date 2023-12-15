<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_SERVER['HTTP_REFERER'] == 'http://localhost/CRUD/view/index.php') {
    
    
    $article->addArticle();

    header("Location: index.php");
    
}
else{
    header("Location: index.php");
}
?>