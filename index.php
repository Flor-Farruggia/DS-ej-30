<?php

require_once 'modelos/cliente.php';
require_once 'modelos/datosPersona.php';
require_once 'modelos/lineaVenta.php';
require_once 'modelos/Producto.php';
require_once 'modelos/proveedor.php';
require_once 'modelos/ventas.php';


$prov = new Proveedor();
$prov->Id=111;
$prov->Codigo=101010;
$prov->Direccion='Corrientes 121';
$prov->Telefono= 155666888;
$prov->Mail='jose@ggg.com';
$prov->RazonSoc='Lays.SA'; 
$prov->Cuit=1122233344;

$prod = new Producto();
$prod->Id=222;
$prod->Descripcion='papitas';
$prod->Codigo=1011;
$prod->PrecioVenta=800;
$prod->PrecioCompra=750;
$prod->Proveedor=$prov;

$lv = new LineaVenta();
$lv->Id=888;
$lv->NumLinea=21212121;
$lv->Producto=$prod;
$lv->Subtotal=11220;
$lv->Cant=20;

$c = new Cliente();
$c->Id=747;
$c->Codigo=55565;
$c->Direccion='Sarmiento 989';
$c->Telefono=88999578;
$c->Mail='juanP@gggg.com';
$c->Nombre='Juan';
$c->Apellido='Perez';
$c->Dni=22696878;

$v = new Venta();
$v->Id=7799;
$v->Fecha='22/03/2023';
$v->MontoTotal=22400;
$v->Observaciones='Nulas';
$v->LineaVenta=$lv;
$v->Cliente=$c;

$v->MostrarDatos();
