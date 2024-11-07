<?php
namespace models;

/**
 * Classe Model de Prospect
 * @author Douglas Copetti
 */

class Prospect{
    /**
     * Código do prospect
     * @var integer 
     */
    public $cod_prospect;

    /**
     * Nome do prospect
     * @var string 
     */
    public $nome;

    /**
     * Email do prospect
     * @var string
     */
    public $email;

    /**
     * WhatsApp do prospect
     * @var string
     */
    public $whatsapp;

    /**
     * Facebook do prospect
     * @var string
     */
    public $facebook;

    /**
     * Celular do prospect
     * @var string
     */
    public $celular;

    /**
     * Essa função carrega os atributos da classe Prospect
     * @param integer $cod_prospect Código do prospect.
     * @param string $nome Nome do prospect.
     * @param string $email Email do prospect.
     * @param string $whatsapp WhatsApp do prospect.
     * @param string $facebook Facebook do prospect.
     * @param boolean $celular Celular do prospect.
     * @return Void
     */

    public function addUsuario($cod_prospect, $nome, $email, $whatsapp, $facebook, $celular){
        $this->cod_prospect    = $cod_prospect;
        $this->nome     = $nome;
        $this->email    = $email;
        $this->whatsapp    = $whatsapp;
        $this->facebook    = $facebook;
        $this->celular  = $celular;
    }

}

?>