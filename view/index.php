<?php
require_once '../lib/Database.php';

require_once '../package/Article.php';

$database = new Database();
$conn = $database->getConnect();

$article = new Article($conn);
$articles = $article->affArticle();

?>

<!DOCTYPE html>
<html lang="en">

<?php include '../layout/head.php'; ?>
<link rel="stylesheet" href="../css/style.css">

<body>

<?php include '../layout/navbar.php'; ?>
<div class="container mt-5">
    <center>
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ajouter article
        </button>
    </center>
    <h1 class="text-center mb-4">Liste des articles</h1>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>title</th>
                <th>content</th>
                <th>Creation Date</th>
                <th>user ID</th>
                <th>delete / edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $article['titre'] ?></td>
                    <td><?= $article['contenu'] ?></td>
                    <td><?= $article['date_de_creation'] ?></td>
                    <td><?= $article['user_id'] ?></td>
                    <td>
                        
                        <a href="../CRUD/delete.php?id=<?= $article['id'] ?>" class="btn btn-danger">Supprimer</a>


                        
                        <a href="edit.php?id=<?= $article['id'] ?>" class="btn btn-primary">Modifier</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../CRUD/ajout.php" method="POST">
                <div class="modal-body">
                    <!-- titre input -->
                    <div class="mb-3">
                        <label for="titre" class="form-label">Title</label>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                    </div>

                    <!-- contenu input-->
                    <div class="mb-3">
                        <label for="contenu" class="form-label">Contenu</label>
                        <textarea class="form-control" id="contenu" name="contenu" rows="3" required></textarea>
                    </div>

                    
                    <!-- date de creation input -->
                    <div class="mb-3">
                        <label for="date_de_creation" class="form-label">Date de creation</label>
                        <input type="date" class="form-control" id="date_de_creation" name="date_de_creation" value='2023-12-14' readonly required>
                    </div>

                    <!-- userId input -->
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value='1' readonly required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
