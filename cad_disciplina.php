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
        
        $disciplina = new Disciplina();
        
        if(isset($_POST['cadastrar'])):
        
$nome = $_POST['nome'];

if($nome == ''){
        echo"Digite um nome de disciplina!";
        return false;
} 

    $disciplina->setNome($nome);

if($disciplina->insert()){
    echo "Inserido com Sucesso!";
}

endif;

    ?>
    
     <?php 
    if(isset($_POST['atualizar'])):
       
       $id = $_POST['id'];
       $nome = $_POST['nome'];
       
       
       $disciplina->setNome($nome);
       
       
       if($disciplina->update($id)){
            echo "Atualizado com Sucesso!";
       }
       
      endif;

    ?>
    
    <?php 
    
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
            
            $id = (int)$_GET['id'];
            if($disciplina->delete4($id)){
                  echo "Usuario Excluido com Sucesso!";
            }

    endif;
    ?>
       

    
    <?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){
    
        $id = (int)$_GET['id'];
        $resultado = $disciplina->find4($id);    
    ?>
    
<div>
	<div class="container-cadastro">
		<div id="cad_curso_titulo">       <!-- TITULO -->
				Atualizar Disciplina
			</div>
			<div id="cad_curso">
   <form method="POST" action="">
            <input class="input-type" type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="nome">
            <input type="hidden" name="id" value="<?php echo $resultado->id_disciplina; ?>">
			<button type="submit" name="atualizar" class="entrar-button">Atualizar</button>
		</form>
    </br></br></br>
                
<?php }else{ ?>
    
<div>
	<div class="container-cadastro">
		<div id="cad_curso_titulo">       <!-- TITULO -->
				Cadastro de Disciplina
			</div>
			<div id="cad_curso">
		<form method="POST" action="">
            <input class="input-type" type="text" name="nome" placeholder="nome">
			<button type="submit" name="cadastrar" class="entrar-button">Cadastrar</button>
		</form>	
    </br></br></br>
        
<?php } ?>

<table id="cad_curso_tabela">
    
    <thead>
        <tr>
            <th>#</th>
            <th>Nome:</th>
            <th>A&ccediloes:</th>
        </tr>
    </thead>

    <?php foreach($disciplina->findAll() as $key => $value): ?>
    
    <tbody>
        <tr>
            <td><?php echo $value->id_disciplina; ?></td>
            <td><?php echo $value->nome; ?></td>
            <td>
                <?php echo "<a href='cad_disciplina.php?acao=editar&id=" . $value->id_disciplina . "'><img title='Editar' src='img/alt.png'></a>"; ?>
                <?php echo "<a href='cad_disciplina.php?acao=deletar&id=" . $value->id_disciplina . "' onClick='return confirm(\"Deseja realmente deletar?\")'><img title='Excluir' src='img/exc.png'></a>"; ?>
            </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>		
	</div>
</div>
</body>