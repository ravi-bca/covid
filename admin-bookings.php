<?php
// Admin authentication check here (optional)

$conn = new mysqli("localhost", "root", "", "covid_testing");
$result = $conn->query("SELECT b.id, b.test_name, b.full_name, b.email, b.phone, b.booking_date, b.status FROM test_bookings b ORDER BY b.created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin - Manage Bookings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
  <h2 class="mb-4">📋 Test Booking Requests</h2>
  <table class="table table-bordered bg-white shadow-sm">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Test</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['test_name'] ?></td>
        <td><?= $row['full_name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['booking_date'] ?></td>
        <td><strong><?= $row['status'] ?></strong></td>
        <td>
          <?php if ($row['status'] == 'Pending'): ?>
            <a href="update-status.php?id=<?= $row['id'] ?>&status=Approved" class="btn btn-success btn-sm">Approve</a>
            <a href="update-status.php?id=<?= $row['id'] ?>&status=Rejected" class="btn btn-danger btn-sm">Reject</a>
          <?php elseif ($row['status'] == 'Approved'): ?>
            <a href="update-status.php?id=<?= $row['id'] ?>&status=Completed" class="btn btn-primary btn-sm">Mark Completed</a>
          <?php endif; ?>
        </td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
