<?php


require_once "Conexao.php";
require_once "Produto.php";

class CrudProdutos {

    private $conexao;
    private $produto;

    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }

    public function salvar(Produto $produto){
        $sql = "INSERT INTO tb_produtos (nome,nome_cient, preco, categoria, qtd_estoque) VALUES ('$produto->nome', $produto->preco, '$produto->categoria', '$produto->estoque')";

        $this->conexao->exec($sql);
    }

    public function buscarProduto(int $codigo){
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE codigo = $codigo");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);

        return $produto;

    }

    public function getProduto(int $codigo){
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE id = $codigo");
        $prod = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Produto($prod['nome'],$prod['nome_cient'], $prod['preco'], $prod['categoria'], $prod['estoque'], $prod['codigo']);
    }

    public function getProdutos(){
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos");
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaNova = [];
        foreach($resultados as $prod){
            $listaNova[] = new Produto($prod['nome'],$prod['nome_cient'] , $prod['preco'], $prod['categoria'], $prod['estoque'], $prod['codigo']);
        }
        return $listaNova;
    }

    public function excluir(int $codigo){

        $this->conexao->exec("DELETE FROM tb_produtos WHERE codigo = $codigo");

    }

    public function editarProduto(Produto $produto){

        $this->conexao->exec("UPDATE tb_produtos SET nome = '$produto->nome', preco = $produto->preco, estoque = $produto->estoque, categoria = '$produto->categoria'  WHERE codigo = $produto->codigo");

    }
}

