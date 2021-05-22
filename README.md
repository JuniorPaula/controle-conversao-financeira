# controle-conversao-financeira
Esse sistema foi desenvolvido conforme o desafio proposto pela empresa Havan,
para a construção de um sistema de controle de operações com câmbio monetário.
# As Exigências do desafio são:
Criar um sistema que permita o controle de operações. O cadastro deverá conter os seguintes dados:

- nome do cliente
- moeda de origem
- moeda de destino
- data da operação
- valor original
- valor convertido
- taxa cobrada
- O sistema fornecerá os seguintes relatórios:
- lista de operações
- valor total das operações
- valor total das taxas cobradas
- Os relatórios poderão ser filtrados por intervalo de tempo e cliente.

# Descrição Geral do Sistema
O sistema consiste em uma aplicação Web capaz de receber como parâmetros:

1 - O valor desejado para conversão
2 - A moeda desejada para conversão
3 - Registro no banco de dados
4 - Filtro de busca por nome e data

Além de receber como parâmentros o 'Nome do cliente', 'data da operação',
O sistema fornecerá o valor da moeda convertida para 'Real', e taxa de porcentagem de '10%', estipulada no desafio.
Após a conversão o usuário pode cadastrar os dados no sistema.
O sistema fornece uma lista de relatórios com todas as operações realizadas dando ao usuário um feedback visual.

# Descrição técnicas do sistema
#linguagem ultilizadas:
- PHP 8.0.1
- JavaScript;

#bibliotecas:
- Bootstrap 5.0

#banco de dados:
- Mysql

# Análise
Essa Aplicação foi desenvolvida no modelo cliente servidor, sendo necessário haver um servidor rodando php com a versão mínima descrita nessa documentação.

## Instalação ##
Faça o gitclone desse repositório

## Manual do Usuário ##
Baixe os arquivos e salve no diretório público do seu servidor local.
Faça a Conexão com o banco de dados, o arquivo de conexão esta no diretório config/conection.php
Para ultilizar a aplicação basta abrir o navegador de preferencia e acessa localhost
## Na tela de  CADASTRO é possível:
- informar o nome do cliente;
- infromar a moeda que o cliente deseja converter para real;
- informar a data que esta sendo realizada a operação;
- obter o valor em porcentagem da taxa cobrada pela conversão

## Na tela de RELATÓRIOS é possível:
- obter a listagem de todos os registros das operações ja realizadas;
- obter o valor total de todas as operações realizadas;
- obter o valor total de todas as taxas de conversão ja realizadas;
- pesquisar por nome de cliente cadastrados no sistema;
- pesquisar entre as datas das operações realizadas

