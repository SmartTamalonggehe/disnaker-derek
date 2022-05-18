<!-- Left side column. contains the logo and sidebar -->
<nav class="main-nav" role="navigation">

    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
      <span class="main-menu-btn-icon"></span> Toggle main menu visibility
    </label>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
      <li><a href="{{route('kadis')}}"><i class="fa fa-television"><span class="path1"></span><span class="path2"></span></i>DASHBOARD</a>
      <li><a href="{{route('pelatihanKadis.index')}}"><i class="fa fa-database"><span class="path1"></span><span class="path2"></span></i>LAPORAN PELATIHAN</a>
      <li><a href="{{route('lokerKadis.index')}}"><i class="fa fa-code"><span class="path1"></span><span class="path2"></span></i>LAPORAN LOKER</a>
      <li><a href="{{route('pencakerKadis.index')}}"><i class="fa fa-vcard-o (alias)"><span class="path1"></span><span class="path2"></span></i>LAPORAN PENCAKER TERDAFTAR</a>
      </li>
    </ul>
  </nav>

<!-- Content Wrapper. Contains page content -->
