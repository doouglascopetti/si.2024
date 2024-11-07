<?php
namespace models;

/**
 * Classe Model de Usuario
 * @author Douglas Copetti
 */

class Usuario{
    /**
     * Login do usuário
     * @var string 
     */
    public $login;
    /**
     * Nome do usuário
     * @var string
     */
    public $usuario;
    /**
     * E-mail do usuário
     * @var string
     */
    public $email;
    /**
     * Celular do usuário
     * @var string
     */
    public $celular;
    /**
     * Status do usuário no sistema
     * @var boolean
     */
    public $logado;

    /**
     * Essa função carrega os atributos classe Usuario
     * @param string $login Login do usuário.
     * @param string $nome Nome do usuário.
     * @param string $email Email do usuário.
     * @param string $celular Celular do usuário.
     * @param boolean $logado Se o usuário logar com sucesso, recebe TRUE, senão recebe FALSE.
     * @return Void
     */
    public function addUsuario($login, $nome, $email, $celular, $logado){
        $this->login    = $login;
        $this->nome     = $nome;
        $this->email    = $email;
        $this->celular  = $celular;
        $this->logado   = $logado;
    }

}

?>