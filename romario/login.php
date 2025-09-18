<?php
include ("conexao.php");

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = "SELECT nome FROM usuarios WHERE cpf = ? AND senha = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (isset($row) && $row['nome'] != '') {
            session_start();
            $_SESSION["cpf"] = $cpf;
            $_SESSION["senha"] = $senha;
            $_SESSION["nome"] = $row['nome'];
            header("Location: principal.php");
            exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Erro de conexão no banco.";
    }
} else {
    echo "Erro na SQL.";
}
?>
