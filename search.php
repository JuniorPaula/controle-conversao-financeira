<?php

    include_once("templates/header.php");
    include_once("./config/conection.php");


    //conexão com o banco de dados
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    if($_GET['type'] == 'search') {

        // recuperando os valores das datas via get
        $dataFrom = $_GET['dateFrom'];
        $dataTo = $_GET['dateTo'];
      

        //recuperando as datas do banco
        $stmt = $conn->prepare("SELECT * FROM tb_usuarios WHERE data_operacao >= '$dataFrom' AND data_operacao <= '$dataTo'");
        $stmt->execute();
        $resultDate = $stmt->fetchAll(PDO::FETCH_ASSOC);


        //recuperando os valores de busca por nome
        $search = "%".trim($_GET['search'])."%";

    
        $stmt = $conn->prepare('SELECT * FROM tb_usuarios WHERE nome_cliente LIKE :nome_cliente');
        $stmt->bindParam(':nome_cliente', $search, PDO::PARAM_STR);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

      


    }


?>
    

<div class="container">

    <?php if(isset($resultados) == $_GET['search'] ): ?>
        <div class="row mb-3">
            <div class="col-6"> 
                <h2>Você esta buscando por: <span class="text-success"> <?php echo $_GET['search'] ?> </span></h2>
            </div>
        </div>

        <table class="table table-striped table-dark" id="user-table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" class="th-text">Nome Cliente</th>
                    <th scope="col" class="th-text">Moeda Origem</th>
                    <th scope="col" class="th-text">Moeda Destino</th>
                    <th scope="col" class="th-text">Data Operação</th>
                    <th scope="col" class="th-text">Valor Original</th>
                    <th scope="col" class="th-text">Valor Convertido</th>
                    <th scope="col" class="th-text">Taxa Cobrada</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultados as $resultado): ?>

                    <tr>
                        <td scope="row" class="th-text"><?= $resultado['id'] ?></td>
                        <td scope="row" class="th-text"><?= $resultado['nome_cliente'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $resultado['moeda_origem'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $resultado['moeda_destino'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $resultado['data_operacao'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $resultado['valor_original'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $resultado['valor_convertido'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $resultado['taxa_cobrada'] ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    <?php elseif(count($resultDate)): ?>
        <div class="row mb-3">
            <div class="col-12"> 
                <h5>Você esta buscando entre as datas:
                    <?php
                        $dateFrom = $_GET['dateFrom'];
                        $dateTo = $_GET["dateTo"];
                        echo '<span class="text-success">' . $newDate = date("d-m-Y", strtotime($dateFrom)) . '</span>'
                    ?> e <?php echo '<span class="text-success">' . $newDate = date("d-m-Y", strtotime($dataTo)) . '</span>' ?>
                </h5>
            </div>
        </div>
  
        <table class="table table-striped table-dark" id="user-table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" class="th-text">Nome Cliente</th>
                    <th scope="col" class="th-text">Moeda Origem</th>
                    <th scope="col" class="th-text">Moeda Destino</th>
                    <th scope="col" class="th-text">Data Operação</th>
                    <th scope="col" class="th-text">Valor Original</th>
                    <th scope="col" class="th-text">Valor Convertido</th>
                    <th scope="col" class="th-text">Taxa Cobrada</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultDate as $result): ?>

                    <tr>
                        <td scope="row" class="th-text"><?= $result['id'] ?></td>
                        <td scope="row" class="th-text"><?= $result['nome_cliente'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $result['moeda_origem'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $result['moeda_destino'] ?></td>
                        <td scope="row" class="th-text text-center"><?= date("d-m-Y", strtotime($result['data_operacao'])) ?></td>
                        <td scope="row" class="th-text text-center"><?= $result['valor_original'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $result['valor_convertido'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $result['taxa_cobrada'] ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    <?php else: ?>
        <p class="empty-list-text">Ainda não há Relatórios, <a href="<?= $BASE_URL ?>index.php">Click aqui para adicionar</a></p>
    <?php endif; ?>

</div>



<?php

    include_once("templates/footer.php");

?>