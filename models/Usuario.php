<?php
class Usuario {
    private $emailCorreto = 'teste@exemplo.com';
    private $senhaCorreta = '1234';

    public function verificar($email, $senha) {
        return $email === $this->emailCorreto && $senha === $this->senhaCorreta;
    }
}
