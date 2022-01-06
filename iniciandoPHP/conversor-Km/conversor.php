<html lang="pt_BR">

<head>
    <title>Conversor de metros</title>
</head>

<body>
    
    <section class="meio">
        <h1 class="meio">Conversor</h1>
        <form action="#" method="POST">
            <input type="text" name="valor">
            <select name="conversao" id="">
                <option value="km-milha">Converter de Km para milha</option>
                <option value="milha-km">Converter de milha para Km</option>
                <option value="metro-km">Converter de metro para Km</option>
                <option value="km-metro">converter de km para metro</option>
            </select>
            <button>Calcular</button>
        </form>
    </section>

    <div class="meio">
        <?php
        $valor = $_POST['valor'] ?? null;
        $converte = $_POST['conversao'] ?? null;
        const KM_MILHA = 0.621371;
        const METRO_KM = 1000;

        if ($valor != null) {

            switch ($converte) {
                case 'km-milha':
                    $distancia = $valor * KM_MILHA;
                    $mensagem = "{$valor} km = {$distancia} milhas";
                    echo $mensagem;
                    break;
                case 'milha-km':
                    $distancia = $valor / KM_MILHA;
                    $mensagem = "{$valor} Milhas = {$distancia} km";
                    echo $mensagem;
                    break;
                case 'metro-km':
                    $distancia = $valor / METRO_KM;
                    $mensagem = "{$valor} metro = {$distancia} km";
                    echo $mensagem;
                    break;
                case 'km-metro':
                    $distancia = $valor * METRO_KM;
                    $mensagem = "{$valor} km = {$distancia} metro";
                    echo $mensagem;
                    break;
            }
        } else echo 'informe um valor';
        ?></div>
    <style>
        body {

            background: rgb(17, 86, 102);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 25px;
        }
        .meio {
            margin: 10px;
            background: #fff;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</body>

</html>