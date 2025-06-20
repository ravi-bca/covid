<?php
$pageTitle = "Assign Tasks | Covid-19 Testing";
include 'header.php';

// Check if user is admin
if (!isset($_SESSION['roles']) || !in_array('ADMIN', $_SESSION['roles'])) {
    header("Location: login.php");
    exit();
}
?>

<div class="container my-5">
    <h2 class="mb-4" data-aos="fade-down">Assign Tasks</h2>

    <p>Assign tasks to users and track their progress efficiently.</p>

    <!-- Task Assignment Form -->
    <div class="card mb-4 shadow-sm p-4">
        <h4>New Task</h4>
        <form action="assign_task_process.php" method="post">
            <div class="mb-3">
                <label for="taskTitle" class="form-label">Task Title</label>
                <input type="text" class="form-control" id="taskTitle" name="task_title" required>
            </div>
            <div class="mb-3">
                <label for="taskDescription" class="form-label">Description</label>
                <textarea class="form-control" id="taskDescription" name="task_description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="assignedUser" class="form-label">Assign To</label>
                <select class="form-select" id="assignedUser" name="assigned_user" required>
                    <option value="">Select User</option>
                    <?php
                    // Example: Fetch users from DB
                    // Replace this with your actual DB code
                    /*
                    $users = $db->query("SELECT id, first_name, last_name FROM users");
                    foreach ($users as $user) {
                        echo "<option value='{$user['id']}'>" . htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) . "</option>";
                    }
                    */
                    ?>
                    <option disabled>(User list loading here)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Assign Task</button>
        </form>
    </div>

    <!-- Existing Tasks List -->
    <div class="card shadow-sm p-4">
        <h4>Current Tasks</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Assigned To</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example tasks -->
                <tr>
                    <td>Update User Database</td>
                    <td>Review and update the user records.</td>
                    <td>John Doe</td>
                    <td><span class="badge bg-warning text-dark">In Progress</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary disabled">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger disabled">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>Run System Backup</td>
                    <td>Backup all system files and data.</td>
                    <td>Jane Smith</td>
                    <td><span class="badge bg-success">Completed</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary disabled">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger disabled">Delete</a>
                    </td>
                </tr>
                <!-- You will replace this with dynamic content -->
            </tbody>
        </table>

        <small class="text-muted">* Task management functionality coming soon.</small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script>
    AOS.init();
</script>

<?php include 'footer.php'; ?>
