<?php
/*
    Projeto: MobShare
    Autor: leonardo
    Data Criação: 02/04/2019
    Data Modificação:
    Conteudo Modificação:
    Autor da Modificação:
    Objetivo da classe: Classe de modelo
*/
class Cancelamento{
    private $idCancelamento;
    private $idLocacao;
    private $idCliente;
    private $confirmacao;
    private $motivo;



    public function __construct(){    
    }
    
    //------------Começo dos GETTERS e SETTERS------------

    public function getIdCancelamento()
    {
        return $this->idCancelamento;
    }

    /**
     * Set the value of idVeiculo
     *
     * @return  self
     */ 
    public function setIdCancelamento($idCancelamento)
    {
        $this->idCancelamento = $idCancelamento;

        return $this;
    }

    public function getIdLocacao()
    {
        return $this->idLocacao;
    }

    /**
     * Set the value of idVeiculo
     *
     * @return  self
     */ 
    public function setIdLocacao($idLocacao)
    {
        $this->idLocacao = $idLocacao;

        return $this;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idVeiculo
     *
     * @return  self
     */ 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }
    
    public function getConfirmacao()
    {
    
        return $this->confirmacao;
    }

    /**
     * Set the value of idVeiculo
     *
     * @return  self
     */ 
    public function setConfirmacao($confirmacao)
    {
        $this->confirmacao = $confirmacao;

        return $this;
    }
    
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set the value of idVeiculo
     *
     * @return  self
     */ 
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }






}
?>