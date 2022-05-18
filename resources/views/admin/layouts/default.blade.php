@include('admin.layouts.head')

<body class="layout-top-nav dark-skin theme-primary">

    <div class="wrapper">
        <div id="loader"></div>

@include('admin.layouts.navbar')

@include('admin.layouts.sidebar')

@yield('main')

    <div class="control-sidebar-bg"></div>
    </div>

@include('admin.layouts.footer')

@include('admin.layouts.script')

</body>
</html>
