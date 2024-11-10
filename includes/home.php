<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacket Catalog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS untuk animasi horizontal */
        @keyframes slideLeft {
            0% {
                transform: translateX(0); /* Mulai dari posisi awal */
            }
            100% {
                transform: translateX(-100%); /* Bergerak ke kiri sepenuhnya */
            }
        }

        /* Kontainer yang menampung seluruh kartu */
        .card-container {
            display: flex;
            flex-wrap: nowrap;
            width: max-content; /* Pastikan lebar kontainer mencakup semua kartu */
            animation: slideLeft 20s linear infinite; /* Animasi berjalan untuk seluruh kartu */
        }

        /* Setiap kartu */
        .card {
            display: flex;
            flex-direction: column;
            margin: 10px; /* Menambahkan jarak antar kartu */
            flex-shrink: 0; /* Jangan biarkan kartu mengecil */
            width: 200px; /* Menentukan lebar tetap untuk setiap kartu */
        }

        .card-img-top {
            object-fit: cover;
            height: 200px; /* Menyesuaikan tinggi gambar */
        }

        /* Styling tambahan untuk katalog */
        #catalog {
            margin-top: 50px;
        }

        #catalog h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center; /* Memastikan konten sejajar secara vertikal */
            align-items: center; /* Menjaga agar teks sejajar dengan gambar */
            flex-grow: 1; /* Membuat kartu mengisi sisa ruang */
        }

        .card-title, .card-text {
            margin: 0;
        }

        /* Menambahkan jarak antar gambar dan teks */
        .card-body h5, .card-body p {
            flex-shrink: 0;
        }

        /* Menambahkan padding untuk lebih rapi */
        .card-body {
            padding: 10px;
        }

    </style>
</head>
<body>

    <!-- Catalog Section -->
    <section id="catalog" class="mt-5">
        <h2>Jacket Catalog</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card-container">
                    <?php
                    $catalog = [
                        ["Alpha Industries MA-1", "assets/img/ft1_bomberjackets.jpeg", "$150"],
                        ["Schott NYC Perfecto", "assets/img/ft2_perfectoleather.jpeg", "$500"],
                        ["Levi's Trucker", "assets/img/ft3_originaltrucker.jpeg", "$80"],
                        ["Canada Goose Expedition", "assets/img/ft4_expeditionparka.jpeg", "$900"],
                        ["The North Face Resolve", "assets/img/ft5_resolvewindbreaker.jpeg", "$70"],
                        ["H&M Slim-Fit Blazer", "assets/img/ft6_slim-fitblazer.jpeg", "$40"],
                    ];

                    // Duplikasi kartu untuk menciptakan efek tak terbatas tanpa jeda
                    foreach ($catalog as $item) {
                        echo '
                        <div class="card">
                            <img src="' . $item[1] . '" class="card-img-top" alt="' . $item[0] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $item[0] . '</h5>
                                <p class="card-text">Price: ' . $item[2] . '</p>
                            </div>
                        </div>';
                    }

                    // Menambahkan salinan yang sama untuk menciptakan efek tanpa jeda
                    foreach ($catalog as $item) {
                        echo '
                        <div class="card">
                            <img src="' . $item[1] . '" class="card-img-top" alt="' . $item[0] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $item[0] . '</h5>
                                <p class="card-text">Price: ' . $item[2] . '</p>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
