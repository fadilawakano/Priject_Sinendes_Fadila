<?php

include "private/conn.php";

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sinendes</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mdb.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <!-- Intro settings -->
    <style>
        body {
            background-color: #ADD8E6;
            color: #ffffff; 
            font-family: arial, sans-serif;
        }
        /* Default height for small devices */
        #intro-example {
            height: 400px;
        }

        /* Height for devices larger than 992px */
        @media (min-width: 992px) {
            #intro-example {
                height: 600px;
            }
        }

        .gap-1 {
            gap: 1rem;
        }
    </style>

    <body>
        <!--Main Navigation-->
        <header>
            <style>
                #intro {
                    background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
                    height: 100vh;
                }

                /* Height for devices larger than 576px */
                @media (min-width: 992px) {
                    #intro {
                        margin-top: -58.59px;
                    }
                }

                .navbar .nav-link {
                    color: #DEB887 !important;
                }
            </style>

            <?php
            
            include 'navbar.php';
            
            ?>



            <!-- Background image -->
            <div id="intro-example" class="p-5 text-center bg-image"
                style="background-image: url('src/assets/latu 1.png');">
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1 class="mb-3" style="font-family: serif">SISTEM PANEN DESA LATU</h1>
                            <h5 class="mb-4" style="font-family: serif">Di tengah hamparan sawah yang hijau, terdapat sebuah desa bernama Latu. Di sini, petani-petani berpadu dengan alam, menari dalam irama musim dan matahari. Mari kita jelajahi sistem panen Desa Latu:

Musim yang Menentukan: Di Desa Latu, musim bukan hanya perubahan cuaca. Musim adalah guru bagi para petani. Mereka mengamati langit, mendengarkan bisikan angin, dan memahami ritme tanah. Ketika musim hujan tiba, mereka menabur benih dengan harapan. Dan saat matahari bersinar terik, mereka memanen hasil kerja keras mereka.
Gotong Royong: Di Desa Latu, panen bukan hanya urusan individu. Ini adalah tarian gotong royong. Tetangga membantu tetangga, dan semua tangan bersatu mengumpulkan hasil bumi. Mereka tertawa bersama saat jerih payah berbuah manis.
Ritual Syukur: Setelah panen selesai, Desa Latu menggelar ritual syukur. Mereka menghormati tanah yang memberi makan mereka. Mungkin ada tarian, doa, dan hidangan bersama. Ini adalah momen ketika manusia dan alam berpelukan dalam rasa terima kasih.
Jadi, jika Anda pernah berkunjung ke Desa Latu, dengarkanlah cerita-cerita petani dan bumi. Mereka mengajarkan kita tentang kesederhanaan, ketekunan, dan keajaiban siklus alam. 🌾🌞🌟</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#formPanen">
                    <i class="bi-person-plus-fill"></i> Tambah Data Panen
                </button>



                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hasil Panen</th>
                            <th>Harga</th>
                            <th>Nama Wirausaha</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                // Query untuk mengambil data hasil_panen
                $sql = mysqli_query($koneksi, "SELECT * FROM panen");
                while ($row = mysqli_fetch_array($sql)) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['hasil_panen']}</td>
                            <td>{$row['harga']}</td>
                            <td>{$row['nama_wirausaha']}</td>
                            <td>{$row['alamat']}</td>
                            <td>{$row['no_hp']}</td>
                            <td>
                                <button class='btn btn-sm btn-warning'
                                    data-bs-toggle='modal' data-bs-target='#formPanenEdit'>Edit</button>
                                <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus Data?')\">Delete</a>
                            </td>
                        </tr>";
                }
                ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal Tambah -->
            <div class="modal fade" id="formPanen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Data Panen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="simpan_panen.php" method="POST">
                                <div class="mb-3">
                                    <label for="hasil_panen" class="form-label">Hasil Panen</label>
                                    <input type="text" class="form-control" id="hasil_panen" name="hasil_panen"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_wirausaha" class="form-label">Nama Wirausaha</label>
                                    <input type="text" class="form-control" id="nama_wirausaha" name="nama_wirausaha"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No. HP</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-dark">Simpan</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            
            $sql = mysqli_query($koneksi, "SELECT * FROM panen");
            while($data = mysqli_fetch_array($sql)):
            
            ?>
            <!-- Modal Edit -->
            <div class="modal fade" id="formPanenEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Data Panen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="edit_panen.php" method="POST">
                                <input type="hidden" name="id" value="<?=$data['id']?>">
                                <div class="mb-3">
                                    <label for="hasil_panen" class="form-label">Hasil Panen</label>
                                    <input type="text" class="form-control text-danger" id="hasil_panen"
                                        value="<?= $data['hasil_panen']?>" name="hasil_panen" required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="harga" value="<?= $data['harga']?>"
                                        name="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_wirausaha" class="form-label">Nama Wirausaha</label>
                                    <input type="text" class="form-control" id="nama_wirausaha"
                                        value="<?= $data['nama_wirausaha']?>" name="nama_wirausaha" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                        required><?=$data['alamat']?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">No. HP</label>
                                    <input type="text" class="form-control" id="no_hp" value="<?= $data['no_hp']?>"
                                        name="no_hp" required>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            endwhile;
            
            ?>






            <!--Footer-->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
            </footer>
            <!--Footer-->


            <script src="js/mdb.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
    </body>

</html>