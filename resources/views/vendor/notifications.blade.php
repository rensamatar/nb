<div class="container-fluid notify">
    @if ($errors->any())
    <div class="alert alert-info alert-dismissable">
        <div class="container">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>
            <strong><i class="fa fa-fw fa-warning"></i></strong> Please check the form below for errors
        </div>
    </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissable">
        <div class="container">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>
            <strong><i class="fa fa-fw fa-check-circle-o"></i></strong> {!! $message !!}
        </div>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-error alert-dismissable">
        <div class="container">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>
            <strong><i class="fa fa-fw fa-bug"></i></strong> {!! $message !!}
        </div>
    </div>
    @endif

    @if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissable">
        <div class="container">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>
            <strong><i class="fa fa-fw fa-warning"></i></strong> {!! $message !!}
        </div>
    </div>
    @endif

    @if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissable">
        <div class="container">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle-o"></i></button>
            <strong>Info:</strong> {!! $message !!}
        </div>        
    </div>
    @endif
</div>

@section('script')
<script type="text/javascript">
    //$('div.alert').not('alert-important').delay(3000).slideUp(300);
</script>
@stop