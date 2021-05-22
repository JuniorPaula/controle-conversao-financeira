<?php

    session_start();

    include_once("conection.php");
    include_once("url.php");

    $data = $_POST;

    // Modificaçoes no banco
    if(!empty($data)) {

        

        //criar o contato no banco de dados
        if($data["type"] == "create") {

            $name =             $data["name"];
            $convertFrom =      $data["convertFrom"];
            $convertTo =        $data["convertTo"];
            $date =             $data["date"];
            $valor_original =   $data["valor_original"];
            $valor_convertido = $data["valor_convertido"];
            $taxa_cobrada =     $data["taxa_cobrada"];

            $date = date('Y-m-d');

            $query = "INSERT INTO tb_usuarios (nome_cliente, moeda_origem, moeda_destino, data_operacao, valor_original, valor_convertido, taxa_cobrada) VALUES (:nome_cliente, :moeda_origem, :moeda_destino, :data_operacao, :valor_original, :valor_convertido, :taxa_cobrada)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":nome_cliente", $name);
            $stmt->bindParam(":moeda_origem", $convertFrom);
            $stmt->bindParam(":moeda_destino", $convertTo);
            $stmt->bindParam(":data_operacao", $date);
            $stmt->bindParam(":valor_original", $valor_original);
            $stmt->bindParam(":valor_convertido", $valor_convertido);
            $stmt->bindParam(":taxa_cobrada", $taxa_cobrada);

            try {

               $stmt->execute();
               $_SESSION["msg"] = "Dados inseridos com sucesso!";
        
        
            } catch(PDOException $e) {
        
                //erro de conexão
                $error = $e->getMessage();
                echo "Erro: " . $error;
        
            }


        }

        // redireionar para home
       header("Location:" . $BASE_URL . "../relatorios.php");

    // seleção de dados    
    } else {

        $users = [];

        $query = "SELECT * FROM tb_usuarios";
    
        $stmt = $conn->prepare($query);
    
        $stmt->execute();
    
        $users = $stmt->fetchAll();


        // somando os valores da coluna taxa_cobrada
        $sql = "SELECT SUM(taxa_cobrada) as soma from tb_usuarios";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $taxaCobrada = $stmt->fetch();
        $soma = $taxaCobrada['soma'];

        // somando os valores da coluna valor_convertido
        $sql = "SELECT SUM(valor_convertido) as valor from tb_usuarios";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $valorConvertido = $stmt->fetch();
        $valorConvertido = $valorConvertido['valor'];


        

    }

   // fechar conexão
   $conn = null;



?>