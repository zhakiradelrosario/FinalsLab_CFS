<?php
include("vconfig.php"); // Include database connection

$response = ["success" => false, "message" => ""]; // Initialize response array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);
    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
    $nationality = filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT); // Validate as an integer
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // Validate email format

    // Validate input fields
    if (!$email) {
        $response['message'] = 'Please provide a valid email address.';
        echo json_encode($response);
        exit();
    }

    if (empty($fullname)) {
        $response['message'] = 'Full name is required.';
        echo json_encode($response);
        exit();
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
        $response['message'] = 'Full name should only contain letters and spaces.';
        echo json_encode($response);
        exit();
    }

    if (empty($nationality)) {
        $response['message'] = 'Nationality is required.';
        echo json_encode($response);
        exit();
    }

    if ($age === false || $age < 0) {
        $response['message'] = 'Please provide a valid age.';
        echo json_encode($response);
        exit();
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO `visits`(`Date`, `Full Name`, `Nationality`, `Age`, `Email`) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'sssis', $date, $fullname, $nationality, $age, $email);

        if (mysqli_stmt_execute($stmt)) {
            $response['success'] = true;
            $response['message'] = "Record inserted successfully.";
        } else {
            $response['message'] = "Error: " . mysqli_error($con);
        }

        mysqli_stmt_close($stmt);
    } else {
        $response['message'] = "Error preparing statement: " . mysqli_error($con);
    }

    echo json_encode($response);
    exit();
}
?>
