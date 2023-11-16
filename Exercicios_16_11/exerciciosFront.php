<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="number" placeholder="Numero 1" id="num1">
        <input type="number" placeholder="Numero 2" id="num2">

        <input onclick="somar()" type="button" value="Calcular">
    </form>

    
    <script>
        function somar() {
            let num1 =document.querySelector('#num1').value;
            let num2 =document.querySelector('#num2').value;

            window.open(`exercicioBack.php?numero1=${num1}&&numero2=${num2}`)
        }
    </script>

</body>

</html>