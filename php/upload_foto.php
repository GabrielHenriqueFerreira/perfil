<?php
if (!isset($_FILES['foto'])) {
    echo json_encode(["erro" => "Nenhuma foto enviada"]);
    exit;
}

$arquivo = $_FILES['foto'];
$caminho = "uploads/" . uniqid() . "-" . $arquivo["name"];

move_uploaded_file($arquivo["tmp_name"], $caminho);

echo json_encode(["sucesso" => true, "caminho" => $caminho]);
