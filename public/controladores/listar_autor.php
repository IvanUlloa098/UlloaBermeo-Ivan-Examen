<?php
    include '../../config/conexionBD.php';
    $autor = isset($_POST["autor"]) ? trim($_POST["autor"]) : null;

    $sql = "SELECT * FROM autor WHERE aut_cod = '$autor'";
    $resul = $conn->query($sql);
    if($resul->num_rows >0 ){
        echo "<table style='width:100%'>
            <tr>
                <th>Nombre</th>
                <th>Nacionalidad</th>
            </tr>";
            

        while ($row = $resul->fetch_assoc()){
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