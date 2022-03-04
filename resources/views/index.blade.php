@extends('template.layout')

@section('inicio')

<div id="inicio">
<h1><em>Bienvenidos a nuestro blog</em></h1>
</div>
    
@endsection

@section('contenido')

<h2><em>Lideres del proyecto</em></h2>
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/apoyo.png" alt="">
                            <h4>Ing. Zamora Toribio Aaron Gamaliel</h4>
                            <p>Conocimiento intermedio de C#</p>
                            <p>Conocimientos basicos en PHP, Java, Javascript, CSS y Python</p>
                            <p></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                        <img src="assets/images/apoyo.png" alt="">
                            <h4>Fernando Manuel Galvan</h4>
                            <p>Conocimientos basicos de C++, C#, JAVA, JavaScript, PHP, CSS y 
                                manejo de Base de Datos</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2><em>Objetivos del blog</em></h2>
    <p>Brindar informacion sobre diversos temas de Cliente/Servidor.</p>
    <p>Explicar los conceptos y funcionamientos del modelo vista controlador(MVC)</p>
    <p>Mostrar los conceptos de IAAS, PAAS y SAAS </p>
    
@endsection