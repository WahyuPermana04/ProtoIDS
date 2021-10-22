<ul class="nav">
  <li class="nav-item nav-profile">
    <a href="#" class="nav-link">
      <div class="profile-image">
        <img class="img-xs rounded-circle" src="{{asset('lte')}}/images/faces/face8.jpg" alt="profile image">
        <div class="dot-indicator bg-success"></div>
      </div>
      <div class="text-wrapper">
        <p class="profile-name">Wahyu Permana</p>
        <p class="designation">Administrator</p>
      </div>
      <div class="icon-container">
        <i class="icon-bubbles"></i>
        <div class="dot-indicator bg-danger"></div>
      </div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="home">
      <span class="menu-title">Dashboard</span>
      <i class="icon-screen-desktop menu-icon"></i>
    </a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="tabel">
      <span class="menu-title">Tabel DB</span>
      <i class="icon-screen-desktop menu-icon"></i>
    </a>
  </li> -->
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
      <span class="menu-title">Customer</span>
      <i class="icon-doc menu-icon"></i>
    </a>
    <div class="collapse" id="auth">
      <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="/dataCustomer"> Data Customer </a></li>
        <li class="nav-item"> <a class="nav-link" href="/tambahCust1"> Tambah Customer 1 </a></li>
        <li class="nav-item"> <a class="nav-link" href="/tambahCust2"> Tambah Customer 2 </a></li>
      </ul>
    </div>
    <li class="nav-item">
    <a class="nav-link" href="label">
      <span class="menu-title">Cetak Label</span>
      <i class="icon-screen-desktop menu-icon"></i>
    </a>
  </li>
    <li class="nav-item">
    <a class="nav-link" href="barcode">
      <span class="menu-title">Barcode</span>
      <i class="icon-screen-desktop menu-icon"></i>
    </a>
  </li>
  </li>
</ul>