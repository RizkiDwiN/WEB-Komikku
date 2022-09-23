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
    	<?php 
			 $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from tb_episode where episode='$id'");
      while($d = mysqli_fetch_array($data)){
    	?>
    	&nbsp;
		  <img src="image/episode/<?php echo $d['gambar'] ?>">
<br><br><br>
<footer class="text-center text-lg-start fixed-bottom" style="background-color: grey;">
    <!-- Copyright -->
    <div class="container">
      <div class="text-left black p-3">
        <a href="#" class="btn btn-primary">#<?php echo $d['episode'];?></a>
        <a href="tambah_komik.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
        <a href="view.php?id=<?php echo $d['id_komik'];?>" class="btn btn-primary">Lihat Episode Lain</a>
        <a href="episode.php?id=<?php echo $d['id_episode'] - 1;?>" class="btn btn-warning"><---</a>
        <a href="episode.php?id=<?php echo $d['id_episode'] + 1;?>" class="btn btn-warning">---></a>
      </div>
      <?php } ?>

        
    </div>
    <!-- Copyright -->
  </footer>
</body>
</html>