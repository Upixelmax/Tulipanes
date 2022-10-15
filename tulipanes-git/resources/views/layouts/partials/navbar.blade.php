<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tulipanes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <form class="d-flex" role="search">
        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->username}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      </form>

    </div>
  </div>
</nav>