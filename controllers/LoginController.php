<?php
require_once 'models/Usuario.php';

class LoginController {
    public function index() {
        include 'views/login.php';
    }

    public function autenticar($email, $senha) {
        $usuario = new Usuario();
        if ($usuario->verificar($email, $senha)) {
            include 'views/sucesso.php';
        } else {
            echo "<h3 style='color:red;text-align:center;'>Login inválido!</h3>";
            include 'views/login.php';
        }
    }
}
