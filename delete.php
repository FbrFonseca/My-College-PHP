<?php include 'connect.php';

    if(isset($_GET['stuId']))
    {
        $stuId = $_GET['stuId'];
        
        $mysql = "DELETE FROM student WHERE stuId = '$stuId'";
        mysqli_query($con, $sql);

    };

    header('Location: index.php');
    exit;
?>