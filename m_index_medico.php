<?php
    include_once('header.php');
?>

<!-- $$ Título de la sección -->
<div class="jumbotron" id="titulo_seccion">
    <p>Ventana Principal</p>
</div>
<!-- ## Título de la sección -->

<!-- $$ Panel principal -->
<div class="container">
    <!-- row G.Pacientes y S.Rec. -->
    <div class="row">
        <!-- col G.Pacientes -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <!-- Cabecera G.Pacientes -->
                <div class="panel-heading">
                    <h3 class="panel-title">Gestión de pacientes</h3>          
                </div>
                <!-- ./ Cabecera G.Pacientes -->
                <!-- Cuerpo G.Pacientes -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">Paciente 1</a>
                        <a href="#" class="list-group-item">Paciente 2</a>
                        <a href="#" class="list-group-item">Paciente 3</a>
                        <a href="#" class="list-group-item">Paciente 4
                            <button type="submit" class="btn btn-default btn-xs pull-right">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </a>
                        <a href="#" class="list-group-item">Paciente 5</a>
                        <a href="#" class="list-group-item">Paciente 6</a>
                        <a href="#" class="list-group-item">Paciente 7</a>
                        <a href="#" class="list-group-item">Paciente 8</a>
                    </div>
                </div>
                <!-- ./ Cuerpo G.Pacientes -->
                <!-- panel footer -->
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-sm-12">
                            <button type="button" class="btn-ver-md float-right">Alta</button>
                        </div>
                    </div>
                </div>
                <!-- ./ panel footer -->
            </div>
        </div>
        <!-- ./ col G.Pacientes -->

        <!-- col S.Rec. -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <!-- $$ Cabecera del S.Rec. -->
                <div class="panel-heading">
                    <h3 class="panel-title">Sistema Recomendador</h3>
                </div>
                <!-- ## Cabecera del S.Rec. -->
                        
                <!-- $$ Cuerpo del S.Rec. -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="m_recomendaciones_manuales.php" class="list-group-item">Crear recomendaciones de forma manual</a>
                        <a href="m_revisar_automaticas.php" class="list-group-item">Revisar recomendaciones automáticas</a>
                        <a href="m_revisar_casos.php" class="list-group-item">Revisar los casos de seguimiento</a>
                    </div>
                </div>
                <!-- ## Cuerpo del S.Rec. -->
            </div>
        </div>
        <!-- ./ col S.Rec. -->
    </div>
    <!-- ./ row G.Pacientes y S.Rec. -->


    <!-- row Moodle y Doc. Apoyo --> 
    <div class="row">
        <!-- col Moodle -->
        <div class="col-sm-6">
            <div class="panel panel-default">
                <!-- $$ Cabecera del Sistema de Educación -->
                <div class="panel-heading">
                    <div class="pull-right">
                        <button type="button" class="btn btn-default btn-xs">Entrar</button>
                    </div>
                    <h3 class="panel-title">Educación (Moodle)</h3>          
                </div>
                <!-- ## Cabecera del Sistema de Educación -->
                <!-- $$ Cuerpo del Sistema de Educación -->
                <div class="panel-body">
                    <p> Últimas entradas del campus: </p>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Entrada 1</a>
                        <a href="#" class="list-group-item">Entrada 2</a>
                        <a href="#" class="list-group-item">Entrada 3</a>
                    </div>
                    <p> Tests recomendados: </p>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <button type="submit" class="btn btn-default btn-sm pull-right">Realizar</button>
                            <p> Test diabetes Mellitus tipo 1 </p>
                        </a>
                        <a href="#" class="list-group-item">
                            <button type="submit" class="btn btn-default btn-xs pull-right">Realizar</button>
                            <p> Test diabetes Mellitus tipo 2 </p>
                        </a>
                    </div>
                </div>
                <!-- ## Cuerpo del Sistema de Educación -->
            </div>
        </div>
        <!-- ./ col Moodle --> 
        <!-- col Doc.Apoyo -->
        <div class="col-sm-6">
            <div class="panel panel-default">
                <!-- $$ Cabecera Doc.Apoyo -->
                <div class="panel-heading">
                    <h3 class="panel-title">Dcoumentación de apoyo</h3>
                </div>
                <!-- ## Cabecera Doc.Apoyo -->
                        
                <!-- $$ Cuerpo Doc.Apoyo -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">Documento1.txt</a>
                        <a href="#" class="list-group-item">Documento2.txt</a>
                        <a href="#" class="list-group-item">Documento3.txt</a>
                    </div>
                </div>
                <!-- ## Cuerpo Doc.Apoyo -->
            </div>
        </div>
        <!-- ./ col Doc.Apoyo. -->   
    </div>
    <!-- ./ row Moodle y Doc.Apoyo. -->
</div>
<!-- ## Panel principal -->

<?php
    include_once('footer.php');
?>