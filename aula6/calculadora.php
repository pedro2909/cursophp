<!doctype html>
<html>

    <head>
        <title>Calculadora</title>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <body>
        <h1>Calculadora</h1>
        <form action="resultado.php">
            <p>
                <label>Nome:</label>
                <input type="text" name="name" />
            </p>
            <p>
                <label>Sobrenome:</label>
                <input type="text" name="last_name" />
            </p>
            <p>
                <label>Número 1:</label>
                <input type="number" name="n1" />
            </p>
            <p>
                <label>Número 2:</label>
                <input type="number" name="n2" />
            </p>
            <p>
                <label>Operação:</label>
                <input type="text" name="op" />
            </p>

    
            <button type="button" class="btn btn-primary">Calcular</button>
            
        </form>
    </body>
</html>
