<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$pageTitle = "Request Covid-19 Test";
include 'header.php';
?>

<div class="container my-5">
    <h2>Request a Covid-19 Test</h2>

    <?php
    if (isset($_GET['success'])) {
        echo '<div class="alert alert-success">Test request submitted successfully!</div>';
    }
    ?>

    <form action="submit_test_request.php" method="POST">
        <div class="mb-3">
            <label for="test_type" class="form-label">Test Type</label>
            <select name="test_type" id="test_type" class="form-select" required>
                <option value="">Select Test Type</option>
                <option value="PCR">PCR</option>
                <option value="Antigen">Antigen</option>
                <option value="Antibody">Antibody</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="test_date" class="form-label">Test Date</label>
            <input type="date" name="test_date" id="test_date" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Test Location</label>
            <input type="text" name="location" id="location" class="form-control" required placeholder="Enter location">
        </div>

        <button type="submit" class="btn btn-primary">Submit Test Request</button>
    </form>
</div>

<?php include 'footer.php'; ?>