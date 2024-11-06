 <!-- Contact Section -->
 <section id="contact" class="mt-5">
            <h2>Contact Us</h2>
            <form action="process_contact.php" method="POST" class="mt-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" name="message" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </section>
    </main>