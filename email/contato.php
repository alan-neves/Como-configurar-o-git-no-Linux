<?php
$email_destino = array (
"pergunta" => "pergunta@seusite.com.br",
"reclamacao" => "reclamacao@seusite.com.br",
"suporte" => "suporte@seusite.com.br",
"publicidade" => "publicidade@seusite.com.br",
"webmaster" => "webmaster@seusite.com.br",
);
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['assunto']) && isset($_POST['mensagem']))
{
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
}
else
{
    echo "Todos os campos devem ser preenchidos!";
    exit;
}

$msg = "Nome do usuário: $nome\n";
$msg .= "E-mail: $email\n";
$msg .= "Mensagem: $mensagem";
mail($email_destino[$assunto], "Mensagem do usuário", $msg, "From:contato@seusite.com.br","-r contato@seusite.com.br");

echo "Sua mensagem foi enviada com sucesso!";
?>

