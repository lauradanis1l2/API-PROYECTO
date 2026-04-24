<?php
//SE UNCLUYEN LOS ARCHIVOS NECESARIOS PARA LA ELABORACION DEL FORMULARIO 
require('fpdf/fpdf.php');
require('../Modelo/Conexion.php');
require('../Modelo/Domicilios.php');
// CREAMOS UNA CLASE PARA PODER COLOCAR ENCABEZADO Y PIE DE PAGINA AL REPORTE
class PDF extends FPDF 
{
// Cabecera de pagina
function Header()
{
    //Se inserta un logo con alguna de las imagenes de la carpeta img
    $this->Image('img/productos.jpeg',10,8,-300);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Titulo
    $this->Cell(90,10,'REPORTE DE DOMICILIOS',1,0,'C');
    // Salto de linea
    $this->Ln(20);
}

// Pie de pagina
function Footer()
{
    // Posicion: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    //Numero de pagina
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}
// instanciamos un usuario para poder utilizar la funcion listar del modelo
$model= new Domicilio();
// instanciamos un elementos de la clase PDF para usar todos sus atributos y metodos
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
// Se crean las celdas con las que se va a trabajar para la creacion del reporte como si fueran celdas de una tabla
$pdf->Cell(20);
// Se colocan los encabezados de las columndas del reporte (se pueden agregar los que se necesiten)
// cada celda tiene dentro de la funcion Cell
//ancho, alto, cadena a mostrar, borde, posicion de la celda, alineacion, fondo de celda
$pdf->Cell(30,10,utf8_decode('Id'),1,0,'C',0);
$pdf->Cell(60,10,utf8_decode('Hora'),1,0,'C',0);
$pdf->Cell(40,10,utf8_decode('Estado'),1,0,'C',0);
$pdf->Cell(30,10,utf8_decode('IdPedido'),1,1,'C',0);



//invocamos la funcion lista para que consulte en este caso los usuarios
$Domicilio=$model->Listar();
if($Domicilio!=null){
    foreach($Domicilio as $r){
        //posicion inicial de las celdas para el reporte
        $pdf->Cell(20);
        $pdf->Cell(30,10,utf8_decode($r['idDomicilio']),1,0,'C',0);
        $pdf->Cell(60,10,utf8_decode($r['horaDomicilio']),1,0,'C',0);
        $pdf->Cell(40,10,utf8_decode($r['estadoDomicilio']),1,0,'C',0);
        $pdf->Cell(30,10,utf8_decode($r['idPedidoFK']),1,1,'C',0);
        
        
    }}
//Muestra el reporte en una ventana nueva del navegador
$pdf->Output();
?>