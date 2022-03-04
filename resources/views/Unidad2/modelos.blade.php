@extends('..template.layout')

@section('inicio')
    <h1>Unidad 2</h1>
    <h2>Modelos Multinivel</h2>
@endsection


@section('indice')

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-8 indice"> 
            
        <h4>Indice</h4>
            <ul>
                <ol>
                    <li> <a href="#vinculacion">Servicio Vinculado</a> </li>
                    <li> <a href="#dos_niveles">Planificacion de Dos Niveles</a></li>
                    <li> <a href="#tres_niveles">Planificacion de Tres Niveles</a></li>
                    <li><a href="#multinivel">Planificacion Multiniveles</a></li>
                    <li><a href="#dificultades-multinivel">Problemas de actualizacion y mantenimiento a aplicaciones multinivel</a></li>
                </ol>
            </ul>
            
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

<div id="vinculacion"><br><br><br><br>
    <h2> <em>Servicio Vinculado</em></h2>

    <p>Un servicio vinculado es el servidor de una interfaz cliente-servidor. Permite que los componentes (como actividades) se vinculen con el servicio, envíen solicitudes, reciban respuestas y establezcan comunicaciones entre procesos (IPC). Un servicio vinculado, por lo general, solo está activo mientras le presta servicio a otro componente de la aplicación y no se ejecuta en segundo plano indefinidamente.
    </p> <br>
</div>

<div id="dos_niveles"><br><br><br><br>
    <h2><em>Planificacion de Dos Niveles</em></h2>

    <p>Esta se utiliza para describir los sistemas cliente servidor en donde el cliente solicita recursos y el servidor responde directamente a la solicitud con sus propios recursos. Eso significa que el servidor no requiere de una aplicación extra para proporcionar parte del servicio.</p>

    <img src="assets/images/dos-niveles.png" class="img-fluid"> <br>

    <b>Ventajas de la planificacion de dos niveles:</b> <br>
    <ul>
        <li>El desarrollo de aplicaciones en un ambiente de dos capas funciona adecuadamente, pero no es necesariamente lo más eficiente. Las herramientas para el desarrollo con dos capas son robustas y amplia mente evaluadas.</li>
        <li>Las técnicas de ingeniería de software de prototipo se emplean fácilmente. Las soluciones de dos capas trabajan en en ambientes no dinámicos, pero no se ejecutan bien en organizaciones rápidamente cambiantes.</li>
    </ul> <br>

    <b>Desventajas de la planificacion de tres niveles</b>
    <ul>
        <li>Los ambientes de dos capas requieren control excesivo de las versiones y demandan esfuerzo de distribución de la aplicación cuando se les hacen camios. Esto se ve al hecho de que la mayoría de la aplicación lógica existe en la estación de trabajo del cliente.</li> 
        <li>La seguridad del sistema en un diseño de dos capas es compleja y a menudo requiere administración de las bases de datos; esto es debido al número de dispositivos con acceso directo al ambiente de esas bases de datos.</li>
        <li>Las herramientas del cliente y de la base de datos, utilizadas en diseños de dos capas, constantemente están cambiando. La dependencia a largo plazo de cualquier herramienta, puede complicar el escalamiento futuro o las implementaciones.</li>
    </ul> <br>
</div>

<div id="tres_niveles"><br><br><br><br>
    <h2><em>Planificacion de Tres Niveles</em></h2>

    <p>En la arquitectura de tres capas existe un nivel intermediario, eso significa que la arquitectura generalmente está compartida por un cliente que como hablamos más arriba es el que solicita los recursos equipado con una interfaz de usuario o mediante un navegador web. <br>

    La capa del medio es denominada software intermedio cuya tarea es proporcionar los recursos solicitados pero que requiere de otro servidor para hacerlo. La última capa es el servidor de datos que proporciona al servidor de aplicaciones los datos necesarios para poder procesar y generar el servicio que solicito el cliente en un principio.</p>

    <img src="assets/images/tres-niveles.png" class="img-fluid"> <br>
    
</div><br>

<div id="multinivel">
    <h2><em>Planificacion Multinivel</em></h2>
    <p>Es una arquitectura cliente-servidor en la que las funciones de presentación, procesamiento de aplicaciones y gestión de datos están separadas físicamente. El uso más generalizado de la arquitectura multinivel es la arquitectura de tres niveles. <br>

    La arquitectura de aplicaciones de N niveles proporciona un modelo mediante el cual los desarrolladores pueden crear aplicaciones flexibles y reutilizables. Al segregar una aplicación en niveles, los desarrolladores adquieren la opción de modificar o agregar un nivel específico, en lugar de volver a trabajar en toda la aplicación. Una arquitectura de tres niveles normalmente se compone de un nivel de presentación , un nivel lógico y un nivel de datos .</p><br>

    <img src="assets/images/capas.png" class="img-fluid rounded mx-auto d-block">
</div>

<div id="dificultades-multinivel"><br><br><br><br>
    <h2><em>Problemas de actualizacion y mantenimiento a aplicaciones multinivel</em></h2>
    <p><b>Desventajasde las arquitecturas multinivel</b></p><br>

    <li><b>Complejidad:</b> </li>
    <p>Mayor num. de elementos hardware y software a definir, gestionar y mantener</p>
    <p>Interacciones complejas entre componentes</p>
    <p>Dificultad para detectar, asilar y coregir fallos</p><br>

    <li><b>Coste de comunicaciones:</b></li>
    <p>Mayor latencia y consumo de ancho debanda (atravesar capas distribuidas por la red)</p><br>

    <li><b>Coste de mantenimiento:  </b></li>
    <p>Al crecer las capas aumentan el coste y la dificultad de instalacion y mantenimiento</p>
</div>

@endsection