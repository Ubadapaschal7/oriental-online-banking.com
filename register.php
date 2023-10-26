<?php
require_once "db_connect.php"; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $phone_number = $_POST["phone-number"];
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $address = $_POST["address"];
    $account = $_POST["account"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $occupation = $_POST["occupation"];
    $next_Of_Kin = $_POST["nextOfKin"];
    $kins_Relationship = $_POST["kinsRel"];
    $kins_Add = $_POST["kinsAdd"];
    $kinsphone = $_POST["kinsphone"];
    $password = password_hash($_POST["pwd"], PASSWORD_BCRYPT);

    // Handle file upload
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_destination = "uploads/" . $file_name; // Change the destination directory as needed

    
    if (move_uploaded_file($file_tmp, $file_destination)) {
        echo "File uploaded successfully!";
    } else {
        echo "Error uploading file.";
    }


    $sql = "INSERT INTO `clients` (username, phone_num, email, fullname, client_address, account_type, city, clients_state, nationality, occupation, next_of_kin, kins_relationship, kins_address, kins_phonenum, clients_password, passport) VALUES 
    ('$username', '$phone_number', '$email', '$fullname', '$address', '$account', '$city', '$state', '$country', '$occupation', '$next_Of_Kin', '$kins_Relationship', '$kins_Add', '$kinsphone', '$password', '$file_destination')";

    if ($conn->query($sql) === true) {
        // Redirect to main website after successful login
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>