<?php
$method = $_SERVER['REQUEST_METHOD'];

$x_cod_response      = $_REQUEST['x_cod_response'];
$x_ref_payco         = $_REQUEST['x_ref_payco'];
$x_amount            = $_REQUEST['x_amount'];
$x_id_invoice        = $_REQUEST['x_id_invoice'];
$x_autorizacion      = $_REQUEST['x_approval_code'];
$x_fecha_transaccion = $_REQUEST['x_fecha_transaccion'];
$x_franchise         = $_REQUEST['x_franchise'];
$id                  = $_REQUEST['id'];
$total               = $_REQUEST['total'];
$cedula              = $_REQUEST['cc'];
$name                = $_REQUEST['name'];

var_dump($method, "HOLA", $x_cod_response);
var_dump($_REQUEST);
die();

if ($x_cod_response) {
    switch ((int) $x_cod_response) {
        case 1:
            # code transacción aceptada
            echo "transacción aceptada";
            $contenido = $method . ' ******* ' . $name . ' ******* ' . $cedula . ' ******* ' . $total . ' ******* ' . $id . ' ******* ' . $x_ref_payco . ' ******* ' . $x_id_invoice . ' ******* ' . $x_fecha_transaccion . ' ******* ' . $x_amount . ' ******* ' . $x_autorizacion . ' ****** ' . $x_franchise . ' ***** ';
            $salto = "<---------------------------- *Nueva trx* ---------------------------->";
            $archivo = fopen('registro_trx_recuado.txt', 'a');
            fputs($archivo, $salto . PHP_EOL);
            fputs($archivo, $contenido . PHP_EOL);
            fclose($archivo);
            break;

        case 2:
            # code transacción rechazada
            echo "transacción rechazada";
            $contenido = $name . ' ******* ' . $cedula . ' ******* ' . $total . ' ******* ' . $id . ' ******* ' . $x_ref_payco . ' ******* ' . $x_id_invoice . ' ******* ' . $x_fecha_transaccion . ' ******* ' . $x_amount . ' ******* ' . $x_autorizacion . ' ****** ' . $x_franchise . ' ***** ';
            $salto = "<---------------------------- *Nueva trx* ---------------------------->";
            $archivo = fopen('registro_trx_recuado.txt', 'a');
            fputs($archivo, $salto . PHP_EOL);
            fputs($archivo, $contenido . PHP_EOL);
            fclose($archivo);
            break;

        case 3:
            # code transacción pendiente
            echo "transacción pendiente";
            $contenido = $name . ' ******* ' . $cedula . ' ******* ' . $total . ' ******* ' . $id . ' ******* ' . $x_ref_payco . ' ******* ' . $x_id_invoice . ' ******* ' . $x_fecha_transaccion . ' ******* ' . $x_amount . ' ******* ' . $x_autorizacion . ' ****** ' . $x_franchise . ' ***** ';
            $salto = "<---------------------------- *Nueva trx* ---------------------------->";
            $archivo = fopen('registro_trx_recuado.txt', 'a');
            fputs($archivo, $salto . PHP_EOL);
            fputs($archivo, $contenido . PHP_EOL);
            fclose($archivo);
            break;

        case 4:
            # code transacción fallida
            echo "transacción fallida";
            $contenido = $name . ' ******* ' . $cedula . ' ******* ' . $total . ' ******* ' . $id . ' ******* ' . $x_ref_payco . ' ******* ' . $x_id_invoice . ' ******* ' . $x_fecha_transaccion . ' ******* ' . $x_amount . ' ******* ' . $x_autorizacion . ' ****** ' . $x_franchise . ' ***** ';
            $salto = "<---------------------------- *Nueva trx* ---------------------------->";
            $archivo = fopen('registro_trx_recuado.txt', 'a');
            fputs($archivo, $salto . PHP_EOL);
            fputs($archivo, $contenido . PHP_EOL);
            fclose($archivo);
            break;
    }
} else {
    die("Algo fallo!!!");
}
