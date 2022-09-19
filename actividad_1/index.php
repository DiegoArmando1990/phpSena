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
                    <input type="text" class="form-control" id="Telefono" nane="Telefono" aria-describedby="escriba su telefono">
                </div>
                <div class="mb-3">
                    <label for="FechaN" class="form-label"> <h6>Ingrese su fecha de nacimiento:</h6></label>
                    <input type="date" class="form-control" id="FechaN" name="FechaN" aria-describedby="escriba su fecha de nacimiento">
                </div>
                <div class="mb-3">
                    <label for="Color" class="form-label"> <h6>Ingrese su color favorito</h6></label>
                    <input type="text" class="form-control" id="Color" name="Color" aria-describedby="escriba su color favorito">
                </div>   
               <button type="submit" class="btn btn-primary"  data-bs-toggle="collapse" href="#tablaP"   aria-expanded="false" aria-controls="collapseExample"  name="submit">Guardar</button>                                 
            </form>
        </div>
        <!--------------------------------------------->    
        <?php
        if(empty($_GET["Nombre0"])){
            $nombres = "pendientes";
        }else{$nombres = $_GET["Nombre0"];}
        
        if(empty($_GET["Direccion"])){
            $direccion = "pendientes";
        }else{$direccion = $_GET["Direccion"];}  
        
        if(empty($_GET["Telefono"])){
            $telefono = "pendientes";
        }else{$direccion = $_GET["Telefono"];}  
        
        if(empty($_GET["FechaN"])){
            $fechaN = "pendiente";
        }
        else{
            $fechaN = $_GET["FechaN"];
            $cumpleA = date("d/m/Y", strtotime($fechaN));
            $month= date("d",strtotime($cumpleA));
            $day = date("m",strtotime($cumpleA));
            $year = date("Y",strtotime($cumpleA));
            $actual = date('Y');
            if("$year" != "$actual"){
            $fechaN = array('Dia:',$day,' Mes: ',$month,' Año: ',$actual);
            }
        }   
        
        /*gestion de colores*/
        if(empty($_GET["Color"])){
            $color = "pendientes";
        }else{
            $color = $_GET["Color"];
            switch ($color)
            {
                case "amarillo":
                    $amarillo = "su color preferido es amarillo";
                    $color = $amarillo;
                    break;
                case "Amarillo":
                    $amarillo = "su color preferido es amarillo";
                    $color = $amarillo;
                    break;
                case "AMARILLO":
                    $amarillo = "su color preferido es amarillo";
                    $color = $amarillo;
                    break;
                case "azul":
                    $azul = "su color preferido es azul";
                    $color = $azul;
                    break;
                case "Azul":
                    $azul = "su color preferido es azul";
                    $color = $azul;
                    break;
                case "blanco":
                    $blanco = "su color preferido es blanco";
                    $color = $blanco;
                    break; 
                case "Blanco":
                    $blanco = "su color preferido es blanco";
                    $color = $blanco;
                    break; 
                case "BLANCO":
                    $blanco = "su color preferido es blanco";
                    $color = $blanco;
                    break; 
                case "verde":
                    $verde = "su color  preferido es verde";
                    $color = $verde;
                    break;
               case "Verde":
                    $verde = "su color  preferido es verde";
                    $color = $verde;
                    break;
                case "VERDE":
                    $verde = "su color  preferido es verde";
                    $color = $verde;
                    break;
                case "rojo":
                    $rojo = "su color preferido es rojo";
                    $color = $rojo;
                    break;
                case "Rojo":
                    $rojo = "su color preferido es rojo";
                    $color = $rojo;
                    break;
                case "ROJO":
                    $rojo = "su color preferido es rojo";
                    $color = $rojo;
                    break;
                case "negro":
                    $negro = "su color preferido es negro";
                    $color = $amarilloo;
                    break;
                case "Negro":
                    $negro = "su color preferido esxnegro";
                    $color = $amarilloo;
                    break;
                case "NEGRO":
                    $negro = "su color preferido es negro";
                    $color = $amarilloo;
                    break;
                case "naranja":
                    $naranja = "su color preferifo es naranja";
                    $color = $naranja;
                    break;
                case "Naranja":
                    $naranja = "su color preferifo es naranja";
                    $color = $naranja;
                    break;
               case "NARANJA":
                    $naranja = "su color preferifo es naranja";
                    $color = $naranja;
                    break;
                case "anaranjado":
                    $naranja = "su color preferifo es naranja";
                    $color = $naranja;
                    break;
                case "Anaranjado":
                    $naranja = "su color preferifo es naranja";
                    $color = $naranja;
                    break;
                case "ANARANJADO":
                    $naranja = "su color preferifo es naranja";
                    $color = $naranja;
                    break;
                case "morado":
                    $morado = "su color preferido es morado";
                    $color = $morado;
                    break;
                case "Morado":
                    $morado = "su color preferido es morado";
                    $color = $morado;
                    break;
               case "MORADO":
                    $morado = "su color preferido es morado";
                    $color = $morado;
                    break;
                case "purpura":
                    $morado = "su color preferido es morado";
                    $color = $morado;
                    break;
                case "Purpura":
                    $morado = "su color preferido es morado";
                    $color = $morado;
                    break;  
                case "PURPURA":
                    $morado = "su color preferido es morado";
                    $color = $morado;
                    break;
                case "cafe":
                    $cafe = "su color preferido es cafe";
                    $color = $cafe;
                    break;
                case "Cafe":
                    $cafe = "su color preferido es cafe";
                    $color = $cafe;
                    break;   
                case "CAFE":
                    $cafe = "su color preferido es cafe";
                    $color = $cafe;
                    break;

                default : $color = "su color no esta contemplado";     
            }
        }
        /*gestion de significados*/
        $significado = $color;
        switch ($color){
            case empty($azul):
                    $azul = "null";
            case empty($amarillo):
                    $amarillo = "null";
            case empty($blanco):
                    $blanco = "null";
            case empty($verde):
                    $verde = "null";
            case empty($rojo):
                    $rojo = "null";
            case empty($negro):
                    $negro = "null";
            case empty($naranja):
                    $naranja = "null";
            case empty($morado):
                    $morado = "null";
            case empty($cafe):
                    $cafe = "null";            
        }
        switch($color){
                case $azul:
                    $significado = "significa constancia, autoritarismo y confianza";
                case $amarillo:
                    $significado = "significa energía, resplandor y brillantez";
                case $blanco:
                    $significado = "significa pureza y bondad";
                case $verde:
                    $significado = "significa celos, envidia, Ecología y salud";
                case $rojo:
                    $significado = "significa atracción, andrenalina, amor y pasión";
                case $negro:
                    $significado = "significa elegancia, mal, noche y obscuridad";
                case $naranja:
                    $significado = "significa alegria, creatividad y éxito";
                case $morado:
                    $significado = "significa realeza, poder,lugo y ambición";
                case $cafe:
                    $significado = "significa Estabilidad, protección y seguridad";
                            
        }
        ?>
        <hr>
        <div class=" container border   border-secondary border-4 rounded bg-secondary bg-success p-2" style="--bs-bg-opacity: .1;" id="tablaP">
            <table class="table rounded">
                
                <thead class="bg-primary bg-succes p-2" style="--bs-bg-opacity: .2;">
                    <tr>
                        <th scope="col ">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Fecha de Cumpleaños</th>
                        <th scope="col"> Color Favorito</th>
                        <th scope="col">Significado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="fs-6">
                        <th scope="row"><?php echo "$nombres"; ?></th>
                        <th scope="row"><?php echo "$direccion"; ?></th>
                        <th scope="row"><?php echo "$telefono"; ?></th>
                        <th scope="row">
                            <?php 
                                echo"$fechaN[0]"; 
                                echo"$fechaN[1]";
                                echo"$fechaN[2]";
                                echo"$fechaN[3]";
                                echo"$fechaN[4]";
                                echo"$fechaN[5]";
                            ?>
                        </th>
                        <th scope="row"><?php echo "$color"; ?></th>
                        <th scope="row"><?php echo "$significado"?></th>                        
                        
                    </tr>
                </tbody>
            </table>
        </div></div>
    </body>
</html>
