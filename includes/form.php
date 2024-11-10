<!-- Login Form Section -->
<section id="login" class="mt-5 py-5" style="background-color: #2c3e50;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-family: 'Arial', sans-serif; color: #ecf0f1;">Login to Your Account</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action="process_login.php" method="POST" class="bg-dark p-5 shadow-lg rounded-lg" style="border-radius: 20px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);">
                    <div class="mb-4">
                        <label for="email" class="form-label" style="font-weight: bold; color: #ecf0f1;">Email Address:</label>
                        <input type="email" id="email" name="email" class="form-control p-3" placeholder="Enter your email" required style="border-color: #ecf0f1; border-radius: 15px; background-color: #34495e; color: #ecf0f1;">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label" style="font-weight: bold; color: #ecf0f1;">Password:</label>
                        <input type="password" id="password" name="password" class="form-control p-3" placeholder="Enter your password" required style="border-color: #ecf0f1; border-radius: 15px; background-color: #34495e; color: #ecf0f1;">
                    </div>
                    <div class="mb-4 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe" style="color: #ecf0f1; font-size: 14px;">Remember me</label>
                        </div>
                        <a href="#" class="text-primary" style="font-size: 14px; text-decoration: none;">Forgot password?</a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success w-100 py-3" style="font-size: 18px; border-radius: 50px; font-weight: 600; background-color: #27ae60; border-color: #27ae60; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); transition: all 0.3s;">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CSS Kustom -->
<style>
    /* Style untuk Login Form Section */
    #login {
        background-color: #2c3e50; /* Latar belakang gelap */
        color: #ecf0f1; /* Warna teks terang */
    }

    #login h2 {
        color: #ecf0f1; /* Warna header terang */
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }

    /* Form input dengan latar belakang abu-abu dan border putih */
    #login .form-control {
        background-color: #34495e; /* Latar belakang input abu-abu */
        color: #ecf0f1; /* Warna teks terang */
        border-radius: 15px;
        border: 2px solid #ecf0f1; /* Border putih */
        transition: all 0.3s ease-in-out;
    }

    /* Fokus pada input dengan border lebih terang */
    #login .form-control:focus {
        border-color: #1abc9c; /* Fokus dengan warna hijau lebih terang */
        box-shadow: 0 0 8px rgba(26, 188, 156, 0.5); /* Bayangan hijau saat fokus */
    }

    /* Tombol log in dengan warna hijau */
    #login .btn-success {
        background-color: #27ae60; /* Warna tombol hijau */
        border-color: #27ae60;
        border-radius: 50px;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Bayangan halus untuk tombol */
        transition: all 0.3s ease-in-out;
    }

    /* Efek hover pada tombol */
    #login .btn-success:hover {
        background-color: #2ecc71; /* Ubah warna saat hover menjadi hijau lebih terang */
        border-color: #2ecc71;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Bayangan lebih besar saat hover */
    }

    /* Responsif: Agar form lebih kecil di perangkat mobile */
    @media (max-width: 767px) {
        #login form {
            padding: 20px;
        }
    }
</style>
