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

endif

    ?>
<div class="wrapper-login">
	<div class="container-login">
		<h1>Cadastro de Alunos</h1>
		<form method="POST" action="">
            <input class="input-type" type="text" name="nome" placeholder="nome">
            <input class="input-type" type="text" name="nascimento" placeholder="Data de Nascimento"></br></p>
            <input class="input-type" type="text" name="endereco" placeholder="Endereço">
			<input class="input-type" type="text" name="email" placeholder="Email"></br></p>
			<button type="submit" name="cadastrar" class="entrar-button">Cadastrar</button>
		</form>

<table class="table table-hover">
    
    <thead>
        <tr>
            <th>#</th>
            <th>Nome:</th>
            <th>Data de Nascimento:</th>
            <th>Endereço:</th>
            <th>Email:</th> 
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
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
	</div>
</div>
</body>