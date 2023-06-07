<?php
    // $credenciales["http"]["method"] = "POST";
    // $credenciales["http"]["header"] = "Content-type: application/json";
    // $data = [
    //     "cc"=>"123",
    //     "nombre"=> "Miguel",
    //     "apelldio"=> "Castro",
    //     "edad"=> 23
    // ];
    // $data = json_encode($data);
    // $credenciales["http"]["content"] = $data;
    // $config = stream_context_create($credenciales);

    // $_DATA = file_get_contents("https://6480e3fef061e6ec4d4a0194.mockapi.io/informacion", false, $config);
    // print_r($_DATA);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <div class="caja1">
            <div class="caja01">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apellido">
                <input type="text" name="direccion" placeholder="Direccion">
            </div>
            <div class="caja02">
                <div class="logo">

                </div>
                <input type="text" name="edad" placeholder="Edad">
                <input type="text" name="email" placeholder="Email">
            </div>
        </div>
        <div class="caja2">
            <div class="caja01">
                <input type="text" name="horaEntrada" placeholder="Hora de entrada">
                <input type="text" name="team" placeholder="Team">
                <input type="text" name="trainer" placeholder="Trainer">
            </div>
            <div class="caja02">
                <table>
                    <tr>
                        <td><button type="submit" value="chulo"><i class="fa-solid fa-check"></i></button></td>
                        <td><button type="submit" value="equis"><i class="fa-solid fa-x"></i></button></td>
                    </tr>
                    <tr>
                        <td><button type="submit" value="lapiz"><i class="fa-sharp fa-solid fa-pen"></i></button></td>
                        <td><button type="submit" value="buscar"><i class="fa-solid fa-magnifying-glass"></i></button><br></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="cedula" placeholder="Cedula"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="caja3">

        </div>
    </div>
</body>
</html>