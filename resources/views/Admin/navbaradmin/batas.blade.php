<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"  href="#" ><img src="/img/drive.png" class="img-thumbnail" width="30px" height="30px"> Admin Google Drive </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-90" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="{{route('logout')}}" method="post">
          @csrf
          <button  type="sumbit" class="nav-link px- 3 bg-dark border-0"> Logout <span data-feather="log-out"></span> </button>
        </form>     
        <li class="nav-item">
          </a>
      </div>
    </div>
  </header>
</header>