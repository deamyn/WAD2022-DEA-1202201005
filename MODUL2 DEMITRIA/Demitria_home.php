            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                    crossorigin="anonymous">
                <title>Home</title>
            </head>

            <body>
                <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-warning">
                    <a class="navbar-brand bg-light shadow-lg p-2 mb-2 bg-body rounded">
                        <img src="./assets/logo-ead.png" alt="logo-ead" width="150" height="40">
                    </a>
                    <div class="collapse navbar-collapse d-flex justify-content-center">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="Demitria_home.php">Home</a>
                            <a class="nav-item nav-link" href="Demitria_booking.php">Booking</a>
                        </div>
                    </div>
                    <div class="bg-light shadow-dark p-2 mb-2 bg-body rounded d-flex justify-content-center align-items-center"
                    style="width: 160px; height: 55px; font-size: 25px">EAD RENT</div>
                </nav>

                <div class="title mt-2 text-center">
                    <br>
                    <h2 class="text-center">WELCOME TO <b>EAD RENT</b>!</h2>
                    <p class="text-center">Find your best deal, here!</p>
                </div>

                <div class="container d-flex justify-content-center">
                    <div class="card" style="width: 350px;">
                        <img class="card-img-top rounded" style="padding: 20px"
                                src="./assets/brio.png">
                        <div class="card-body">
                            <h4 class="card-title text-center">Honda Brio</h4>
                            <h5 class="text-warning text-center">Rp250.000 / Hari</h5>
                            <p class="card-text">
                                <table class="table table-bordered text-center border border-warning">
                                    <tr>
                                        <th>>>> Spesifikasi <<<</th>
                                    </tr>
                                    <tr>
                                        <td>4 Kursi</td>
                                    </tr>
                                    <tr>
                                        <td>1200 CC</td>
                                    </tr>
                                    <tr>
                                        <td>Automatic</td>
                                    </tr>
                                </table>
                            </p>
                        </div>
                    <div class="card-footer d-flex justify-content-center">
                        <a class="btn btn-warning"
                            href="Demitria_booking.php?car=brio&picture=./assets/brio.png">Book Now</a>
                    </div>
                </div>

                <div class="card mx-4" style="width: 350px;">
                    <img class="center card-img-top" style="padding: 20px; width: 295px; margin-left: auto; margin-right: auto;"
                        src="./assets/jazz.png">
                    <div class="card-body">
                        <h4 class="card-title text-center">Honda Jazz</h4>
                        <h5 class="text-warning text-center">Rp250.000 / Hari</h5>
                        <p class="card-text">
                            <table class="table table-bordered text-center border border-warning">
                                <tr>
                                    <th>>>> Spesifikasi <<<</th>
                                </tr>
                                <tr>
                                    <td>5 Kursi</td>
                                </tr>
                                <tr>
                                    <td>1000 CC</td>
                                </tr>
                                <tr>
                                    <td>Automatic</td>
                                </tr>
                            </table>
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <a class="btn btn-warning"
                            href="Demitria_booking.php?car=jazz&picture=./assets/jazz.png">Book Now</a>
                    </div>
                </div>

                <div class="card" style="width: 350px;">
                    <img class="card-img-top" style="padding: 20px; width: 320px; margin-left: auto; margin-right: auto;"
                        src="./assets/mini-cooper.png">
                    <div class="card-body">
                        <h4 class="card-title text-center">Mini Cooper</h4>
                        <h5 class="text-warning text-center">Rp500.000 / Hari</h5>
                        <p class="card-text">
                            <table class="table table-bordered text-center border border-warning">
                                <tr>
                                    <th>>>> Spesifikasi <<<</th>
                                </tr>
                                <tr>
                                    <td>5 Kursi</td>
                                </tr>
                                <tr>
                                    <td>1400 CC</td>
                                </tr>
                                <tr>
                                    <td>Manual</td>
                                </tr>
                            </table>
                        </p>
                    </div>
                        <div class="card-footer d-flex justify-content-center">
                            <a class="btn btn-warning"
                                href="Demitria_booking.php?car=mini_cooper&picture=./assets/mini-cooper.png">Book Now</a>
                        </div>
                    </div>
                </div>
                <br>
                <footer class="text-center" id="footer">
                    <button type="button" class="btn-warning rounded" data-bs-toggle="modal" data-bs-target="#copyrightModal">
                    Created by: Demitria Mayana A_1202201005
                    </button>

                    <div class="modal fade" id="copyrightModal" tabindex="-1" aria-labelledby="copyrightModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5" id="copyrightModalLabel">
                                    Copyright 2022 Demitria Mayana A_1202201005_SI4402
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <p>Nama Lengkap : Demitria Mayana A</p>
                                    <p>NIM : 1202201005</p>
                                    <p>Kelas : SI-44-02</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>

            </body>

            </html>