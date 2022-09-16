<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unidad 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>    
    
    </head>
    <body>
<h1 class="text-center"> 1</h1>
   <div>     <div class="container border   border-secondary border-4 rounded bg-secondary bg-success p-2" style="--bs-bg-opacity: .1;">
           <form method="GET" >
                <div class="mb-3">
                    <label for="Nombre" class="form-label"> <h6>Ingrese un nombre:</h6></label>
                    <input type="text" class="form-control" id="Nombre" aria-describedby="escriba sus nombres" name="Nombre0">
                </div>
                <div class="mb-3">
                    <label for="Direccion" class="form-label"> <h6>Ingrese una Dirección:</h6></label>
                    <input type="text" class="form-control" id="Direccion" aria-describedby="escriba su Direccion" name="Direccion">
                </div>
                <div class="mb-3">
                    <label for="Telefono" class="form-label"> <h6>Ingrese un Teléfono:</h6></label>
                    <input type="text" class="form-control" id="Telefono" aria-describedby="escriba su telefono">
                </div>
                <div class="mb-3">
                    <label for="FechaN" class="form-label"> <h6>Ingrese su fecha de nacimiento:</h6></label>
                    <input type="text" class="form-control" id="FechaN" aria-describedby="escriba su fecha de nacimiento">
                </div>
                <div class="mb-3">
                    <label for="Color" class="form-label"> <h6>Ingrese su color favorito</h6></label>
                    <input type="text" class="form-control" id="Color" aria-describedby="escriba su color favorito">
                </div>   
                <button type="submit" class="btn btn-primary" name="submit">Guardar</button>                                 
            </form>
        </div>
        <!--------------------------------------------->    
        <?php
        $nombres; 
        $direccion ;
        $telefono;
        $fechaN;
        $color;
        $significado;
        if(isset($_GET["submit"])&& !empty($_GET["submit"])) {
            $nombres = $_GET["Nombre0"];

        }
        ?>
        <div class="container border   border-secondary border-4 rounded bg-secondary bg-success p-2" style="--bs-bg-opacity: .1;">
            <table class="table rounded" id="tablaP">
                <thead class="bg-primary bg-succes p-2" style="--bs-bg-opacity: .2;">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de Cumpleaños</th>
                        <th scope="col"> Color Favorito</th>
                        <th scope="col">Significado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo "$nombres"?></th>

                        <td colspan="2"><?php echo "$direccion"?></td>
                    </tr>
                </tbody>
            </table>
        </div></div>
    </body>
</html>
