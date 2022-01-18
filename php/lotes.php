<?php
include('conexao.php');
header('Content-Type:application/json');
$queryLotes = mysqli_query($conexao,"SELECT * FROM lotes");
$lotes = array();
while ($lote = mysqli_fetch_array($queryLotes)) {
    $lotes[] = array("ID" => $lote['id'],"dados_do_lote" => $lote['dados_do_lote'],"condominio" => $lote['condominio'],
    "CEP" => $lote['cep'],"metros_quadrados" => $lote['metros_quadrados'],"regular" => $lote['regular'],"data" => $lote['data'],"estado" => $lote['estado'],"cidade" => $lote['cidade'], "latitude" => $lote['latitude'],"longitude" => $lote['longitude'],"venda_ou_aluguer" => $lote['venda_ou_aluguer']);
}
echo json_encode($lotes);
?>