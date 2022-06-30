<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Administrador</title>
    <link rel="shorcut icon" href="./img/favicon.png">
    <!--Hoja de estilos------------>
    <link rel="stylesheet" href="/css/menu-admin.css">
     
</head>
<body>
    @csrf
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Seguro-X</h1>
			</div>
			<nav class="menu">
				<li><a href="#">Iniccio</a>
					<ul class="submenu">
						<li class="itemlist"><a href="#">Servicio #1</a></li>
						<li class="itemlist"><a href="#">Servicio #2</a></li>
						<li class="itemlist"><a href="#">Servicio #3</a></li>
					</ul>
				</li>
				<li><a href="#">No se que poner</a>
					<ul class="submenu">
						<li class="itemlist"><a href="#">Servicio #1</a></li>
						<li class="itemlist"><a href="#">Servicio #2</a></li>
						<li class="itemlist"><a href="#">Servicio #3</a></li>
					</ul>
				</li>
				<li><a href="#">EL yervaVueloz.com</a>
					<ul class="submenu">
						<li class="itemlist"><a href="#">Servicio #1</a></li>
						<li class="itemlist"><a href="#">Servicio #2</a></li>
						<li class="itemlist"><a href="#">Servicio #3</a></li>
					</ul>
				</li>
                <a class="button-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    style="background-color: #6d6e70">
                    {{ __('Cerrar sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                </form>
                </div>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Portafolio</a>
			<a href="#">Servicios</a>
			<a href="#">Suscribirse</a>
			<a href="#">Facebook</a>
			<a href="#">Youtube</a>
			<a href="#">Instagram</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
<!--	--------------->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pagina principal') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('Iniciaste sesión') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tabla-content">
    <table>
        <h2>
            <ul class="listatitulotabla">
                <li class="idhead">id</li>
                <li class="nombrehead">nombre</li>
                <li class="rolhead">rol</li>
                <li class="edadhead">edad</li>
                <li class="fechahead">fecharegistro</li>
            </ul>
        </h2>
        <tbody>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
        </tbody>
    </table>
</div>

</div>

</body>
</html>
