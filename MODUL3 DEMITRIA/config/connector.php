                    <?php

                        $conn = mysqli_connect('localhost', 'root', '', '');

                        if (!$conn){
                            die("Gagal terhubung dengan database: " . mysqli_connect_error());
                        }
                    ?>