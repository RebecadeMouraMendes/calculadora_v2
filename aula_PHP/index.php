<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
    <div class="row">
        <div class="col">
        <br><h1>Calculadora</h1><br>
        <form name="calculadora" method="POST" action="resposta.php">
        <div class="input-group mb-3">
            <span class="input-group-text" >Primeiro número:</span>
            <input type="text" name="priNum" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> <br> <br>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" >Segundo número:</span>
            <input type="text" name="segNum" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> <br> <br>
        </div>
        <select class="form-select" aria-label="Default select example" name = "calculo" id='calculo' required >
            <option name="soma" value="soma">Soma</option>
            <option name="sub" value="sub">Subtração</option>
            <option name="mul" value="mul">Multiplicação</option>
            <option name="div" value="div">Divisão</option>
        </select>
        <br>
        <button type="submit" class="btn btn-danger">Calcular</button>
        </form>
        </div>
    </div>
    </div>
</body>
</html>