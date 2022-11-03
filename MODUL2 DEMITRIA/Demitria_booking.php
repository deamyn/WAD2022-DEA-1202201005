        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">
            <script>
                function setPicture() {
                    var banner = document.getElementById("car");
                    var value = banner.options[banner.selectedIndex].value;
                    $('img').attr("src", value);
                }
            </script>
            <title>Booking</title>
        </head>

        <body>
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

            <?php
                $cartype = isset($_GET['car']) ? $_GET['car'] : " ";
            ?>

            <div class="container d-flex justify-content-center p-4">
                <div class="row">
                    <div class="col-sm-6 mr-3">
                        <form action="Demitria_mybooking.php" style="padding: 20px">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama_NIM" name="nama">
                            </div>

                            <div class="form-group">
                                <label for="book">Book Date</label>
                                <input type="date" class="form-control" name="book">
                            </div>

                            <div class="form-group">
                                <label for="time">Start Time</label>
                                <input type="time" class="form-control" name="time">
                            </div>

                            <div class="form-group">
                                <label for="duration">Duration (Days)</label>
                                <input type="number" class="form-control" name="duration">
                            </div>

                            <div class="form-group">
                                <label for="car">Car Type</label>
                                <select class="custom-select my-1 mr-sm-2"  name="car" onchange="setPicture()">
                                    <option <?php if($cartype == 'brio'){echo("selected");}?> value="Honda Brio">Honda Brio</option>
                                    <option <?php if($cartype == 'jazz'){echo("selected");}?> value="Honda Jazz">Honda Jazz</option>
                                    <option <?php if($cartype == 'mini_cooper'){echo("selected");}?> value="Mini Cooper">Mini Cooper</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                            <p class="mb-2">Add Service(s)</p>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="service[]" value="Health Protocol">
                                    <label class="form-check-label" for="health">
                                        Health Protocol / Rp25.000
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="service[]" value="Driver">
                                    <label class="form-check-label" for="driver">
                                        Driver / Rp100.000
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="service[]" value="Fuel Filled">
                                    <label class="form-check-label" for="fuel">
                                        Fuel Filled / Rp250.000
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-block btn-warning" type="submit" value="submit">Book</button>
                        </form>
                    </div>
                    <div class="col-sm-4" style="padding: 40px">
                        <?php if(!empty($_GET['picture'])){ ?>
                            <img src=<?= $_GET['picture']?> style="width:500px;">
                        <?php }else {?>
                            <img src='./assets/brio.png' style="width:500px;">
                        <?php }?>
                    </div>
                </div>
            </div>

            <footer class="text-center pt-2 bg-light">
                <p>Created by: Demitria Mayana A_1202201005</p>
            </footer>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
        </html>