<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    $email = $mysqli->real_escape_string($_POST["email"] ?? "");

    $sql = sprintf("SELECT * FROM fuser WHERE email = '%s'", $email);
    $result = $mysqli->query($sql);
    $fuser = $result->fetch_assoc();

    if ($fuser && password_verify($_POST["password"], $fuser["password"])) {
        session_start();
        session_regenerate_id();
        $_SESSION["user_id"] = $fuser["customer_id"];
        header("Location: index.php");
        exit;
    }

    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
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

.error-message {
  color: red;
  margin-top: 10px;
  font-style: italic;
}
    </style>
    <meta charset="UTF-8" />
    <title>Login</title>
    
</head>
<body>

    <h1>Login</h1>

    <?php if ($is_invalid): ?>
        <em class="em-invalid-login">Invalid login</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button>Log in</button>
    </form>


</body>
</html>