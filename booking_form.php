<!DOCTYPE html>
<html>

<head>
    <title>Clinic Appointment Booking</title>
</head>

<body>

<h2>Clinic Appointment Booking Form</h2>

<form method="POST" action="insert_appointment.php">

    Patient Name:
    <input type="text" name="patient_name">
    <br><br>

    Phone Number:
    <input type="text" name="phone">
    <br><br>

    Doctor's Name:
    <select name="doctor">

        <option value="">Select Doctor</option>

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

    Preferred Time Slot:
    <select name="time_slot">

        <option value="">
            Select Time Slot
        </option>

        <option value="10:00 AM - 11:00 AM">
            10:00 AM - 11:00 AM
        </option>

        <option value="11:00 AM - 12:00 PM">
            11:00 AM - 12:00 PM
        </option>

        <option value="2:00 PM - 3:00 PM">
            2:00 PM - 3:00 PM
        </option>

        <option value="3:00 PM - 4:00 PM">
            3:00 PM - 4:00 PM
        </option>

    </select>

    <br><br>

    <input type="submit" value="Book Appointment">

</form>

</body>
</html>