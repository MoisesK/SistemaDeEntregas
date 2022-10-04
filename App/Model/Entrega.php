<?php

namespace App\Model;

use \WilliamCosta\DatabaseManager\Database;
class Entrega extends Entregador{
    private int $id;
    private Entregador $entregador;
    private string $titulo;
    private string $prazo;
    private string $descricao;
    private string $status;
    private string $local;

    public function __construct(string $titulo, string $prazo, string $descricao, string $local) 
    {
        // $this->setEntregador($entregador);
        $this->setTitulo($titulo);
        $this->setPrazo($prazo);
        $this->setDescricao($descricao);
        $this->setStatus("Pendente");
        $this->setLocal($local);

    }
    

    // Método reponsável por cadastrar uma nova entrega no banco de dados
    public function cadastrar()
    {
        // Insert no Banco de dados
        $this->id = (new Database('entregas'))->insert([
            'titulo' => $this->titulo,
            'prazo' => $this->prazo,
            'descricao' => $this->descricao,
            'status' => $this->status,
            'local' => $this->local
        ]);

        // Sucesso
        return true;
    }
    
	/**
	 * @return int
	 */
	function getId(): int {
		return $this->id;
	}
	
	/**
	 * @return string
	 */
	function getTitulo(): string {
		return $this->titulo;
	}
	/**
	 * @param string $titulo 
	 * @return Entrega
	 */
	function setTitulo(string $titulo): self {
		$this->titulo = $titulo;
		return $this;
	}
	/**
	 * @return string
	 */
	function getPrazo(): string {
		return $this->prazo;
	}
	/**
	 * @param string $prazo 
	 * @return Entrega
	 */
	function setPrazo(string $prazo): self {
		$this->prazo = $prazo;
		return $this;
	}

    /**
	 * @return string
	 */
	function getDescricao(): string {
		return $this->descricao;
	}

	/**
	 * @param string $descricao 
	 * @return Entrega
	 */
	function setDescricao(string $descricao): self {
		$this->descricao = $descricao;
		return $this;
	}
	/**
	 * @return string
	 */
	function getStatus(): string {
		return $this->status;
	}
	/**
	 * @param string $status 
	 * @return Entrega
	 */
	function setStatus(string $status): self {
		$this->status = $status;
		return $this;
	}
	
    /**
	 * @param Entregador $entregador 
	 * @return Entrega
	 */
	function getEntregador(): self {
		return $this->entregador;
	}

	/**
	 * @param Entregador $entregador 
	 * @return Entrega
	 */
	function setEntregador(Entregador $entregador): self {
		$this->entregador = $entregador;
		return $this;
	}
	/**
	 * @return string
	 */
	function getLocal(): string {
		return $this->local;
	}
	/**
	 * @param string $local 
	 * @return Entrega
	 */
	function setLocal(string $local): self {
		$this->local = $local;
		return $this;
	}
}



?>