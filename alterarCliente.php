<?php

$conn = new PDO("mysql:dbname=bancoDeDados;host=localhost", "root", "");

$stmt  = $conn->prepare("UPDATE tabelaClientes SET id_cliente = :id, nome_cliente = :nome, email_cliente = :email, telefone_cliente = :telefone, senha_cliente = :senha, data_nasci_cliente = :dataNasci WHERE id_cliente = :id");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$dataNasci = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING);

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":telefone", $telefone);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":dataNasci", $dataNasci);

$stmt->execute();

echo "Cliente Atualizado!";

?>