<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Inventory Management')</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
          <div class="position-sticky d-flex flex-column h-100">
            <!-- Logo and Title -->
            <div class="text-center py-3 border-bottom">
              <h4 class="m-0">Inventory</h4>
            </div>

            <!-- Navigation Links -->
            <ul class="nav flex-column flex-grow-1" style="overflow-y: auto; max-height: calc(100vh - 160px);">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">
                  <i class="fas fa-home me-2"></i>Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('barang.index')}}">
                  <i class="fas fa-box me-2"></i>Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/categories">
                  <i class="fas fa-folder me-2"></i>Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/suppliers">
                  <i class="fas fa-truck me-2"></i>Suppliers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/reports">
                  <i class="fas fa-chart-bar me-2"></i>Reports
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="border-bottom">

<!-- Profile and Options -->
<div class="mt-auto">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link text-danger" href="/logout">
        <i class="fas fa-sign-out-alt me-2"></i>Logout
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/settings">
        <i class="fas fa-cog me-2"></i>Settings
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/theme">
        <i class="fas fa-adjust me-2"></i>Change Theme
      </a>
    </li>
  </ul>
  <hr class="border-bottom">
  <div class="d-flex align-items-center p-3 border-top">
    <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
    <div>
      <p class="m-0">John Doe</p>
      <small class="text-muted">123456789</small>
    </div>
  </div>
  </div>

        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow-y: auto; max-height: 100vh;">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">@yield('header', 'Dashboard')</h1>
          </div>

          <div>
            @yield('content')
          </div>
        </main>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
