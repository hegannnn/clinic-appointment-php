<!DOCTYPE html>
<html>

<head>

    <title>View Appointments</title>

</head>

<body>

<h2>View Doctor Appointments</h2>

<form method="POST">

    Doctor:

    <select name="doctor">

        <option value="Dr. Anil">
            Dr. Anil
        </option>

        <option value="Dr. Meera">
            Dr. Meera
        </option>

        <option value="Dr. Rahul">
            Dr. Rahul
        </option>

    </select>

    <br><br>

    Appointment Date:

    <input type="date" name="appointment_date">

    <br><br>

    <input type="submit" value="Search">

</form>

<br>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include "database.php";

    $doctor = $_POST["doctor"];

    $appointment_date = $_POST["appointment_date"];

    $sql = "SELECT * FROM appointments
            WHERE doctor = ?
            AND appointment_date = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "ss",
        $doctor,
        $appointment_date
    );

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {

        echo "<table border='1' cellpadding='10'>";

        echo "<tr>";

        echo "<th>ID</th>";
        echo "<th>Patient Name</th>";
        echo "<th>Phone</th>";
        echo "<th>Doctor</th>";
        echo "<th>Date</th>";
        echo "<th>Time Slot</th>";
        echo "<th>Status</th>";

        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

            echo "<td>" . $row["appointment_id"] . "</td>";

            echo "<td>" . $row["patient_name"] . "</td>";

            echo "<td>" . $row["phone"] . "</td>";

            echo "<td>" . $row["doctor"] . "</td>";

            echo "<td>" . $row["appointment_date"] . "</td>";

            echo "<td>" . $row["time_slot"] . "</td>";

            echo "<td>" . $row["status"] . "</td>";

            echo "</tr>";
        }

        echo "</table>";

    }
    else {

        echo "No appointments found.";

    }

    mysqli_stmt_close($stmt);

    mysqli_close($conn);
}

?>

</body>

</html>