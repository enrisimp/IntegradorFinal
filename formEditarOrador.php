<?php
/*echo "<pre>";
var_dump($_GET);
echo "</pre>";
*/
include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM oradores WHERE id = $id";

$query = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($query);

include "headerHtml.php";
include "nav.php";
?>

<section class="container mt-4">
    <form action="editarOrador.php" method="post">
        <input type="text" name="id" id="" value="<?php echo $fila["id"] ?>" hidden>
        <div class="row mb-md-3 ">
            <div class="row mb-3 mx-auto col-md me-md-3">
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $fila["Nombre"] ?>">
            </div>
            <div class="row mb-3 mx-auto col-md">
                <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $fila["Apellido"] ?>">
            </div>
        </div>
        <div class="mb-1">
            <input type="text" class="form-control" name="asunto" id="asunto" value="<?php echo $fila["Asunto"] ?>">
        </div>
        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-warning">Modificar</button>
        </div>
    </form>
</section>

<?php include "footerHtml.php" ?>