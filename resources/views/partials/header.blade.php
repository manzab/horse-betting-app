<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {{ Request::routeIs('horses.index') ? 'active' : '' }}"
          href="{{ route('horses.index') }}">Horses</a>
        <a class="nav-item nav-link {{ Request::routeIs('betters.index') ? 'active' : '' }}"
          href="{{ route('betters.index') }}">Betters</a>
      </div>
    </div>
  </nav>