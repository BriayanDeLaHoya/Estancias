<!DOCTYPE html>
<html>
<style>
            #miLienzo {
                border: 2px solid black;
                float: left;
                margin: 20px;
            }
            table{
                text-align: center
            }
        </style>
        <link rel="stylesheet" href="../CSS/style.css">
        <script type="text/javascript">
            window.onLoad = carga;

            function carga(){
                var miLienzo = document.getElementById('miLienzo');
                var lienzo = miLienzo.getContext('2d');

                var img = Image();
                img.src = histograma11.png;
                
                img.onLoad = function(){
                    var en = document.getElementById("enero").value;
                    var feb = document.getElementById("febrero").value;
                    var mar = document.getElementById("marzo").value;
                    var abr = document.getElementById("abril").value;
                    var ma = document.getElementById("mayo").value;
                    var ju = document.getElementById("junio").value;
                    var jul = document.getElementById("julio").value;
                    var ago = document.getElementById("agosto").value;
                    var sep = document.getElementById("septiembre").value;
                    var oct = document.getElementById("octubre").value;
                    var nov = document.getElementById("noviembre").value;
                    var dic = document.getElementById("diciembre").value;
                        
                    lienzo.drawImage(img,0,0,400,300);
                    lienzo.beginPath();
                    lienzo.strokeStyle = "#ff00ff";
                    lienzo.moveTo(85,265-en);
                    lienzo.lineTo(107,265-feb);
                    lienzo.lineTo(129,265-mar);
                    lienzo.lineTo(151,265-abr);
                    lienzo.lineTo(173,265-ma);
                    lienzo.lineTo(195,265-ju);
                    lienzo.lineTo(217,265-jul);
                    lienzo.lineTo(239,265-ago);
                    lienzo.lineTo(263,265-sep);
                    lienzo.lineTo(283,265-oct);
                    lienzo.lineTo(305,265-nov);
                    lienzo.lineTo(329,265-dic);
                    lienzo.stroke();
                }
            }
        </script>
    <body>
    <?php
    require("index.html");
    ?>
        <form>
            <label>Tipo</label>
            <input type="text"></input> <br>

            <label>Descripcion</label>
            <input type="text"></input> <br>

            <label>Horario de entrada</label>
            <input type="datetime-local"></input><br>
             
            <label>Horario de salida</label>
            <input type="datetime-local"></input><br>

            <label>Grafica</label>
            <input type="text"></input> <br>

            <input type="submit"></input><br>
        </form>
        <canvas width="400" height="300" id="miLienzo">Lo siento no se puede realizar esta accion intentelo mas tarde</canvas>
        <form>
            <table border="1">
                <tr><th colspan="2"Introduce los datos></th></tr>

                <tr><td>enero</td><td><input type="number" id="enero" step="10" min="0" max="210"></td></tr>
                <tr><td>febrero</td><td><input type="number" id="febrero" step="10" min="0" max="210"></td></tr>
                <tr><td>marzo</td><td><input type="number" id="marzo" step="10" min="0" max="210"></td></tr>
                <tr><td>abril</td><td><input type="number" id="abril" step="10" min="0" max="210"></td></tr>
                <tr><td>mayo</td><td><input type="number" id="mayo" step="10" min="0" max="210"></td></tr>
                <tr><td>junio</td><td><input type="number" id="junio" step="10" min="0" max="210"></td></tr>
                <tr><td>julio</td><td><input type="number" id="julio" step="10" min="0" max="210"></td></tr>
                <tr><td>agosto</td><td><input type="number" id="agosto" step="10" min="0" max="210"></td></tr>
                <tr><td>septiembre</td><td><input type="number" id="septiembre" step="10" min="0" max="210"></td></tr>
                <tr><td>octubre</td><td><input type="number" id="octubre" step="10" min="0" max="210"></td></tr>
                <tr><td>noviembre</td><td><input type="number" id="noviembre" step="10" min="0" max="210"></td></tr>
                <tr><td>diciembre</td><td><input type="number" id="diciembre" step="10" min="0" max="210"></td></tr>

                <tr><td colspan="2"><input type="button" value="Graficar" onclick="carga"></td></tr>
            </table>
    </body>
</html>