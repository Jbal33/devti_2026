<?php
// Percentual fixo do ICMS.
const ICMS = 0.25;

// Define o preço do kWh conforme o consumo.
function calcular_tarifa_base($kwh) {
    if ($kwh <= 100) {
        return 0.40;
    } elseif ($kwh <= 300) {
        return 0.55;
    }

    return 0.75;
}

// Define o acréscimo por kWh de cada bandeira.
function calcular_acrescimo_bandeira($bandeira) {
    $acrescimos = [
        'verde' => 0.00,
        'amarela' => 0.02,
        'vermelhapat1' => 0.04,
        'vermelhapat2' => 0.06,
    ];

    return $acrescimos[$bandeira] ?? 0.00;
}

$nome = trim($_POST['nome'] ?? '');
$consumo = filter_input(INPUT_POST, 'consumo', FILTER_VALIDATE_FLOAT);
$bandeira = $_POST['bandeiratarifária'] ?? 'verde';

$nomesBandeiras = [
    'verde' => 'Verde',
    'amarela' => 'Amarela',
    'vermelhapat1' => 'Vermelha patamar 1',
    'vermelhapat2' => 'Vermelha patamar 2',
];

// Impede o cálculo quando os dados recebidos são inválidos.
if ($nome === '' || $consumo === false || $consumo < 0 || !array_key_exists($bandeira, $nomesBandeiras)) {
    http_response_code(400);
    exit('Informe um nome, um consumo válido e uma bandeira tarifária válida.');
}

$custoBase = $consumo * calcular_tarifa_base($consumo);
$acrescimoBandeira = $consumo * calcular_acrescimo_bandeira($bandeira);
$subtotal = $custoBase + $acrescimoBandeira;
$valorTotal = $subtotal * (1 + ICMS);

// Protege o nome antes de exibi-lo no HTML.
$nomeSeguro = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conta de Luz</title>
    <style>
        body {
            background: #f4f7f5;
            color: #1f2d25;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 48px 20px;
        }
        main {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(31, 45, 37, 0.12);
            margin: auto;
            max-width: 620px;
            padding: 32px;
        }
        h1 { margin-top: 0; }
        .dados { line-height: 1.8;
        }
        .valor { font-size: 1.15rem; font-weight: bold; }
        .total { color: #167447; font-size: 1.45rem; }
        .alerta {
            background: #fff3cd;
            border-left: 5px solid #e0a800;
            margin-top: 24px;
            padding: 16px;
        }
        a { color: #167447; display: inline-block; margin-top: 24px; }
    </style>
</head>
<body>
    <main>
        <h1>Resultado da Conta de Luz</h1>
        <div class="dados">
            <p><strong>Cliente:</strong> <?= $nomeSeguro ?></p>
            <p><strong>Consumo:</strong> <?= number_format($consumo, 2, ',', '.') ?> kWh</p>
            <p><strong>Bandeira:</strong> <?= $nomesBandeiras[$bandeira] ?></p>
            <p class="valor"><strong>Valor parcial (sem imposto):</strong> R$ <?= number_format($subtotal, 2, ',', '.') ?></p>
            <p class="valor total"><strong>Valor final com ICMS:</strong> R$ <?= number_format($valorTotal, 2, ',', '.') ?></p>
        </div>

        <?php if ($consumo > 300): ?>
            <div class="alerta">
                Atenção <?= $nomeSeguro ?>: Seu consumo está elevado! Considere adotar hábitos de economia.
            </div>
        <?php endif; ?>

        <a href="index.php">Voltar ao simulador</a>
    </main>
</body>
</html>