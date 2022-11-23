<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="icon" href="Soccer_icon-icons.com_67819.ico">
    <link href="canchas.css" type="text/css" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8cb09a3345.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Mukta+Vaani&display=swap" rel="stylesheet">
    <title>La Gran 7 | Reserva</title>
</head>
<body>
    <form name="formTodo" method="POST">
    <div class="fondo-modal" onclick="Cerrar()">
        <div class="modal">
            <h1 class="modal-titulo"></h1>
            <p class="modal-click"></p>
        </div>
    </div>

    <div class="todo">
        
        <div class="letrero" id="Inicio">
            <marquee behavior="scroll" direction="left" class="marki"><i class="fa-solid fa-trophy"></i></i></i>  La Gran 7  <i class="fa-solid fa-trophy"></i></marquee>
        </div>
        
    <div class="nav">
        <div class="nav-elementos">
            <li class="nav-item"><a href="inicio.php" class="enlace"> <i class="fa-solid fa-house"></i></i></i>Inicio</a></li>
            <li class="nav-item"><a href="ubicacion.php" class="enlace"><i class="fa-sharp fa-solid fa-map-location-dot"></i>¿Dónde estamos?</a></li>
            <li class="nav-item"><i class="fa-solid fa-futbol"></i>Hacé tu reserva</li>
        </div>
    </div>

    <div class="titulo separador">
        <h1>Reservá tu turno online</h1>
    </div>

    <div class="aviso">
        <div class="warning-con">
            <img src="./Fotos servicios/Warning.png" class="warning-foto">
        </div>
        
        <div class="texto">
            <h1>¡Aviso Importante!</h1>
            <p>A diferencia del Trabajo Práctico 1, al momento de realizar una "reserva" los datos se cargarán en una <b>Base de Datos de phpMyAdmin</b>, por lo que deberá <b><u>importar</u></b> el archivo <i>lagran7.sql</i> dentro de <a href="http://localhost/phpmyadmin/" target="_blank">localhost/phpmyadmin</a> para que esta página funcione correctamente.</p>
        </div>
        
    </div>

    <div class="reserva">
    <div class="cancha">
            <p class="separador">Tipo de cancha donde vas a jugar</p>
            <form name="tipoDeCancha" class="formi">
                <div class="sehaceelloco" style="display:flex;flex-direction:row; justify-content:space-evenly;align-items:center;margin-top:15px;margin-bottom:30px">
                <div class="elementos">
                    <div class="contenedor-input">
                        <input type="radio" value="6210" class="input-tipo" name="cancha" onclick="changePic(1)" checked><label class="texto-input">Sintético</label>
                    </div>
                    <div class="contenedor-input">
                        <input type="radio" value="7380" class="input-tipo" name="cancha" onclick="changePic(2)" ><label class="texto-input" name="texto">Natural</label>
                    </div>
                    <div class="contenedor-input">
                        <input type="radio" value="6630" class="input-tipo" name="cancha" onclick="changePic(3)" ><label class="texto-input">Mixto</label>
                    </div>                                                         
                </div>
                <div class="foto-pizza">
                    <img src="./Fotos cancha/Sintetico.jpg" class="foto">
                </div>  
                </div>
                
            </form>
        </div>


        <div class="detalles cancha">
            <p class="separador">Horario y fecha de reserva</p>
            <div class="dia a">
                <label>Día: </label> <input type="date" class="input-dia" value="2022-11-17" name="dia">
            </div>
            <div class="horario a">
                <label>Hora: </label> <input value="16:00" type="time" max="23:30" min="16:00" class="input-hora" list="listaHora" name="horas">
            </div>
            <datalist id="listaHora" class="listaDeHoras" name="horas2">

                <option value="16:00">              
                <option value="17:00">              
                <option value="18:00">              
                <option value="19:00">
                <option value="20:00">
                <option value="21:00">
                <option value="22:00">
                <option value="23:00">
              
            </datalist>
            <div class="error quitar">
                <label class="texto-error"></label>
            </div>
        </div>

        <div class="todoooo cancha">
            <p class="separador">Método de pago</p>
            <div class="pago">    
                <div class="seleccion">                    
                    <select class="combobox" id="LstPago" name="seleccionar" onchange="cambiarFoto(LstPago.value)">
                        <option value="1">Efectivo</option>
                        <option value="1.15">Tarjeta de débito / crédito</option>
                        <option value="1.10">Transferencia bancaria</option>
                    </select>
                </div>
                <div class="foto-pago">
                    <img src="https://cdn-icons-png.flaticon.com/512/2331/2331941.png"class="imagen-pago">
                </div>
            </div>
        </div>

        
        
        <div class="botones">
            <!-- <button value="Reservar" class="boton-cantidad res" onclick="Reserva()""><i class="fa-sharp fa-solid fa-square-check"></i>Reservar</button>    -->
            
            <input type="submit" value="Reservar" class="boton-cantidad res" onclick='Calcular()' name="reservita" style="text-shadow: 2px 2px 2px black;"> 
           
            
            <input type="submit" value="Cancelar" class="boton-cantidad canc" onclick="verHora()" style="text-shadow: 2px 2px 2px black;">
            
            <!-- <input type="button" value="Cancelar" class="boton-cantidad canc" onclick="verHora()"> -->
            <!-- <button value="Cancelar" class="boton-cantidad canc" onclick="verHora()"><i class="fa-solid fa-ban"></i>    Cancelar</button> -->
        </div>
      
        <div class="consulta">
            <div class="datos">
                <label>ID Reserva: </label>
                <input type="number" placeholder="ID" class="input-id" name="idReserva" placeholder="ID">
                <input type="submit" value="Consultar" name="btnConsulta" class="input-btn"
            </div>            
    </div>


    </div>
    </div>
    
    </form>

    
    
    <script>
        //CAMBIO DE IMAGEN CANCHA
        const changePic = (id) =>{
            let foto = document.querySelector(".foto")
            switch(id){
                case 1: foto.src = "./Fotos cancha/Sintetico.jpg";break;
                case 2: foto.src = "./Fotos cancha/Natural.jpg"; break;
                case 3: foto.src = "./Fotos cancha/Mixto.jpg"; break;
            }

        }


        //CAMBIO DE IMAGEN PAGOS
        const cambiarFoto = (val) =>{
            let foto = document.querySelector(".imagen-pago");
        if (val == 1){
            foto.src = "./Fotos pago/Efectivo.png";
        }
        else if (val == 1.15){
            foto.src = "./Fotos pago/Tarjetas.png";
        }
        else{
            foto.src = "./Fotos pago/Transferencia.jpg";
        }
        }
    </script>

    
    <?php     
        $conex = mysqli_connect("localhost","root","","lagran7");
        if (isset ($_POST['reservita'])){
            $consulta = 'insert into reservas (tipo_cancha, día, hora, forma_pago, importe_total) values(';
            $cancha = $_POST['cancha'];
            switch ($cancha) {
                case 6210:
                    $consulta = $consulta . '0,';
                    // Variable "afip" sirve para agregar impuesto ya sea por el tipo de la cancha o 
                    // por la forma de pago
                    $afip = $cancha * 1.00; 
                    break;
                case 7380:
                    $consulta = $consulta . '1,';
                    $afip = $cancha * 1.05;
                    break;
                case 6630:
                    $consulta = $consulta . '2,';
                    $afip = $cancha * 1.08;
                    break;
            }

            $dia = $_POST['dia'];
            $date = date('Y-m-d');
            
            $consulta = $consulta . "'$dia',";
            $hora = $_POST['horas'];
            $consulta = $consulta . "'$hora',";
            
            
            $pagotipo = $_POST['seleccionar'];
            switch ($pagotipo) {
                case 1:
                    $consulta = $consulta . '0,';
                    $afip = $afip * 1;
                    break;
                case 1.15:
                    $consulta = $consulta . '1,';
                    $afip = $afip * 1.10;
                    break;
                case 1.10:
                    $consulta = $consulta . '2,';
                    $afip = $afip * 1.15;
                    break;
                
            }
            $consulta = $consulta . "'$afip')";
            if ($date > $dia){
                echo"<div class='mensajeReservaERR'>";
                echo"<center>";
                echo'<h1 style=font-size:30px;color:white;>
                        <i class="fa-sharp fa-solid fa-square-xmark"></i>  HEMOS DETECTADO UN ERROR EN LA RESERVA  <i class="fa-sharp fa-solid fa-square-xmark"></i>
                    </h1>
                    <i style=font-size:24px;color:white>Por favor, verifica que los datos de la <b>fecha</b> sean correctos. (recuerda que no puedes reservar un día que ya ha pasado.)</i>';  
                echo"</center>";
                echo"</div>";
            }
            else{
                $resultado = mysqli_query($conex, $consulta);
                $cargar_id = $conex->query('select id_reserva from reservas order by id_reserva desc limit 1');  
                while($f=$cargar_id->fetch_array())
                {
                    $mostrar_id=$f['id_reserva'];
                }         
                echo "<div class='mensajeReservaOK'>";
                echo"<center>";
                echo'<h1 style=font-size:30px;color:#588157;>
                    <i class="fa-sharp fa-solid fa-square-check"></i>  LA RESERVA #'.$mostrar_id. ' FUE REALIZADA CON ÉXITO  <i class="fa-sharp fa-solid fa-square-check"></i>
                </h1>
                <i style=font-size:24px;color:#588157>Gracias por confiar en La Gran 7.</i>
                <p>[ Podrás consultar tu reserva con su número al final de la página ]</p>';  
                echo"</center>";
                echo"</div>";
            };
            
        }

        if (isset($_POST['btnConsulta'])){
            $id = $_POST['idReserva'];           
            $registros=$conex->query(
                "select 
                    id_reserva, c.descripcion as 'tipo', día, hora, p.descripcion as 'pago',importe_total 
                from 
                    reservas as r 
                    inner join cancha as c on r.tipo_cancha = c.tipo 
                    inner join pagos as p on p.forma_pago = r.forma_pago 
                where 
                    id_reserva=$id");
            echo"<div style='background-color:white;height:140px;width:100%;display:flex;justify-content:center;align-items:center'>
            <table class='table'>
            <tr>
                <td class='tit'>Id</td>
                <td class='tit'>Tipo cancha</td>
                <td class='tit'>Dia</td>
                <td class='tit'>Hora</td>
                <td class='tit'>Pago</td>
                <td class='tit'>Importe</td>
            </tr>";
            while($f=$registros->fetch_array())
            {
                echo"<tr>
                    <td>$f[id_reserva]</td>
                    <td>$f[tipo]</td>
                    <td>$f[día]</td>
                    <td>$f[hora]</td>
                    <td>$f[pago]</td>
                    <td>$$f[importe_total],00</td>
                </tr>";

            }
            echo"</table></div>";     
            }

    ?>

            
    
    
    
</body>
</html>


