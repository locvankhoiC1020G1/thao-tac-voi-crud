<?php
function save($students){
    $data = json_encode($students);
    file_put_contents('data.json', $data);
}
function load(){

    $data = file_get_contents('data.json');
    $students = json_decode($data, true);
    return $students;
}