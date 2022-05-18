<!-- Left side column. contains the logo and sidebar -->
<nav class="main-nav" role="navigation">

    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
      <span class="main-menu-btn-icon"></span>
    </label>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
      <li><a href="{{route('admin')}}"><i class="fa fa-tachometer "><span class="path1"></span><span class="path2"></span></i>DASHBOARD</a>
      <li><a href="{{ route('distrik.index')}}"><i class="fa fa-quote-left"><span class="path1"></span><span class="path2"></span></i>DISTRIK</a>
      <li><a href="{{ route('kelurahan.index')}}"><i class="fa fa-quote-right"><span class="path1"></span><span class="path2"></span></i>KELURAHAN</a>
      <li><a href="{{ route('pelatihan.index')}}"><i class="fa fa-list-ul"><span class="path1"></span><span class="path2"></span></i>PELATIHAN</a>
      <li><a href="{{route('loker.index')}}"><i class="fa fa-wrench"><span class="path1"></span><span class="path2"></span></i>LOKER </a>
      <li><a href="{{route('pencakerAdmin.index')}}"><i class="fa fa-user-circle-o"><span class="path1"></span><span class="path2"></span></i>PENCAKER TERDAFTAR</a>
      </li>
    </ul>
  </nav>

<!-- Content Wrapper. Contains page content -->
