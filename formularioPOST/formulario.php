<!DOCTYPE html>
<html lang="pt=BR">

<head>
    <title>Formulario PHP</title>
</head>

<body>

    <section class="meio">
        <h1>Formulario com PHP</h1>
        <hr>
        <form action="recebe-indo.php" method="POST">
            <label for="">Nome</label>
            <input type="text" name="nome">
            <label for="">E-mail</label>
            <input type="email" name="email">

            <div class="div">
                <fieldset>
                    <legend>Areas de interesse</legend>
                    <input type="checkbox" name="interesse[]" id="" value="informatica">Informatica <br>
                    <input type="checkbox" name="interesse[]" id="" value="esportes">Esportes <br>
                    <input type="checkbox" name="interesse[]" id="" value="moda">Moda <br>
                    <input type="checkbox" name="interesse[]" id="" value="ciencia">Ciência <br>
                    <input type="checkbox" name="interesse[]" id="" value="religiao">Religião <br>
                    <input type="checkbox" name="interesse[]" id="" value="compra">Compra <br>
                </fieldset>
                <br>
                <label for="">Onde conheceu?</label>
                <select name="onde_conheceu" id="">
                    <option value="">selecione</option>
                    <option value="google">Google</option>
                    <option value="televisao">Televisão</option>
                    <option value="redesSociais">Redes Sociais</option>
                </select>
                <br><br>

                <label for="">Mensagem</label>
                <textarea name="mensagem" id="" cols="30" rows="10"></textarea>
                <br><br>

                <fieldset>
                    <legend>Redirecionar Para</legend>
                    <input type="radio" name="redirecionar" id="" value="home"> Home
                    <input type="radio" name="redirecionar" id="" value="contato"> Contato
                </fieldset>

                <hr>

                <button type="submit">Enviar</button>
            </div>
        </form>
    </section>
    <style>
        body {

            background: rgb(17, 86, 102);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 25px;
        }

        h1{
            margin-bottom: -17px;
        }
        .meio {
            margin: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        fieldset {

            padding: 10px;
            margin: 10px;
        }
        .div{
            margin: 10px;
            background: #a3c2c2;
            padding: 10px;
            border-radius: 10px;
        }

        form button{
            background-color: rgb(17, 86, 102);
            font-size: 20px;
            color: #fff;
        }
    </style>
</body>

</html>