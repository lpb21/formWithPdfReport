function enviar_form() {

    var enviar = document.getElementById('enviar_dato');
    var titulo_trabajo = document.getElementById('titulo_trabajo').value
    var opcion_trabajo = document.getElementById('opcion_trabajo').value
    var autor = document.getElementById('autor').value
    var universidad = document.getElementById('universidad').value;
    var palabra_clave = document.getElementById('palabra_clave').value;
    var opcion_curso = document.getElementById('opcion_curso').value;
    var ciudad = document.getElementById('ciudad').value;
    var opcion_especialidad = document.getElementById('opcion_especialidad').value;
    var resumen = document.getElementById('resumen').value;

    if (titulo_trabajo == "") {
        //swal reemplaza el alert y hace el llamado a los objetos de la libreria SweetAlert
        swal('Oooops!', 'El campo del titulo_trabajo no puede estar vacio', 'error');
        titulo_trabajo.focus();
        return false;
    } else if (opcion_trabajo == "Tipo de trabajo") {
        swal('Oooops!', 'Debe seleccionar una opcion valida en el Tipo de trabajo', 'error');
        opcion_trabajo.focus();
        return false;
    } else if (autor == "") {
        swal('Oooops!', 'El campo del autor no puede estar vacio', 'error');
        autor.focus();
        return false;
    } else if (universidad == "") {
        swal('Oooops!', 'El campo universidad no puede estar vacio', 'error');
        universidad.focus();
        return false;
    } else if (palabra_clave == "") {
        swal('Oooops!', 'El campo palabra_clave no puede estar vacio', 'error');
        palabra_clave.focus();
        return false;
    } else if (opcion_curso == "Curso") {
        swal('Oooops!', 'Debe seleccionar una opcion valida en la opcion de curso', 'error');
        opcion_curso.focus();
        return false;
    } else if (ciudad == "") {
        swal('Oooops!', 'El campo ciudad no puede estar vacio', 'error');
        ciudad.focus();
        return false;
    } else if (opcion_especialidad == "Especialidad") {
        swal('Oooops!', 'Debe seleccionar una opcion valida en el campon de especialidad', 'error');
        opcion_especialidad.focus();
        return false;
    } else if (resumen == "") {
        swal('Oooops!', 'El campo resumen no puede estar vacio', 'error');
        resumen.focus();
        return false;





    } else {



        titulo_trabajo = document.formulario.titulo_trabajo.value;
        opcion_trabajo = document.formulario.opcion_trabajo.value;
        autor = document.formulario.autor.value;
        universidad = document.formulario.universidad.value;
        palabra_clave = document.formulario.palabra_clave.value;
        opcion_curso = document.formulario.opcion_curso.value;
        ciudad = document.formulario.ciudad.value;
        opcion_especialidad = document.formulario.opcion_especialidad.value;
        resumen = document.formulario.resumen.value;
        //enviar = document.getElementById('enviar_dato');

        //resultado = document.formulario.resultado.value;


        $.ajax({
            url: 'enviar.php',
            method: 'POST',



            data: {
                titulo_trabajo: titulo_trabajo,
                opcion_trabajo: opcion_trabajo,
                autor: autor,
                universidad: universidad,
                palabra_clave: palabra_clave,
                opcion_curso: opcion_curso,
                ciudad: ciudad,
                opcion_especialidad: opcion_especialidad,
                resumen: resumen,
            },
            success: function(response) {
                console.log(response);
                console.log(opcion_trabajo);
                console.log(opcion_curso);
                console.log(autor);
                console.log(universidad);
                console.log(palabra_clave);
                console.log(opcion_curso);
                console.log(ciudad);
                console.log(opcion_especialidad);
                console.log(resumen);
                /* $('#resultado').html(response);
                console.log(response); */
                swal('success', 'Datos enviados correctamente', 'success');
                document.formulario.reset();
                //window.location = 'Enviar.php';
            },
            error: function() {
                swal('Error', 'Error en el procesamiento de datos', 'error');
                //window.parent.window.alert("Ha ocurrido un error en el calculo. Por favor, intenta nuevamente");
            }

        });


    }
}