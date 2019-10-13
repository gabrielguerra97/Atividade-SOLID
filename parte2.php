<?php
    #Interface que sera implementada pelas classes de Desconto e Pagamento
interface Item
{
    public function defineCor($cor);
    public function defineTamanho($tamanho);
}
    #Classe que sera implementada pela interface "Item"
class ItemDesconto implements Item
{
    public function aplicaDesconto($desconto);
    public function aplicaCodigoPromocao($codigoPromocao); 
}
    #Classe que sera implementada pela classe "ItemDesconto" que implementa "Item"
class ItemPagamento implements ItemDesconto
{
    public function defineParcelas($parcelas);
    public function definePreco($preco);   
}
?>