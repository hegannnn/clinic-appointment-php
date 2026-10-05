<?php

$json_data = '{
    "appointment_id": 1,
    "patient_name": "Anna",
    "doctor_name": "Dr. Anil",
    "appointment_date": "2026-10-10",
    "time_slot": "10:00 AM - 11:00 AM",
    "appointment_status": "Booked"
}';

$appointment = json_decode($json_data, true);

echo "Patient Name: " . $appointment["patient_name"] . "<br>";

echo "Doctor Name: " . $appointment["doctor_name"] . "<br>";

echo "Appointment Date: " . $appointment["appointment_date"];

?>