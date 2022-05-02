<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="{{ route('home') }}" class="navbar-brand">
        <img src="/images/logo.svg" alt="logo">
      </a>
      <button type="button" data-target="#navbarResponsive" class="navbar-toggler" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories') }}" class="nav-link">Category</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Reward</a>
          </li>
          <li class="nav-item">
            <a href="/register.html" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="/Login.html" class="btn btn-success px-4 text-white">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>