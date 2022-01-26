<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/users">
            <span data-feather="users"></span>
           Users
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/fileuser">
              <span data-feather="file"></span>
             File Users
            </a>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="">
                <span data-feather="users"></span>
               bagikan kepada saya
              </a>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="">
                <span data-feather="clock"></span>
               Upload terbaru
              </a>
          </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="">
            <span data-feather="star"></span>
           berbintang
          </a>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="">
            <span data-feather="trash-2"></span>
           Sampah
          </a>
      </ul>
    </div>
  </nav>

  