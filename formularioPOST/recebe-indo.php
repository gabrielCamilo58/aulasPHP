<?php

//var_dump($_POST);

$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$ondeConheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];

echo "<div>";
echo "<strong>Nome: </strong>" . $nome . "<br>";
echo "<strong>E-mail: </strong>" . $email . "<br>";

echo "<strong>Interesses: </strong> <br>";
echo "<ul>";
foreach ($interesses as $interesse) {
    echo "<li>$interesse</li>";
}
echo "</ul>";

echo "<strong>Onde Conheceu: </strong> $ondeConheceu<br>";
echo "<strong>Redirecionar: </strong> $redirecionar<br>";
echo "</div>";
?>

<style>
    div {
        margin: 30px;
        background-color: #00a3cc;
        padding: 20px;
        border-radius: 10px;
    }
</style>