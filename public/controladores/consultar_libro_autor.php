<?php
    include '../../config/conexionBD.php';
    $autor = isset($_POST["autor"]) ? trim($_POST["autor"]) : null;

    $sql = "SELECT aut_cod FROM autor WHERE aut_nombre = '$autor'";
    $resul = $conn->query($sql);
    $row = $resul->fetch_assoc();
    $cod_auntor = $row['aut_cod'];
    $sql2 = "SELECT * FROM capitulo WHERE aut_cod = '$cod_auntor'";
    $resul = $conn->query($sql2);

    if($resul->num_rows >0 ){

        
        $resul2 = $conn->query($sql2);

        echo "<table style='width:100%'>
            <tr>
                <th>Libro</th>
                <th>ISBN</th>
                <th>Paginas</th>
                <th>Numero</th>
                <th>Titulo</th>
            </tr>";
            

        while ($row = $resul->fetch_assoc()){
            $row = $resul->fetch_assoc();
            echo "<tr>";
            $sql3 = "SELECT * FROM libro WHERE lib_codigo = ".$row['lib_cod'];
            $resul2 = $conn->query($sql3);
            if($resul2->num_rows >0 ){
                $row1 = $resul2->fetch_assoc();
                echo "<td>" .$row1['lib_nombre']. "</td>";
                echo "<td>" .$row1['lib_isbn']. "</td>";
                echo "<td>" .$row1['lib_num_paginas']. "</td>";
            }
            
            echo "<td>" .$row['cap_numero']. "</td>";
            echo "<td>" .$row['cap_titulo']. "</td>";
            echo "</tr>";
        }
        

    }else {
        echo "<tr>";
        echo " <td colspan='7'> <em><strong>No hay Ningun Autor con ese codigo</strong></em></td>";
        echo "</tr>";
    }

    //$row = $resul->fetch_assoc();
    //$lib_codigo = $row['lib_cod'];
    //$sql3 = "SELECT * FROM libro WHERE lib_codigo = '$lib_codigo'";
    //$resul = $conn->query($sql3);

    if($resul->num_rows >0 ){

        
        $resul2 = $conn->query($sql2);

        echo "<table style='width:100%'>
            <tr>
                <th>Titulo</th>
                <th>ISBN</th>
                <th>Paginas</th>
                <th>Paginas</th>
            </tr>";
            

        while ($row = $resul->fetch_assoc()){
            $row = $resul->fetch_assoc();
            echo "<tr>";
            echo "<td>" .$row['aut_nombre']. "</td>";
            echo "<td>" .$row['aut_nacionalidad']. "</td>";
            echo "</tr>";
        }
        

    }else {
        echo "<tr>";
        echo " <td colspan='7'> <em><strong>No hay Ningun Autor con ese codigo</strong></em></td>";
        echo "</tr>";
    }
    echo "</table>";
    $conn->close();
    


?>