<?php
global $DBH;
require 'dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['title'])  && isset($_POST['description']))    {
    $data = [
        'user_id'=> 7,
        'filename' =>'https:/palcekitten.com/648',
        'mediatype' => "img/jpeg",
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'filesize' => 1234,
    ];


    $sql =
    'INSERT INTO MediaItems (user_id, filename, filesize, media_type, title, description ) 
    VALUES(:user_id, :filename, :filesize, :media_type, :title, :descriptoin )';

    try {
        $STH = $DBH->prepare($sql);
        $STH->execute($data);
    } catch (PDOException $e){
        echo "Could not connect to database.";
        file_put_contents('PDOErrors.txt', 'dbConnect.php - ' . $e->getMessage(), FILE_APPEND);
    }
    }
}