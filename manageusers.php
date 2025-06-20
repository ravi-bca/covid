<?php
session_start();
if (!isset($_SESSION['roles']) || !in_array('ADMIN', $_SESSION['roles'])) {
    header("Location: login.php");
    exit();
}

$pageTitle = "Manage Users | Admin Dashboard";
include 'header.php'; // Make sure header includes Bootstrap CSS + JS + your nav

// DB connection parameters
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "covid";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete user request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
    echo "<div class='alert alert-success'>User deleted successfully.</div>";
}

// Handle edit user form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_user_id'])) {
    $id = intval($_POST['edit_user_id']);
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];

    // Simple validation (you can enhance)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("UPDATE users SET first_name=?, last_name=?, email=?, phone_number=? WHERE id=?");
        $stmt->bind_param("ssssi", $first, $last, $email, $phone, $id);
        $stmt->execute();
        $stmt->close();
        echo "<div class='alert alert-success'>User updated successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Invalid email address.</div>";
    }
}

// Fetch all users
$result = $conn->query("SELECT id, first_name, last_name, email, phone_number, created_at FROM users ORDER BY created_at DESC");
?>

<div class="container my-5">
    <h2 class="mb-4">Manage Users</h2>
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['first_name']) ?></td>
                    <td><?= htmlspecialchars($user['last_name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['phone_number']) ?></td>
                    <td><?= htmlspecialchars($user['created_at']) ?></td>
                    <td>
                        <!-- Edit button triggers a modal -->
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal<?= $user['id'] ?>">
                            Edit
                        </button>
                        <a href="?delete_id=<?= $user['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this user?');">
                            Delete
                        </a>
                    </td>
                </tr>

                <!-- Edit User Modal -->
                <div class="modal fade" id="editUserModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="editUserLabel<?= $user['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" class="modal-content">
                            <input type="hidden" name="edit_user_id" value="<?= $user['id'] ?>">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editUserLabel<?= $user['id'] ?>">Edit User #<?= $user['id'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="firstName<?= $user['id'] ?>" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName<?= $user['id'] ?>" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lastName<?= $user['id'] ?>" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName<?= $user['id'] ?>" name="last_name" value="<?= htmlspecialchars($user['last_name']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email<?= $user['id'] ?>" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email<?= $user['id'] ?>" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone<?= $user['id'] ?>" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone<?= $user['id'] ?>" name="phone_number" value="<?= htmlspecialchars($user['phone_number']) ?>" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>

            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php
$conn->close();
include 'footer.php'; // Make sure footer includes Bootstrap JS
?>
