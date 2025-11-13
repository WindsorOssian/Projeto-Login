<?php
require_once 'config.php';
require_once 'controllers/LoginController.php';

$controller = new LoginController();
$controller->index();
