<?php include("../template/cabecera.php");?>
<?php
    print_r($_POST);
    print_r($_FILES);
?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            DATOS DE LIBRO
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class = "form-group">
            <label for="txtID">ID:</label>
            <input type="text" class="form-control" name="txtId" placeholder="ID">
            </div>

            <div class = "form-group">
            <label for="txtNombre">NOMBRE: </label>
            <input type="text" class="form-control" name="txtNombre" placeholder="Nombre del libro">
            </div>

            <div class = "form-group">
            <label for="txtIMG">IMAGEN: </label>
            <input type="file" class="form-control" name="txtIMG" >
            </div>

            <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" value="agregar" class="btn btn-success">AGREGAR</button>
            <button type="submit" name="accion" value="modificar" class="btn btn-warning">MODIFICAR</button>
            <button type="submit" name="accion" value="cancelar" class="btn btn-info">CANCELAR</button>
            </div>
        </div>
    </div>

    
    
    

</div>

<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>IMAGEN</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende</td>
                <td>imagen.jpg</td>
                <td>seleccionar | borrar </td>
            </tr>
        </tbody>
    </table>
</div>


<?php include("../template/pie.php");?>