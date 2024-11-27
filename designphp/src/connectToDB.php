<?php

function connectToDB(): PDO {
    $db = new PDO('mysql:host=db; dbname=fakestore', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}