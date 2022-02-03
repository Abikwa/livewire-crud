<!doctype html>
<html lang="en">
@include('partials.head')
<body>
    @include('partials.navbar')
    <div class="container-fluid">
        <div class="row">
            @include('partials.sidebar')
            @if(isset($slot))
                {{ $slot}}
            @else
                @yield('content')
            @endif
            <!-- End Of Main Content -->
        </div>
    </div>
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('productStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/preview-files.js') }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @yield('script')
</body>

</html>