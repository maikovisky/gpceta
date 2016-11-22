

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                @yield('actions')
                            </div>
                            <h4 class="panel-title"> @yield('sub-title')</h4>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class='table-responsive'>
                                @yield('table')
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop