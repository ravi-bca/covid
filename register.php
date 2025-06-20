<?php
function showMessage($message, $isError = false) {
    $color = $isError ? '#ff4d4d' : '#28a745'; // red or green

    // Show a "Next" button only if it's a success message
    $nextButton = '';
    if (!$isError && $message === "✅ Registration successful!") {
        $nextButton = "<br><a href='available-tests.php' style='display:inline-block;margin-top:20px;padding:10px 20px;background-color:#007bff;color:white;text-decoration:none;border-radius:5px;'>Next: Available Tests</a>";
    }

    echo "
    <html>
    <head>
        <style>
            @keyframes fadeIn {
                from { opacity: 0; transform: scale(0.9); }
                to { opacity: 1; transform: scale(1); }
            }

            body {
                font-family: Arial, sans-serif;
                background: #f0f2f5;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }

            .message-box {
                background-color: white;
                padding: 30px 40px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                border-left: 5px solid {$color};
                animation: fadeIn 0.6s ease-in-out;
                text-align: center;
            }

            .message-box h2 {
                color: {$color};
                margin: 0 0 10px;
            }
        </style>
    </head>
    <body>
        <div class='message-box'>
            <h2>{$message}</h2>
            {$nextButton}
        </div>
    </body>
    </html>
    ";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {
        showMessage("❌ Passwords do not match.", true);
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "covid";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        showMessage("❌ Connection failed: " . $conn->connect_error, true);
    }

    $stmt_check = $conn->prepare("SELECT id FROM users WHERE email = ? OR phone_number = ?");
    $stmt_check->bind_param("ss", $email, $phone);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        showMessage("❌ Email or phone number already registered.", true);
    }
    $stmt_check->close();

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, phone_number, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first, $last, $email, $phone, $hashedPassword);

    if ($stmt->execute()) {
        showMessage("✅ Registration successful!");
    } else {
        showMessage("❌ Error: " . $stmt->error, true);
    }

    $stmt->close();
    $conn->close();
} else {
    showMessage("Invalid request.", true);
}
?>
