<?php
		require('page.php');
		$homepage = new Page();
		
?>
	<html>

		<head>
			<?php
				echo 	$homepage -> DisplayCodificacao(); //Aplica codificação UTF-8
				echo	$homepage -> DisplayTitle(); //Mostra Titulo
				echo	$homepage -> DisplayStyles(); //Mostra Estilos

			?>	
		</head>

	<!--inicio da corpo da pagina ++++++++++++++++++++++++-->

		<body id="background">
			<?php
				echo	$homepage -> DisplayHeader(); //cabeçalho
				echo	$homepage -> DisplayMenu(); //Menu
			?>
			<!--nucleo principal  da pagina +++++++++++++++++++++++-->
				
			<?php
			
				echo	$homepage -> DisplayIndex();//Carrega o centro da pagina inicial (index)
			?>	
								
			<!--FIM do nucleo principal  da pagina +++++++++++++++++++++++-->

			<?php
				echo	$homepage-> DisplayFooter();//(Rodapé)
			?>

		
		</body>	
	<!--FIM do corpo principal-->
	</html>