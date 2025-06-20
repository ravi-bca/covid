<?php
session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

$pageTitle = "Covid Tests | Covid-19 Testing";
include 'header.php';

// ✅ FIX: prevent redirect loop
if (!isset($_SESSION['roles']) || !in_array('ADMIN', $_SESSION['roles'])) {
    header("Location: covid_tests.php"); // Redirect unauthorized users to login or wherever
    exit();
}

// DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch tests
$sql = "SELECT * FROM covid_tests ORDER BY test_date DESC LIMIT 8";
$result = $conn->query($sql);
?>

<div class="container my-5">
    <h2 class="text-center mb-4" data-aos="fade-down">Covid Test Records</h2>

    <div class="table-responsive" data-aos="fade-up">
        <table class="table table-bordered table-hover shadow rounded">
            <thead class="table-dark text-center">
                <tr>
                    <th>Test ID</th>
                    <th>Patient Name</th>
                    <th>Test Date</th>
                    <th>Result</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['test_id']) ?></td>
                            <td><?= htmlspecialchars($row['patient_name']) ?></td>
                            <td><?= htmlspecialchars($row['test_date']) ?></td>
                            <td>
                                <span class="badge bg-<?= strtolower($row['result']) === 'positive' ? 'danger' : 'success' ?>">
                                    <?= htmlspecialchars($row['result']) ?>
                                </span>
                            </td>
                            <td>
                                <a href="view_test.php?id=<?= $row['test_id'] ?>" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="edit_test.php?id=<?= $row['test_id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="delete_test.php?id=<?= $row['test_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this test?');">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-muted">No test records found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- AOS animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<?php
$conn->close();
include 'footer.php';
?>
