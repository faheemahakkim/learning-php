<?php

function connectToDB(): PDO {
    $db = new PDO('mysql:host=localhost;dbname=buisness','root','password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}