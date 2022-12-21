<?php
include("conexion.php");

$conexion = conexion();

$sql = "SELECT * FROM oradores";

$query = mysqli_query($conexion, $sql);
/*
echo "<pre>";
print_r($query);
echo "</pre>";


$registros = mysqli_fetch_all($query);
echo "<pre>";
var_dump($registros);
echo "</pre>";
*/

include "headerHtml.php";
include "nav.php";
?>


<main class="container mt-4">
    <h1>Lista de Oradores</h1>
    <a class="navbar-brand dark text-white" href="#nuevo">
        <img src="img/agregar.png" alt="codoacodo" height="40"></a>
    <table class=" table table-striped">
        <thead>
            <!--<th>id</th> -->
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Asunto</th>
        </thead>
        <tbody>
            <?php
            while ($fila = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <!--<td><?php echo $fila["id"] ?></td> -->
                    <td><?php echo $fila["Nombre"] ?></td>
                    <td><?php echo $fila["Apellido"] ?></td>
                    <td><?php echo $fila["Asunto"] ?></td>
                    <td><a href="formEditarOrador.php?id=<?php echo $fila["id"] ?>">
                            <img src="img/editar.png" alt="editar" height="30"></a>
                    </td>
                    <td>
                    <td><a href="eliminarOrador.php?id=<?php echo $fila["id"] ?>">
                            <img src="img/remove.png" alt="eliminar" height="30"></a>
                    </td>
                    <!-- <td><a href="formEditarOrador.php?id=<?php echo $fila["id"] ?>"><button>Editar</button></a></td>
                    <td><a href="eliminarOrador.php?id=<?php echo $fila["id"] ?>"><button>Eliminar</button></a></td> -->
                </tr>
            <?php    }  ?>
            <br />
</main>
</tbody>
</table>
<br />
<h2 id="nuevo">Nuevo Orador</h2>
<form action="agregarOrador.php" method="post">
    <div class="row mb-md-3 ">
        <div class="row mb-3 mx-auto col-md me-md-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div class="row mb-3 mx-auto col-md">
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
        </div>
    </div>
    <div class="mb-1">
        <textarea class="form-control" name="asunto" id="asunto" placeholder="Sobre qué quieres hablar?" rows="3"></textarea>
    </div>
    <div class="form-text text-align-start mb-3">Recuerda incluir un título para tu charla.</div>
    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>


<?php include "footerHtml.php" ?>