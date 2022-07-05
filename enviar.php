
<?php
//$host_name = 'db5009127876.hosting-data.io';
$host_name = 'localhost';
//$user_name = 'dbu1064594';
$user_name = 'root';
//$database = 'dbs7719535';
$database = 'dbs7719535';
//$password = 'pruebas2022';
$password = '';
$puerto = '3306';
$tabla = "davidp";

$titulo_trabajo = $_POST["titulo_trabajo"];
$opcion_trabajo = $_POST["opcion_trabajo"];
$autor = $_POST["autor"];
$universidad = $_POST["universidad"];
$palabra_clave = $_POST["palabra_clave"];
$opcion_curso = $_POST["opcion_curso"];
$ciudad = $_POST["ciudad"];
$opcion_especialidad = $_POST["opcion_especialidad"];
$resumen = $_POST["resumen"];
$fecha = date("Y-m-d H:i:s");

echo $titulo_trabajo;
echo $resumen;

//exit;

//$db = mysqli_connect($host_name, $user_name, $password, $database, "xxx");
$link = new mysqli($host_name, $user_name, $password, $database, $puerto);



if ($link->connect_error) {
    die('<p>Conexion fallida con MySQL: ' . $link->connect_error . '</p>');
} else {
    echo '<p>Conexion con el servidor MySQL realizada satisfactoriamente.</p>';
}
$Result2 = $link->query("INSERT INTO $tabla (titulo_trabajo, opcion_trabajo, autor, universidad, palabras_clave, curso, ciudad, especialidad, resumen, fecha_registro) VALUES ('$titulo_trabajo','$opcion_trabajo','$autor','$universidad','$palabra_clave','$opcion_curso','$ciudad','$opcion_especialidad','$resumen','$fecha');");
echo $Result2; 

exit;

try {

    //$db = mysqli_connect("ec2-44-197-128-108.compute-1.amazonaws.com", "jikiihqjomguak", "4595fe83a2fd7ed77f44a975ed208c4244bbefe8966b2ffab16850693c3bce93", "d9a269cd9juigh", "5432");
    //$tabla = "OPERACIONES";

    $ConsultaSQL = "SELECT * FROM $tabla WHERE FECHA IS NOT NULL AND id_registro IS NOT NULL ORDER BY ASC";
    //echo $ConsultaSQL;
    //exit;
    if ($Result1 = $link->query($ConsultaSQL)) {
        $CantidadResultados = $Result1->num_rows;
        if ($CantidadResultados == 0) {
            //echo ("prueba 123");
            //exit;
            //Ingresa los datos del formulario
            if ($Result2 = $link->query("INSERT INTO $tabla (titulo_trabajo, opcion_trabajo, autor, universidad, palabras_clave, curso, ciudad, especialidad, resumen, fecha_registro) VALUES ('$titulo_trabajo','$opcion_trabajo','$autor','$universidad','$palabra_clave','$opcion_curso','$ciudad','$opcion_especialidad','$resumen','$fecha');")) {
                echo $Result2;
                echo "Insercion de datos exitosa";
            } else {
                echo "error en la Insercion de datos";
            }
        } else {
            echo "Success2";
        }
        mysqli_close($db);
    } else {

        echo "error";
    }
} catch (\Exception $e) {
    echo 'Se presentó un inconveniente al procesar la información. Actualiza la pagina e intenta nuevamente';
}



/* if($database && $tabla !== ""){
if (mysqli_query($link, "INSERT INTO $tabla (titulo_trabajo, opcion_trabajo, autor, universidad, palabra_clave, opcion_curso, ciudad, opcion_especialidad, resumen, fecha_registro ) VALUES ('$titulo_trabajo', '$opcion_trabajo', '$autor', '$universidad', '$palabra_clave','$opcion_curso','$ciudad','$opcion_especialidad','$resumen','$fecha')")) {
        echo 'Insercion de datos exitosa';
    } else {
        echo 'Se presentó un inconveniente al procesar la información: ' . PHP_EOL . mysqli_error($db) . PHP_EOL . 'Intente nuevamente.';
    }
} else {
    'Se presentó un inconveniente al conectar con la base de datos. ' . PHP_EOL . mysqli_error($db);
}
mysqli_close($db);
} catch (\Exception $e) {
echo 'Se presentó un inconveniente al procesar la información. Intente nuevamente';
}
 */

?>
