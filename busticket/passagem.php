<?php 
	require_once "mpdf60/mpdf.php"; // incluir a biblioteca do mpdf
		if(count($ret > 0))
		{ // construindo a página em html - criando uma variável e uma string
			$html = "
				<h1 id='passagem'>Busticket</h1>
				<br/><h2>Dados da passagem</h2>
				<table border='1' id='tablepassagem'>
				<tr>
				<td>Cidade de origem/destino</td>
				<td>Data</td>
				<td>Horário</td>
				<td>Quantidade</td>
				<td>Passageiro(a)</td>
				</tr>";
					$html= $html ."<tr><th>{$ret[0]->origem_destino}</th>
					<th>{$ret[0]->datap}</th>
					<th>{$ret[0]->horario}</th>
					<th>{$ret[0]->quantidade}</th>
					<th>{$ret[0]->nome}</th></tr>";
					$html = $html . "</table><br/>";
				// QR Code

         include("phpqrcode/qrlib.php");
			 
					$PNG_TEMP_DIR = "qrcodes";


				  //html PNG location prefix
				 $PNG_WEB_DIR = 'temp/';


				  //ofcourse we need rights to create temp dir
				  if (!file_exists($PNG_TEMP_DIR))
					mkdir($PNG_TEMP_DIR);


				$filename = $PNG_TEMP_DIR.$ret[0]->idpassagem.'.png';

				//processing form input
				//remember to sanitize user input in real-life solution !!!
				$errorCorrectionLevel = 'L';
				$matrixPointSize = 4;

				// user data
				$filename = $PNG_TEMP_DIR.$ret[0]->idpassagem.'.png';


			   // echo $filename;


				QRcode::png($ret[0]->idpassagem, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 


				$html = $html ."<img src='$filename' id='qrcode'>";
				$mpdf=new mPDF(); // instancia a classe mpdf (parâmetros: qual tipo da folha, margem...)
				$mpdf->SetDisplayMode('fullpage'); // página completa
				$css = file_get_contents("css/css.css"); // pegando o conteúdo de css 
				$mpdf->WriteHTML($css,1); // passa o css				
				$mpdf->WriteHTML($html); // dá write no html
				$mpdf->Output(); // igual do fpdf, dessa forma ele já abre direto no navegador o pdf
				// se quiser que salve: $mpdf->Output('../relatorios/itens.pdf', 'F');
		}
				
      
?>