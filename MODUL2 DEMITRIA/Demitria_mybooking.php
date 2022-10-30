<!DOCTYPE html>
<html lang="en">

<head>
    <metacharset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>My Booking</title>
</head>

<body>
    <?php
        $idNumber = rand(2340, 3000);
        $name = $_POST['nama'];
        $book = $_POST['book'];
        $duration = $_POST['duration'];
        $return = $book." + ".$duration." days";
        $car = $_POST['car'];
        $serv = $_POST['service'];
        $phone = $_POST['phone'];

        if($car == 'Honda Brio'):
            $harga = '250000' * $duration;
        elseif($car == 'Honda Jazz'):
            $harga = '250000' * $duration;
        elseif($car == 'Mini Cooper'):
            $harga = '500000' * $duration;
        endif;

    ?>

    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-warning">
        <a class="navbar-brand bg-light shadow-lg p-2 mb-2 bg-body rounded" href="#">
            <img src="./assets/logo-ead.png" alt="logo-ead" width="150" height="40">
        </a>
        <div class="collapse navbar-collapse d-flex justify-content-center">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="Demitria_home.php">Home</a>
                <a class="nav-item nav-link active" href="Demitria_booking.php">Booking</a>
            </div>
        </div>
        <div class="bg-light shadow-dark p-2 mb-2 bg-body rounded d-flex justify-content-center align-items-center"
        style="width: 160px; height: 55px; font-size: 25px">EAD RENT</div>
    </nav>

    <div class="title mt-2 text-center">
        <br>
        <h2 class="text-center">THANK YOU<br><br><b><?php echo $name;?></b><br></h2>
        <br>
        <p class="text-center">Please double check your reservation detail</p>
    </div>

    <div class="container d-flex justify-content-center p-2">
        <table class="table table-striped">
            <tr>
                <th>Booking Number</th>
                <th>Name</th>
                <th>Book Date</th>
                <th>Return</th>
                <th>Car Type</th>
                <th>Phone Number</th>
                <th>Service</th>
                <th>Total Price</th>
            </tr>
            <tr>
                <td><?= $idNumber?></td>
                <td><?= $name?></td>
                <td><?= date('d-m-Y', strtotime($book))?></td>
                <td><?= date('d-m-Y', strtotime($return))?></td>
                <td><?= $car;?></td>
                <td><?= $phone?></td>
                <td>
                    <?php
                            if (isset($_POST["service"])){
                                $harga_serv = 0;
                                foreach ($_POST["service"] as $serv ){
                                    echo "<li>$serv</li>";
                                    if($serv == "Health Protocol"):
                                        $harga_serv += 25000 * $duration;
                                    elseif ($serv == "Driver"):
                                        $harga_serv += 100000 * $duration;
                                    elseif ($serv == "Fuel Filled"):
                                        $harga_serv += 250000 * $duration;
                                    endif;;
                                }
                            }
                            else{
                                echo "no service";
                            }
                            ?>
                </td>
                <td>
                    <?php if(isset($_POST["service"])){
                        echo "Rp" .$hargaTotal = $harga+$harga_serv;
                    } else {
                        echo "Rp" .$harga;
                    }?>
                </td>
            </tr>
        </table>
    </div>
    <footer class="fixed-bottom text-center pt-2 bg-light">
        <p>Created by: Demitria Mayana A_1202201005</p>
    </footer>
</body>

</html>