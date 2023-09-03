<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AEMA</title>
  <link rel="stylesheet" href="{{asset('assets/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/node_modules/flag-icon-css/css/flag-icon.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" />


    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" />
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" />
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    </script>
    <script src = "https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
    </script>



    <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="shortcut icon" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" />
  @yield('css')
</head>

<body>
  <div class=" container-scroller">
    @include('shared.navbar')



    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        @include('shared.sidebar')
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">@yield('items')</h3>
       @yield('content')

        </div>
      @include('shared.footer')
  </div>
  </div>
  </div>

  <script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
{{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>--}}
  <script src="{{asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/js/misc.js')}}"></script>
  <script src="{{asset('assets/js/chart.js')}}"></script>
  <script src="{{asset('assets/js/maps.js')}}"></script>
</body>

</html>
