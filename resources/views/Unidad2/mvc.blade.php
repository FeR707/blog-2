@extends('..template.layout')

@section('inicio')
    <h1>Unidad 2</h1>
    <h4>Modelo Vista Controlador</h4>
@endsection

@section('indice')

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-8 indice"> 
            
        <h4>Indice</h4>
        <ul>
            <ol>
                <li> <a href="#arquitectura_CS">Arquitectura Cliente/Servidor</a> </li>
                <li> <a href="#concepto_MVC">Modelo Vista Controlador</a></li>
                <li> <a href="#control_MVC">Flujo de Control</a></li>
                <li><a href="#software_MVC">Desarrollo de Software MVC</a></li>
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

    <ol>
        <div id="arquitectura_CS"><br><br><br><br>
            <h2><em>Arquitectura Cliente/Servidor</em></h2>

            <b>Modelo</b><br>
            <p>Contiene una representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.<br>
            EL modelo es responsable de: <br>
            <ul>
                <li> Acceder a la capa de almacenamiento de datos. Lo ideal es que el modelo sea independiente del sistema de almacenamiento.</li>
                <li>Define las reglas de negocio (la funcionalidad del sistema). Un ejemplo de regla puede ser: "Si la mercancía pedida no está en el almacén, consultar el tiempo de entrega estándar del proveedor".</li>
                <li>Lleva un registro de las vistas y controladores del sistema</li>
                <li>Si estamos ante un modelo activo, notificará a las vistas los cambios que en los datos pueda producir un agente externo (por ejemplo, un fichero por lotes que actualiza los datos, un temporizador que desencadena una inserción, etc.).</li>
            </ul>
            </p><br>
            <b>Vista</b><br>
            <p>La Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste.<br>
            La vista es responsable de: <br>
            <ul>
                <li> Recibir datos del modelo y los muestra al usuario.</li>
                <li> Tienen un registro de su controlador asociado (normalmente porque además lo instancia).</li>
                <li> Pueden dar el servicio de "Actualización()", para que sea invocado por el controlador o por el modelo (cuando es un modelo activo que informa de los cambios en los datos producidos por otros agentes)</li>
            </ul>
            </p><br>
            <b>Controlador</b><br>
            <p>Gestiona el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno. <br>
            El controlador es responsable de: <br>
            <ul>
                <li> Recibe los eventos de entrada</li>
                <li>Contiene reglas de gestión de eventos, del tipo <b>"SI Evento Z, entonces Acción W"</b>. Estas acciones pueden suponer peticiones al modelo o a las vistas. Una de estas peticiones a las vistas puede ser una llamada al método <b>"Actualizar()"</b></li>
            </p>
            </ul><br>
        </div>

        <div id="software_MVC"><br><br><br><br>
            <h2><em>Modelo Vista Controlador</em></h2>
            <p>Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos. <br>
            Se trata de un modelo muy maduro y que ha demostrado su validez a lo largo de los años en todo tipo de aplicaciones, y sobre multitud de lenguajes y plataformas de desarrollo. <br>
            El paradigma modelo vista controlador (MVC) es un patrón de diseño que separa el código en tres capas. Utilizar el patrón de diseño a es muy recomendable, ya que es una forma estandarizar código, optimizarlo y hacer que sea más legible.
            </p>
            <br>

            <img src="assets/images/MVC.png" class="img-fluid rounded mx-auto d-block"<br>

            <div id="control_MVC"></div><br><br><br><br>
            <h2><em>Flujo de Control</em></h2>
            <p>El flujo del modelo vista controlador se puede presentar de la siguiente manera: <br>

            <img src="assets/images/patrones.png" class="img-fluid rounded mx-auto d-block"> <br> <br>
            
            <b>Vista:</b> <br>
            <ul>
                <li>La vista tiene como funcion interactuar con el usuario.</li>
                <li>Por cada peticion que este solicite, manda una alerta al controlador.$_GET</li>
            </ul> <br>
            <b>Controlador:</b> <br>
            <ul>
                <li>Se encarga de recibir las notificaciones de la accion solicitada por el ususario.</li>
                <li>El controlador accede al modelo actualizandolo o modificando dependiendo de la accion solicitada por el usuario.</li>
            </ul> <br>
            <b>Modelo:</b> <br>
            <ul>
                <li>El modelo manda a la vista los datos solicitados por el ususario, generando la interfaz apropiada donde se reflejen los cambios.</li>
                <li>Cuando este proceso finaliza, la vista muestra lo solicitado al usuario.</li>
            </ul> <br>
            <p>Este ciclo se vuelve a repetir las veces necesarias mientras el usuario siga interactuando con la vista.</p>
            </p>
        </div>
    </ol>

@endsection
