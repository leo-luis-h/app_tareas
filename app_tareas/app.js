$(document).ready(function () {
    cargarTareas();
    $('#task_result').hide();
    $('#search').keyup(function () {
        if ($('#search').val()) {
            let search = $('#search').val();
            console.log(search);
            $.ajax({
                url: 'task-search.php',
                type: 'POST',
                data: { search },
                success: function (response) {
                    let tareas = JSON.parse(response);
                    let template = '';
                    tareas.forEach(tarea => {
                        template +=
                            `<li>
                         ${tarea.nombre}  ${tarea.descripcion}  
                         </li>`;
                    });
                    $('#container').html(template);
                    $('#task_result').show();
                }

            })
        }
    });

    $('#formulario_tareas').submit(function (e) {
        const postData = {
            nombre: $('#nombre').val(),
            descripcion: $('#descripcion').val()
        };
        $.post('task_add.php', postData, function (response) {
            console.log(response);
            $('#formulario_tareas').trigger('reset');
            cargarTareas();
        });
        e.preventDefault();
    });
    function cargarTareas() {
        $.ajax({
            url: 'task_list.php',
            type: 'GET',
            success: function (response) {
                let tareas = JSON.parse(response);
                template = '';
                tareas.forEach(tarea => {
                    template += `
            <tr tareaId="${tarea.id}">
              <td>${tarea.id}</td>
              <td>${tarea.nombre}</td>
              <td>${tarea.descripcion}</td>
              <td> <button class="task-delete btn btn-danger"> Eliminar </button> </td>
            </tr>`;
                });
                $('#tasks').html(template);
            }

        });
    }
    
  
    $(document).on('click','.task-delete',function(){
        if(confirm('estas seguro que quieres eliminar ese registro')){
            element =$(this)[0].parentElement.parentElement;
        id=$(element).attr('tareaId');
        $.post('elimina_tarea.php', {id}, function (response) {
           console.log(response);
           cargarTareas();
        });

        }
    });
});