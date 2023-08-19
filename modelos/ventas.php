<?php

class Venta{
    public $Id;
    public $Fecha;
    public $MontoTotal;
    public $Observaciones;
    public $LineaVenta;
    public $Cliente;

    public function MostrarDatos(){
        echo 'Datos de las ventas <br>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Fecha: '.$this->Fecha.'<br>';
        echo 'Monto Total: '.$this->MontoTotal.'<br>';
        echo 'Observaciones: '.$this->Observaciones.'<br>';

        echo '<br>Datos de la linea de venta: <br>';
        echo '*Id: '.$this->LineaVenta->Id.'<br>';
        echo '*Número de Linea: '.$this->LineaVenta->NumLinea.'<br>';
        echo '*Subtotal'.$this->LineaVenta->Subtotal.'<br>';
        echo '*Cantidad: '.$this->LineaVenta->Cant.'<br>';

        echo '<br>Datos del Producto: <br>';
        echo '**Id: '.$this->LineaVenta->Producto->Id.'<br>';
        echo '**Descripcion: '.$this->LineaVenta->Producto->Descripcion.'<br>';
        echo '**Código: '.$this->LineaVenta->Producto->Codigo.'<br>';
        echo '**Precio de Venta: '.$this->LineaVenta->Producto->PrecioVenta.'<br>';
        echo '**Precio de Compra: '.$this->LineaVenta->Producto->PrecioCompra.'<br>';

        echo '<br>Datos del Proveedor: <br>';
        echo '***Id: '.$this->LineaVenta->Producto->Proveedor->Id.'<br>';
        echo '***Codigo: '.$this->LineaVenta->Producto->Proveedor->Codigo.'<br>';
        echo '***Dirección: '.$this->LineaVenta->Producto->Proveedor->Direccion.'<br>';
        echo '***Teléfono: '.$this->LineaVenta->Producto->Proveedor->Telefono.'<br>';
        echo '***Mail: '.$this->LineaVenta->Producto->Proveedor->Mail.'<br>';
        echo '***Razón Social: '.$this->LineaVenta->Producto->Proveedor->RazonSoc.'<br>';
        echo '**Cuit: '.$this->LineaVenta->Producto->Proveedor->Cuit.'<br>';

        echo '<br>Datos del Cliente: <br>';
        echo '***Id: '.$this->Cliente->Id.'<br>';
        echo '***Codigo: '.$this->Cliente->Codigo.'<br>';
        echo '***Dirección: '.$this->Cliente->Direccion.'<br>';
        echo '***Teléfono: '.$this->Cliente->Telefono.'<br>';
        echo '***Mail: '.$this->Cliente->Mail.'<br>';
        echo '***Nombre: '.$this->Cliente->Nombre.'<br>';
        echo '***Apellido: '.$this->Cliente->Apellido.'<br>';
        echo '***Dni: '.$this->Cliente->Dni.'<br>';
    }
}
