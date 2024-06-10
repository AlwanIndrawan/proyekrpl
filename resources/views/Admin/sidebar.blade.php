  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-heading">Beranda</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Menu Berita</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/post_page">
          <i class="bi bi-journal-text"></i><span>Tambah Berita</span><i></i>
        </a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/show_post">
          <i class="bi bi-layout-text-window-reverse"></i><span>Daftar Berita</span><i></i>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Menu Data</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Layanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/appointment">
              <i class="bi bi-circle"></i><span>Janji Temu</span>
            </a>
          </li>
          <li>
            <a href="/complaint">
              <i class="bi bi-circle"></i><span>Pengaduan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->