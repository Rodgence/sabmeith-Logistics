<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sabmeith Logistics</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- jQuery (Required for Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/loogo.png" alt="Sabmeith Logistics Logo">
        </a>

        <!-- Hamburger Button -->
        <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="logistics.php" class="dropdown-item">Logistics</a>
                        <a href="clearing-forward.php" class="dropdown-item">Clearing and Forwarding</a>
                        <a href="freight-logistics.php" class="dropdown-item">Freight Logistics</a>
                    </div>
                </div>

                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="inquiry.php" class="nav-item nav-link">Inquiry</a>
            </div>

            <h4 class="m-0 pe-lg-5 d-none d-lg-block">
                <i class="fa fa-headphones text-primary me-3"></i>
                <a href="https://wa.me/255775999000">+255 775 999 000</a>
            </h4>
        </div>
    </nav>
    <!-- Navbar End -->

    <script>
        // Close navbar when clicking outside on mobile
        $(document).click(function (event) {
            var clickover = $(event.target);
            var navbarCollapse = $("#navbarCollapse");
            var opened = navbarCollapse.hasClass("show");
            if (opened && !clickover.closest(".navbar").length) {
                $(".navbar-toggler").click();
            }
        });
    </script>

</body>
</html>
