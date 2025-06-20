<?php
session_start();
$pageTitle = "Admin Dashboard | Covid-19 Testing";
include 'header.php';

// Access control
if (!isset($_SESSION['roles']) || !in_array('ADMIN', $_SESSION['roles'])) {
    header("Location: login.php");
    exit();
}

$displayName = $_SESSION['displayName'] ?? 'Admin';
?>

<div class="container my-5">
    <h2 class="text-center mb-4" data-aos="fade-down">Welcome to Admin Dashboard</h2>
    <p class="text-end">Logged in as: <strong><?php echo htmlspecialchars($displayName); ?></strong></p>

    <div class="row g-4">
        <!-- User Management -->
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">User Management</h5>
                    <p class="card-text">View, edit, or delete registered users.</p>
                    <a href="manageUsers.php" class="btn btn-primary">Manage Users</a>
                </div>
            </div>
        </div>

        <!-- System Reports -->
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">System Reports</h5>
                    <p class="card-text">Generate system usage reports and analytics.</p>
                    <a href="reports.php" class="btn btn-secondary">View Reports</a>
                </div>
            </div>
        </div>

        <!-- Task Panel -->
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Assign Tasks</h5>
                    <p class="card-text">Assign tasks to users and track progress.</p>
                    <a href="admin_task_panel.php" class="btn btn-success">Go to Task Panel</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Section -->
    <div class="row g-4 mt-4">
        <div class="col-md-6" data-aos="fade-up">
            <div class="card border-0 shadow-sm h-100 bg-light">
                <div class="card-body text-center">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text">Check system alerts or user queries (coming soon).</p>
                    <a href="#" class="btn btn-outline-dark disabled">Coming Soon</a>
                </div>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 shadow-sm h-100 bg-light">
                <div class="card-body text-center">
                    <h5 class="card-title">Profile Settings</h5>
                    <p class="card-text">Update your admin profile and change password.</p>
                    <a href="admin_profile.php" class="btn btn-outline-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script>AOS.init();</script>

<?php include 'footer.php'; ?>
