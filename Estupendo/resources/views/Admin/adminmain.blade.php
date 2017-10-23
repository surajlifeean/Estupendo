<!DOCTYPE html>
<html lang="en" class="app">
<head>

 @include('Partials._admin_head')

</head>
<body>
  <section class="vbox">
    
    @include('Partials._admin_navbar')

    <section>
      <section class="hbox stretch">
        <!-- .aside -->
      

    @include('Partials._admin_sidebar')

        <!-- /.aside -->

  <section id="content">
  
    @yield('content')

  </section>

 @include('Partials._admin_footer')

 @include('Partials._admin_scripts')
</body>
</html>