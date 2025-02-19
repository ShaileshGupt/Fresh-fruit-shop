<?php
if (isset($_POST['submit'])) {
    $a = $_POST['name'];

    // echo $a;
    // echo "<br>";
    $b = $_POST['email'];
    // echo $b;
    // echo "<br>";
    $c = $_POST['number'];
    // echo $c;
    // echo "<br>";
    $d = $_POST['address'];
    // echo $d;
    // echo "<br>";
    $e = $_POST['message'];
    // echo $e;





    $conn = mysqli_connect("localhost", "root", "", "kajal");

    $ins = "INSERT INTO `contact`(`name`, `email`, `number`, `address`, `message`) VALUES ('$a','$b','$c','$d','$e')";



    if (mysqli_query($conn, $ins)) {
        header("localhost:form.php");
        echo "<script>alert('Data Insert Successfully'); window.location.href='contact.php';</script>";

    } else {
        echo "Data is not insert";
    }
}
?>