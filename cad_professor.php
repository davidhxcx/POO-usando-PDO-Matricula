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
        
        $professor = new Professor();
        
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

    $professor->setNome($nome);
    $professor->setNascimento($nascimento); 
    $professor->setEndereco($endereco);
    $professor->setEmail($email);

if($professor->insert()){
    echo "Inserido com Sucesso!";
}

endif

    ?>
<div class="wrapper-login">
	<div class="container-login">
		<h1>Cadastro de Professores</h1>
		<form method="POST" action="">
            <input class="input-type" type="text" name="nome" placeholder="nome">
            <input class="input-type" type="text" name="nascimento" placeholder="Data de Nascimento"></br></p>
            <input class="input-type" type="text" name="endereco" placeholder="Endereço">
			<input class="input-type" type="text" name="email" placeholder="Email"></br></p>
			<button type="submit" name="cadastrar" class="entrar-button">Entrar</button>
		</form>		
	</div>
</div>
</body>