<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="formulario.css" rel="stylesheet" />
    <script src="../controladores/crear_capitulo.js" type="text/javascript"></script>
    <!--http://localhost/SistemaDeGestion/public/vista/crear_usuario.html-->
    <style type="text/css">
        form {
            font-size: 1.5em;
        }
        
         ::placeholder {
            font-size: large;
        }
        
        .error {
            color: red;
            font-size: 12px;
        }

        table, th, td {
                border: 1px solid black;
            }

        table {
            background-color: #E8023D;
        }

        th, td {
            background-color: #E851B6;
        }

        #informacion {
            width: 60%;
            margin: 3%
        }

    </style>
</head>

<body style="margin: 5% 0 0 25%; background-color: lightsalmon;">

    <h1>Crear capitulo</h1>

    <?php
        $codigo = $_GET['codigo'];
    ?>

    <form id="formulario01" onsubmit="return crearCapitulo()">
        <fieldset>

            <label for="numero">Numero de capitulo :</label>
            <input type="number" id="numero" name="numero" value="" placeholder="Numero ..." />
            <span id="mensajeNombres" class="error"></span>
            <br>

            <label for="titulo">Titulo :</label>
            <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese el titulo ..." />
            <span id="mensajeNombres" class="error"></span>
            <br>

            <label for="autor">Codigo Autor :</label>
            <input type="number" id="autor" name="autor" value="" placeholder="Codigo de Autor ..." />
            <span id="mensajeNombres" class="error"></span>
            <br>

            <label hidden for="codigo">Cedula :</label>
            <input hidden type="text" id="codigo" name="codigo" value="<?php echo $codigo;?>" />
            <span id="mensajeCedula" class="error"></span>
            <br>

        </fieldset>

        <div>
            <input type="button" id="crear" name="cear" value="Aceptar" onclick="crearCapitulo()">
            <input type="button" id="buscar" name="buscar" value="Buscar Autor" onclick="listarAutor()">
        </div>

        <div id="respuesta"></div>
        <div id="informacion"></div>

    </form>

</body>

</html>