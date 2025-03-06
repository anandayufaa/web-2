<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Belanja</title>

    <!-- Tambahkan Bootstrap CSS untuk gaya yang lebih baik -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h2 class="text-center">Form Belanja</h2>

        <form method="POST" action="form_belanja.php">

            <div class="form-group">

                <label for="customer">Nama Customer:</label>

                <input type="text" id="customer" name="customer" class="form-control" required>

            </div>

            <div class="form-group">

                <label for="produk">Pilih Produk:</label>

                <select id="produk" name="produk" class="form-control" required>

                    <option value="TV">TV</option>

                    <option value="Kulkas">Kulkas</option>

                    <option value="Mesin Cuci">Mesin Cuci</option>

                </select>

            </div>

            <div class="form-group">

                <label for="jumlah">Jumlah Beli:</label>

                <input type="number" id="jumlah" name="jumlah" class="form-control" required>

            </div>

            <button type="submit" name="proses" class="btn btn-primary">Simpan</button>

        </form>



        <?php

        if (isset($_POST['proses'])) {

            $customer = $_POST['customer'];

            $produk = $_POST['produk'];

            $jumlah = $_POST['jumlah'];



            // Daftar harga produk

            $harga_produk = [

                "TV" => 4200000,

                "Kulkas" => 3100000,

                "Mesin Cuci" => 3800000

            ];



            // Menghitung total belanja

            $total_belanja = $jumlah * $harga_produk[$produk];



            // Output hasil

            echo "<div class='mt-4'>";

            echo "<h4>Detail Belanja</h4>";

            echo "Nama Customer: $customer<br>";

            echo "Produk Pilihan: $produk<br>";

            echo "Jumlah Beli: $jumlah<br>";

            echo "Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";

            echo "</div>";

        }

        ?>

    </div>



    <!-- Bootstrap JS and dependencies -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>