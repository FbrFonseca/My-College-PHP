<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Students</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container my-5">
        <h2>List of Students</h2>
        <a class='btn btn-primary' href="addStudent.php" role='Button'>Add Student</a>
        <table class='table'>
            <thead>
                <tr>
                    <td>Student ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>City</td>
                    <td>Created On</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = 'SELECT * FROM Student';
                    $result = $con->query($sql);

                    while($row = $result->fetch_assoc())
                    {
                ?>
                <tr>
                    <td><?=$row['stuId']; ?></td>
                    <td><?=$row['email']; ?></td>
                    <td><?=$row['phone']; ?></td>
                    <td><?=$row['city']; ?></td>
                    <td><?=$row['date']; ?></td>
                    <td><?=$row['name']; ?></td>
                    <td><a class='btn btn-primary' href="edit.php?stuId=<?= $row['studId']; ?>" >Edit</a></td>
                    <td><a class='btn btn-danger' href="delete.php?stuId=<?= $row['studId']; ?>" >Delete</a></td>

                </tr>
                <?php
                    }
                ?>

            </tbody>
        </table>

    </div>
    
</body>
</html>