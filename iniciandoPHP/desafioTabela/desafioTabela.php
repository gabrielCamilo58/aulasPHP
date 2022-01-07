<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gerador de tabela, informe:</h1>
    <form action="#" method="post" class="contain">
        <label for="">Quantidades de Linhas</label>
        <input type="number" name="linhas">
        <label for="">Quantidade de Colunas</label>
        <input type="number" name="colunas" >
        <button>Gerar Tabela</button>
    </form>

    <table class="contain">
        <?php

        $qtdeLinhas = intval($_POST['linhas'] ?? 0);
        $qtdeColunas = intval($_POST['colunas'] ?? 0);
        $num = 1;

        for ($i = 0; $i < $qtdeLinhas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $qtdeColunas; $j++) {
                echo "<td>{$num}</td>";
                $num++;
            }
            echo "</tr>";
        }
        ?>
    </table>

    <style>
        body {

            background: rgb(17, 86, 102);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 25px;
        }

        .contain {
            margin: 10px;
            background: #fff;
            padding: 10px;
            border-radius: 10px;
        }

        h1 {
            padding: 10px;
            background: #fff;
            border-radius: 10px;
            margin: -5px 10px;
            font-size: 25px;

        }

        label {
            font-size: 20px;
        }

        button {
            padding: 10px;
            font-size: 15px;
            background-color: #aff;
            border-radius: 10px;
        }

        table {
            padding: 20px;
            border-collapse: collapse;
            border: solid 3px;
        }

        td, td{
            border: 1px solid black;
            padding: 7px;
        }
    </style>

</body>

</html>