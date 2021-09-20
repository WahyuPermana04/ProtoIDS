
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prototype</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('lte')}}/css/style.css"/> 
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('lte')}}/images/or.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
    <style type="text/css">
        #results { padding: 10px; border:1px solid; background:#ccc; }
    </style>
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
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>