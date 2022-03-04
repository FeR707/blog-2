@extends('..template.layout')

@section('inicio')
    <h1>Unidad 1</h1>
    <h4>Introducción a la arquitectura  Cliente/Servidor</h4>
@endsection



@section('indice')

<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-8 indice"> 
                
           <!-- ***** lista o indice ***** -->
            <h4>Indice</h4>
                <ul>
                <ol>
                    <li> <a href="#conceptos_sistemas"> Los conceptos de sistemas de información</a> </li>
                    <li> <a href="#evolucion_sistemas">La evolución de los sistemas de información</a></li>
                    <li> <a href="#concepto_cliente">Los conceptos de cliente y servidor</a></li>
                    <li><a href="#sistemas_computadoras">Los sistemas de computadoras centrales y dedicadas</a></li>
                    <li><a href="#conexión_libre">Los sistemas de conexión libre y a través de redes</a></li>
                    <li><a href="#sistemas_arquitectura">Los sistemas con arquitectura  Cliente/Servidor</a></li>
                    <li><a href="#protocolos_red">Protocolos de comunicación en red</a></li>
                    <li><a href="#sistemas-arqui">Los sistemas de información de acuerdo a su arquitectura</a></li>
                    <li><a href="#diagramacion">Proceso de diagramación de componentes de la arquitectura Cliente/Servidor</a></li>
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


<div id="conceptos_sistemas"><br><br><br><br>

<h2><em>Los conceptos de sistemas de información</em> </h2>
<p>
        En informática, los sistemas de información ayudan a administrar, recolectar, 
        recuperar, procesar, almacenar y distribuir información relevante para los procesos 
        fundamentales y las particularidades de cada organización. <br><br>

        <h4 class="text-center">Características de un sistema de información</h4> 
        <br>
        Un sistema de información se caracteriza principalmente por la eficiencia que procesa los datos en relación al área de acción. Los sistemas de información se alimentan de los procesos y herramientas de estadística, probabilidad, inteligencia de negocio, producción, marketing, entre otros para llegar a la mejor solución. <br>

        Un sistema de información se destaca por su diseño, facilidad de uso, flexibilidad, mantenimiento automático de los registros, apoyo en toma de decisiones críticas y mantener el anonimato en informaciones no relevantes.
    </p> <br><br>

    <h4 class="text-center"><me>Componentes de un Sistema de Informacion.<me></h4>
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/entrada.png" alt="">
                            <h4>Entrada</h4>
                            <p>Por donde esque se alimentan los datos.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/datos.png" alt="">
                            <h4>Proceso</h4>
                            <p>Es el uso de herramientas de las areas completadas para relacionar, resumir o concluir.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/salida.png" alt="">
                            <h4>Salida</h4>
                            <p>En este punto se refleja la produccion de la informacion.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/retro.png" alt="">
                            <h4>Retroalimentacion</h4>
                            <p>Los resultados obtenidos son integrados y se procesan nuevamente.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>


<div id="evolucion_sistemas"><br><br><br><br>

<h2><em>La evolución de los sistemas de información</em> </h2>

<h3 class="text-center">Evolucion <em>(1950 - Actualidad)</em></h3>
<section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/base.png" alt="">
                            <h4>Procesamiento de datos (1950-1960)</h4>
                            <p>Recopila, almacena, modifica y recupera transacciones cotidianas de una organización.
                            Ayuda a los trabajadores</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/gestion.png" alt="">
                            <h4>Informes de gestión (1960 - 1970)</h4>
                            <p>Informes y pantallas preespecificados para apoyar la toma de decisiones empresariales
                            Ayuda a los gerentes intermedios</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/saludo.png" alt="">
                            <h4>Apoyo a las decisiones (1970 - 1980)</h4>
                            <p>Soporte ad-hoc interactivo para el proceso de toma de decisiones
                            Ayuda a los gerentes senior</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/apoyo.png" alt="">
                            <h4>Apoyo Ejecutivo (1980 - 1990)</h4>
                            <p>Proporcione información interna y externa relevante para los objetivos estratégicos de la organización
                            Ayuda a los ejecutivos</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/datos2.png" alt="">
                            <h4>Conocimiento administrativo (1990 - 2000)</h4>
                            <p>Apoya la creación, organización y diseminación del conocimiento empresarial
                            Ayuda disponible para toda la empresa</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/datos.png" alt="">
                            <h4>E-Business (2000 - Actualidad)</h4>
                            <p>Mayor conectividad, mayor nivel de integración en todas las aplicaciones
                            Ayuda al comercio electrónico global</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div id="concepto_cliente"><br><br><br><br>
    <h2><em>Los conceptos de cliente y servidor</em> </h2>
<p>El concepto de cliente servidor, o cliente-servidor, refiere por lo tanto a un modelo de comunicación que vincula a varios dispositivos informáticos a través de una red. 
        El cliente, en este marco, realiza peticiones de servicios al servidor, que se encarga de satisfacer dichos requerimientos.</p><br>
    <p>Con esta arquitectura, las tareas se distribuyen entre los servidores (que proveen los servicios) y los clientes (que demandan dichos servicios). 
       <br> Dicho de otro modo: el cliente le pide un recurso al servidor, que brinda una respuesta.</p>

       <br><br>
       <img class="img-fluid rounded mx-auto d-block" src="assets/images/servidor.png" alt=""><br><br>
       <p>El concepto de cliente servidor, o cliente-servidor, refiere por lo tanto a un modelo de comunicación que vincula a varios dispositivos informáticos a través de una red. 
           El cliente, en este marco, realiza peticiones de servicios al servidor, que se encarga de satisfacer dichos requerimientos.</p><br>
        <p>Con esta arquitectura, las tareas se distribuyen entre los servidores (que proveen los servicios) y los clientes (que demandan dichos servicios). 
            Dicho de otro modo: el cliente le pide un recurso al servidor, que brinda una respuesta.</p>
        <p>Este tipo de modelos permite repartir de la capacidad de procesamiento. El servidor puede ejecutarse sobre más de un equipo y ser más de un programa. 
            De acuerdo a los servicios que brinda, se lo puede llamar servidor web, servidor de correo o de otro modo.</p>
</div>

<div id="sistemas_computadoras"><br><br><br><br>
    <h2><em>Los sistemas de computadoras centrales y dedicadas.</em> </h2>
    <h4 class="text-center">¿Qué es una computadora central?</h4>
    <p>
    Una computadora central (en inglés mainframe )es una computadora grande, potente y costosausada principalmente por una gran compañíapara el procesamiento de una gran cantidad dedatos; 
    por ejemplo, para el procesamiento detransacciones bancarias. <br>
    La capacidad de una computadora central sedefine tanto por la velocidad de su CPU comopor su gran memoria interna, su alta y grancapacidad de almacenamiento externo, susresultados en los dispositivos E/S rápidos yconsiderables, 
    la alta calidad de su ingenieríainterna que tiene como consecuencia una altafiabilidad y soporte técnico caro pero de altacalidad. <br>
    Una computadora central puedefuncionar durante años sin problemas niinterrupciones y las reparaciones del mismopueden ser realizadas mientras estáfuncionando <br>
    <br><img class="img-fluid rounded mx-auto d-block" src="assets/images/compu.jpg" alt=""><br> <br>
    A menudo, las computadoras centrales soportan miles de usuarios de manera simultánea que se conectan mediante terminal como el centro de operaciones de muchos terminales virtuales, puede ofrecer la potencia necesaria para que dichas computadoras operen de manera eficiente, 
    pero también la flexibilidad de las redes de computadoras personales. <br> <br>
    
    <h4 class="text-center">¿Qué es un servidor dedicado?</h4>
    Un servidor dedicado es un equipo informático físico que destina todos sus recursos a proporcionar información y atender las peticiones de otro ordenador (cliente) que ha contratado sus servicios. <br> <br>
    Un servidor dedicado se caracteriza, esencialmente, por ofrecer sus recursos y servicios a un único individuo, aunque también son importantes los siguientes aspectos: <br>
    * Se localiza, por regla general, en un centro de datos, lugar en el que se encuentran todos los recursos que una entidad necesita para procesar su información. <br>
    * Proporciona más seguridad y mayor velocidad, ya que los recursos de este gran ordenador central no se comparten con otros usuarios. <br>
    * Está destinado a alojar sitios web con un elevado tráfico, siendo recomendable por tanto que las que contratan estos servicios reciban un gran número de visitas diarias. <br>
    * Posee una alta cuota mensual, superando, incluso, los 100 euros al mes, ya que, entre otras cosas, es un solo cliente el que hace frente a los gastos de mantenimiento. <br>
    * Cuenta, en la mayoría de los casos, con un servicio de atención disponible las 24 horas del día y los 365 días del año.
    </p><br>
    <img class="img-fluid rounded mx-auto d-block" src="assets/images/didicadas.jpg" alt="">
</div>


<div id="conexión_libre"></h2><br><br><br><br>
    <h2><em>Los sistemas de conexión libre y a través de redes.</em>
    <h4 class="text-center">Conexion libre</h4>
    <p>
        Este tipo de conexionj hace que las computadoras de escritorio se conecten a las computadoras de servicio empleando software que permite la emulacion de algun tipo de terminal. <br>
        En todos los casos, se les transfiere la informacion haciendo uso de recursos magneticos por transcripcion.
    </p>
    <h4 class="text-center">Conexion de Red</h4>
    <p>
        En la conexion de red, la información reside en una o varias computadoras, los usuarios de esta información hacen uso de computadoras para laborar y todas ellas se encuentran conectadas entre si. Esto brinda la posibilidad de que todos los usuarios puedan acceder a la información de todas las computadoras y a la vez que los diversos sistemas intercambien información. 
    </p>

    <br>
    <img class="img-fluid rounded mx-auto d-block" src="assets/images/red.jpg" alt="" >
</div>


<div id="sistemas_arquitectura"><br><br><br><br>
    <h2><em>Los sistemas con arquitectura  Cliente/Servidor</em></h2>
    <h4 class="text-center">Protocolos cliente-servidor</h4>
    <p>Los clientes generalmente se comunican con los servidores mediante el conjunto de protocolos TCP / IP. TCP 
        es un protocolo orientado a la conexión, lo que significa que se establece y mantiene una conexión hasta que los programas de aplicación en cada extremo hayan terminado de intercambiar mensajes.</p>
    <br><p>Determina cómo dividir los datos de la aplicación en paquetes que las redes pueden entregar, envía paquetes y acepta paquetes de la capa de red, gestiona el control de flujo y maneja la retransmisión de paquetes descartados o confusos, 
        así como el reconocimiento de todos los paquetes que llegan. En el modelo de comunicación de interconexión de sistemas abiertos (OSI), TCP cubre partes de la capa 4, la capa de transporte y partes de la capa 5, la capa de sesión.</p>
    <br><br>
    <h4 class="text-center">Arquitectura Cliente-Servidor</h4>
    <p>Cliente-Servidor es uno de los estilos arquitectónicos distribuidos más conocidos, el cual está compuesto por dos componentes, el proveedor y el consumidor. 
        El proveedor es un servidor que brinda una serie de servicios o recursos los cuales son consumido por el Cliente.</p><br>
        <p>En una arquitectura Cliente-Servidor existe un servidor y múltiples clientes que se conectan al servidor para recuperar todos los recursos necesarios para funcionar, en este sentido, el cliente solo es una capa para representar 
            los datos y se detonan acciones para modificar el estado del servidor, mientras que el servidor es el que hace todo el trabajo pesado.</p><br>
        <p><b>En Dicha arquitectura disponemos de dos tipos de agentes:</b></p>
        <p><b>Cliente: </b>Ordenador o programa informático que solicita información.</p>
        <p><b>Servidor: </b>Ordenador o programa informático que dispone de información.</p><br><br>
    <h4 class="text-center">Tipos de Arquitectura Cliente Servidor</h4>
    <p><b>Cliente Activo, Servidor Pasivo: </b>El cliente realiza la practica totalidad del trabajo de procesado de la información. Ejemplo: Google Earth.</p>
    <p><b></b></p>
    <p><b>Cliente Pasivo, Servidor Pasivo: </b>Tanto el cliente como el Servidor simplemente pasan información. Ejemplo: Gateways de comunicaciones VoIP.</p>
    <p><b>Cliente Pasivo, Servidor Activo: </b>El Servidor realiza todo el trabajo de procesado y el cliente simplemente presenta los datos. Ejemplo: Servidores de terminales.</p>
    <p><b>Cliente Activo, Servidor Activo: </b>Tanto el Servidor como el Cliente procesan la información. Ejemplo: Servicios de Correo Electrónico.</p>
</div>

<div id="protocolos_red"><br><br><br><br>
    <h2><em>Protocolos de comunicación en red</em></h2>
    <p>Los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan, ni conozcan su funcionamiento. <br>
        La interconexión de sistemas o redes de computadoras son la base de las comunicaciones hoy en día y están diseñadas bajo múltiples protocolos de comunicación. </p>
    <br><p>Los protocolos de red incluyen mecanismos para que los dispositivos se identifiquen y establezcan conexiones entre sí, así como reglas de formato que especifican cómo se forman los paquetes y los datos en los mensajes enviados y recibidos.</p>
    <br><br><h4 class="text-center">Tipos de protocolos de red</h4>
    <p>Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). 
        De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP.</p>
<br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/comunicacion.png" alt="">
                            <h4>Protocolos de comunicación de red</h4>
                            <p>Protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/seguridad.png" alt="">
                            <h4>Protocolos de seguridad de red</h4>
                            <p>Implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/gestion.png" alt="">
                            <h4>Protocolos de gestión de red</h4>
                            <p>Proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="sistemas-arqui"><br><br><br><br>
    <h2><em>Los sistemas de información de acuerdo a su arquitectura</em></h2>

    <h4 class="text-center">Arquitectura de la información</h4>
    <p>
    Los sistemas reales son demasiado grandes y deben ser divididos en partes más pequeñas según el principio de abstracción. <br>
    La arquitectura de la información (AI) es la disciplina y arte encargada del estudio, análisis, organización, disposición y estructuración de la información en espacios de información, y de la selección y presentación de los datos en los sistemas de 
    información interactivos y no interactivos. <br><br>
    En relación con la World Wide Web, el Information Architecture Institute define la «arquitectura de la información» como: <br>
    *El diseño estructural en entornos de información compartida. <br>
    *El arte y la ciencia de organizar y rotular sitios web, intranets, comunidades en línea y software para promover la usabilidad y la «encontrabilidad» (Findability: la característica de poder ser encontrado a través de las búsquedas en Internet). <br>
    *Una comunidad emergente orientada a aplicar al entorno digital los principios del diseño y la arquitectura. <br><br>
    
    <h4 class="text-center">Arquitectura basada en capas</h4>
    La arquitectura basada en capas se enfoca en la distribución de roles y responsabilidades de forma jerárquica proveyendo una forma muy efectiva de separación de responsabilidades. El rol indica el modo y tipo de interacción con otras capas, y la responsabilidad indica la funcionalidad que está siendo desarrollada. <br>
    El estilo de arquitectura basado en capas se identifica por las siguientes características: <br>
    • Describe la descomposición de servicios de forma que la mayoría de la interacción ocurre solamente entre capas vecinas. <br>
    • Las capas de una aplicación pueden residir en la misma maquina física (misma capa) o puede estar distribuido sobre diferentes computadores (n-capas). <br>
    • Los componentes de cada capa se comunican con otros componentes en otras capas a través de interfaces muy bien definidas. <br>
    • Este modelo ha sido descrito como una “pirámide invertida de re-uso” donde cada capa agrega responsabilidad y abstracción a la capa directamente sobre ella. <br><br>
    
    <b>Los siguientes son algunas variaciones del estilo de arquitectura basado en capas:</b> <br><br>

    <b>• Capas estrictas (Strict layering).</b> Cada capa solo puede invocar a la capa directamente debajo de a ella. <br>
    <b>• Saltos de Capas (Layer skipping). </b> Las capas pueden invocar otras capas más profundas que las que están directamente debajo de ellas. Esto puede incrementar el rendimiento pero impacta la portabilidad. <br>
    <b>• Capa de Caja Negra (Black-box layering). </b> Los limites de las capas y sus dependencias esta definidas de forma estricta usando interfaces, lo que soporta extensiones en run-time, intercepción y mejora la capacidad de realiza pruebas. <br>
    <b>• Capa de Caja Blanca (White-box layering). </b> Clases que colaboran entre los límites de las capas y están altamente acopladas. <br>
    <img class="img-fluid rounded mx-auto d-block" src="assets/images/caps.gif" alt="">
    </p><br>
    <h4 class="text-center">Arquitectura orientada a servicios</h4>
    <p>
    La arquitectura orientada a los servicios (SOA) es un tipo de diseño de software que permite reutilizar sus elementos gracias a las interfaces de servicios que se comunican a través de una red con un lenguaje común. <br>
    Un servicio es una unidad autónoma de una o más funciones del software diseñada para realizar una tarea específica, como recuperar cierta información o ejecutar una operación. Contiene las integraciones de datos y código que se necesitan para llevar a cabo una función empresarial completa y diferenciada. Se puede acceder a él de forma remota e interactuar con él o actualizarlo de manera independiente. <br>
    En otras palabras, la SOA integra los elementos del software que se implementan y se mantienen por separado, y permite que se comuniquen entre sí y trabajen en conjunto para formar aplicaciones de software en distintos sistemas. <br> <br>
   <b>Los elementos esenciales de la arquitectura orientada a los servicios consisten en tres funciones. </b> <br>
    <b>Proveedor de servicios: </b> Se encarga de crear servicios web, ofrecerlos a un registro de servicios disponibles y gestionar sus condiciones de uso. <br>
    <b>Agente o registro de servicios: </b> Se encarga de brindar información acerca del servicio a quien lo solicite, y puede ser público o privado. <br>
    <b>Usuario del servicio o persona que lo solicita:</b> Buscará un servicio en el registro o por medio del agente, y se conectará con el proveedor para recibirlo.<br>
    </p>
    <img class="img-fluid rounded mx-auto d-block" src="assets/images/servicios.jpg" alt="">
</div>


<div id="diagramacion"><br><br><br><br>
    <h2><em>Proceso de diagramación de componentes de la arquitectura Cliente/Servidor </em></h2>

    <h4 class="tetx-center">Componentes del Modelo Cliente/Servidor</h4>
    <img class="img-fluid rounded mx-auto d-block" src="assets/images/CS.jpg" alt="" style="width: 700px"><br><br><br>
    <h5>Nivel de Presentacion</h5>
    <p>
    Agrupa todos los elementos asociados al componente cliente 
    </p>
    <br><br>
    
    <h5>Nivel de Aplicación</h5>
    <p>
    Agrupa todos los elementos asociados al componente servidor 
    </p>
    <br><br>

    <h5>Nivel de comunicación</h5>
    <p>
    Agrupa todos los elementos asociados que hacen posiblela comunicacion entre los componentes Cliente y Servidor
    </p><br><br>

    <h5>Nivel de base de datos</h5>
    <p>
    Agrupa todas las actividades asociados al acceso de los datos 
    </p>
    <br><br>

    <h5>Clientes</h5>
    <p>
    Es el proceso que permite al usuario formular los requerimientos y pasarlos al servidor. <br>
    <b>Caracteristicas</b><br>
    • Administrar la interfaz de usuario. <br>
    • Interactuar con el usuario. <br>
    • Procesar la lógica de la aplicación y hacer validaciones locales. <br>
    • Generar requerimientos de bases de datos. <br>
    • Recibir resultados del servidor. <br>
    • Formatear resultados.
    </p><br><br>

    <h5>Clasificacion de clientes</h5>
    <p>
    <b>Cliente basado en aplicación de usuario.</b>
    Si los datos son de baja interacción y están fuertemente relacionados con la actividad de los usuarios de esos clientes.
    <br><b>Cliente basado en lógica de negocio.</b> Toma datos suministrados por el usuario y/o la base de datos y efectúa los cálculos necesarios según los requerimientos del usuario.
    </p><br><br>

    <h5>Servidor</h5>
    <p>
    Un servidor es todo proceso que proporciona un servicio a otros. Es el proceso encargado de atender a múltiples clientes que hacen peticiones de algún recurso administrado por él.
    El servidor normalmente maneja todas las funciones relacionadas con la mayoría de las reglas del negocio y los recursos de datos
    </p><br><br>

    <h5>Funciones del servidor</h5>
    <p>
    • Aceptar los requerimientos de bases de datos que hacen los clientes. <br>
    • Procesar requerimientos de bases de datos. <br>
    • Formatear datos para trasmitirlos a los clientes. <br>
    • Procesar la lógica de la aplicación y realizar validaciones a nivel de bases de datos.
    </p><br><br>

    <h5>Middleware</h5>
    <p>
    Es un módulo intermedio que actúa como conductor entre sistemas permitiendo a cualquier usuario de sistemas de información comunicarse con varias fuentes de información que se encuentran conectadas por una red <br>
    Middleware se estructura en tres niveles: <br>
    • Protocolo de transporte. <br>
    • Network Operating System (NOS). <br>
    • Protocolo específico del servicio. <br>
    </p><br>
    <img class="img-fluid" src="assets/images/modelo.jpg" alt="">

</div>
@endsection
