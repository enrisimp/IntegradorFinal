<?php
include "headerHtml.php";
include "nav.php";
?>

<div id="fondo" class="bg-image" style="background: url('img/ba1.jpg');  
            height: 100vh;background-size:cover;" class="d-flex flex-end">
    <div class="mask d-flex justify-content-end" style="background-color: rgba(0, 0, 0, 0.7);height: 100vh;background-size:cover;">
        <div class="col-4 text-end d-flex align-items-space-around flex-column justify-content-center h-100 text-white" style="margin-right:10%;">

            <h1 class="text-white mb-1">
                Conf Bs As</h1>

            <p>Bs As llega por primera vez a Argentina. Un evento para compartir con
                nuestra comunidad el conocimiento y experiencia de los expertos que
                están creando el futuro de Internet. Ven a conocer a miembros del
                evento, a otros estudiantes de Codo a Codo y los oradores de primer
                nivel que tenemos para ti. Te esperamos!</p>
            <div>
                <a class="btn btn-outline-light" href="#conviertete">Quiero ser orador</a>
                <a class="button btn btn-success" href="comprar_tickets.php">Comprar tickets</a>
            </div>
        </div>
    </div>
</div>


</header>

<main class="container col-9 mt-5" id="oradores">
    <div class="text-center">
        <p class="text-center">CONOCE A LOS
        <h2 class="text-center">ORADORES</h2>
        </p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="img/steve.jpg" alt="SteveJobs" class="card-img-top" alt="HTML5" height="350">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted"><span class="badge text-bg-warning">JavaScript</span> <span class="badge text-bg-info">React</span> </small></p>
                    <h5 class="card-title">Steve Jobs</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus
                        perferendis deleniti, totam fuga sequi iste!
                        Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis
                        veniam magni ratione!</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/bill.jpg" alt="BillGates" class="card-img-top" alt="CSS3" height="350">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">
                            <span class="badge text-bg-warning">JavaScript</span>
                            <span class="badge text-bg-info">React</span> </small></p>
                    <h5 class="card-title">Bill Gates</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                        voluptatibus perferendis deleniti, totam fuga sequi iste!
                        Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis
                        veniam magni ratione!</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="img/ada.jpeg" alt="AdaLovelace" class="card-img-top" alt="boot" height="350">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">
                            <span class="badge text-bg-danger">Negocios</span>
                            <span class="badge text-bg-secondary">Startups</span> </small></p>
                    <h5 class="card-title">Ada Lovelace</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                        voluptatibus perferendis deleniti,
                        totam fuga sequi iste!
                        Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis
                        veniam magni ratione!</p>
                </div>
            </div>
        </div>
    </div>
</main>
<section class="mt-5" id="lugar">
    <div class="row g-0">
        <div class="col border border-white m-0">
            <img src="img/honolulu.jpg" alt="PlayaHonolulu" class="img-fluid">
        </div>
        <div class="col bg-dark text-white border border-white d-inline p-3">
            <h5 class="card-title ">Bs As - Octubre</h5>
            <p class="card-text">
                Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu es la
                más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área
                urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-
                condado consolidada que cubre toda la ciudad (aproximadamente 600 km2 de superficie).</p>
            <a href="#" class="btn btn-outline-light ">Conocé más</a>
        </div>
</section>
<section class="row d-flex justify-content-center mt-5" id="conviertete">
    <div class="col-6 justify-content-center">
        <div class="text-center">
            <p class="text-center">CONVIÉRTETE EN UN
            <h3 class="text-center">ORADOR</h3>
            Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</p>
        </div>
        <form action="agregarOradorIndex.php" method="post">
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
    </div>
</section>
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
            <a class="nav-link text-white" href="listaInscripcion.php">Uso Interno</a>
        </nav>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>