<?php
$pageTitle = "Book COVID-19 Test";
include 'header.php';

$selectedTest = isset($_GET['test']) ? htmlspecialchars($_GET['test']) : '';

// Handle form submission
$message = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $test = $_POST['test_name'];
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['booking_date'];

    $conn = new mysqli("localhost", "root", "", "covid");

    if ($conn->connect_error) {
        $message = "<div class='alert alert-danger'>❌ Connection failed: " . $conn->connect_error . "</div>";
    } else {
        $stmt = $conn->prepare("INSERT INTO test_bookings (test_name, full_name, email, phone, booking_date) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $test, $name, $email, $phone, $date);

        if ($stmt->execute()) {
            $message = "<div class='alert alert-success'>✅ Booking successful! We'll contact you shortly.</div>";
        } else {
            $message = "<div class='alert alert-danger'>❌ Booking failed: " . $stmt->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!-- Bootstrap CSS for styling -->
<style>
    .form-container {
        max-width: 600px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
</style>

<div class="container my-5">
    <h2 class="text-center mb-4">Book a COVID-19 Test</h2>

    <div class="form-container">
        <?php if ($message) echo $message; ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Test Name</label>
                <input type="text" name="test_name" class="form-control" value="<?php echo $selectedTest; ?>" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Preferred Date</label>
                <input type="date" name="booking_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Confirm Booking</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
