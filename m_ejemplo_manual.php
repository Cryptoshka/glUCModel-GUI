<?php
    include_once('header.php');
?>

<!-- Section title -->
<div class="jumbotron" id="titulo_seccion">
    <p>Revisar casos</p>
</div>
<!-- ./ Section title -->

<!-- $$ Container 1 -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Información básica</h3> 
        </div>
        <div class="panel-body">
            <!-- $$ Columna foto -->
            <div class="col-sm-4">
                <img src="img/placeholders/portrait.png" class="img-responsive" alt="Imagen del paciente" width="200" height="300">
            </div>
            <!-- ## Columna foto -->
            <!-- $$ Columna datos 1 -->
            <div class="col-sm-4">
                <ul>
                    <li>Nombre: Paco Pérez</li>
                    <li>Peso: 76 Kg</li>
                    <li>Altura: 176 cm</li>
                    <li>IMC: 23.4</li>
                    <li>Tipo de diabetes: TIPO 1</li>
                </ul>
            </div>
            <!-- ## Columna datos 1 -->
            <!-- $$ Columna datos 2 -->
            <div class="col-sm-4">
                <ul>
                    <li>Otras enfermedades:
                        <ol>
                            <li>Enfermedad 1</li>
                            <li>Enfermedad 2</li>
                        </ol>
                    </li>
                    <li>Medicación actual:
                        <ol>
                            <li>Medicamento X</li>
                            <li>Medicamento Y</li>
                        </ol>
                    </li>
                </ul>
            </div>
            <!-- ## Columna datos 2 -->
        </div>
    </div>
</div>
<!-- ## Container 1 -->

<!-- $$ Container 2 -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Variables bajo seguimiento</h3>
        </div>
        <div class="panel-body">
            <!-- $$ Fila 1 de gráficas -->
            <div class="row">
                <!-- $$ grid 3x2 var. 1 -->
                <div class="col-sm-4">
                    <div class="panel panel-default panel-formal">
                        <div class="panel-heading">
                            <p>Peso</p>
                        </div>
                        <div class="panel-body">
                            <p>Valor a lo largo de distintas fechas</p>
                            <img src="img/placeholders/graph_blue.png" class="img-responsive" alt="Grafica var. 1" width="869" height="471">
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-sm-8">
                                    <label>Causante:</label>
                                    <input name="causante" type="checkbox" value="on"/>
                                    <label>Prioridad:</label>
                                    <input type="text" name="q" value="" class="tf-sm"/>
                                </div>
                                <div class="col col-sm-4">
                                    <button type="button" class="btn-ver-md float-right">Detalles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ## grid 3x2 var. 1 -->
                <!-- $$ grid 3x2 var. 2 -->
                <div class="col-sm-4">
                    <div class="panel panel-default panel-formal">
                        <div class="panel-heading">
                            <p>Glucemias</p>
                        </div>
                        <div class="panel-body">
                            <!--<img src="img/placeholders/graph_green.png" class="img-responsive" alt="Grafica var. 2" width="869" height="471">-->
                            <!-- Image Carousel -->
                            <div id="carousel-glucemias" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-glucemias" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-glucemias" data-slide-to="1"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                    <p>Valor en un mismo momento del día a lo largo de varias fechas</p>
                                    <img src="img/placeholders/graph_blue.png" class="img-responsive">
                                  </div>
                                  <div class="item">
                                    <p>Valor en distintos momentos del día, en un mismo día</p>
                                    <img src="img/placeholders/graph_green.png" class="img-responsive">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#carousel-glucemias" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-glucemias" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- ./ Image Carousel -->
                        </div>
                        <!-- ./ panel body -->
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-sm-8">
                                    <label>Causante:</label>
                                    <input name="causante" type="checkbox" value="on"/>
                                    <label>Prioridad:</label>
                                    <input type="text" name="q" value="" class="tf-sm"/>
                                </div>
                                <div class="col col-sm-4">
                                    <button type="button" class="btn-ver-md float-right">Detalles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ## grid 3x2 var. 2 -->
                <!-- $$ grid 3x2 var. 3 -->
                <div class="col-sm-4">
                    <div class="panel panel-default panel-formal">
                        <div class="panel-heading">
                            <p>Insulina</p>
                        </div>
                        <div class="panel-body">
                            <!-- Image Carousel -->
                            <div id="carousel-insulina" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-insulina" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-insulina" data-slide-to="1"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                    <p>Valor en un mismo momento del día a lo largo de varias fechas</p>
                                    <img src="img/placeholders/graph_blue.png" class="img-responsive">
                                  </div>
                                  <div class="item">
                                    <p>Valor en distintos momentos del día, en un mismo día</p>
                                    <img src="img/placeholders/graph_green.png" class="img-responsive">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#carousel-insulina" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-insulina" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- ./ Image Carousel -->
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-sm-8">
                                    <label>Causante:</label>
                                    <input name="causante" type="checkbox" value="on"/>
                                    <label>Prioridad:</label>
                                    <input type="text" name="q" value="" class="tf-sm"/>
                                </div>
                                <div class="col col-sm-4">
                                    <button type="button" class="btn-ver-md float-right">Detalles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ## grid 3x2 var. 3 -->
            </div>
            <!-- ## Fila 1 de gráficas -->
            <!-- $$ Fila 2 de gráficas -->
            <div class="row">
                <!-- $$ grid 3x2 var. 4 -->
                <div class="col-sm-4">
                    <div class="panel panel-default panel-formal">
                        <div class="panel-heading">
                            <p>Dieta</p>
                        </div>
                        <div class="panel-body">
                            <!-- Image Carousel -->
                            <div id="carousel-dieta" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-dieta" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-dieta" data-slide-to="1"></li>
                                  <li data-target="#carousel-dieta" data-slide-to="2"></li>
                                  <li data-target="#carousel-dieta" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                    <p>Desviación en Kcal respecto a desayuno tipo 1</p>
                                    <img src="img/placeholders/graph_blue.png" class="img-responsive">
                                  </div>
                                  <div class="item">
                                    <p>Desviación en Kcal respecto a desayuno tipo 2</p>
                                    <img src="img/placeholders/graph_green.png" class="img-responsive">
                                  </div>
                                
                                  <div class="item">
                                    <p>Desviación en Kcal respecto a comida tipo 1</p>
                                    <img src="img/placeholders/graph_red.png" class="img-responsive">
                                  </div>

                                  <div class="item">
                                    <p>Desviación en Kcal respecto a comida tipo 2</p>
                                    <img src="img/placeholders/graph_orange.png" class="img-responsive">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#carousel-dieta" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-dieta" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- ./ Image Carousel -->
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-sm-8">
                                    <label>Causante:</label>
                                    <input name="causante" type="checkbox" value="on"/>
                                    <label>Prioridad:</label>
                                    <input type="text" name="q" value="" class="tf-sm"/>
                                </div>
                                <div class="col col-sm-4">
                                    <button type="button" class="btn-ver-md float-right">Detalles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ## grid 3x2 var. 4 -->
                <!-- $$ grid 3x2 var. 5 -->
                <div class="col-sm-4">
                    <div class="panel panel-default panel-formal">
                        <div class="panel-heading">
                            <p>Ejercicio</p>
                        </div>
                        <div class="panel-body">
                            <!--<img src="img/placeholders/graph_green.png" class="img-responsive" alt="Grafica var. 5" width="869" height="471">-->
                            <!-- Image Carousel -->
                            <div id="carousel-ejercicio" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-ejercicio" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-ejercicio" data-slide-to="1"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                    <p>Duración media a lo largo del tiempo (fechas)</p>
                                    <img src="img/placeholders/graph_blue.png" class="img-responsive">
                                  </div>
                                  <div class="item">
                                    <p>Intensidad media a lo largo del tiempo (fechas)</p>
                                    <img src="img/placeholders/graph_green.png" class="img-responsive">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#carousel-ejercicio" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-ejercicio" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- ./ Image Carousel -->
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-sm-8">
                                    <label>Causante:</label>
                                    <input name="causante" type="checkbox" value="on"/>
                                    <label>Prioridad:</label>
                                    <input type="text" name="q" value="" class="tf-sm"/>
                                </div>
                                <div class="col col-sm-4">
                                    <button type="button" class="btn-ver-md float-right">Detalles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ## grid 3x2 var. 5 -->
                <!-- $$ grid 3x2 var. 6 -->
                <div class="col-sm-4">
                    <div class="panel panel-default panel-formal">
                        <div class="panel-heading">
                            <button type="button" class="btn-ver-md float-right">Ver registro</button>
                            <p>Pruebas médicas</p>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th>Tipo</th>
                                    <th>Fecha</th> 
                                    <th>Resultado</th>
                                </tr>
                                <tr>
                                    <td>Prueba 1</td>
                                    <td>dd/mm/yyyy</td>
                                    <td>Valor medido</td>   
                                </tr>
                                <tr>
                                    <td>Prueba 2</td>
                                    <td>dd/mm/yyyy</td>
                                    <td>Valor medido</td>
                                </tr>
                                <tr>
                                    <td>Prueba 3</td>
                                    <td>dd/mm/yyyy</td>
                                    <td>Valor medido</td>
                                </tr>
                            </table>
                        </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-sm-8">
                                    <label>Causante:</label>
                                    <input name="causante" type="checkbox" value="on"/>
                                    <label>Prioridad:</label>
                                    <input type="text" name="q" value="" class="tf-sm"/>
                                </div>
                                <div class="col col-sm-4">
                                    <button type="button" class="btn-ver-md float-right">Detalles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ## grid 3x2 var. 6 -->
            </div>
            <!-- ## Fila 2 de gráficas -->
        </div>
    </div>
</div>
<!-- ## Container 2 -->

<!-- $$ Container 3 -->
<div class="container">
    <div class="panel panel-default">
        <!-- $$ Panel heading -->
        <div class="panel-heading">
            <h3 class="panel-title">Añadir recomendación</h3>
        </div>
        <!-- ## Panel heading -->
        <!-- $$ Panel body -->
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Recomendaciones para este caso:</h4>
                    <ul class="list-group scroll-list ul-coloured"><!-- Explicar -->
                        <li class="list-group-item">Recomendación 1: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 2: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 3: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 4: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 5: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 6: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 7: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 8: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 9: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                        <li class="list-group-item">Recomendación 10: blablablalba
                            <button type="button" class="btn-light-sm pull-right">Explicar</button>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <!-- $$ Añadir una recomendación existente -->
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Recomendaciones existentes:</h4>
                            <div>
                                <ul class="list-group scroll-list ul-coloured">
                                    <li class="list-group-item">Recomendación 1: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 2: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 3: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 4: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 5: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 6: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 7: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 8: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                    <li class="list-group-item">Recomendación 9: blablablalba
                                        <button type="button" class="btn-light-sm pull-right">Recomendar</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ## Añadir una recomendación existente -->
                    <!-- $$ Crear una nueva recomendación -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="comment"><h4>Crear una nueva recomendación:</h4></label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                                <button type="submit" name="enviar" value="Crear" class="btn-submit-md pull-right"/>Crear</button>
                            </div>
                        </div>
                    </div>
                    <!-- ## Crear una nueva recomendación -->
                </div>
            </div>
        </div>
        <!-- ## Panel body -->
    </div>
</div>
<!-- ## Container 3 -->

<?php
    include_once('footer.php');
?>