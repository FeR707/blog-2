@extends('..template.layout')

@section('inicio')
    <h1>Unidad 2</h1>
    <h4>Estrategias de reparto de complejidad</h4>
@endsection

@section('indice')
    
<div class="container">
      <div class="row">
          <div class="col-sm-4 col-sm-8 indice"> 
                
          <!-- ***** lista o indice ***** -->
          <h4>Indice</h4>
            <ul>
              <ol>
                <li> <a href="#presentacion_distribuida"> Presentacion Distribuida</a> </li>
                <li> <a href="#presentacion_remota">Presentacion Remota</a></li>
                <li> <a href="#proceso_distribuido">Proceso Distribuido</a></li>
                <li><a href="#BD_Remota">Base de Datos Remota</a></li>
                <li><a href="#BD_Distribuida">Base de Datos Distribuida</a></li>
                <li><a href="#logica_presentacion">Logica de Presentacion</a></li>
                <li><a href="#logica_negocio">Logica de Negocio</a></li>
                <li><a href="#logica_aplicacion">Logica de Aplicacion</a></li>
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



        <div id="presentacion_distribuida"><br><br><br><br>

        <h2><em>Presentacion Distribuida</em></h2>
        <p>Esta capa se encuentra distribuida entre lo que es el cliente y el servidor, de tal manera que el cliente se modifica o adapta a la presentación que esta ofreciendo el servidor. Este tipo de sistema suele tener un mantenimiento bastante complejo.</p>

        <img src="assets/images/presentacion_distribuida.png" class="img-fluid rounded mx-auto d-block">
        <b class="text-center">Modelo de Presentacion Distribuida</b>
        </div>

        <div id="presentacion_remota"><br><br><br><br>
        <h2><em>Presentacion Remota</em></h2>
        <p>En la capa de presentación de datos, se ejecuta en el cliente totalmente. En este se realizarán las validaciones de los datos de entrada, el formato de salida, entre otros. La lógica de negocio y el acceso a la base de datos se aloja en el servidor.</p>

        <img src="assets/images/presentacion_remota.png" class="img-fluid rounded mx-auto d-block">
        <b class="text-center">Modelo de Presentacion Remota</b>
        </div>

        <div id="proceso_distribuido"><br><br><br><br>
        <h2><em>Proceso Distribuido</em></h2>
        <p>La capa que implementa la lógica de negocio se encuentra dividida entre el cliente y el servidor. El acceso a la base de datos se encuentra en el servidor y la capa de proceso en el cliente.</p>

        <img class="img-fluid" src="assets/images/proceso_distribuido.png" style="width: 700px">
        <b class="text-center">Modelo de Proceso Distribuido</b>
        </div>

        <div id="BD_Remota"><br><br><br><br>
        <h2><em>Base de Datos Remota</em></h2>
        <p>Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos esta completamente en el servidor.</p>

        <img class="img-fluid" src="assets/images/BD_Remota.jpeg" style="width: 700px">
        <b class="text-center">Modelo de Base de Datos Remota</b>
        </div>

        <div id="BD_Distribuida"><br><br><br><br>
        <h2><em>Base de Datos Distribuida</em></h2>
        <p>El gestor de la base de datos divide sus componentes entre el cliente y el servidor. Las interfaces están dentro de las funciones del gestor de datos y, por lo tanto, no tienen impacto entre el desarrollado de las aplicaciones.</p>

        <img class="img-fluid" src="assets/images/BD_Distribuida.png" style="width: 700px">
        <b class="text-center">Modelo de Base de Datos Distribuida</b>
        </div>

        <div id="logica_presentacion"><br><br><br><br>
        <h2><em>Logica de Presentacion</em></h2>
        <p>Es la responsable del control de todos los aspectos relacionados con la interacción entre el usuario y la aplicación. Para llevar a cabo esta lógica, es necesario conocer que tipos de usuarios utilizaran la aplicación, que actividades realizaran y cuales son los mejores estilos de interfaz para que los usuarios realicen sus tareas. Se engloba todas las tareas que deben de ser realizadas por la parte del cliente del modelo general.</p>
        </div>

        <div id="logica_negocio"><br><br><br><br>
        <h2><em>Logica de Negocio</em></h2>
        <p>Se encarga de controlar la secuencia de acciones y fuerzas del cumplimiento de las reglas del negocio propias de cada empresa: además, asegura la integridad de las transacciones de las operaciones necesarias que haya que realizar para que se cumplan dichas reglas. 
        La lógica de negocio también transforma una serie de datos en información útil para el usuario mediante la aplicación de reglas apropiadas.</p>
        </div>

        <div id="logica_aplicacion"><br><br><br><br>
        <h2><em>Logica de Aplicacion</em></h2>
        <p>La logica de aplicacione esta enlazada a lo que es MVC en cuanto al area de los controladores, donde explica lo que es su aplicacion dentro del modelo vista controlador.Un ejemplo, cuando me piden ver el resumen de datos de un usuario. Esa acción le llega al controlador, que tendrá que acceder al modelo del usuario para pedir sus datos. Luego llamará a la vista apropiada para poder mostrar esos datos del usuario. Si en el resumen del usuario queremos mostrar los artículos que ha publicado dentro de la aplicación, quizás el controlador tendrá que llamar al modelo de artículos, pedirle todos los publicados por ese usuario y con ese listado de artículos invocar a la vista correspondiente para mostrarlos. Todo ese conjunto de acciones que se realizan invocando métodos de los modelos y mandando datos a las vistas forman parte de la lógica de la aplicación. <br>
        Ojo, la logica de aplicacion no es la que se ejecuta en el cliente, sino que es la que se ejecuta en el servidor.
        </p>

@endsection
