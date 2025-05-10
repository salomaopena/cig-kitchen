<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>

    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
</head>

<body class="main-wrapper">

    <!-- top bar -->
     <?= $this->include('top_bar'); ?>


    <!--Content -->
    <?= $this->renderSection('content') ?>


    <!-- Footer -->
    <footer class="my-5 text-center text-muted">

        <p><i class="fa-solid fa-burger me-2"></i>
            &copy; 2022 - <?= date('Y') ?> <?= APP_NAME ?>. Todos os direitos reservados </p>
    </footer>


    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>