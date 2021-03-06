<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    @stack('prepend-style')
        <title>@yield('title')</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link href="{{ url('style/main.css') }}" rel="stylesheet" />
    @stack('addon-style')
  </head>

  <body>
    
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/logo.svg" class="my-4" alt="">
            <p>User Dashboard</p>
          </div>
          <div class="list-group list-group-flush">
            <a href="{{ route("dashboard") }}" class="list-group-item list-group-item-action active">
              Dashboard
            </a>
            <a href="{{ route("dashboard-product") }}" class="list-group-item list-group-item-action  ">
              My Products
            </a>
            <a href="{{ route("dashboard-product-transactions") }}" class="list-group-item list-group-item-action  ">
              Transactions
            </a>
            <a href="{{ route("dashboard-settings-store") }}" class="list-group-item list-group-item-action  ">
              Store settings
            </a>
            <a href="{{ route("dashboard-settings-account") }}" class="list-group-item list-group-item-action  ">
              My Accounts
            </a>
            <a href="{{ route("home") }}" class="list-group-item list-group-item-action  ">
              Sign Out
            </a>
          </div>
        </div>
        <!-- navbar/page content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
            <div class="container-fluid">
              <!-- ini toggle menu di mobile -->
              <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                Menu
              </button>
              <button type="button" data-target="#navbarSupportedContent" class="navbar-toggler" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Desktop Menu -->
                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                  <li class="navbar-item dropdown">
                   <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                     <img src="/images/image13.png" alt="" class="rounded-circle mr-2 profile-picture">
                     Hi, Susi
                   </a>
                   <div class="dropdown-menu">
                     <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                     <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item">Settings</a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">Logout</a>
                   </div>
                  </li>
      
                  <li class="nav-item">
                   <a href="#" class="nav-link d-inline-block mt-2">
                     <img src="/images/filledcart.svg" alt="">
                     <div class="card-badge">4</div>
                   </a>
                  </li>
                 </ul>
      
                 <!-- Mobile Menu -->
                 <ul class="navbar-nav d-block d-lg-none">
                   <li class="nav-item">
                    <a href="#" class="nav-link">
                      Hi, Susi
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="#" class="nav-link mr-2">
                      Cart
                     </a>
                   </li>
                 </ul>
              </div>
            </div>
          </nav>

        {{-- content --}}
        @yield('content')

        </div>
      </div>
    </div>
    @stack('prepend-script')
        <!-- Bootstrap core JavaScript -->
        <script src="/vendor/jquery/jquery.slim.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>
        <script>
        $("#menu-toggle").click(function(e){
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
        <script src="/script/navbar-scroll.js"></script>
    @stack('addon-script')
  </body>
</html>
