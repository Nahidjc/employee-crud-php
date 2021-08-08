<?php
include_once("config.php");
if (isset($_POST['edit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $salary = mysqli_real_escape_string($mysqli, $_POST['salary']);
    if (empty($name) || empty($address) || empty($salary)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }

        if (empty($salary)) {
            echo "<font color='red'>Salary field is empty.</font><br/>";
        }
    } else {
        $result = mysqli_query($mysqli, "UPDATE employee SET name='$name',address='$address',salary=$salary WHERE id=$id");

        header("Location: index.php");
    }
}
?>





<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
while ($res = mysqli_fetch_array($result)) {
    $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];
    $dept = $res['dept'];
}
?>