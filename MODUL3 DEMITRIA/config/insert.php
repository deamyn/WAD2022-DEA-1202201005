                    <?php
                    require './connector.php';

                    $idmobil = rand(1000,5000);
                    $namamobil = $_GET['nama'];
                    $pemilik = $_GET['pemilik'];
                    $merk = $_GET['merk'];
                    $tanggalbeli = $_GET['tanggalbeli'];
                    $desc = $_GET['desc'];
                    $status = $_GET['status'];
                    $gambar = $_FILES['gambar']['name'];

                    $target = "../assets/images/";

                    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
                        $sql = "INSERT INTO showroom_dea_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$idmobil','$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
                        if (mysqli_query($sql)) {
                            header("location: ../pages/ListCar-Demitria.php?message=success");
                        } else {
                            echo "Gagal:(";
                        }
                        } else {
                        echo "Gagal:(";
                        }
                    ?>