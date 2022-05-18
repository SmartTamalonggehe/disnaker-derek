<!-- Left side column. contains the logo and sidebar -->
<nav class="main-nav" role="navigation">

    <!-- Mobile menu toggle button (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state">
        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
    </label>

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
        <li><a href="{{ route('pencaker') }}"><i class="fa fa-home"><span class="path1"></span><span
                        class="path2"></span></i>DASHBOARD</a></li>
        <li><a href="{{ route('tentangKami') }}"><i class="fa fa-cog"><span class="path1"></span><span
                        class="path2"></span></i>TENTANG KAMI</a></li>
        <li><a href="{{ route('pencakerPelatihan.index') }}"><i class="fa fa-tasks"><span
                        class="path1"></span><span class="path2"></span></i> PELATIHAN</a></li>
        <li><a href="{{ route('lowonganPencaker.index') }}"><i class="fa fa-wrench"><span
                        class="path1"></span><span class="path2"></span></i>LOKER</a></li>

        @auth
            @if (Auth::user()->hasRole('pencaker'))

                <li><a href="#"><i class="fa fa-paper-plane"><span class="path1"></span><span
                                class="path2"></span></i>IPUT DATA </a>
                    <ul>
                        <li><a href="{{ route('pencaker.index') }}"><i class="icon-Commit"><span
                                        class="path1"></span><span class="path2"></span></i>Input Data
                                Pencaker</a></li>
                        <li><a href="{{ route('pendidikan.index') }}"><i class="icon-Commit"><span
                                        class="path1"></span><span class="path2"></span></i>Input Data
                                Pendidikan</a></li>
                        <li><a href="{{ route('persyaratan.index') }}"><i class="icon-Commit"><span
                                        class="path1"></span><span class="path2"></span></i>Input Data
                                Persyaratan</a></li>
                    </ul>
                </li>
                @if (Auth::user()->pencaker)
                    @if (Auth::user()->pencaker->kartukuning)
                        <li><a href="{{ route('kartuKuning') }}"><i class="fa fa-id-card-o"><span
                                        class="path1"></span><span class="path2"></span></i>KARTU
                                PENCAKER</a></li>
                    @endif
                @endif
            @endif
        @endauth

        @if (!Auth::user())
            <li><a href="/login"><i class="fa fa-sign-in"><span class="path1"></span><span
                            class="path2"></span></i>LOGIN</a></li>
        @endif

    </ul>
</nav>

<!-- Content Wrapper. Contains page content -->
