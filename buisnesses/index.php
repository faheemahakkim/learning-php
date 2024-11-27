<?php
require_once 'src/Models/BuisnessModel.php';
require_once 'src/connectToDB.php';

$db = connectToDB();

$buisnessModel = new BuisnessModel($db);

if ($buisnessModel->create('dress world','wonderful dress store','1989-03-03',5)) {
echo 'Model created successfully';

}
