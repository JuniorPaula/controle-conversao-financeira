<?php

    include_once("templates/header.php");

?>
    

<h2 class="text-uppercase">Cadastro</h2>

<div class="container">
    <form action="<?php $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group mb-3">
            <label for="name">Nome do Cliente:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite o nome do cliente" require>
        </div>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="form-group col-3 mb-3">
                <label for="moeda_origem">Moeda de Origem:</label>
                <select name="convertFrom" id="optionFrom" class="form-select">
                    <option value="#">Selecione</option>
                    <option value="USD">Dólar Americano</option>
                    <option value="CAD">Dólar Canadense</option>
                    <option value="EUR">Euro</option>
                    <option value="GPB">Libras</option>
                    <option value="JPY">Ienes</option>
                </select>
            </div>
            <div class="form-group col-3 mb-3">
                <label for="moeda_destino">Moeda de Destino:</label>
                <select name="convertTo" id="optionTo" class="form-select">
                    <option value="BRL">Real</option>
                </select>
            </div>
            <div class="form-group col-3 mb-3">
                <label for="data">Data da Operação</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            
        </div>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="form-group col-3 mb-3">
                <label for="valor_original">Valor Original:</label>
                <input type="text" class="form-control" name="valor_original" id="valor_original">
            </div>
            <div class="form-group col-3">
                <label for="valor_convertido">Valor Convertido:</label>
                <input type="text" class="form-control" name="valor_convertido" id="valor_convertido">
            </div>
            <div class="form-group col-3">
                <label for="taxa_cobrada">Taxa Cobrada:</label>
                <input type="text" class="form-control" name="taxa_cobrada" id="taxa_cobrada">
            </div>
            <div class="col-12">
                <button type="button" id="converter" class="btn btn-primary" onclick="convert()">Converter</button>
                <button type="button" id="limpar" class="btn btn-warning">Limpar</button>
            </div>
        </div>
        <br />
        <hr />
        <div class="form-group">
            <button type="submit" id="cadastrar" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>


<?php

    include_once("templates/footer.php");

?>