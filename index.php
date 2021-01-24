<?php
include_once 'action.php';
$students = load();
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

<button><a href="add-student.php">Them hoc sinh</a></button>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>address</th>
        <th>phone</th>
        <th>Action</th>
    </tr>
    <tr>
        <?php foreach ($students

        as $value => $student): ?>
        <td><?php echo $student['id'] ?></td>
        <td><?php echo $student['name'] ?></td>
        <td><?php echo $student['address'] ?></td>
        <td><?php echo $student['phone'] ?></td>
        <td>
            <button type="button"><a href="edit.php?id=<?php echo $student['id'] ?>">Sửa</a></button>
              <button type="button"> <a onclick="return confirm('ban co chac chan khong?')" href="delete.php?id=<?php echo $student['id']?>"> Xóa  </a>  </button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>