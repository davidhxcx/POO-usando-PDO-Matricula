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
</head>
<body>
    
    <?php
        
        $alunos = new Alunos();
        
        if(isset($_POST['cadastrar'])):
        
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];

if($nome == ''){
        echo"Digite um nome!";
        return false;
} else {

    if($email == ''){
        echo"Digite um email!";
        return false;

    }
} 

    $alunos->setNome($nome);
    $alunos->setNascimento($nascimento); 
    $alunos->setEndereco($endereco);
    $alunos->setEmail($email);

if($alunos->insert()){
    echo "Inserido com Sucesso!";
}

endif;

?>
    
 <?php 
    if(isset($_POST['atualizar'])):
       
       $id = $_POST['id'];
       $nome = $_POST['nome'];
       $nascimento = $_POST['nascimento'];
       $endereco = $_POST['endereco'];
       $email = $_POST['email'];
       
       $alunos->setNome($nome);
       $alunos->setNascimento($nascimento); 
       $alunos->setEndereco($endereco);
       $alunos->setEmail($email);
       
       if($alunos->update($id)){
            echo "Atualizado com Sucesso!";
       }
       
      endif;

    ?>
    
    <?php 
    
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
            
            $id = (int)$_GET['id'];
            if($alunos->delete($id)){
                  echo "Usuario Excluido com Sucesso!";
            }

    endif;
    ?>
       

    
    <?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){
    
        $id = (int)$_GET['id'];
        $resultado = $alunos->find($id);    
    ?>
    
<div>    
<div class="container-cadastro">
		<div id="cad_curso_titulo">       <!-- TITULO -->
				Atualizar Aluno
			</div>
			<div id="cad_curso">
   <form method="POST" action="">
            <input class="input-type" type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="nome">
            <input class="input-type" type="text" name="nascimento" value="<?php echo $resultado->dataNasc; ?>" placeholder="Data de Nascimento"></br></p>
            <input class="input-type" type="text" name="endereco" value="<?php echo $resultado->endereco; ?>" placeholder="Endereço">
			<input class="input-type" type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="Email"></br></p>
            <input type="hidden" name="id" value="<?php echo $resultado->id_aluno; ?>">
			<button type="submit" name="atualizar" class="entrar-button">Atualizar</button>
		</form>
    </br>
<?php }else{ ?>

<div>    
<div class="container-cadastro">
		<div id="cad_curso_titulo">       <!-- TITULO -->
				Cadastrar Aluno
			</div>
			<div id="cad_curso">
		<form method="POST" action="">
            <input class="input-type" type="text" name="nome" placeholder="nome">
            <input class="input-type" type="text" name="nascimento" placeholder="Data de Nascimento"></br></p>
            <input class="input-type" type="text" name="endereco" placeholder="Endereço">
			<input class="input-type" type="text" name="email" placeholder="Email"></br></p>
			<button type="submit" name="cadastrar" class="entrar-button">Cadastrar</button>
		</form>
    </br>
<?php } ?>


<table id="cad_curso_tabela" >
    
    <thead>
        <tr>
            <th>#</th>
            <th>Nome:</th>
            <th>Data de Nascimento:</th>
            <th>Endere&ccedilo:</th>
            <th>Email:</th>
            <th>A&ccediloes:</th>
        </tr>
    </thead>

    <?php foreach($alunos->findAll() as $key => $value): ?>
    
    <tbody>
        <tr>
            <td><?php echo $value->id_aluno; ?></td>
            <td><?php echo $value->nome; ?></td>
            <td><?php echo $value->dataNasc; ?></td>
            <td><?php echo $value->endereco; ?></td>
            <td><?php echo $value->email; ?></td>
            <td>
                <?php echo "<a href='cad_aluno.php?acao=editar&id=" . $value->id_aluno . "'><img title='Editar' src='img/alt.png'></a>"; ?>
                <?php echo "<a href='cad_aluno.php?acao=deletar&id=" . $value->id_aluno . "' onClick='return confirm(\"Deseja realmente deletar?\")'><img title='Excluir' src='img/exc.png'></a>"; ?>
            </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
	</div>
</div>
</body>