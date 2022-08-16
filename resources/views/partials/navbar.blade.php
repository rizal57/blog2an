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
          <a class="nav-link {{ ($active == 'posts') ? 'active' : '' }}" href="/posts"><i class="bi bi-file-post"></i></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-person-bounding-box"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-github"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="#" class="nav-link"><i class="bi bi-person-circle"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>