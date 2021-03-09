<!doctype html>
<html lang="en">

<!-- Head -->
@include('partials.head')
<!-- End Of Head -->

<body> 
    <!-- End Of Navbar -->
    <div class="container-fluid">
        <div class="row">    
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    
                    @yield('pagebody')
                
                </main> 
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/preview-files.js') }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
 
</body>

</html>