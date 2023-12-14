<?php
include '../connect.php';

include '../package/Article.php';

$database = new Database();
$conn = $database->getConect();
$article = new Article($conn);
$articles = $article->affArticle();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>

    <style>
        button {
            height:40px;
            width: 150px;
            border-radius:7px;
            margin: 10px;
            background-color:green;
            color:white;
            font-weight:bold;
        }
    </style>
</head>
<body>

    <h1>liste des article</h1>
    <button>ajouter article</button>

    <?php if ($articles): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Creation Date</th>
                    <th>User ID</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                    <tr>
                        <td><?= $article['id'] ?></td>
                        <td><?= $article['titre'] ?></td>
                        <td><?= $article['contenu'] ?></td>
                        <td><?= $article['date_de_creation'] ?></td>
                        <td><?= $article['user_id'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>pas article</p>
    <?php endif; ?>



    

</body>
</html>