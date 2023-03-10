<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Integrador Front 2022</title>


</head>

<body>
    <header>
        <?php
        include "nav.php";
        ?>

    </header>


    <main>
        <section class="container pt-section">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 mt-5">
                    <div class="row row-cols-1 row-cols-md-3 text-center">
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                                <div class="card-header py-3 text white bg-primary border-primary">
                                    <h4 class="my-0 fw-normal">Estudiante</h4>
                                </div>
                                <div class="card-body">
                                    <p>Tienen un descuento</p>
                                    <h3 class="card-title pricing-card-title">80%</h3>
                                    <small class="fw-light text-muted mt-3">* Presentar documentación</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm border-info">
                                <div class="card-header py-3 text white bg-info border-info">
                                    <h4 class="my-0 fw-normal">Trainee</h4>
                                </div>
                                <div class="card-body">
                                    <p>Tienen un descuento</p>
                                    <h3 class="card-title pricing-card-title">50%</h3>
                                    <small class="fw-light text-muted mt-3">* Presentar documentación</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm border-warning">
                                <div class="card-header py-3 text white bg-warning border-warning">
                                    <h4 class="my-0 fw-normal">Junior</h4>
                                </div>
                                <div class="card-body">
                                    <p>Tienen un descuento</p>
                                    <h3 class="card-title pricing-card-title">15%</h3>
                                    <small class="fw-light text-muted mt-3">* Presentar documentación</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row d-flex justify-content-center mt-5">
            <div class="col-6 justify-content-center">
                <div class="text-center">
                    <p class="text-center">Venta
                    <h3 class="text-center">VALOR DE TICKET<h3 id="precio"></h3>
                        </p>
                </div>
                <form>
                    <div class="row mb-md-3 ">
                        <div class="row mb-3 mx-auto col-md me-md-3">
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" id="nombre" required>
                        </div>
                        <div class="row mb-3 mx-auto col-md">
                            <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" id="apellido" required>
                        </div>
                    </div>
                    <div class="row mb-md-3 mx-auto">
                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" id="email" required>
                    </div>
                    <div class="row mb-md-3 ">
                        <div class="row mb-3 mx-auto col-md me-md-3">
                            <label for="cantidadTickets" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" placeholder="Cantidad" id="cantidadTickets" aria-label="Cantidad" min="1" required>
                        </div>
                        <div class="row mb-3 mx-auto col-md">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select class="form-select" id="categoria" aria-label="Categoría" required>
                                <option value="" disabled selected>-- Seleccione --</option>
                                <option value="0">Sin Categoría</option>
                                <option value="1">Estudiante</option>
                                <option value="2">Trainee</option>
                                <option value="3">Junior</option>
                            </select>
                        </div>
                    </div>
                    <div class="alert alert-primary mt-2 mb-4" id="total" role="alert">
                        Total a Pagar: $
                    </div>
                    <div class="form-text text-align-start mb-3">Recuerda incluir un título para tu charla.</div>


                    <div class="row gx-2">
                        <div class="col">
                            <button type="reset" class="w-100 btn btn-success" id="btnBorrar">Borrar</button>
                        </div>
                        <div class="col">
                            <button type="button" class="w-100 btn btn btn-form btn-primary active" id="btnResumen">Resumen</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>


    <footer class="bg-dark text-center text-white mt-5 py-3">
        <div class="d-flex justify-content-around">
            <nav class="nav justify-content-center flex-lg-row">
                <a class="nav-link text-white" href="#">Preguntas frecuentes</a>
                <a class="nav-link text-white" href="#">Contáctanos</a>
                <a class="nav-link text-white" href="#">Prensa</a>
                <a class="nav-link text-white" href="#">Conferencias</a>
                <a class="nav-link text-white" href="#">Términos y condiciones</a>
                <a class="nav-link text-white" href="#">Privacidad</a>
                <a class="nav-link text-white" href="#">Estudiantes</a>
            </nav>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>