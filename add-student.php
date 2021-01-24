<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Thêm học sinh</legend>
        <input type="number" name="id" placeholder="ID">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="address" placeholder="address">
        <input type="number" name="phone" placeholder="SDT">
        <input type="submit" value="Them">
    </fieldset>

</form>
</body>
</html>

<?php
include_once 'action.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $student = array(
        "id" => $id,
        "name" => $name,
        "address" => $address,
        "phone" => $phone,
    );
$students = load();
array_push($students, $student);
save($students);

header('location:index.php');
}
?>