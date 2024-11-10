<!-- Contact Section -->
<section id="contact" class="mt-5 py-5" style="background-color: #343a40;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #007bff;">Get in Touch</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form action="process_contact.php" method="POST" class="bg-light p-5 shadow-lg rounded-lg" style="border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
                    <div class="mb-4">
                        <label for="name" class="form-label" style="font-weight: bold; color: #007bff;">Full Name:</label>
                        <input type="text" id="name" name="name" class="form-control p-3" placeholder="Your Full Name" required style="border-color: #007bff; border-radius: 12px; background-color: #ffffff; color: #333333;">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label" style="font-weight: bold; color: #007bff;">Email Address:</label>
                        <input type="email" id="email" name="email" class="form-control p-3" placeholder="Your Email Address" required style="border-color: #007bff; border-radius: 12px; background-color: #ffffff; color: #333333;">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label" style="font-weight: bold; color: #007bff;">Your Message:</label>
                        <textarea id="message" name="message" class="form-control p-3" rows="5" placeholder="Your Message" required style="border-color: #007bff; border-radius: 12px; background-color: #ffffff; color: #333333;"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100 py-3" style="font-size: 18px; border-radius: 50px; font-weight: 600; background-color: #007bff; border-color: #007bff; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); transition: all 0.3s;">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CSS Kustom -->
<style>
    /* Style untuk bagian kontak */
    #contact {
        background-color: #343a40; /* Latar belakang gelap */
        color: #ffffff; /* Warna teks putih */
    }

    #contact h2 {
        color: #007bff; /* Warna header biru terang */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
    }

    /* Form input dengan latar belakang putih dan border biru */
    #contact .form-control {
        background-color: #ffffff; /* Latar belakang input putih */
        color: #333333; /* Warna teks gelap */
        border-radius: 12px;
        border: 2px solid #007bff; /* Border biru */
        transition: all 0.3s ease-in-out;
    }

    /* Fokus pada input dengan border lebih terang */
    #contact .form-control:focus {
        border-color: #0056b3; /* Fokus dengan warna biru lebih gelap */
        box-shadow: 0 0 8px rgba(0, 86, 179, 0.5); /* Bayangan biru saat fokus */
    }

    /* Tombol kirim dengan warna biru */
    #contact .btn-primary {
        background-color: #007bff; /* Warna tombol biru terang */
        border-color: #007bff;
        border-radius: 50px;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Bayangan halus untuk tombol */
        transition: all 0.3s ease-in-out;
    }

    /* Efek hover pada tombol */
    #contact .btn-primary:hover {
        background-color: #0056b3; /* Ubah warna saat hover menjadi biru lebih gelap */
        border-color: #0056b3;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Bayangan lebih besar saat hover */
    }

    /* Responsif: Agar form lebih kecil di perangkat mobile */
    @media (max-width: 767px) {
        #contact form {
            padding: 20px;
        }
    }
</style>
