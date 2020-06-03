function listarLibroAutor() {

    var vautor = document.getElementById("autor").value;

    if (vautor=="") {
        //alert("here");
        document.getElementById("respuesta1").innerHTML = "<br><p><em>Rellene los campos necesarios...</em></p>";
    } else {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("POST", "../controladores/consultar_libro_autor.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            //alert("llegue "+this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("respuesta1").innerHTML = this.responseText;
            }
        };

        xmlhttp.send("autor=" + vautor);
    }
    return false;

}

function listarLibroCapitulo() {

    var vcapitulo = document.getElementById("capitulo").value;

    if (vautor=="") {
        //alert("here");
        document.getElementById("respuesta").innerHTML = "<br><p><em>Rellene los campos necesarios...</em></p>";
    } else {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("POST", "../controladores/consultar_libro_capitulo.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xmlhttp.onreadystatechange = function() {
            //alert("llegue "+this.status);
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("informacion").innerHTML = this.responseText;
            }
        };

        xmlhttp.send("capitulo=" + vautor);
    }
    return false;

}