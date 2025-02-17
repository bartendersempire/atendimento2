<?php
// Configurações de conexão
$host = "localhost";     // Ou IP do seu banco de dados
$user = "root";          // Seu usuário do banco de dados
$password = "";          // Sua senha do banco de dados
$dbname = "seu_banco";   // Nome do banco de dados

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$numero = $_POST['numero'];

// Validação simples dos dados (você pode adicionar mais validações conforme necessário)
if (empty($nome) || empty($numero)) {
    die("Nome e número são obrigatórios.");
}

// Prepara a consulta SQL para inserir os dados
$sql = "INSERT INTO usuarios (nome, numero) VALUES ('$nome', '$numero')";

// Executa a consulta
if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar dados: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
