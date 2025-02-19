<?php
$conn = mysqli_connect("localhost", "root", "", "kajal");
$sel = "SELECT * FROM `contact` WHERE ";
$r = mysqli_query($conn, $sel);

$res = mysqli_fetch_array($r, MYSQLI_BOTH);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Contact data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center">Show Contact Data</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-bordered border-primary">
                    <tr>
                        <td>sr_no</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Number</td>
                        <td>Address</td>
                        <td>Message</td>
                        <!-- <td>Edit</td>
                        <td>Delete</td> -->
                    </tr>
                    <?php
                    while ($res = mysqli_fetch_array($r, MYSQLI_BOTH)) {
                        ?>
                        <tr>
                            <td><?php echo $res['sr_no']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['number']; ?></td>
                            <td><?php echo $res['address']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>


</body>

</html>