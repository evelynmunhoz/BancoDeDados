<?php
header("Content-Type: application/json");
require_once "conexao.php";
$metodo = $_SERVER["REQUEST_METHOD"];

if ($metodo == "POST") {

    $dados = json_decode(file_get_contents("php://input"), true);

    if (
        empty($dados["equipamento"]) ||
        empty($dados["setor"]) ||
        empty($dados["descricao"]) ||
        empty($dados["prioridade"]) ||
        empty($dados["status"])
    ) {

        echo json_encode([
            "erro" => "Todos os campos são obrigatórios."
        ]);

        exit;
    }

    if (
        $dados["prioridade"] != "baixa" &&
        $dados["prioridade"] != "media" &&
        $dados["prioridade"] != "alta"
    ) {

        echo json_encode([
            "erro" => "Prioridade inválida."
        ]);

        exit;
    }

    if (
        $dados["status"] != "aberto" &&
        $dados["status"] != "em andamento" &&
        $dados["status"] != "concluido"
    ) {

        echo json_encode([
            "erro" => "Status inválido."
        ]);

        exit;
    }

    $sql = "INSERT INTO chamados
            (equipamento, setor, descricao, prioridade, status)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $dados["equipamento"],
        $dados["setor"],
        $dados["descricao"],
        $dados["prioridade"],
        $dados["status"]
    ]);


    echo json_encode([
        "mensagem" => "Chamado cadastrado com sucesso."
    ]);

    exit;
}


if ($metodo == "GET") {

    $sql = "SELECT * FROM chamados ORDER BY id";

    $stmt = $pdo->query($sql);

    $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($chamados);

    exit;
}




if ($metodo == "PUT") {

    $dados = json_decode(file_get_contents("php://input"), true);



    if (
        empty($dados["id"]) ||
        empty($dados["equipamento"]) ||
        empty($dados["setor"]) ||
        empty($dados["descricao"]) ||
        empty($dados["prioridade"]) ||
        empty($dados["status"])
    ) {

        echo json_encode([
            "erro" => "Todos os campos são obrigatórios."
        ]);

        exit;
    }


    if (
        $dados["prioridade"] != "baixa" &&
        $dados["prioridade"] != "media" &&
        $dados["prioridade"] != "alta"
    ) {

        echo json_encode([
            "erro" => "Prioridade inválida."
        ]);

        exit;
    }



    if (
        $dados["status"] != "aberto" &&
        $dados["status"] != "em andamento" &&
        $dados["status"] != "concluido"
    ) {

        echo json_encode([
            "erro" => "Status inválido."
        ]);

        exit;
    }


    $sql = "UPDATE chamados
            SET equipamento = ?,
                setor = ?,
                descricao = ?,
                prioridade = ?,
                status = ?
            WHERE id = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $dados["equipamento"],
        $dados["setor"],
        $dados["descricao"],
        $dados["prioridade"],
        $dados["status"],
        $dados["id"]
    ]);


    echo json_encode([
        "mensagem" => "Chamado atualizado com sucesso."
    ]);

    exit;
}


if ($metodo == "DELETE") {

    $dados = json_decode(file_get_contents("php://input"), true);


    // Verificar ID

    if (empty($dados["id"])) {

        echo json_encode([
            "erro" => "O ID é obrigatório."
        ]);

        exit;
    }


    // Excluir

    $sql = "DELETE FROM chamados WHERE id = ?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $dados["id"]
    ]);


    echo json_encode([
        "mensagem" => "Chamado excluído com sucesso."
    ]);

    exit;
}

echo json_encode([
    "erro" => "Método não permitido."
]);
