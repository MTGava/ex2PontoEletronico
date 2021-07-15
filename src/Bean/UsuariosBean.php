<?php

namespace Forseti\PontoEletronico\Bean;

trait UsuariosBean
{
    private $user;
    private $password;

    public function setUsuario($user)
    {
        $this->user = $user;
        return $this;
    }

    public function setSenha($password)
    {
        $this->password = $password;
        return $this;
    }

}