<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <div class="dropdown">
          <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/img/ples.png" width="30px" height="30px" alt="">
            <button class="btn btn-light">Baru</button>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#"><span data-feather="folder"></span> folder</a></li>
            <li><a class="dropdown-item" href="/drivesaya/tambahfile"><span data-feather="file-plus"></span>Upload File</a></li>
            <li><a class="dropdown-item" href="/drivesaya/tambahfolder"><span data-feather="folder-plus"></span>Upload Folder</a></li>
          </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/drivesaya">
            <span data-feather="hard-drive"></span>
            Drive Saya
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/komputer">
              <span data-feather="monitor"></span>
              Komputer
            </a>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="/bagikan">
                <span data-feather="users"></span>
               bagikan kepada saya
              </a>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="/terbaru">
                <span data-feather="clock"></span>
               terbaru
              </a>
          </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="/berbintang">
            <span data-feather="star"></span>
           berbintang
          </a>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" href="/sampah">
            <span data-feather="trash-2"></span>
           Sampah
          </a>
      </ul>
    </div>
  </nav>

  