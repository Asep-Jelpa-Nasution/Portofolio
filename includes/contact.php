<!-- Contact Section -->
<section id="contact" class="mt-5 py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #007bff;">Contact Us</h2>
        <form action="process_contact.php" method="POST" class="mt-4 p-4 bg-white shadow-lg rounded">
            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: bold;">Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" style="font-weight: bold;">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label" style="font-weight: bold;">Message:</label>
                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2" style="font-size: 16px;">Send Message</button>
        </form>
    </div>
</section>

<!-- CSS Kustom -->
<style>
    /* Style untuk bagian kontak */
    #contact {
        background-color: #f8f9fa;
    }

    #contact h2 {
        color: #007bff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    #contact .form-control {
        border-radius: 8px;
    }

    #contact .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 8px;
        font-weight: bold;
    }
</style>
