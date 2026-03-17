<?php
require_once "./app/controllers/MahasiswaController.php";

$controller = new MahasiswaController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->process();
} else {
    $controller->index();
}