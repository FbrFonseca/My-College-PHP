<?php include 'connect.php';

    $name ='';
    $email = '';
    $phone = '';
    $city = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $sql = "INSERT INTO student(name,email,phone,city) VALUES('$name', '$email', '$phone', '$city')";
        $result = $con->query($sql);

        $name = '';
        $email = '';
        $phone = '';
        $city = '';

        header('Location: Index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Add Student</title>
</head>
<body>
    <div class='container my-5'>

        <h2>Add Student</h2>

        <form method="POST">
            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" class='form-control' name="name" value="<?php echo $name; ?>">
                </div>

            </div>

            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Phone</label>

                <div class="col-sm-6">
                    <input type="text" class='form-control' name="phone" value="<?php echo $phone; ?>">
                </div>

            </div>

            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">Email</label>

                <div class="col-sm-6">
                    <input type="text" class='form-control' name="email" value="<?php echo $email; ?>">
                </div>

            </div>

            <div class="row mb-3">

                <label class="col-sm-3 col-form-label">City</label>

                <div class="col-sm-6">
                    <input type="text" class='form-control' name="city" value="<?php echo $city; ?>">
                </div>

            </div>

            <div class="row mb-3">

                <div class="off-set-sm-3 col-sm-3 d=grid">
                    <button type="submit" class='btn btn-primary'>Submit</button>
                </div>

            </div>
        </form>
    </div>
</body>
</html>