
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
				echo	$homepage -> DisplayHeader();//cabeçalho
				echo	$homepage -> DisplayMenu(); //Menu
			?>
			<!--nucleo principal  da pagina +++++++++++++++++++++++-->
				
			<div  id="fundo">
	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<?php
        function __autoload($class_name){
            require_once 'classes/' . $class_name . '.php';
        }

?>
<!DOCTYPE html>
<html>

<body>
    
    
<div>
	<div>
		<div id="cad_curso_titulo">       <!-- TITULO -->
				Cadastro de Matricula
			</div>
			
			</br></br></br>
		
		</div>
	</div>
</div>

</body>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
			
			
			
					
			<?php
				echo	$homepage-> DisplayFooter();//(Rodapé)
			?>
		
		</body>	
	<!--FIM do corpo principal-->
	</html>
