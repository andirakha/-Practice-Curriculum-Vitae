<?php
if (isset($_POST["update"])) {
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $telepon = $_POST["telepon"];
  $email = $_POST["email"];
  $web = $_POST["web"];
  $pendidikan = $_POST["pendidikan"];
  $pengalaman_kerja = $_POST["pengalaman_kerja"];
  $keterampilan = $_POST["keterampilan"];
  $foto_path = $_POST["foto_path"];
  include_once("config.php");
  $result = mysqli_query($conn, "UPDATE cv_data SET nama='$nama', alamat='$alamat', telepon='$telepon', email='$email', web='$web', pendidikan='$pendidikan', pengalaman_kerja='$pengalaman_kerja', keterampilan='$keterampilan', foto_path='$foto_path' WHERE id=1");
  echo "<script type='text/javascript'>alert('Data telah diperbaharui');</script>";
}
?>

<?php
    include_once("config.php");
    $result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1");
    $data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Curriculum Vitae - Update</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Curriculum Vitae - Update</a>
            <div class="d-flex flex-row-reverse collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <a class="btn btn-outline-secondary" href="index.php">Back to Home</a>
                </form>
            </div>
        </div>
    </nav>  
    <div style="margin: 20px;">
        <form action="update.php" method="post">
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Nama Lengkap</label>
                <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama">
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" ><?php echo $data['alamat'] ?></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Telepon</label>
                <input type="text" class="form-control" value="<?php echo $data['telepon'] ?>" name="telepon">
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Email</label>
                <input type="text" class="form-control" value="<?php echo $data['email'] ?>" name="email">
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Web</label>
                <input type="text" class="form-control" value="<?php echo $data['web'] ?>" name="web">
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Pendidikan</label>
                <textarea class="form-control" rows="3" name="pendidikan" ><?php echo $data['pendidikan'] ?></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Pengalaman Kerja</label>
                <textarea class="form-control" rows="3" name="pengalaman_kerja" ><?php echo $data['pengalaman_kerja'] ?></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="margin-bottom: 10px;">Keterampilan</label>
                <textarea class="form-control" rows="3" name="keterampilan" ><?php echo $data['keterampilan'] ?></textarea>
            </div>
            <div class="form-group">
                <label style="margin-bottom: 10px;">Foto</label>
                <input type="text" class="form-control" value="<?php echo $data['foto_path'] ?>" name="foto_path">
            </div>
            <button class="btn btn-success" style="margin-top: 20px;" type="submit" name="update">Perbaharui Data</button>
        </form>
    </div>  
</body>
</html>