
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="Kodinger, template, html5, css3, bootstrap4">
    <meta name="description" content="HTML5 and CSS3 Template Based on Bootstrap 4">
    <title>I'm Stisla</title>
    <link rel="stylesheet" href="/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" href="/css/stisla.css">
</head>

<body>
<nav class="navbar navbar-expand-lg main-navbar sticky-top" style="background-color:#292929;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:white;">
          Academia Cierva
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link smooth-link" href="#hero">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-link" href="#features">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-link" href="#blog">Profesores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-link" href="#project">Project</a>
                </li>
            </ul>
            @if(Auth::check())

                <a href="/panel">Bienvenido, {{ auth()->user()->apellidos }} {{ auth()->user()->nombre }}</a>
                @else

                <form class="form-inline">
                    <a href="/login" class="btn smooth-link align-middle btn-primary" style="margin-right:10px;">Iniciar sesión</a>
                </form>

            @endif
        </div>
    </div>
</nav>
<section class="hero bg-overlay" id="hero" data-bg="img/hero.jpeg">
    <div class="text">
        <h1>Bienvenidos a <span class="bold">Academia Cierva</span></h1>
        <div class="cta">
            <a href="#features" class="btn btn-primary smooth-link">Acceder</a>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <h3>
            Academia Cierva
        </h3>
        <p>
            Copyright &copy; <?php echo date('Y') ?> Academia Cierva
        </p>
    </div>
</footer>
<script src="/js/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/jquery.easeScroll.js"></script>
<script src="/sweetalert/dist/sweetalert.min.js"></script>
<script src="/js/stisla.js"></script>
</body>
</html>