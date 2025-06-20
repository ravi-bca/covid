<?php
$pageTitle = "System Reports | Covid-19 Testing";
include 'header.php';

// Check if user is admin
if (!isset($_SESSION['roles']) || !in_array('ADMIN', $_SESSION['roles'])) {
    header("Location: login.php");
    exit();
}
?>

<div class="container my-5">
    <h2 class="mb-4" data-aos="fade-down">System Reports</h2>

    <p>Generate system usage reports and analytics to monitor the performance and user activity.</p>

    <!-- Placeholder for Reports -->
    <div class="card shadow-sm p-4">
        <h4>Usage Analytics</h4>
        <p>This section will contain charts, tables, or data summaries about system usage.</p>

        <!-- Example: Simple table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Report Name</th>
                    <th>Description</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>User Registrations</td>
                    <td>Number of new users registered in the last month.</td>
                    <td>2025-06-10</td>
                    <td><a href="#" class="btn btn-sm btn-primary disabled">View</a></td>
                </tr>
                <tr>
                    <td>Tests Conducted</td>
                    <td>Total Covid-19 tests conducted.</td>
                    <td>2025-06-15</td>
                    <td><a href="#" class="btn btn-sm btn-primary disabled">View</a></td>
                </tr>
                <tr>
                    <td>System Errors</td>
                    <td>Summary of system errors and alerts.</td>
                    <td>2025-06-16</td>
                    <td><a href="#" class="btn btn-sm btn-primary disabled">View</a></td>
                </tr>
            </tbody>
        </table>

        <small class="text-muted">* Reports functionality coming soon.</small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script>
    AOS.init();
</script>

<?php include 'footer.php'; ?>
