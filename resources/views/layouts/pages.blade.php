
<!DOCTYPE html>
<html>

<head>
     @include('includes.head')
</head>

<body>
  <div class="hero_area">

    @include('includes.preHeader')
    @include('includes.header')
   

  </div>
  
  @yield('content')
  
  @include('includes.info')

  
  @include('includes.footer')
  @include('includes.jQuery')


</body>

</html>