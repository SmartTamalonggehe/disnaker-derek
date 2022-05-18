@include('pencaker.layouts.head')

<body class="layout-top-nav light-skin theme-primary">
	
    <div class="wrapper">
        <div id="loader"></div>
    
@include('pencaker.layouts.navbar')

@include('pencaker.layouts.sidebar')

<div class="content-wrapper">
    <div class="container-full">
@yield('main')
    </div>
</div>

@include('pencaker.layouts.footer')

    <div class="control-sidebar-bg"></div>
    </div>

@include('pencaker.layouts.script')

	
</body>
</html>
