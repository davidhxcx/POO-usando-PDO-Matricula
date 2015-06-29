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

endif

    ?>
<div class="wrapper-cadastro">
	<div class="container-cadastro">
		<h1>Cadastro de Curso</h1>
		<form method="POST" action="">
            <input class="input-type" type="text" name="nome" placeholder="nome">
            <input class="input-type" type="text" name="duracao" placeholder="Duração do Curso"></br></p>
            <input class="input-type" type="text" name="periodo" placeholder="Periodo do Curso">			
			<button type="submit" name="cadastrar" class="entrar-button">Entrar</button>
		</form>		
	</div>
</div>
</body>