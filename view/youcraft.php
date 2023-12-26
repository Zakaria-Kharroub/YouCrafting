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
<body>
<?php include '../layout/navbar.php'; ?>

	
    <section class="header-img section-padding" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="../images/img-qualite.jpg" alt="" width="100%" height="600vh">
                </div>
            </div>
        </div>
    </section>

        

	<section class="services section-padding" id="services" data-aos="zoom-in" data-aos-duration="1000">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>welcome </h2>
						
					</div>
				</div>
			</div>
			<div class="row">
            <?php foreach ($articles as $article): ?>
				<div class="col-12 col-md-12 mb-4 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<img class="card-img-top mb-3" src="../images/img-qualite.jpg" width="100%" height="350px"  alt="">
							<h3 class="card-title"><?= $article['titre'] ?></h3>
							<p class="lead"><?= $article['contenu'] ?></p>
                            <p class='lead'><?= $article['date_de_creation'] ?></p>
                            <button class="btn btn-danger">view</button>
						</div>
					</div>
				</div>
                <?php endforeach; ?>
                

			</div>
		</div>
	</section>
	

	
	<section class="footer-img section-padding" data-aos="zoom-in" data-aos-duration="1000">
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-12">
						<img src="../images/img-footer.jpg" alt="" width="100%" height="600vh">
				</div>
			</div>
		
		</div>
	</section>





<!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- file script.js -->
<script src="script.js"></script>
<!-- package animation scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>

</body>
</html>