@include('kadis.layouts.head')

<body class="layout-top-nav dark-skin theme-primary">

    <div class="wrapper">
        <div id="loader"></div>

@include('kadis.layouts.navbar')

@include('kadis.layouts.sidebar')

@yield('main')

    <div class="control-sidebar-bg"></div>
    </div>

@include('kadis.layouts.footer')

@include('kadis.layouts.script')

</body>
</html>
