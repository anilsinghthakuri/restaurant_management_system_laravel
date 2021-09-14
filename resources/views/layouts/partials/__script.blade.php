<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('nepali_date/script.js')}}"></script>
<script src="{{asset('nepali_date/nepali-date-picker.min.js')}}"></script>

<script src="/js/script.js"></script>

{{-- @livewireScripts --}}

<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

{{-- for toster --}}

<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>

@stack('script');
