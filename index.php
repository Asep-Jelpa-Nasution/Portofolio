<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Sentuhan Desain Sepatu */
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }

        .welcome-section {
            background-image: url('https://i.pinimg.com/564x/a8/1a/7f/a81a7f009a39ee2cce18dc87a5ea42de.jpg'); /* Ganti dengan gambar sepatu yang relevan */
            background-size: cover;  /* Memastikan gambar latar belakang memenuhi layar */
            background-position: center; /* Memastikan gambar berada di tengah */
            background-attachment: fixed; /* Gambar tetap saat scroll */
            padding: 100px 20px; /* Memberi padding lebih agar teks tidak terlalu dekat dengan tepi */
            color: #fff;
            text-align: center;
            min-height: 90vh; /* Membatasi gambar latar belakang agar tidak memenuhi seluruh layar */
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Agar teks tetap di atas */
            align-items: center; /* Agar teks berada di tengah secara horizontal */
            position: relative; /* Agar teks bisa diposisikan secara absolut di dalam section */
        }

        /* Teks Sneaker Store di atas */
        .sneaker-text {
            position: absolute;
            top: 20px; /* Menempatkan teks di atas */
            left: 50%;
            transform: translateX(-50%);
            font-size: 3rem;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Menambahkan bayangan pada teks agar lebih jelas */
        }

        .welcome-text {
            font-size: 3rem;
            font-weight: bold;
            margin-top: 50px; /* Memberi jarak agar teks tidak terlalu dekat dengan tepi atas */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Menambahkan bayangan pada teks agar lebih jelas */
        }

        .btn-custom {
            background-color: #ff6347; /* Warna khas sepatu atau aksesoris */
            border: none;
            color: white;
            padding: 10px 30px;
            font-size: 1.1rem;
            border-radius: 25px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #ff4500;
            cursor: pointer;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: white;
            width: 100%;
        }

        .footer p {
            margin: 0;
            font-size: 1rem;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .welcome-text {
                font-size: 2rem;
            }

            .btn-custom {
                font-size: 1rem;
                padding: 8px 20px;
            }

            .welcome-section {
                padding: 80px 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <!-- Teks Sneaker Store di atas -->
        <div class="sneaker-text">Sneaker Store</div>
        <div class="container">
            <h1 class="welcome-text">Welcome to the World of Stylish Shoes!</h1>
            <p class="lead">"Jelajahi koleksi eksklusif kami dari tren dan gaya terbaru yang akan membawa permainan mode Anda ke level berikutnya."</p>
            <a href="indexx.php" class="btn btn-custom">Start Exploring</a>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; Created By <span class="fw-bold">Asep Jelpa Nasution</span></p>
    </div>

    <!-- Bootstrap JS (optional for responsiveness) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
