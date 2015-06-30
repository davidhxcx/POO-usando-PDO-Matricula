<!-- ESTILOS +++++++++++++ -->
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


<!-- ESTILOS +++++++++++++ -->

<?php
        function __autoload($class_name){
            require_once 'classes/' . $class_name . '.php';
        }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema Escola</title>
	<meta charset='UTF-8'>
	<link href="../assets/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    
    <?php
        
        $curso = new Curso();
        
        if(isset($_POST['cadastrar'])):
        
$nome = $_POST['nome'];
$duracao = $_POST['duracao'];
$periodo = $_POST['periodo'];


if($nome == ''){
        echo"Digite o nome do curso!";
        return false;
} else {

    if($duracao == ''){
        echo"Digite a Duração do Curso!";
        return false;

    }else {
        if($periodo == ''){
        echo"Digite o Periodo do Curso!";
        return false;
        }
    }
} 

    $curso->setNome($nome);
    $curso->setDuracao($duracao); 
    $curso->setPeriodo($periodo);

if($curso->insert()){
    echo "Inserido com Sucesso!";
}

endif;

    ?>
    
    
     <?php 
    if(isset($_POST['atualizar'])):
       
       $id = $_POST['id'];
       $nome = $_POST['nome'];
       $duracao = $_POST['duracao'];
       $periodo = $_POST['periodo'];
       
       $curso->setNome($nome);
       $curso->setDuracao($duracao); 
       $curso->setPeriodo($periodo);
       
       if($curso->update($id)){
            echo "Atualizado com Sucesso!";
       }
       
      endif;

    ?>
    
    <?php 
    
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
            
            $id = (int)$_GET['id'];
            if($curso->delete3($id)){
                  echo "Curso Excluido com Sucesso!";
            }

    endif;
    ?>
       

    
    <?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){
    
        $id = (int)$_GET['id'];
        $resultado = $curso->find3($id);    
    ?>
    
<div>
	<div class="container-cadastro">
		<div id="cad_curso_titulo">       <!-- TITULO -->
				Atualizar Curso
			</div>
			<div id="cad_curso">
		<form method="POST" action="">
            <input class="input-type" type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="nome">
            <input class="input-type" type="text" name="duracao" value="<?php echo $resultado->duracao; ?>" placeholder="Duração do Curso"></br></p>
            <input class="input-type" type="text" name="periodo" value="<?php echo $resultado->periodo; ?>" placeholder="Periodo do Curso"></br>
            <input type="hidden" name="id" value="<?php echo $resultado->id_curso; ?>">
			<button type="submit" name="atualizar" class="entrar-button">Atualizar</button>
		</form>
    </br></br></br>
    
    <?php }else{ ?>
    
<div>
	<div class="container-cadastro">
		<div id="cad_curso_titulo">       <!-- TITULO -->
				Cadastro de Curso
			</div>
			<div id="cad_curso">
		<form method="POST" action="">
            <input class="input-type" type="text" name="nome" placeholder="nome">
            <input class="input-type" type="text" name="duracao" placeholder="Duração do Curso"></br></p>
    <input class="input-type" type="text" name="periodo" placeholder="Periodo do Curso"></br></p>			
			<button type="submit" name="cadastrar" class="entrar-button">Cadastrar</button>
		</form>	
        </br></br></br>
    <?php } ?>

<table id="cad_curso_tabela" >
    
    <thead>
        <tr>
            <th>#</th>
            <th>Nome:</th>
            <th>Dura&ccedilão:</th>
            <th>Período:</th>
            <th>A&ccediloes:</th>
               </tr>
    </thead>

    <?php foreach($curso->findAll() as $key => $value): ?>
    
    <tbody>
        <tr>
            <td><?php echo $value->id_curso; ?></td>
            <td><?php echo $value->nome; ?></td>
            <td><?php echo $value->duracao; ?></td>
            <td><?php echo $value->periodo; ?></td>
            <td>
                <?php echo "<a href='cad_curso.php?acao=editar&id=" . $value->id_curso . "'><img title='Editar' src='img/alt.png'></a>"; ?>
                <?php echo "<a href='cad_curso.php?acao=deletar&id=" . $value->id_curso . "' onClick='return confirm(\"Deseja realmente deletar?\")'><img title='Excluir' src='img/exc.png'></a>"; ?>
            </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
		
	</div>
</div>
</body>