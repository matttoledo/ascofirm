<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "danielmois1998@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$phone = $_REQUEST['phone'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $phone , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:index.html");


?>