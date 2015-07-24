@extends('app')

@section('page_title')
	{{ $page_title= 'Dashboard' }}
@endsection

@section('content')
	<div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{$projects->count()}}</h3>
                  <p>{{ trans('general.Projects')}}</p>
                </div>
                <div class="icon">
                  <i class="fa fa-puzzle-piece"></i>
                </div>
                <a href="{{asset('project')}}" class="small-box-footer">{{trans('general.more_info')}} <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{$users->count()}}</h3>
                  <p>{{ trans('general.Users')}}</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="{{asset('user')}}" class="small-box-footer">{{trans('general.more_info')}} <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
	</div>

    <div class='row'>
        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('general.Projects')}}</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    

                    @foreach($projects as $p)
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                                <div class="info-box-content">
                                <span class="info-box-text"><a class="small-box-footer" href='{{url('project', [$p->id])}}'>{{ $p->name }}</a></span>
                                <span class="info-box-number">R$ 0,00</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: {{$p->completed}}%"></div>
                                </div>
                                <span class="progress-description">
                                    {{$p->completed}}% Increase in 30 Days
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    @endforeach
                    <div class="box-footer clearfix">
                        <a href='{{url('project/create')}}' class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Project</a>
                    </div>
                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class='col-md-6'>
            <!-- Box -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">{{trans('general.Team')}}</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <table class='table table-striped'>
                   @foreach($projects as $p)
                    <tr>
                       <td>0</td>
                       <td>{{ $p->name }}</td>
                    </tr>
                    @endforeach
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection
