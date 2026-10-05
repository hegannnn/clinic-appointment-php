<?php

$appointment = array(
    "appointment_id" => 1,
    "patient_name" => "Anna",
    "doctor_name" => "Dr. Anil",
    "appointment_date" => "2026-10-10",
    "time_slot" => "10:00 AM - 11:00 AM",
    "appointment_status" => "Booked"
);

$json_data = json_encode($appointment);

echo "<h2>JSON Data</h2>";

echo "<pre>";

echo $json_data;

echo "</pre>";

?>