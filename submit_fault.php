<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plate = mysqli_real_escape_string($conn, $_POST['plate']);
    $violation = mysqli_real_escape_string($conn, $_POST['violation']);
    $penalty = mysqli_real_escape_string($conn, $_POST['penalty']);

    $query = "INSERT INTO faults (plate, violation, penalty, date_reported) VALUES ('$plate', '$violation', '$penalty', NOW())";
    if (mysqli_query($conn, $query)) {
        header("Location: faults_penalties.html?success=1");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
