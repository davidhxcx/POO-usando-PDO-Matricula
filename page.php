<!DOCTYPE HTML>
<?php

class page{


	var $title = "\n<title> Sistema - IFC </title>";
	var $codificacao = "<meta http-equiv=\"Content-Type\" content=\"text/html; char-set=UTF-8\">";

	function SetTitle($newtitle)
	{
		$this->title = $newtitle;
	}

	function DisplayCodificacao()
	{
		echo "$this->codificacao";
	}
	
	function DisplayTitle()
	{
		echo "$this->title";
		
	}
	
	function DisplayStyles( )
	{
		echo 	"\n<link rel=\"stylesheet\" href=\"estilos.css\" type=\"text/css\" media=\"screen\" title=\"default\" />";
		echo	"\n<META name=\"author\" content=\"David Hudson Keila\">";
	}
	
		
	function DisplayIndex( )
	{
		
		?>
		<!-- Start: index div central -->
		
		<div  id="fundo">    
				<h1 id="sistema_titulo">SISTEMA DE MATRICULA<h1>
		<div id="logo_central">
			<img src= "img/ifc.png" >
		</div>
		</div>		
		
		<!-- End: index div central -->

	<?php
	}
	
	function DisplayHeader( )
	{
		
		?>
		<!-- Start: page-top-outer -->
		
		<div  id="barra_superior">
	
		<div id="logo"><a href="index.php">		<!-- LOGO-->
		<img border="0" src="img/ifc.png" width="118" height="82">
		</a></div>
		<div><h1>IFC - Camboriu</h1></div>


		</div>		
		
		<!-- End: page-top-outer -->

	<?php
	}
	
	function DisplayMenu()
	{
	?>
		<div id="menu_lateral">

				<div id="menu">		<!-- Menu Lateral do Site -->
				
					<ul>
						<li><a href="cad_aluno.php">Cadastro Aluno</font></a></li>
						<li><a href="cad_curso.php">Cadastro Curso</a></li>
						<li><a href="cad_professor.php">Cadastro Professor</a></li>
						<li><a href="cad_disciplina.php">Cadastro Disciplina</a></li>
						<li><a href="cad_matricula.php">Cadastro Matricula</a></li>
					</ul>
				</div>
				
		</div>
	
	
	<?php
	}
	
	function DisplayFooter()
	{
	?>
		
	<?php
	}
}
?>
