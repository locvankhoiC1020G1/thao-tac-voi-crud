<?php
include_once  'action.php';
$students = load();
$id = $_GET['id'];
$index = -1;
$student = null;

foreach ($students as $key=>$p){
    if ($p['id'] == $id){
        $student = $p;
        $index = $key;
    }

}
?>
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
        <input type="number" value="<?php echo $student['id'] ?>"  name="id" placeholder="ID">
        <input type="text" value="<?php echo $student['name'] ?>" name="name" placeholder="Name">
        <input type="text" value="<?php echo $student['address'] ?>" name="address" placeholder="address">
        <input type="number" value="<?php echo $student['phone'] ?>" name="phone" placeholder="SDT">
        <input type="submit" value="Update">
    </fieldset>

</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $student[$index] = array(
        "id" => $id,
        "name" => $name,
        "address" => $address,
        "phone" => $phone,
    );
    save($student);
    header('location:index.php');
}?>