<?php
require './controller/ClienteController.php';
require './controller/FamiliaController.php';
require './controller/ProveedorController.php';

$clienteController = new ClienteController();
$familiaController = new FamiliaController();
$proveedorController = new ProveedorController();

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'cargarFamilias';

switch ($accion) {
    case 'guardarCliente':
        $clienteController->guardar();
        break;
    case 'cargarClientes':
        $clientes = $clienteController->cargar();
        require './view/viewCargarCliente.php';
        break;
    case 'guardarFamilia':
        $familiaController->guardar();
        break;
    case 'cargarFamilias':
        $familias = $familiaController->cargar();
        require './view/viewCargarFamilias.php';
        break;
    case 'guardarProveedor':
        $proveedorController->guardar();
        break;
    case 'cargarProveedores':
        $proveedores = $proveedorController->cargar();
        require './view/viewCargarProveedor.php';
        break;
    default:
        $familiaController->cargar();
        break;
}
?>
