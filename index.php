<?php 
$koneksi = new mysqli("localhost","root", "", "db_komik"); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Komik-Ku!</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <link href="asset/css/custom.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2d58ef44cb.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="neubar">
  <div class="container">
    <a class="navbar-brand bold" href="index.php">Komik-Ku!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link mx-2 bold active" aria-current="page" href="index.php">BERANDA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel/c1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel/c1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel/c1.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<span class="form-control"><marquee>[Info] - Halo penggemar komik, kini komik hadir dalam bentuk web dan hanya untuk private!</marquee></span>
<br>
<div class="container">
    <div class="row">
    	<?php 
			$sql = $koneksi->query("SELECT * FROM tb_komik");
			while ($data = $sql->fetch_assoc()) {
    	?>
    	&nbsp;
		<div class="card" style="width: 18rem;">
		  <img src="image/komik/<?php echo $data['gambar'];?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $data['nama_komik'];?></h5>
		    <p class="card-text"><?php echo $data['ket'];?></p>
		    <a href="view.php?id=<?php echo $data['id_komik'] ?>" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</a>
		  </div>
		</div>
		<?php } ?>
	</div>
</div>
<br><br><br>
<footer class="text-center text-lg-start" style="background-color: grey;">
    <!-- Copyright -->
    <div class="container">
      <div class="text-left black p-3">
        ©KOMIK-KU!
      </div>

        
    </div>
    <!-- Copyright -->
  </footer>
</body>
</html>