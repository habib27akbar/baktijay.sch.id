<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICBJ | @yield('title')</title>
    
    <link rel="stylesheet" href="{{ url('admin/public/assets/css/bootstrap.css') }}">
    
    @yield('css')

    <link rel="stylesheet" href="{{ url('admin/public/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ url('admin/public/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ url('admin/public/assets/images/logo-1.jpeg') }}" type="image/x-icon">
    
</head>
<body>
    <div id="app">
        
        
        <div id="main" style="margin-left:0;">
            
            
            <div class="main-content container-fluid">
                @yield('content')
                
            </div>

            @include('include.admin.footer')
        </div>
    </div>
    <script src="{{ url('admin/public/assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('admin/public/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('admin/public/assets/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @yield('js')

    <script src="{{ url('admin/public/assets/js/main.js') }}"></script>
</body>
</html>
