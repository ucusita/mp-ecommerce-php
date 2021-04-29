<?php
	function generaLogsPay($accion)
	{   
			$hora=str_pad(date("H:i:s"),10," "); //hhmmss;
			$accion=str_pad($accion,50," ");
			$cadena=$hora.$accion;
			//Creamos dinamicamente el nombre del archivo por dia
			$pre="mp_log";
			$date=date("ymd"); //aammddhhmmss
			$fileName=$pre.$date;

			$f = fopen(dirname(__FILE__)."/logs/$fileName.txt","a");
				fputs($f,$cadena."\r\n") or die("no se pudo crear o insertar el fichero");
			fclose($f);
	}

	function generaJson($json)
	{   
			$json=json_decode($json, true);
			$hora=str_pad(date("H:i:s"),10," "); //hhmmss;
			$date=date("ymd"); //aammddhhmmss
			$fileName="mp_json_".$date."-".$hora;		

			file_put_contents(dirname(__FILE__)."/../../logs/$fileName.json",$json);
	}
?>