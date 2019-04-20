<?php
/*
    Projeto: MobShare
    Autor: Leonardo
    Data Criação: 03/04/2019
    Data Modificação:
    Conteudo Modificação:
    Autor da Modificação:
    Objetivo da classe: Classe de clientes
*/
class Vvisualizacao_cancelamento{
    private $idCancelamento;
    private $idCliente;
    private $idLocacao;
    private $nome;
    private $confirmacao;
    private $motivo;
    


    public function __construct(){
    }
    
    //------------Começo dos GETTERS e SETTERS------------



    /**
     * Get the value of idCancelamento
     */ 
    public function getIdCancelamento()
    {
        return $this->idCancelamento;
    }

    /**
     * Set the value of idCancelamento
     *
     * @return  self
     */ 
    public function setIdCancelamento($idCancelamento)
    {
        $this->idCancelamento = $idCancelamento;

        return $this;
    }

    /**
     * Get the value of idCliente
     */ 
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     *
     * @return  self
     */ 
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get the value of locacao
     */ 
    public function getIdLocacao()
    {
        return $this->idLocacao;
    }

    /**
     * Set the value of locacao
     *
     * @return  self
     */ 
    public function setIdLocacao($idLocacao)
    {
        $this->idLocacao = $idLocacao;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of confirmacao
     */ 
    public function getConfirmacao()
    {
        return $this->confirmacao;
    }

    /**
     * Set the value of confirmacao
     *
     * @return  self
     */ 
    public function setConfirmacao($confirmacao)
    {
        $this->confirmacao = $confirmacao;

        return $this;
    }

    /**
     * Get the value of motivo
     */ 
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set the value of motivo
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