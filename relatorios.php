<?php

    include_once("templates/header.php");

?>
    

<div class="row mb-3">
    <div class="col-12">
        <h2 class="text-uppercase">Lista de Operações</h2>
    </div>
    <div class="col-12 ">
        <form action="<?= $BASE_URL ?>search.php" method="GET" class="d-flex justify-content-around">
        <input type="hidden" name="type" value="search">
            <div class="form-group">
                <label for="dateFrom">De</label>
                <input type="date" id="datefrom" name="dateFrom" class="form-control">
            </div>
            <div class="form-group">
                <label for="dateTo">Até</label>
                <input type="date" id="dateTo" name="dateTo" class="form-control">
            </div>
           <div class="row">
               <div class="col-12 d-flex align-items-end">
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Digite um nome">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Pesquisar</button>
                    </div>
               </div>
           </div>
        </form>
    </div>
</div>

<div class="container">

    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?=  $printMsg ?></p>
    <?php endif; ?>
    
    <div class="row mb-2">
        <div class="col-6 d-flex justify-content-start">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-header">
                    <h6 class="card-title">valor total das taxas cobradas</h6>
                </div>
                <div class="card-body">
                   <h2> <?php  echo round($soma, 2); ?> R$</h2>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-header">
                    <h6 class="card-title">valor total das operações</h6>
                </div>
                <div class="card-body">
                    <h2> <?php  echo round($valorConvertido, 2); ?> R$</h2>
                </div>
            </div>
        </div>
    </div>

    <?php if(count($users) > 0): ?>
        <table class="table table-dark table-striped table-hover" id="user-table">
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
                <?php foreach($users as $user): ?>

                    <tr>
                        <td scope="row" class="th-text"><?= $user['id'] ?></td>
                        <td scope="row" class="th-text"><?= $user['nome_cliente'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $user['moeda_origem'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $user['moeda_destino'] ?></td>
                        <td scope="row" class="th-text text-center"><?= date("d-m-Y", strtotime($user['data_operacao'])) ?></td>
                        <td scope="row" class="th-text text-center"><?= $user['valor_original'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $user['valor_convertido'] ?></td>
                        <td scope="row" class="th-text text-center"><?= $user['taxa_cobrada'] ?></td>
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