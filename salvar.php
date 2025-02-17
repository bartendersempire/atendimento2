<?php
// Configuração do banco de dados
$host = "127.0.0.1:5500";  // Altere para o seu host
$user = "root";       // Altere para o seu usuário do banco de dados
$password = " ";       // Altere para a sua senha do banco de dados
$dbname = "sitebartendersempire";  // Altere para o nome do seu banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado via POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    
    // Aqui você pode conectar ao banco de dados e salvar os dados
    // Exemplo básico de conexão com MySQL:

    $host = "localhost";
    $usuario = "root";  // seu usuário de banco de dados
    $senha = "";        // sua senha de banco de dados
    $banco = "sitebartendersempire"; // seu banco de dados

    // Conectar ao banco de dados
    $conn = new mysqli($host, $usuario, $senha, $banco);

    // Verificar se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Inserir os dados no banco
    $sql = "INSERT INTO tabela (nome, numero) VALUES ('$nome', '$numero')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar dados: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
    error_reporting(E_ALL);
ini_set('display_errors', 1);
}
?>