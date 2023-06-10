<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["fullname"])) {
        $errors[] = "Full name is required";
    }

    if (!filter_var($_POST["email"] ?? "", FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }

    if (strlen($_POST["password"] ?? "") < 8) {
        $errors[] = "Password must be at least 8 characters";
    }

    if (count($errors) === 0) {
        $mysqli = require __DIR__ . "/database.php";

        $sql = "INSERT INTO fuser (fullname, email, phone_number, password)
                VALUES (?, ?, ?, ?)";

        $stmt = $mysqli->prepare($sql);

        if (!$stmt) {
            $errors[] = "SQL error: " . $mysqli->error;
        } else {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $phone_number = $_POST["phone_number"];
            $password = $_POST["password"];  // Store the plain-text password

            // Hash the password
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt->bind_param("ssss",
                $fullname,
                $email,
                $phone_number,
                $password_hash  // Store the hashed password in the database
            );

            if ($stmt->execute()) {
                header("Location: registration-success.html");
                exit;
            } else {
                if ($mysqli->errno === 1062) {
                    $errors[] = "Email already taken";
                } else {
                    $errors[] = $mysqli->error . " " . $mysqli->errno;
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- Link to Stylesheet -->
    <style>
      .container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
}

h2 {
    text-align: center;
    margin-top: 0;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
    </style>

</head>
<body>

        <h2>Registration</h2>
      
        <form method="post">
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" id="fullname" value="<?= htmlspecialchars($_POST["fullname"] ?? "") ?>">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" value="<?= htmlspecialchars($_POST["phone_number"] ?? "") ?>">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <?php if (count($errors) > 0) : ?>
                <div class="error-container">
                    <ul class="error-list">
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <button type="submit">Register</button>
       </form>

</body>
</html>