@extends('..template.layout')

@section('inicio')
    <h1>Unidad 2</h1>
    <h4>Sockets</h4>
@endsection

@section('indice')

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-8 indice"> 
            
            <!-- ***** lista o indice ***** -->
            <h4>Indice</h4>
            <ul>
                <ol>
                    <li> <a href="#concepto-api">Concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API)</a> </li>
                    <li> <a href="#proceso-api">Proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API)</a></li>
                    <li> <a href="#sockets">Concepto de sockets</a></li>
                    <li><a href="#sockets2">Proceso del uso de sockets en aplicaciones Cliente/Servidor</a></li>
                </ol>
                    
            </ul>

    <!-- *****  indice fin ***** -->

        </div>
    </div>
</div>
@endsection


@section('contenido')

    <!-- ***** boton arriba ***** -->
<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
  </span>
</a>

<div id="concepto-api"><br><br><br><br>
    <h2><em>Concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API)</em></h2>
    <p>
    Una interfaz de programación de aplicaciones (API) es un código que permite que dos programas de software se comuniquen entre sí. <br>
    La API define la forma correcta para que un desarrollador escriba un programa que solicite servicios de un sistema operativo (SO) u otra aplicación. Las API se implementan mediante llamadas a funciones compuestas de verbos y sustantivos. La sintaxis requerida se describe en la documentación de la aplicación a la que se llama.
    </p><br>
    <img src="assets/images/api.png" class="img-fluid rounded mx-auto d-block">
</div>


<div id="proceso-api"><br><br><br><br>
    <h2><em>Proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API)</em></h2>
    <p>Una interfaz de programación de aplicaciones (API) es un código que permite que dos programas de software se comuniquen entre sí.</p><br>
    <p>La API define la forma correcta para que un desarrollador escriba un programa que solicite servicios de un sistema operativo (SO) u otra aplicación. Las API se implementan mediante llamadas a funciones compuestas de verbos y sustantivos. La sintaxis requerida se describe en la documentación de la aplicación a la que se llama.</p><br>
    <img src="assets/images/interfaz-api.png" alt="" class="img-fluid rounded mx-auto d-block">
</div>

<div id="sockets"><br><br><br><br>
    <h2><em>Concepto de sockets</em></h2>
    <p>Socket designa un concepto abstracto por el cual dos procesos (posiblemente situados en computadoras distintas) pueden intercambiar cualquier flujo de datos, generalmente de manera fiable y ordenada. 
    Además, es una estructura de datos que permite que dos máquinas se comuniquen entre ellas. </p> <br>
    <p>El término socket es también usado como el nombre de una interfaz de programación de aplicaciones (API) para la familia de protocolos de Internet TCP/IP, provista usualmente por el sistema operativo.</p> <br>
    <p>Los sockets de Internet constituyen el mecanismo para la entrega de paquetes de datos provenientes de la tarjeta de red a los procesos o hilos apropiados. Un socket queda definido por un par de direcciones IP local y remota, un protocolo de transporte y un par de números de puerto local y remoto.</p>
</div>


<div id="sockets2"><br><br><br><br>
    <h2><em>Proceso del uso de sockets en aplicaciones Cliente/Servidor</em></h2>

    <p><b>Servidor</b></p>
    <p>Un socket que funge como servidor operara de la siguiente manera: </p><br>
    <li>El proceso crea un socket servidor para escuchar en un puerto específico y espera conexiones entrantes de algún socket cliente alojado en algún otro proceso.</li><br>
    <li>Una vez que una conexión haya sido establecida se creara un socket cliente que entablara la comunicación con el socket que solicito la conexión en el otro proceso</li><br>
    <li>Cuando la comunicación con el socket cliente es finalizada. la conexión es cerrada</li><br>
    <li>El socket servidor continúa esperando conexiones de otro socket cliente</li><br>
    <p>Generalmente la espera se realiza dentro de un ciclo infinito.</p><br><br>

    <p><b>Cliente</b></p>
    <p>Un socket cliente funcionara de la siguiente forma: </p><br>
    <li>El proceso crea un socket cliente configurando la dirección IP y el puerto donde el socket server espera por conexiones</li><br>
    <li>El socket cliente entabla una comunicación con el socket servidor</li><br>
    <li>Una vez que la comunicación ha finalizado el socket es cerrado</li><br>

</div>

@endsection