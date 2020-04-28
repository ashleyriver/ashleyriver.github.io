<?php 

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET'){
$clientes = ["Cedula"=>1143256789,"Nombre"=>"Uriel Antonio","Dirrecion"=>"kra 41 # 80 -96","Telefono"=>"3642902","Edad"=>25];
$json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}else{

    $clientes = ["message"=>"Metodo $method no permitido" ];
    $json= json_encode($clientes);

header('content-type: application/json; charset=utf-8');
echo $json;
}
?>