<?php
session_start();
require_once "db_connect.php"; // Include the database connection
// include('./register.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pwd"];


$sql = "SELECT user_id, username, phone_num, email, fullname, client_address, account_type, city, clients_state, nationality, occupation, next_of_kin, kins_relationship, kins_address, kins_phonenum, clients_password, passport FROM clients WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["clients_password"])) {
            $_SESSION["user_id"] = $row["user_id"];
            // Redirect to main website after successful login
            header("Location: https://ubadapaschal7.github.io/myportfolio-website/");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Client not found.";
    }
}
// $conn->close();

// $stmt->close();
?>