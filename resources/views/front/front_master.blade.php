<head>

  <link href="{{ asset('backend/css/style.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('backend/css/view.css') }}" rel='stylesheet' type='text/css' />



</head>
<body>

  <div class="pageContent">
    @include('front.body.header')
    @yield('front')
  </div>
  @include('front.body.footer')
</body>
</html>