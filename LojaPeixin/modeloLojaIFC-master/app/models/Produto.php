<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $codigo;
    public $nome;
    public $nome_cient;
    public $preco;
    public $categoria;
    public $estoque;

    public function __construct($nome, $nome_cient, $preco, $categoria, $estoque, $codigo = null){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->nome_cient = $nome_cient;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->estoque = $estoque;
    }

    public function getDisponibilidade(){

        if ($this->estoque = 0){
            return "indisponível";
        }else{
            return "Disponível";
        }

    }



}