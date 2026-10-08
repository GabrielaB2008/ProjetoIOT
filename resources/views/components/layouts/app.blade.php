<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto IOT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>

    <div class="d-flex min-vh-100">

        @if(!Route::is('login') && !Route::is('register'))
            <aside class="text-white p-3 flex-shrink-0" style="width: 280px; background: linear-gradient(180deg, #393a3a 0%, #641a8c 100%);">

                <div class="d-flex align-items-center gap-2 px-2 pb-3">
                    <div class="d-flex align-items-center justify-content-center rounded-3 shadow"
                         style="width:44px;height:44px;background:#62098f;">
                        <i class="bi bi-activity fs-4"></i>
                    </div>
                    <div class="lh-1">
                        <div class="fs-5 fw-bold">Projeto IOT</div>
                    </div>
                </div>

                

                <nav class="nav flex-column gap-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ambientes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('ambiente.create') }}">Cadastrar novo
                                    ambiente</a></li>
                            <li><a class="dropdown-item" href="{{ route('ambiente.index') }}">Ambientes cadastrados</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sensores
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('sensor.create') }}">Cadastrar novo
                                    sensor</a></li>
                            <li><a class="dropdown-item" href="{{ route('sensor.index') }}">Sensores cadastrados</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Registros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Novo Registro</a></li>
                            <li><a class="dropdown-item" href="">Histórico de Registros</a>
                            </li>
                        </ul>
                    </li>
                </nav>
            </aside>
        @endif

        <main class="flex-grow-1 p-4 bg-body-secondary" 
              @if(Route::is ('login') ) style="width: 100%;" @endif>
            {{ $slot }}
        </main>

    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html>