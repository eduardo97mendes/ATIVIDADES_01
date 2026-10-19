
<?php
/*
========================================================
 ATIVIDADE PRÁTICA — SISTEMA DE PEDIDOS COM PHP
========================================================

OBJETIVO:
Fazer o PHP verificar os dados de um pedido
e calcular o valor total da compra.

O QUE VOCÊ PRECISA FAZER?

[1] Verificar o TELEFONE
[2] Verificar o ENDEREÇO
[3] Verificar o PRODUTO
[4] Verificar a QUANTIDADE
[5] Calcular o VALOR TOTAL

INSTRUÇÕES:
- Procure os espaços marcados com PREENCHER.
- Leia o exemplo pronto antes de completar.
- Troque os ________ pelos códigos corretos.
- Remova // das linhas de exemplo ao completá-las.
- Não altere as funções marcadas como PRONTAS.

========================================================
*/


// ======================================================
// FUNÇÃO 1 — LISTA DE PRODUTOS (PRONTA)
// NÃO PRECISA ALTERAR
// ======================================================

function lista_produtos()
{
    return [
        'pizza-margherita' => [
            'nome' => 'Pizza Margherita',
            'preco' => 39.90
        ],

        'hamburguer-classico' => [
            'nome' => 'Hambúrguer Clássico',
            'preco' => 32.50
        ],

        'combo-sushi' => [
            'nome' => 'Combo Sushi',
            'preco' => 48.00
        ],

        'acai-bowl' => [
            'nome' => 'Açaí Bowl',
            'preco' => 24.90
        ],

        'brownie-sorvete' => [
            'nome' => 'Brownie com Sorvete',
            'preco' => 18.00
        ],
    ];
}


// ======================================================
// FUNÇÃO 2 — RECEBER DADOS DO FORMULÁRIO (PRONTA)
// NÃO PRECISA ALTERAR
// ======================================================

function ler_pedido()
{
    return [
        'nome' => isset($_POST['nome'])
            ? trim($_POST['nome']) : '',

        'telefone' => isset($_POST['telefone'])
            ? trim($_POST['telefone']) : '',

        'endereco' => isset($_POST['endereco'])
            ? trim($_POST['endereco']) : '',

        'produto' => isset($_POST['produto'])
            ? trim($_POST['produto']) : '',

        'quantidade' => isset($_POST['quantidade'])
            ? $_POST['quantidade'] : '',

        'observacoes' => isset($_POST['observacoes'])
            ? trim($_POST['observacoes']) : '',
    ];
}


// ======================================================
// FUNÇÃO 3 — VALIDAR PEDIDO
// AQUI COMEÇA A ATIVIDADE DO ALUNO
// ======================================================

function validar_pedido($dados)
{
    // Lista onde guardaremos os erros
    $erros = [];

    // Busca os produtos cadastrados
    $produtos = lista_produtos();


    // ==================================================
    // EXEMPLO PRONTO — VERIFICAR O NOME
    // ==================================================

    // empty() verifica se o campo está vazio.
    // if significa SE.
    // $erros[] adiciona uma mensagem de erro.

    if (empty($dados['nome'])) {
        $erros[] = 'Digite o seu nome.';
    }


    // ==================================================
    // PREENCHER 1 — VERIFICAR O TELEFONE
    // ==================================================

    /*
    OBJETIVO:
    Verificar se o cliente digitou o telefone.

    DICA:
    Copie a lógica utilizada no NOME.

    Substitua:
    ________ pelo nome do campo.
    ________ pela mensagem de erro.

    REMOVA // das linhas abaixo.
    */

    // if (empty($dados['________'])) {
    //     $erros[] = '________';
    // }


    // ==================================================
    // PREENCHER 2 — VERIFICAR O ENDEREÇO
    // ==================================================

    /*
    OBJETIVO:
    Verificar se o endereço foi preenchido.

    DICA:
    Utilize novamente empty() e if.

    Pergunta:
    Qual campo devemos verificar agora?

    REMOVA // das linhas abaixo.
    */

    // if (empty($dados['________'])) {
    //     $erros[] = '________';
    // }


    // ==================================================
    // PREENCHER 3 — VERIFICAR O PRODUTO
    // ==================================================

    /*
    OBJETIVO:
    Verificar DUAS situações:

    1. O cliente não escolheu nenhum produto.
    2. O produto escolhido não existe na lista.

    COMANDOS:

    empty() = verifica se está vazio.

    isset() = verifica se existe.

    !isset() = verifica se NÃO existe.

    elseif = SENÃO, SE.

    DICA:
    O nome do campo é 'produto'.

    REMOVA // das linhas abaixo.
    */

    // if (empty($dados['________'])) {
    //     $erros[] = '________';

    // } elseif (!isset($produtos[$dados['________']])) {
    //     $erros[] = '________';
    // }


    // ==================================================
    // PREENCHER 4 — VERIFICAR A QUANTIDADE
    // ==================================================

    /*
    OBJETIVO:
    O cliente precisa informar uma quantidade válida.

    REGRAS:
    - Precisa ser um número inteiro.
    - Não pode ser zero.
    - Não pode ser negativo.

    EXEMPLOS:
    1  = válido
    3  = válido
    0  = inválido
    -2 = inválido
    1.5 = inválido

    A linha abaixo já verifica se é inteiro.
    */

    $qtd = filter_var(
        $dados['quantidade'],
        FILTER_VALIDATE_INT
    );

    /*
    AGORA COMPLETE:

    $qtd === false  = número inválido

    $qtd < 1         = menor que 1

    ||               = OU

    Falta adicionar a mensagem em $erros.

    REMOVA // das linhas abaixo.
    */

    // if ($qtd === false || $qtd < 1) {
    //     $erros[] = '________';
    // }


    // ==================================================
    // FIM DAS VALIDAÇÕES
    // NÃO ALTERAR
    // ==================================================

    return $erros;
}


// ======================================================
// FUNÇÃO 4 — CALCULAR O TOTAL
// PREENCHER 5
// ======================================================

function calcular_total($produto, $quantidade)
{
    // Busca os produtos
    $produtos = lista_produtos();

    /*
    OBJETIVO:
    Calcular o valor total de um pedido.

    FÓRMULA:

    TOTAL = PREÇO × QUANTIDADE

    EXEMPLO:
    Pizza: R$ 39,90
    Quantidade: 2

    Total: R$ 79,80

    COMANDOS:

    isset() = verifica se o produto existe.

    $produtos[$produto]['preco']
    = consulta o preço do produto escolhido.

    return = devolve o resultado.

    ATIVIDADE:

    1. Guardar o preço em $preco.
    2. Multiplicar o preço pela quantidade.
    3. Retornar o resultado.

    */

    if (isset($produtos[$produto])) {

        // PASSO A: Guardar o preço do produto
        // $preco = ________;

        // PASSO B: Multiplicar e devolver o resultado
        // return ________;

    }

    /*
    Se o produto não existir, retorna zero.

    ATENÇÃO:
    Enquanto você não completar os passos
    acima, o pedido mostrará R$ 0,00.
    */

    return 0;
}


// ======================================================
// FUNÇÃO 5 — MONTAR O RESUMO (PRONTA)
// NÃO PRECISA ALTERAR
// ======================================================

function montar_resumo($dados)
{
    $produtos = lista_produtos();

    $codigo = $dados['produto'];

    $quantidade = (int) $dados['quantidade'];

    $preco = isset($produtos[$codigo])
        ? $produtos[$codigo]['preco']
        : 0;

    return [
        'nome' => $dados['nome'],

        'telefone' => $dados['telefone'],

        'endereco' => $dados['endereco'],

        'produto_nome' => isset($produtos[$codigo])
            ? $produtos[$codigo]['nome']
            : $codigo,

        'quantidade' => $quantidade,

        'preco_unitario' => $preco,

        'total' => calcular_total($codigo, $quantidade),

        'observacoes' => $dados['observacoes'],
    ];
}
