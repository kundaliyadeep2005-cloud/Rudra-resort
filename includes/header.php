<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title : 'Hotel Reservation' ?></title>
    <?php 
        $current_css_page = basename($_SERVER['PHP_SELF']); 
        $page_name_no_ext = pathinfo($current_css_page, PATHINFO_FILENAME);
    ?>
    <!-- Global styling (Navbar, Footer, Home) -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/index.css">
    
    <!-- Auth/Profile Styling -->
    <?php if(in_array($current_css_page, ['login.php', 'register.php', 'home.php', 'update_profile.php'])): ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <?php endif; ?>
    
    <!-- Dynamic Page Styling -->
    <?php if(file_exists(__DIR__ . "/../assets/css/{$page_name_no_ext}.css") && !in_array($page_name_no_ext, ['index', 'style'])): ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/<?= $page_name_no_ext ?>.css">
    <?php endif; ?>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="main-body <?= isset($body_class) ? $body_class : '' ?>" <?= isset($body_style) ? 'style="'.$body_style.'"' : '' ?>>
<?php include 'navbar.php'; ?>
