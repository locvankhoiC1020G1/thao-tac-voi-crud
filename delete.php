<?php
include_once 'action.php';
$students = load();

$id = $_GET['id'];
$index = -1;
foreach ($students as $key => $student){
    if ($student['id'] == $id){
        $index = $key;
    }
}
array_splice($students, $index, 1);
save($students);
header('location: index.php');