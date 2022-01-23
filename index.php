<?php
error_reporting(0);
extract($_GET);
$gasolina = 3.30;
$alcool = 2.90;
$conbustivel = $tipo;
switch ($conbustivel) {
	case 'Gasolina':
		if($litros<=20){
			  $desc = 4;
			  $total = $gasolina * $litros;
			  $valdesc = ($total * 100) / 1000;
			  $valor = $total - $valdesc;
			  echo "Conbustivel: ".$tipo."<br>";
			  echo "Litros: ". $litros."<br>";
			  echo "Valor: ".$valor;
			}else{
			  $desc = 6;
			  $total = $gasolina * $litros;
			  $valdesc = ($total * 100) / 1000;
			  $valor = $total - $valdesc;
			  echo "Conbustivel: ".$tipo."<br>";
			  echo "Litros: ". $litros."<br>";
			  echo "Valor: ".$valor;

			}
		break;
	case 'Alcool':
		if($litros<=20){
		  $desc = 3;
		  $total = $alcool * $litros;
		  $valdesc = ($total * 100) / 1000;
		  $valor = $total - $valdesc;
		  echo "Conbustivel: ".$tipo."<br>";
		  echo "Litros: ". $litros."<br>";
		  echo "Valor: ".$valor;
		}else{
		  $desc = 5;
		  $total = $alcool * $litros;
		  $valdesc = ($total * 100) / 1000;
		  $valor = $total - $valdesc;
		  echo "Conbustivel: ".$tipo."<br>";
		  echo "Litros: ". $litros."<br>";
		  echo "Valor: ".$valor;

		}
		break;
	default:
	    echo "Volte Sempre!";;
		break;
}