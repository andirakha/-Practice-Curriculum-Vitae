<?php
    include_once("config.php");
    $result = mysqli_query($conn,"SELECT * FROM cv_data");
    $data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Curriculum Vitae - Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Curriculum Vitae - Home</a>
            <div class="d-flex flex-row-reverse collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <a class="btn btn-outline-success" href="update.php">Update</a>
                </form>
            </div>
        </div>
    </nav>    
    <img src="<?php echo $data['foto_path'] ?>" class="rounded float-end" alt="uhh..." style="width:300px;height:300px;margin: 20px;">
    <div style="margin-top: 20px; margin-left: 20px">
        <h5>Nama Lengkap</h5>
        <hr style="width:140px">
        <h6><?php echo $data['nama'] ?></h6><br>
        <h5>Alamat</h5>
        <hr style="width:70px">
        <h6><?php echo $data['alamat'] ?></h6><br>
        <h5>Telepon</h5>
        <hr style="width:70px">
        <h6><?php echo $data['telepon'] ?></h6><br>
        <h5>Email</h5>
        <hr style="width:50px">
        <h6><?php echo $data['email'] ?></h6><br>
        <h5>Web</h5>
        <hr style="width:40px">
        <h6><?php echo $data['web'] ?></h6><br>
        <h5>Pendidikan</h5>
        <hr style="width:100px">
        <h6><?php echo $data['pendidikan'] ?></h6><br>
        <h5>Pengalaman Kerja</h5>
        <hr style="width:170px">
        <h6><?php echo $data['pengalaman_kerja'] ?></h6><br>
        <h5>Keterampilan</h5>
        <hr style="width:120px">
        <h6 style="margin-bottom: 30px;"><?php echo $data['keterampilan'] ?></h6>
    </div>
</body>
</html>