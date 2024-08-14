<!DOCTYPE html>
<html lang="en">
    @include('components.head')
    <body>
        
        @include('components.header')
        @yield('content')
        
        
        @include('components.footer')
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      
    </body>
</html>
