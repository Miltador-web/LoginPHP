<?php
include_once 'conexao.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto de validação php</title>
</head>
<body>
    <?php
    // exemplo criptografar a senha
    //echo password_hash(25651315, PASSWORD_DEFAULT);
    ?>
    <h1>Login</h1>
    <?php
    use parallel\Events\Input;
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($dados['sendLogin'])){
        var_dump($dados);
       $query_usuario =  "SELECT id,
        usuario,
        senha
        from usuarios
        where usuario =:usuario; 
        $result_usuario = $conn->prepare($query_usuario);

       
    }
    ?>
    <form method="POST" action="">
        <label>Usuario</label>
        <input type="text" name = "usuario" placeholder="Usuario"> <br> <br>
        <label>Senha</label>
        <input type="password" name= "senha" placeholder="senha"> <br> <br>
        <input type="submit" value="Acessar" name="sendLogin">
    </form>
</body>
</html>