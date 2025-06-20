<?php
// Start session only if none exists
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isLoggedIn = isset($_SESSION['username']);
$isAdmin = isset($_SESSION['roles']) && in_array('ADMIN', $_SESSION['roles']);
$pageTitle = isset($pageTitle) ? $pageTitle : "Home | Covid-19 Testing Management System";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="icon" type="image/x-icon" href="img/hospital-logo.ico" />
    <link rel="stylesheet" href="css/app.css" />
    <!-- Bootstrap 5 CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <?php if (isset($customLoginCss)) : ?>
        <link rel="stylesheet" href="<?= htmlspecialchars($customLoginCss) ?>" />
    <?php endif; ?>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="index.php">
                <img src="img/logo.1.jpg" alt="Logo" style="width: 50px;" />
            </a>
            <a class="navbar-brand" href="index.php">Covid-19 Testing Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link <?= (strpos($pageTitle, 'Home') !== false) ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>

                    <!-- Admin-only Dashboard link -->
                    <?php if ($isAdmin): ?>
                        <li class="nav-item">
                            <a class="nav-link <?= (strpos($pageTitle, 'Admin Dashboard') !== false) ? 'active' : '' ?>" href="admin_dashboard.php">Dashboard</a>
                        </li>

                        <!-- Admin-only Covid Tests link -->
                        <li class="nav-item">
                            <a class="nav-link <?= (strpos($pageTitle, 'Covid Tests') !== false) ? 'active' : '' ?>" href="covid_tests.php">Covid Tests</a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link <?= (strpos($pageTitle, 'About') !== false) ? 'active' : '' ?>" href="aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos($pageTitle, 'Contact') !== false) ? 'active' : '' ?>" href="contactUs.php">Contact Us</a>
                    </li>

                    <?php if ($isLoggedIn) : 
                        $username = isset($_SESSION['displayName']) ? $_SESSION['displayName'] : $_SESSION['username'];
                        $initial = strtoupper(substr($username, 0, 1));
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar-circle me-2" style="width: 32px; height: 32px; border-radius: 50%; background-color: #6c757d; color: white; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                    <?= htmlspecialchars($initial) ?>
                                </div>
                                <span><?= htmlspecialchars($username) ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile.php"><i class="bi bi-person me-2"></i>Profile Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link <?= (strpos($pageTitle, 'Login') !== false) ? 'active' : '' ?>" href="login.php">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
