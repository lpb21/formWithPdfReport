<!DOCTYPE html>
<html lang="es">

<head>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <div class="form">
        <div class="tab-content">
            <form id="formulario" name="formulario" autocomplete="off" method="post">
                <div id="signup">
                    <h1>Formulario Prueba</h1>

                    <div class="top-row">
                        <div class="field-wrap">
                            <input type="text" id="titulo_trabajo" name="titulo_trabajo" class="req" placeholder="Titulo Trabajo">
                        </div>
                        <div class="field-wrap">
                            <select name="select" class="select-css" id="opcion_trabajo" name="opcion_trabajo">
                                <option selected>Tipo de trabajo</option>
                                <option value="Trabajo_1">Trabajo_1</option>
                                <option value="Trabajo_2">Trabajo_2</option>
                                <option value="Trabajo_3">Trabajo_3</option>
                            </select>
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <input type="text" id="autor" name="autor" class="req" placeholder="Autor" autocomplete="off">
                        </div>
                        <div class="field-wrap">
                            <input type="text" id="universidad" name="universidad" class="req" placeholder="Universidad" autocomplete="off">
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <input type="text" id="palabra_clave" name="palabra_clave" class="req" placeholder="Palabras Clave" autocomplete="off">
                        </div>
                        <div class="field-wrap">
                            <select name="select" class="select-css" id="opcion_curso" name="opcion_curso">
                                <option selected>Curso</option>
                                <option value="Curso_1">Curso_1</option>
                                <option value="Curso_2">Curso_2</option>
                                <option value="Curso_3">Curso_3</option>
                            </select>
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <input type="text" id="ciudad" name="ciudad" class="req" placeholder="Ciudad" autocomplete="off">
                        </div>
                        <div class="field-wrap">
                            <select name="select" class="select-css" id="opcion_especialidad" name="opcion_especialidad">
                                <option selected>Especialidad</option>
                                <option value="Especialidad_1">Especialidad_1</option>
                                <option value="Especialidad_2">Especialidad_2</option>
                                <option value="Especialidad_3">Especialidad_3</option>
                            </select>
                        </div>
                    </div>
                    <div class="field-wrap">
                        <textarea class="req" id="resumen" name="resumen" placeholder="Haga un breve resumen" autocomplete="off"></textarea>
                    </div>
                </div>

                <!-- <div class="button button-block" action="Enviar.php" method="post">
                
            </div>  -->
                <button type="button" id="enviar_dato" name="enviar_dato" class="button button-block" style="cursor:pointer" method="post" action="enviar.php" onclick="enviar_form();">Enviar Datos</button>
                <!-- <input id="enviar_dato" class="button button-block" type="submit" value="enviar" style="cursor:pointer" method="post" onclick="enviar_form();"> -->

                </br>
                <div class="tabla" >
                    <table border = "1">
                        <thead>
                            <tr>
                                <td>titulo trabajo</td>
                                <td>opcion trabajo</td>
                                <td>autor</td>
                                <td>opciones de curso</td>
                                <td>opcion de especialidad</td>
                            </tr>
                        </thead>

                        <?php
                        $host_name = 'localhost';
                        $user_name = 'root';
                        $database = 'dbs7719535';
                        $password = '';
                        $puerto = '3306';
                        $tabla = "davidp";

                        $link = new mysqli($host_name, $user_name, $password, $database, $puerto);
                        $sql = "SELECT titulo_trabajo, opcion_trabajo, autor, curso, especialidad from davidP WHERE titulo_trabajo != '' limit 4 ";
                        // echo $sql;
                        $result = mysqli_query($link, $sql);
                        while ($mostrar = mysqli_fetch_array($result)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $mostrar['titulo_trabajo'] ?></td>
                                    <td><?php echo $mostrar['opcion_trabajo'] ?></td>
                                    <td><?php echo $mostrar['autor'] ?></td>
                                    <td><?php echo $mostrar['curso'] ?></td>
                                    <td><?php echo $mostrar['especialidad'] ?></td>
                                </tr>
                            <?php
                        }
                            ?>
                            </tbody>
                    </table>
                </div>
            </form>

        </div>

        <!-- <div id="login">
        <h1>Enviar datos</h1>      
    </div> -->

    </div><!-- tab-content -->

    <script src="./js/index.js"></script>
</body>
<!-- /form -->