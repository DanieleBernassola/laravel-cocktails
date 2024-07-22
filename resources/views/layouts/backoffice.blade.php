<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    @vite(['resources/js/app.js'])
    <title></title>
</head>
<body>
    <!-- header per tablet e smartphone -->
    <div class="col-12 d-block d-md-none ">
        <!-- nav-bar -->
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Bootstrap Dashboard</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/projects/create') }}">Create</a>
                    </li>
                </ul>
            </div>
          </div>
      </nav>
    </div>

    <main class="d-flex overflow-hidden bg-dark">
        <!-- side-bar -->
        <div class=" col-md-3 col-lg-3 d-flex flex-column flex-shrink-0 p-3 text-white d-none d-md-block bg-dark min-vh-100">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <span class="fs-4">Admin Area</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
              <li>
                  <a href="{{ url('/') }}" class="nav-link text-white bg-light-hover" aria-current="page">
                      <i class="fas fa-house d-inline me-2"></i>
                      <span class="d-none d-md-inline-block">Cocktail's Website</span>
                  </a>
              </li>
              <li>
                  <a href="{{ url('/') }}" class="nav-link text-white bg-light-hover">
                      <i class="fa-solid fa-chart-simple d-inline  me-2"></i>
                      <span class="d-none d-md-inline-block">Cocktails List</span>
                  </a>
              </li>
              <li>
                  <a href="{{ url('/create') }}" class="nav-link text-white bg-light-hover">
                      <i class="fa-solid fa-plus d-inline me-2"></i>
                      <span class="d-none d-md-inline-block">Create new Cocktail</span>
                  </a>
              </li>
          </ul>
          <hr>
          <div>
            <div class="d-flex">
                <div class="my-1">
                    <img src="https://avatars.githubusercontent.com/u/162736759?v=4" alt="" width="32" height="32" class="rounded-circle me-2 mx-1">
                </div>
              </div>
          </div>
      </div>

          <!-- content -->
        <div class="col-1 m-3 p-2 mx-4 mt-4 flex-grow-1">

        @yield('content')

        </div>
    </main>
</body>
<<<<<<< HEAD
=======

>>>>>>> feat/create/alessandro
</html>