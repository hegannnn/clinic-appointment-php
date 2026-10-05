<?php

include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $patient_name = trim($_POST["patient_name"]);
    $phone = trim($_POST["phone"]);
    $doctor = trim($_POST["doctor"]);
    $appointment_date = trim($_POST["appointment_date"]);
    $time_slot = trim($_POST["time_slot"]);

    if ($patient_name == "" || $phone == "" || $doctor == "" || $appointment_date == "" || $time_slot == "") {

        echo "Please fill in all required fields.";

    }
    else if (!preg_match("/^[0-9]{10}$/", $phone)) {

        echo "Please enter a valid 10-digit phone number.";

    }
    else {

        $sql = "INSERT INTO appointments
                (patient_name, phone, doctor, appointment_date, time_slot)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $patient_name,
            $phone,
            $doctor,
            $appointment_date,
            $time_slot
        );

        if (mysqli_stmt_execute($stmt)) {

            echo "<h2>Appointment Saved Successfully!</h2>";

            echo "Patient Name: " . $patient_name . "<br>";
            echo "Doctor: " . $doctor . "<br>";
            echo "Appointment Date: " . $appointment_date . "<br>";
            echo "Time Slot: " . $time_slot . "<br>";

        }
        else {

            echo "Error: " . mysqli_error($conn);

        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);

?>