@if(session('flash_error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>{!! session('flash_error') !!} </div>
@endif

@if(session('flash_info'))
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>{!! session('flash_info') !!}</div>
@endif

@if(session('flash_warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>{!! session('flash_warning') !!}</div>
@endif

@if(session('flash_success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>{!! session('flash_success') !!}</div>
@endif

@if (session('alert_success'))
    <script>
        $(document).ready(function () {
            swal("Success!", "{{ session('alert_success') }}", "success");
        });
    </script>
@endif

@if (session('alert_error'))
    <script>
        $(document).ready(function () {
            swal("Sorry!", "{{ session('alert_error') }}", "error");
        });
    </script>
@endif
