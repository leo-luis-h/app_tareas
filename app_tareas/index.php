<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>aplicacion de tareas</title>
   <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar  navbar-dark bg-dark navbar-collapse-sm">
      <a href="#" class="navbar-brand">Aplicacion de tareas</a>
     
      <ul class="navbar-nav ml-auto justify-content-between">
        <form class="form-inline my-2 my-lg-0 d-lg-flex" >
          <input type="search"id="search" class="form-control mr-sm-2 p-2" placeholder="buscar"/>
          <button class="btn btn-success my-2 my-sm-0 p-2" type="submit">
            buscar
          </button>
        </form>
      </ul>
    </nav>

    <div class="container p-4">
        <div class="row">  
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form id="formulario_tareas">
                            <div class="form-group">
                                <input type="text" id="nombre" class="form-control" placeholder="escribe tu tarea">
                            </div>
                            <div class="form-group">
                                <textarea id="descripcion" cols="30" rows="10" class="form-control" placeholder="descripcion"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block text-center">guardar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
              <div class="card my-4" id="task_result">
                <div class="card-body">
                  <ul id="container"></ul>
                </div>
              </div>
                <table class="table table-bordered table-sm">
                    <thead> 
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>descripcion</td>
                    </tr>    
                    </thead>
                    <tbody id="tasks">

                    </tbody>
                </table>
            </div>
         </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="app.js"></script>
  </body>
</html>
