<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"><i class="bi bi-house-door-fill"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="/posts"><i class="bi bi-file-post"></i></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('authors*') ? 'active' : '' }}" href="/authors"><i class="bi bi-person-bounding-box"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/rizal57/blog2an" target="_blank"><i class="bi bi-github"></i></a>
        </li>
      </ul>

      <div class="dropdown ms-auto ">
        <button class="btn dropdown-toggle border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      @auth
        <i class="bi bi-person-circle" style="font-size: 1.3rem"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </li>
      @else
        <i class="bi bi-box-arrow-in-right" style="font-size: 1.3rem"></i>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/login">Login</a></li>
          <li><a class="dropdown-item" href="/register">Register</a></li>
      @endauth
        </ul>
      </div>

    </div>
  </div>
</nav>