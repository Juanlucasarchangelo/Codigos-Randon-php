<?php
session_start();
require_once("Controller/UsuarioController.php");
require_once("Model/Usuario.php");
$usuarioController = new UsuarioController(); //Instância da Controladora
//txtEmailRegistro txtNomeRegistro txtSenhaRegistro
$msg = "";


if (filter_input(INPUT_GET, "msg", FILTER_SANITIZE_NUMBER_INT)) {
    if (filter_input(INPUT_GET, "msg", FILTER_SANITIZE_NUMBER_INT) == 1) {
        $msg = "<div class='alert alert-warning'>Faça o login para acessar o painel!</div>";
    } else {
        $msg = "<div class='alert alert-info'>Você fez o logout!</div>";
    }
}

if (filter_input(INPUT_POST, "txtEmailRegistro", FILTER_SANITIZE_STRING)) {

    $usuario = new Usuario(); //Instância de usuário

    $usuario->setNome(filter_input(INPUT_POST, "txtNomeRegistro", FILTER_SANITIZE_STRING));
    $usuario->setEmail(filter_input(INPUT_POST, "txtEmailRegistro", FILTER_SANITIZE_STRING));
    $usuario->setSenha(md5(filter_input(INPUT_POST, "txtSenhaRegistro", FILTER_SANITIZE_STRING)));
    $usuario->setData(date("Y-m-d H:i:s"));

    $result = $usuarioController->Cadastrar($usuario);

    switch ($result) {
        case 1:
            $msg = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
            break;

        case -1:
            $msg = "<div class='alert alert-warning'>Usuário já está cadaastrado!</div>";
            break;
        case -2:
            $msg = "<div class='alert alert-warning'>Dados inválidos!</div>";
            break;

        case -10:
            $msg = "<div class='alert alert-danger'>Houve um erro ao tentar cadastrar, tente novamente mais tarde.</div>";
            break;
    }
}

if (filter_input(INPUT_POST, "txtEmailLogin", FILTER_SANITIZE_STRING)) {
    $usuario = $usuarioController->Autenticar(filter_input(INPUT_POST, "txtEmailLogin", FILTER_SANITIZE_STRING), filter_input(INPUT_POST, "txtSenhaLogin", FILTER_SANITIZE_STRING));
    if ($usuario != null) {

        $_SESSION["nomeusuario"] = $usuario->getNome();
        $_SESSION["email"] = $usuario->getEmail();
        $_SESSION["data"] = $usuario->getData();

        header("Location: painel.php");
    } else {
        $msg = "<div class='alert alert-warning'>Usuário ou senha inválido!</div>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <!--LOGIN-->
        <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="Arquivos/Imagens/Logo site Original.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form id="formEntrar" role="form" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="btnEntrar" class="btn login_btn">Entrar</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
        <!---LOGIN-->
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
