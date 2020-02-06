<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="tex/html; charset=utf-8" />
        <title>Ejercicio Final php</title>
        <script>
        
        function proceso(txttaller1,txttaller2,txtcuestionario1,txtcuestionario2,txtproyectofinal,boton){
            switch(boton){
                case "Calcular":
                var parametros ={
                    "txttaller1" : txttaller1,
                    "txttaller2" : txttaller2,
                    "txtcuestionario1" : txtcuestionario1,
                    "txtcuestionario2" : txtcuestionario2,
                    "txtproyectofinal" : txtproyectofinal,
                    "btncalcular" : boton
                }
                break;
            }
            $.ajax({
             
             data: parametros,
             url:'calcular.php',
             type:'post',
             beforeSend:
             function(){
                 $('#resultado').html('cargando...');
             },
             success:
             function(response){
                 $('#resultado').html(response);
             }
            });
        }
        
        </script>
   
   
    </head>
    <body>
        
        <h1 >Promedio de Notas </h1>
        <form name="form1">
            <p>Nota del Taller 1 (20%)
                <input type="text" name="txttaller1" id="txttaller1">
            </p>
            <p>Nota del Taller 2 (15%)
                    <input type="text" name="txttaller2" id="txttaller2">
                </p>
                <p>Nota del Cuestionario 1 (22%)
                    <input type="text" name="txtcuestionario1" id="txtcuestionario1">
                </p>
                <p>Nota del Cuestionario 2 (10%)
                    <input type="text" name="txtcuestionario2" id="txtcuestionario2">
                </p>
                <p>Nota del Proyecto Final (33%)
                    <input type="text" name="txtproyectofinal" id="txtproyectofinal" >
                </p>
                <p>
                        <input type="button" name="btncalcular" id="btncalcular" value="Calcular"
                        onclick="proceso($('#txttaller1').val(),$('#txttaller2').val(),$('#txtcuestionario1').val(),
                        $('#txtcuestionario2').val(), $('#txtproyectofinal').val(), $('#btncalcular').val());">
                    </p>
        </form>
        <br>
        <span id="resultado"></span>
        <script src="js/jquery-3.4.1.js"></script>
          
        
    </body>
</html>