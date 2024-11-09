<!-- Form Section -->
<section class="mt-5 py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-4" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #007bff;">Login Form</h2>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label" style="font-weight: bold;">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="font-weight: bold;">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2" style="font-size: 16px;">Submit</button>
        </form>
    </div>
</section>

<!-- CSS Kustom -->
<style>
    /* Style untuk Form Section */
    section {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .container {
        max-width: 500px;
        margin-top: 50px;
        padding: 20px;
    }

    h2 {
        color: #007bff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: bold;
    }

    .form-control {
        border-radius: 8px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 8px;
        font-weight: bold;
    }

    .form-label {
        font-weight: bold;
    }

    .form-check-label {
        font-size: 14px;
    }

    .form-check-input {
        border-radius: 5px;
    }
</style>
