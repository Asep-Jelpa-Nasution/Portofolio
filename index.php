<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Jacket Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling Umum */
        body {
            background-color: #007bff;
            /* Warna latar belakang gelap */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            color: #f8f9fa;
        }

        /* Bagian Welcome Section */
        .welcome-section {
            background-image: linear-gradient(to bottom, #ffffff, #007bff);
            /* Gradasi dari putih ke biru */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 20px;
            color: white;
            text-align: center;
            min-height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }


        /* Teks untuk "Jacket Store" di atas */
        .jacket-text {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.8);
        }

        .welcome-text {
            font-size: 3rem;
            font-weight: bold;
            margin-top: 50px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.8);
        }

        /* Tombol */
        .btn-custom {
            background-color: #8B4513;
            /* Warna emas untuk tombol */
            border: none;
            color: white;
            padding: 12px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #6A2E1F;
            /* Warna lebih gelap saat hover */
            cursor: pointer;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #212529;
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
                padding: 10px 25px;
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
        <!-- Teks Jacket Store di atas -->
        <div class="jacket-text">Jacket Store</div>
        <div class="container">
            <h1 class="welcome-text">Welcome to the Ultimate Jacket Collection!</h1>
            <p class="lead">"Explore our exclusive collection of jackets that bring both style and comfort for every season."</p>
            <a href="indexx.php" class="btn btn-custom">Start Shopping</a>
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