<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios php incio</title>
</head>

<body>

    <form>

        <input type="number" placeholder="Hora" id="hora1">

        <input onclick="somar()" type="button" value="VERIFICAR">

    </form>


    <script>
        function saudacoes() {
            let hora = document.querySelector('#hora1').value;
            window.open(`exercicioBack.php?hora1=${hora}`)
        }
    </script>




</body>

</html>