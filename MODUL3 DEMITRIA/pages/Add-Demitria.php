<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        <?php include '../assets/style/index.css'; ?>
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #FFE1E1">
        <div class="container">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" style="color: black; font-weight: 600;" href="../index.php">Home</a>
                    <a class="nav-link" href="" style="color: black; ">My Car</a>
                </div>
            </div>
        </div>
        </div>
    </nav>


<section id='form'>
    <div class="container">
        <h1 class="add">Tambah Mobil</h1>
        <p class="add-mobil">Tambah Mobil Baru Anda Ke List Show Room</p>
        <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
            <label for="nama">Nama Mobil</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Mobil">

            <label for="pemilik">Nama Pemilik</label>
            <input type="text" id="pemilik" name="pemilik" placeholder="Masukkan Nama Pemilik">

            <label for="merk">Merk</label>
            <input type="text" id="merk" name="merk" placeholder="Masukkan Merk Mobil">

            <label for="tanggalbeli">Tanggal Beli</label>
            <input type="date" id="tanggalbeli" name="tanggalbeli">

            <label for="desc">Deskripsi</label>
            <textarea id="desc" name="desc" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>

            <label for="inputGroupFile01">Foto</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="gambar" style="height: 40px;">

            <label for="status">Status Pembayaran</label>
            <span class="d-flex">
                <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
                <label for="lunas" style="margin-top: 15px; margin-right:10px; font-weight: normal">Lunas</label>

                <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
                <label for="belum" style="margin-top: 15px; font-weight: normal">Belum Lunas</label>
            </span>

            <button type="submit" class="btn" style="margin-top: 40px; background-color: #FFE1E1; height: 50px; width: 120px; font-weight: bold;">Selesai</button>
        </form>
    </div>
</section>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>