<?php
    function guardar(){
        $credenciales["http"]["method"] = "POST";
        $credenciales["http"]["header"] = "Content-type: application/json";
        $data = [
        "nombre"=> $_POST['nombre'],
        "apellido"=> $_POST['apellido'],
        "direccion"=> $_POST['direccion'],
        "edad"=> $_POST['edad'],
        "email"=> $_POST['email'],
        "horario"=> $_POST['horaEntrada'],
        "team"=> $_POST['team'],
        "trainer"=> $_POST['trainer'],
        "cc"=> $_POST['cedula']
        ];
        $data = json_encode($data);
        $credenciales["http"]["content"] = $data;
        $config = stream_context_create($credenciales);
        $_DATA = file_get_contents("https://6480e390f061e6ec4d49febe.mockapi.io/informacion", false, $config);
    };
    if(isset($_POST["registrar"])){
        guardar();
        header("location: http://localhost/SkylAb-112/practicaCrudPHP/");
    }else{
        echo "no se ha guardado nada";
    };
    var_dump($_POST["registrar"]);
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
        <form method="POST" action="">
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
                            <td><button type="submit" name="registrar">chulo</button></td>
                            <td><button type="submit" name="equis"><i class="fa-solid fa-x"></i></button></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="lapiz"><i class="fa-sharp fa-solid fa-pen"></i></button></td>
                            <td><button type="submit" name="lupa"><i class="fa-solid fa-magnifying-glass"></i></button><br></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="cedula" placeholder="Cedula"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
        <div class="caja3">
            <table>
                <tr>
                    <td><h4><p>Nombre</p></h4></td>
                    <td><h4><p>apellido</p></h4></td>
                    <td><h4><p>direccion</p></h4></td>
                    <td><h4><p>edad</p></h4></td>
                    <td><h4><p>email</p></h4></td>
                    <td><h4><p>horario de entrada</p></h4></td>
                    <td><h4><p>team</p></h4></td>
                    <td><h4><p>trainer</p></h4></td>
                    <td><h4><p>flecha</p></h4></td>
                </tr>
                <?php
                    $credenciales["http"]["method"] = "GET";
                    $credenciales["http"]["header"] = "Content-type: application/json";
                    $config = stream_context_create($credenciales);
                    $_DATA = file_get_contents("https://6480e390f061e6ec4d49febe.mockapi.io/informacion", false, $config);
                    $res = json_decode($_DATA,true);
                    foreach($res as $clave=>$valor){
                        echo 
                        "<tr>".
                        "<td><h4><p>".$res[$clave]['nombre']."</p></h4></td>".
                        "<td><h4><p>".$res[$clave]['apellido']."</p></h4></td>".
                        "<td><h4><p>".$res[$clave]['direccion']."</p></h4></td>".
                        "<td><h4><p>".$res[$clave]['edad']."</p></h4></td>".
                        "<td><h4><p>".$res[$clave]['email']."</p></h4></td>".
                        "<td><h4><p>".$res[$clave]['horario']."</p></h4></td>".
                        "<td><h4><p>".$res[$clave]['team']."</p></h4></td>".
                        "<td><h4><p>".$res[$clave]['trainer']."</p></h4></td>".
                        "<td><button>▲</button></td>".
                        "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>