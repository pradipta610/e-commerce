  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="{{ url('home') }}" class="navbar-brand">
        <img src="images/logo.svg" alt="logo">
      </a>
      <button type="button" data-target="#navbarResponsive" class="navbar-toggler" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="{{ url('home') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('categories') }}" class="nav-link">Category</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Reward</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>