<?php 
    if($_POST){
        $data =json_encode($_POST);
        file_put_contents("data.json", $data);
    }

    if(is_file("data.json")){
        $dato = file_get_contents("data.json");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>2do parcial</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1 class="text-center">LOS COLORINES</h1>
            <table class="table">
                <tbody>
                    <tr>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                    </tr>
                <tbody>
                    <tr>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                    </tr>
                <tbody>
                    <tr>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                    </tr>
                <tbody>
                    <tr>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                    </tr>
                <tbody>
                    <tr>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                        <td><input class="form-control" name="color[]"></td>
                    </tr>
                </tbody>
            </table>
            <div>Rojos: <input readonly type="text"  id="crojos" name="crojos"></div>
            <div>Verdes: <input readonly type="text" id="cverdes" name="cverdes"></div>
            <div>Azules: <input readonly type="text" id="cazules" name="cazules"></div>
            <div>
                <br>
                <br>
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
    <script>

        window.onload = function () {

            datos = <?= $dato ?>;

            inputs = document.getElementsByName('color[]');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].setAttribute('onkeyup', 'calculate()');
                try {
                    inputs[i].value = datos.color[i];
                } catch (e) {
                    console.log(e);
                }
                
                try {
                      document.getElementById('crojos').value = datos.crojos;
                      document.getElementById('cazules').value = datos.cazules;
                      document.getElementById('cverdes').value = datos.cverdes;
                        calculate();
                } catch (e) {
                    
                }
            }
        }

        function calculate(){
            inputs = document.getElementsByName('color[]');
            azul = 0;
            verde = 0;
            rojo = 0;

            for (var i = 0; i < inputs.length; i++) {
                valor = inputs[i].value.toLowerCase();
                switch(valor) {
                    case 'rojo':
                        rojo++; 
                        inputs[i].setAttribute('class', 'form-control bg-danger');
                    break;
                    case 'azul':
                        azul++; 
                        inputs[i].setAttribute('class', 'form-control bg-primary');
                        break;
                    case 'verde':
                        verde++; 
                        inputs[i].setAttribute('class', 'form-control bg-success');
                    break;
                    default:
                        inputs[i].setAttribute('class', 'form-control');
                    break;
                }
            }
            document.getElementById('cazules').value = azul;
            document.getElementById('crojos').value = rojo;
            document.getElementById('cverdes').value = verde;

        }
    </script>
</body>
</html>