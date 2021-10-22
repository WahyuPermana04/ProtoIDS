
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prototype</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('lte')}}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('lte')}}/css/style.css"/> 
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('lte')}}/images/or.png" />

    <!-- Customer-Capture -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <style type="text/css">
        #results { padding: 10px; border:1px solid; background:#ccc; }
    </style>

    <!-- Barcode -->
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <style>
        .table .thead-dark th {
      color: #fff;
      background-color: #212529;
      border-color: #32383e;
    }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ZXing for JS">
    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/normalize.css@8.0.0/normalize.css">
    <!-- <link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/milligram@1.3.0/dist/milligram.min.css"> -->
    <zxing-scanner [tryHarder]="true" [formats]="formats" (scanSuccess)="onScanSuccessHandler($event)"></zxing-scanner>
    
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