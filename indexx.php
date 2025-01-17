<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bootstrap demo</title>
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="text-center p-3">Jacket Store</h1>
    </header>

    <!-- menu -->
    <?php include "includes/navbar.php" ?>
    <!-- ./menu -->

    <!-- Konten -->
    <div class="container mt-3">
        <?php include "konten.php" ?>
    </div>
    <!-- ./konten -->

    <footer>
        <div class="text-bg-dark p-3 text-center mt-5">
            <p>&copy; Created By <span class="fw-bold">Asep Jelpa Nasution</span>.</p><? date("Y") ?>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        new DataTable('#example');
    </script>

</body>

</html>