<?php
include ("registrar_Cliente.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/Cliente.css">
</head>

<body>
    <div id="crearCliente" class="contenedor">
        <h1>Crear Cliente</h1>
        
        <form id="formulario_crearCliente" class="form" action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Número de documento</label>
                    <input type="text" name="Documento" class="form-control" placeholder="Número de documento" required >
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" placeholder="Nombre" pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Apellido</label>
                    <input type="text" name="Apellido" class="form-control" placeholder="Apellido" pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="Correo" placeholder="Correo" required>
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="Direccion" placeholder="Dirección" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Teléfono</label>
                    <input type="text"  class="form-control" name="Telefono" placeholder="Ingresa celular o fijo" title="Es necesario ingresar 7 o 10 digitos" pattern="[0-9]{7,10}" required>
                </div>
                <div name="tipoCliente" class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Tipo de cliente</label>
                    <select required class="form-select" name="TipoCliente" id="autoSizingSelect" required>
                        <option disabled selected value="">Seleccione</option>
                        <option value="Mayorista">Mayorista</option> 
                        <option value="De tal">De tal</option>
                    </select>
                    
                </div>
                <div name="estadoCliente" class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Estado</label>
                    <select required class="form-select" name="EstadoCliente" id="autoSizingSelect">>
                        <option disabled selected value="">Seleccione</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>    
            <br>
            <button onclick="location.href='/choqmol/index.php'" type="submit" name="Regresar" class="btn btn-primary">Regresar</button>
            <button type="submit" name="Crear_Cliente" class="btn btn-primary">Crear Cliente</button>
        </form>
    </div>
    
</body>

    

</html>


