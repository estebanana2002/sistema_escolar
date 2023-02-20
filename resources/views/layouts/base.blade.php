<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/styles.css')}}">
    <script src="https://kit.fontawesome.com/1d5ed27c88.js" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Productos</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Noc xd</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('login.index')}}">Login <span class="visually-hidden">(current)</span></a>
                </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuarioss.index')}}">Usuarios</a>
                </li>
            @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('products.index')}}">Productos <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categorias.index')}}">Categorias</a>
                </li>

            </ul>
            <form action="{{route('login.destroy')}}" class="d-flex my-2 my-lg-0" method="post">
                @method('put')
                @csrf
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log out</button>
            </form>
            @endauth
        </div>
    </div>
</nav>
    <div class="container-fluid">
        @yield('content')
    </div>


</body>


</html>

