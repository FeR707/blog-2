@extends('..template.layout')

@section('inicio')
    <h1>Unidad 1</h1>
    <h4>Componentes y características del Cliente/Servidor</h4>
@endsection

@section('indice')

    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-8 indice"> 
                
                <!-- ***** lista o indice ***** -->
              <h4>Indice</h4>
                  <ul>
                    <ol>
                        <li> <a href="#componentes"> Los componentes del modelo  Cliente/Servidor</a> </li>
                        <li> <a href="#programa-maestro">Concepto de programa maestro</a></li>
                        <li> <a href="#procesos-maestro">Los procesos y tareas del programa maestro</a></li>
                        <li><a href="#ipos-servidores">Tipos de servidores</a></li>
                        <li><a href="#caracteristicas">Características de la arquitectura Cliente/Servidor</a></li>
                        <li><a href="#ventajas">Ventajas y desventajas de la arquitectura Cliente/Servidor</a></li>
                        <li><a href="#computo-nube">Concepto de cómputo en la nube</a></li>
                        <li><a href="#conceptos-service">Conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS)</a></li>
                        <li><a href="#arquitectura">La arquitectura Cliente/Servidor con los modelos de cómputo en la nube IAAS, PAAS, SAAS</a></li>
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



<div id="componentes"><br><br><br><br>

<h2><em>Los componentes del modelo  Cliente/Servidor</em></h2>
<p>
  <li><b>Red:</b> Una red es un conjunto de clientes, servidores y base de datos unidos de una manera física o no física en el que existen protocolos de transmisión de información establecidos.</li>
  <li>Cliente: El concepto de cliente hace referencia a un demandante de servicios, este cliente puede ser un ordenador como también una aplicación de informática, la cual requiere información proveniente de la red para funcionar.</li>
  <li><b>Servidor:</b> Un servidor hace referencia a un proveedor de servicios, este servidor a su vez puede ser un ordenador o una aplicación informática la cual envía información a los demás agentes de la red.</li>
  <li><b>Protocolo: </b>Un protocolo es un conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el flujo de información en una red estructurada.</li>
  <li><b>Servicios: </b>Un servicio es un conjunto de información que busca responder las necesidades de un cliente, donde esta información pueden ser mail, música, mensajes simples entre software, videos, etc.</li>
  <li><b>Base de datos: </b>Son bancos de información ordenada, categorizada y clasificada que forman parte de la red, que son sitios de almacenaje para la utilización de los servidores y también directamente de los clientes.</li>

</p>
</div>

<div id="programa-maestro"><br><br><br><br>

  <h2><em>Concepto de programa maestro</em></h2>
  <p>
  El plan maestro de producción determina decisiones operativas de cara al siguiente periodo de planificación y puede llegar a tener en cuenta más para conocer la disponibilidad de recursos estimada. A su vez, determina qué se debe hacer y cuándo, los productos específicos y todo lo que va a producirse.
Otras herramientas de planificación en la empresa, pero más a largo plazo, son el plan de producto y el plan de marketing. A corto plazo, el MRP (Plan de Requerimientos del Material) y a medio plazo, el MPS. El MPS es base para los presupuestos de fabricación, debiendo integrarse los presupuestos financieros en la planificación de la producción del MPS.
  </p>
</div>


<div id="procesos-maestro"><br><br><br><br>
  <h2><em>Los procesos y tareas del programa maestro</em></h2>

    <ol>
      <li><b>Reunir la información:</b></li><p>Para comenzar con el PMO, Lean Manufacturing recomienda que comencemos por reunir estos datos básicos: </p><br>
      <p>•	Capacidad productiva </p><br>
      <p>•	Pronóstico de la demanda </p><br>
      <p>•	Costo de producción </p><br>
      <p>•	Costo de inventario </p><br>
      <p>•	Inventario inicial </p><br>
      <p>•	Plazos de entrega de nuestros proveedores </p><br>
      <p>•	Tamaños de lote</p><br>
      <p>El pronóstico de la demanda lo podemos calcular a partir de nuestro inventario actual, así como de los pedidos de clientes y la demanda esperada.</p><br>

      <li><b>Determinar el tiempo de producción</b></li><p>En este punto, debemos estimar el tiempo que demora nuestro proceso de manufactura, según nuestra capacidad de producción y el sistema en el que trabajemos:  </p><br>
      <p>•	Fabricación bajo pedido (Make to Order o MTO)</p><br>
      <p>•	Trabajo para almacenar (Make to Stock o MTS) </p><br>
      <p>•	Armado bajo pedido (Assemble to Order o ATO)</p><br>

      <li><b>Establecer los horizontes de la producción</b></li><p>A continuación, debemos establecer horizontes o barreras de tiempo. Es decir, fijar los periodos de la empresa para la producción. Los principales son: </p><br>
      <p><b>1.	Barrera del tiempo de demanda.</b>  También conocida como horizonte de demanda fijo, establece los tiempos en que el MPS no se podrá modificar. La empresa no se puede comprometer a sacar adelante nueva producción, pues estará ocupada manufacturando los actuales pedidos. Cualquier cambio en el programa de producción durante este periodo, supone pérdidas económicas y retrasos en los plazos de entrega.</p><br>
      <p><b>2.	Barrera del tiempo de planificación.</b> Es el horizonte de tiempo en que podemos planificar a largo plazo y sirve para aceptar futuros pedidos. Es el periodo en el que podemos realizar cambios al Plan Maestro de Producción, ya que todavía no pedimos los materiales y la capacidad de producción puede ajustarse.  </p><br>
      <p><b>3.	Barrera flexible.</b> El horizonte líquido es una barrera flexible, un tiempo que está antes del horizonte de demanda fijo. En este periodo, podemos realizar modificaciones oportunas al programa maestro de producción, pues los pedidos todavía no se cierran.  </p><br>

    </ol>
</div>

<div id="Tipos-servidores">
  <h2><em>Tipos de servidores</em></h2>
  <li>Servidores Web</li>
  <p>Los servidores Web, también conocidos como servidores HTTP, surgen en 1990 ante la necesidad de estandarizar la comunicación entre distintas plataformas y lenguajes de programación, brindando una alternativa para el intercambio de información más rápida y sencilla.</p><br>
  <li>Servidores FTP</li>
  <p>Un servidor de Protocolo para Transferencia de Archivos, o File Transfer Protocol por sus siglas en inglés, es un programa que se ejecuta cuando se está conectado a Internet o a algún otro tipo de red (LAN, MAN, etc.), el cual permite el desplazamiento o transferencia de datos entre otros servidores u ordenadores.</p><br>
  <li>Servidores de Correo</li>
  <p>Los servidores de Correo son aplicaciones informáticas que permiten el intercambio de mensajes a través de sistemas de comunicación electrónicos, los cuales se comenzaron a desarrollar desde 1971. <br>
  Éstos trabajan como el servicio de correos, la gran diferencia es que en lugar de tardar días o semanas en enviar grandes paquetes y documentos en papel, envían datos digitales e información electrónica en cuestión de segundos, permitiendo una comunicación casi inmediata.</p><br>
  <li>Servidores IRC</li>
  <p>Tuvo sus inicios en 1988 y fue un gran éxito debido a que logró generar una comunicación escrita inmediata y en tiempo real entre dos o más personas a través de internet. <br>
  El Internet Relay Chat por sus siglas en inglés, es actualmente uno de los servicios de chat más utilizados, el cual consiste básicamente en que varios servidores están conectados a una red, de modo que cualquier persona alrededor del mundo puede unirse a uno de éstos y chatear con cualquier otro usuario conectado a Internet. Al igual que un servidor FTP, éste también está basado en una arquitectura tipo cliente-servidor.</p><br>
  <li>Servidores de Juegos</li>
  <p>Los también conocidos Game Servers, como lo dice su nombre, se especializan en alojar juegos de video, es decir, de proveer el espacio para que sus creadores o desarrolladores puedan ofrecer sus juegos en internet. Además, este servidor tiene como función recopilar la información de cada jugador conectado y enviarla al resto de participantes de forma inmediata de modo que puedan generarse partidas en tiempo real.</p><br>
  <li>Servidores Proxy</li>
  <p>Un servidor Proxy funciona como intermediario entre otros dos sistemas informáticos, contribuyendo a la seguridad de la red. Al no requerir comunicación directa entre el remitente y el destinatario, hace posible el intercambio de datos e información entre sistemas que cuentan con incompatibilidad de direcciones IP. <br>
  Además, forma parte fundamental del Firewall, que es el software que protege a los sistemas de ataques de redes públicas como el robo de datos confidenciales, la pérdida de información valiosa, e incluso la denegación a servicios de nuestra red.</p><br>
  <li>VPN</li>
  <p>Una Virtual Private Network es una tecnología utilizada para realizar conexiones seguras a una red privada de una o varias computadoras sin que se encuentren físicamente en el mismo lugar. Ésta ayuda a proteger nuestra información, ya que al conectarnos a una VPN se genera un tipo de “túnel virtual” por el que pasa toda nuestra información, y los datos enviados o solicitados se encuentran cifrados hasta que salen de la VPN.</p><br>
  <br> <img class="img-fluid rounded mx-auto d-block" src="assets/images/tipos-servidores.png" alt="">
</div>


<div id="caracteristicas"><br><br><br><br>
  <h2><em>Características de la arquitectura Cliente/Servidor</em></h2>

  <p>En el modelo CLIENTE/SERVIDOR podemos encontrar las siguientes características:</p><br>
  <li>El Cliente y el Servidor pueden actuar como una sola entidad y también pueden actuar como entidades separadas, realizando actividades o tareas independientes.</li><br>
  <li>Las Funciones de Cliente y Servidor pueden estar en plataformas separadas, o en la misma plataforma.
Para ver el gráfico seleccione la opción "Descargar" del menú superior</li><br>
<li>Un servidor da servicio a múltiples clientes en forma concurrente.</li><br>
<li>Cada plataforma puede ser escalable independientemente. Los cambios realizados en las plataformas de los Clientes o de los Servidores, ya sean por actualización o por reemplazo tecnológico, se realizan de una manera transparente para el usuario final.</li><br>
<li>La interrelación entre el hardware y el software están basados en una infraestructura poderosa, de tal forma que el acceso a los recursos de la red no muestra la complejidad de los diferentes tipos de formatos de datos y de los protocolos.</li><br>
<li>Un sistema de servidores realiza múltiples funciones al mismo tiempo que presenta una imagen de un solo sistema a las estaciones Clientes. Esto se logra combinando los recursos de cómputo que se encuentran físicamente separados en un solo sistema lógico, proporcionando de esta manera el servicio más efectivo para el usuario final.</li><br>
<li>Designa un modelo de construcción de sistemas informáticos de carácter distribuido.</li><br>
</div>

<div id="ventajas"><br><br><br><br>
  <h2><em>Ventajas y desventajas de la arquitectura Cliente/Servidor</em></h2>
  <img class="img-fluid" src="assets/images/ventajas.jpg" alt=""><br><br>
  <ol>
    <li><b>Ventajas</b></li>
    <p>• Centralización del control: Los accesos, recursos y la integridad de los datos son controlados por el servidor de forma que un programa cliente defectuoso o no autorizado no pueda dañar el sistema. Esta centralización también facilita la tarea de poner al día datos u otros recursos (mejor que en las redes P2P). </p><br>
    <p>• Escalabilidad: Se puede aumentar la capacidad de clientes y servidores por separado. Cualquier elemento puede ser aumentado (o mejorado) en cualquier momento, o se pueden añadir nuevos nodos a la red (clientes y/o servidores). </p><br>
    <p>• Fácil mantenimiento: Al estar distribuidas las funciones y responsabilidades entre varios ordenadores independientes, es posible reemplazar, reparar, actualizar, o incluso trasladar un servidor, mientras que sus clientes no se verán afectados por ese cambio (o se afectarán mínimamente). Esta independencia de los cambios también se conoce como encapsulación. </p><br>
    <p>• Existen tecnologías, suficientemente desarrolladas, diseñadas para el paradigma de C/S que aseguran la seguridad en las transacciones, la amigabilidad del interfaz, y la facilidad de empleo. </p><br>

    <li><b>Desventajas</b></li>
    <p>La congestión del tráfico ha sido siempre un problema en el paradigma de C/S. Cuando una gran cantidad de clientes envían peticiones simultaneas al mismo servidor, puede ser que cause muchos problemas para éste (a mayor número de clientes, más problemas para el servidor). Al contrario, en las redes P2P como cada nodo en la red hace también de servidor, cuantos más nodos hay, mejor es el ancho de banda que se tiene.</p><br>
    <p>• El paradigma de C/S clásico no tiene la robustez de una redP2P. Cuando un servidor está caído, las peticiones de los clientes no pueden ser satisfechas. En la mayor parte de redes P2P, los recursos están generalmente distribuidos en varios nodos de la red. Aunque algunos salgan o abandonen la descarga; otros pueden todavía acabar de descargar consiguiendo datos del resto de los nodos en la red.</p><br>
    <p>• El software y el hardware de un servidor son generalmente muy determinantes. Un hardware regular de un computador personal puede no poder servir a cierta cantidad de clientes. Normalmente se necesita software y hardware específico, sobre todo en el lado del servidor, para satisfacer el trabajo. Por supuesto, esto aumentará el costo.</p><br>
  </ol>
</div>

<div id="computo-nube"><br><br><br><br>
  <h2><em>Concepto de cómputo en la nube</em></h2>

  <p>La computación en la nube es la entrega de recursos informáticos, incluidos el almacenamiento, la potencia de procesamiento, las bases de datos, las redes, los análisis, la inteligencia artificial y las aplicaciones de software, a través de Internet (la nube). Al externalizar estos recursos, las empresas pueden acceder a los activos informáticos que necesitan, en el momento en que los necesitan y sin tener que comprar ni mantener 
    una infraestructura física local de TI. Esto proporciona recursos flexibles, innovación más rápida y economías de escalado. Para muchas empresas, la migración a la nube está directamente relacionada con la modernización de datos y TI.</p><br>
  <img class="img-fluid" src="assets/images/nube.png" alt="">
</div>


<div id="conceptos-service"><br><br><br><br>
  <h2><em>Conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).</em></h2><br>

  <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/cloud.png" alt="">
                            <h4>Infrastructure as a Service (IAAS)</h4>
                            <p class="tetx-center">Se refiere a los servicios en línea que proporcionan un alto-nivel de APIs utilizadas para indireccionar detalles a bajo nivel de infraestructura como 
                              recursos de informática física, ubicación, dato partitioning, scaling, seguridad, copia de seguridad etc.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/cloud.png" alt="">
                            <h4>Platform as a Service (PAAS)</h4>
                            <p class="tetx-center">Plataforma como servicio (PaaS) es un entorno de desarrollo e implementación completo en la nube, con recursos que permiten entregar todo, desde 
                              aplicaciones sencillas basadas en la nube hasta aplicaciones empresariales sofisticadas habilitadas para la nube</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/cloud.png" alt="">
                            <h4>Software as a Service (SAAS).</h4>
                            <p class="tetx-center">SaaS, o Software as a Service, es una forma de poner. a disposición 
                              softwares y soluciones de tecnología por medio de la internet, como un servicio.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div id="arquitectura"><br><br><br><br>
  <h2><em>La arquitectura Cliente/Servidor con los modelos de cómputo en la nube IAAS, PAAS, SAAS.</em></h2><br>
  <h4>(IaaS)</h4>
  <p>El enfoque tradicional para el hospedaje de aplicaciones requiere la compra de hardware y la administración de todas las instalaciones de software, incluido el sistema operativo. Originalmente, esto implicaba centros de datos y hardware físico costosos. 
    Los desafíos que implica el hardware físico operativo son muchos, entre los que se incluyen:</p><br>
    <li>La necesidad de comprar en exceso "por si acaso" o para escenarios de demanda máxima</li>
    <li>Protección del acceso físico al hardware</li>
    <li>Responsabilidad por el error de hardware (por ejemplo, un error de disco)</li>
    <li>Refrigeración</li>
    <li>Configuración de enrutadores y equilibradores de carga</li>
    <li>Redundancia energética</li>
    <li>Protección del acceso a software</li><br>
    <img class="img-fluid rounded mx-auto d-block" src="assets/images/IaaS.png" alt=""><br><br>

    <h4>(PaaS)</h4><br>
    <p>PaaS aborda los desafíos comunes a IaaS. PaaS permite que el desarrollador se centre en el código o el esquema de la base de datos en lugar de cómo se implementa. Entre las ventajas de PaaS se incluyen:</p><br>
    <li>Modelos de pago por uso que eliminan el recargo de invertir en máquinas inactivas.</li>
    <li>Implementación directa y mejoras de canalizaciones de integración continua (CI), entrega continua (CD) y DevOps.</li>
    <li>Revisiones de seguridad y actualizaciones automáticas.</li>
    <li>Escalado horizontal y escalado vertical (escala elástica) con botón de comando.</li><br>
    <p>La desventaja principal de PaaS solía ser la dependencia del proveedor.</p><br>
    <img class="img-fluid rounded mx-auto d-block" src="assets/images/PaaS.png" alt=""><br><br>

    <h4>(SaaS)</h4><br>
    <p>El software como servicio o SaaS se hospeda de manera centralizada y está disponible sin necesidad de aprovisionamiento o instalación local. A menudo, SaaS se hospeda en PaaS como plataforma para la implementación de software. 
      SaaS proporciona servicios para ejecutar y conectarse con software existente. SaaS suele ser vertical y específica del sector. SaaS suele tener licencia y habitualmente proporciona un modelo cliente/servidor.</p><br>
    
</div>
@endsection