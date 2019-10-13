<?php
#classe para apenas atribuir dados de montar um pedido
class MontarPedido
{
    public function calcularSomaTotal(){/*...*/}
    public function retornaItens(){/*...*/}
    public function retornaQuantidade(){/*...*/}
    public function adicionaItem($item){/*...*/}
    public function excluirItem($item){/*...*/}
}
#classe para mostrar qual o pedido
class MostrarPedido
{
    public function imprimePedido(){/*...*/}
    public function mostraHTMLPedido(){/*...*/}
}
#classe para tratar de pedidos já existentes
class Pedido
{
    public function carrega(){/*...*/}
    public function salva(){/*...*/}
    public function atualiza(){/*...*/}
    public function exclui(){/*...*/} 
} 
?>