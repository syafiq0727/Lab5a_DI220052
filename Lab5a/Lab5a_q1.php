<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php 
        $name = "Muhammad Syafiq Bin Aziz Hilmi";
        $matricNumber = "DI220052";
        $course = "Bachelor In Security";
        $yearOfStudy = "Year 3"; 
        $address = "NO 51,JALAN KENCANA 1A/2, TAMAN PURA KENCANA, SRI GADING";
    ?>

    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
