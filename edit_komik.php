<?php 
$koneksi = new mysqli("localhost","root", "", "db_komik"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit File Komik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/2d58ef44cb.js" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <!-- rows -->   
            <div class="row">
                <div class="col-sm-6">
                    <h3>Ini adalah ubah data komik</h3>
                    <div class="form-group">
                        <?php 
                                 $id = $_GET['id'];
                            $data = mysqli_query($koneksi,"select * from tb_komik where id_komik='$id'");
                          while($d = mysqli_fetch_array($data)){
                            ?>
                            <div class="input-group my-3">
                                <img src="image/komik/<?php echo $d['gambar'] ?>" width="60%">
                            </div>
                            <div class="input-group my-3">
                                <input type="text" class="form-control" name="nama_komik" placeholder="Isi nama komik">
                            </div>
                            <div class="input-group my-3">
                                <input type="text" class="form-control" name="ket" placeholder="Isi keterangan komik">
                            </div>
                            <div class="input-group my-3">
                                <input type="date" class="form-control" name="tanggal_upload" placeholder="tanggal up">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

                <button type="submit" name="btn_update" class="btn btn-success">Ubah</button>
        </form>
        <?php

            if (isset($_POST['btn_update'])) {
                                    
                $nama_komik = $_POST['nama_komik'];
                $ket = $_POST['ket'];
                $tanggal_upload = $_POST['tanggal_upload'];

                $sql = $koneksi->query("UPDATE tb_komik SET nama_komik='$nama_komik',ket='$ket',tanggal_upload='$tanggal_upload' WHERE id_komik = '$id'");

                if ($sql) {
                    ?>

                        <script type="text/javascript">
                            alert('Data Komik Berhasil Diubah');
                            window.location.href="tambah_komik.php";
                        </script>

                    <?php
                }

            }

        ?>
    </div>
</body>
</html>

<style>
    .file {
    visibility: hidden;
    position: absolute;
    }
</style>

<script>

    function konfirmasi(){
        konfirmasi=confirm("Apakah anda yakin ingin menghapus gambar ini?")
        document.writeln(konfirmasi)
    }

    $(document).on("click", "#pilih_gambar", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
    });

    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    });
</script>