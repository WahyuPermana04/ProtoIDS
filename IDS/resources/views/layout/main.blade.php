
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prototype</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Prototype IDS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('lte')}}/css/style.css"/> 
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('lte')}}/images/or.png" />

    @yield('css')
  </head>
  <body>
    <div class="container-scroller">
      @include('layout.navbar')
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            @include('layout.sidebar')
        </nav>
        
        

        <div class="main-panel">
          <div class="content-wrapper">
              @yield('layout.content')
          </div>

          <footer class="footer">
            @include('layout.footer')
            @yield('script')
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>