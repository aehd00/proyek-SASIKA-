<?php
$productName = isset($_COOKIE['productName']) ? $_COOKIE['productName'] : '';
setcookie('productName', '', time() - 3600); // Hapus cookie setelah digunakan
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Menggunakan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }

        .checkout-container {
            max-width: 600px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-place-order {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            /* Warna biru (sesuaikan dengan warna tema Anda) */
            color: #fff;
            border: none;
        }
    </style>
</head>

<body>

    <div class="checkout-container">
        <h2 class="mt-5 mb-4">Checkout</h2>

        <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Pengiriman</label>
                <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat pengiriman Anda" required></textarea>
            </div>

            <div class="form-group">
                <label for="metode-pembayaran">Metode Pembayaran</label>
                <select class="form-control" id="metode-pembayaran" required>
                    <option value="" selected disabled>Pilih metode pembayaran</option>
                    <option value="transfer">Transfer Bank</option>
                    <option value="kartu-kredit">Kartu Kredit</option>
                </select>
            </div>

            <button type="submit" class="btn btn-place-order">Place Order</button>
        </form>
    </div>

    <!-- Menggunakan Bootstrap JS (Jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>