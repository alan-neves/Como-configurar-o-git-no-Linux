<?php
$email_destino = "webmaster@seusite.com.br";

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['avaliacao']) && isset($_POST['sugestoes']))
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['avaliacao'];
    $mensagem = $_POST['sugestoes'];
}
else
{
    echo "Todos os campos devem ser preenchidos!";
    exit;
}

$mensagem = "Nome do usuário: $nome\n";
$mensagem .= "E-mail: $email\n";
$mensagem .= "avaliacao: $avaliacao\n";
$mensagem .= "sugestoes: $sugestoes";
mail($email_destino, "sugestoes do usuário", $mensagem, "From:contato@seusite.com.br","-r contato@seusite.com.br");

echo "Sua mensagem foi enviada com sucesso!";
?>