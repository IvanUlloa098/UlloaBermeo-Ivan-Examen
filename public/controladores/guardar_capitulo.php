<?php 
    include '../../config/conexionBD.php';   

    $libro = isset($_POST["codigo"]) ? trim($_POST["codigo"]) : null; 
    $autor = isset($_POST["autor"]) ? trim($_POST["autor"]) : null;
    $titulo = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null; 
    $capitulo = isset($_POST["numero"]) ? mb_strtoupper(trim($_POST["numero"]), 'UTF-8') : null; 

    $sql = "INSERT INTO capitulo (lib_cod,	cap_numero,	cap_titulo,	aut_cod)  
            VALUES ('$libro', '$capitulo', '$titulo',  '$autor')";

    if ($conn->query($sql) === TRUE) { 
        echo "<p><em>Capitulo $capitulo creado correctamente.</em></p>";
        //header("Location: ../vista/crear_capitulo.php?codigo=" . $row['lib_codigo']); 

    } else {
        if($conn->errno == 1062){ 
            echo "<p class='error'>No se pudo crear el capitulo </p>"; 
        }else{ 
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
        } 
    }

    //cerrar la base de datos 
    $conn->close(); 
?> 
