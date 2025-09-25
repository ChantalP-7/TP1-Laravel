<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../css/app.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Charm:wght@400;700&family=Klee+One&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Charm:wght@400;700&display=swap');
          body {
            font-family: "Klee One";
            font-style: normal;
          }

          .klee-one-bold {
            font-family: "Klee One", cursive;
            font-weight: 700;
            font-style: normal;
          }


          .charm-bold {
            font-family: "Charm", cursive !important;
            font-weight: 700;
            font-style: normal;
          }
          .amita-regular {
            font-family: "Amita", serif;
            font-weight: 400;
            font-style: normal;
          }

          .amita-bold {
            font-family: "Amita", serif;
            font-weight: 700;
            font-style: normal;
          }
          
          
          .btn-special {
            border: 1px dotted rgba(5, 24, 59, 0.9) !important;
            color: rgba(5, 24, 59, 0.9) !important;
          }
          .btn-special:hover {
            background-color: rgba(5, 24, 59, 0.9);
            color: #fff !important;
          }
          .background {
            background-color: rgba(5, 24, 59, 0.9);
          }
          .btn-background {
            background-color: rgba(5, 24, 59, 0.9) !important;
            border: 1px solid transparent;
            color:#fff;
          }
          .btn-background:hover {
            color: rgba(5, 24, 59, 0.9); 
            background-color: #fff !important;          
            border-color: rgba(5, 24, 59, 0.9) !important;
          }
          

    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="mb-5 background">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <!--<a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto gap-3 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" aria-current="page" href="{{route('etudiant.index')}}">Étudiants</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white fs-4" href="{{route('ville.index')}}">Villes</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Section étudiants
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-5" href="{{ route('etudiant.create') }}">Ajoute un étudiant</a></li>
                        <li><a class="dropdown-item fs-5" href="{{route('ville.index')}}">Villes</a></li>
                        <li><a class="dropdown-item fs-5" href="#">Date de naissance</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item fs-5" href="#">Archives</a></li>
                    </ul>
                    </li>        
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn bg-white" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        
    <div class="container flex-grow-1">
         @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                 {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </div>
    </main>
    <footer class="footer mt-auto py-3 background text-white">
        <div class="container text-center">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>