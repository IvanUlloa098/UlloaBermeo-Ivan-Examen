<!DOCTYPE html> <html> <head> <meta charset="UTF-8"> <title>Crear Nuevo Usuario</title> <style type="text/css" rel="stylesheet"> .error{ color: red; } </style> </head> <body>
<?php 
    include '../../config/conexionBD.php';   

    $nombre = isset($_POST["nombres"]) ? trim($_POST["nombres"]) : null; 
    $isbn = isset($_POST["isbn"]) ? mb_strtoupper(trim($_POST["isbn"]), 'UTF-8') : null; 
    $paginas = isset($_POST["numero"]) ? mb_strtoupper(trim($_POST["numero"]), 'UTF-8') : null; 

    $sql = "INSERT INTO libro (lib_nombre, lib_isbn, lib_num_paginas) 
            VALUES ('$nombre', '$isbn', '$paginas')";

    if ($conn->query($sql) === TRUE) { 
        echo "<p><em>Libro creado correctamente.</em></p>";
        $sql2 = "SELECT lib_codigo FROM libro WHERE lib_nombre= '$nombre' AND lib_isbn='$isbn'";
        $res=$conn->query($sql2);
        $row=$res->fetch_assoc();
        header("Location: ../vista/crear_capitulo.php?codigo=" . $row['lib_codigo']); 

    } else {
        if($conn->errno == 1062){ 
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>"; 
        }else{ 
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>"; 
        } 
    }

    //cerrar la base de datos 
    $conn->close(); 
?> 
</body> </html>
