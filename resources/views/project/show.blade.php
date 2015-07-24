@extends('app')


@section('page_title')
	{{ $page_title= $project->name }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('project', $project))

@section('content')
<div class="alert alert-success alert-dismissable">

</div>
<div id="roadmap"></div>
<div class='row'>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>0</h3>
            <p>{{ trans('general.Time')}}</p>
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
            <h3>0</h3>
            <p>{{ trans('general.Resources')}}</p>
          </div>
          <div class="icon">
            <i class="fa fa-dollar"></i>
          </div>
          <a href="{{asset('project')}}" class="small-box-footer">{{trans('general.more_info')}} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>0</h3>
            <p>{{ trans('general.Team')}}</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="{{asset('project')}}" class="small-box-footer">{{trans('general.more_info')}} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-2">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>0</h3>
            <p>{{ trans('general.Changes')}}</p>
          </div>
          <div class="icon">
            <i class="fa fa-random "></i>
          </div>
          <a href="{{asset('project')}}" class="small-box-footer">{{trans('general.more_info')}} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-2 col-xs-2">
        <!-- small box -->
        <div class="small-box bg-maroon">
          <div class="inner">
            <h3>0</h3>
            <p>{{ trans('general.Issues')}}</p>
          </div>
          <div class="icon">
            <i class="fa fa-question "></i>
          </div>
          <a href="{{asset('project')}}" class="small-box-footer">{{trans('general.more_info')}} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div><!-- ./col -->
</div>
<div class="row">
    <div class="col-lg-6">
    <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Andamento</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="display: block;">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="160" width="247" style="width: 247px; height: 160px;"></canvas>
                      </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                        <li><i class="fa fa-circle-o text-green"></i> IE</li>
                        <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                        <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                        <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                        <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                      </ul>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding" style="display: block;">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">United States of America <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                    <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
                    <li><a href="#">China <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                  </ul>
                </div><!-- /.footer -->
              </div>
    </div>
</div>

@endsection


@section('script')
<script src="{{ asset('/js/jquery.roadmap.js')}}" type="text/javascript"></script>
<script type="text/javascript">
      $(function () {
           var rmp = $("#roadmap").Roadmap({
               width: 400px,
               allowJump: false,
               checkpoints: [{
                       text: "Name",
               }],
                       
           });
           
      });
</script>
@endsection

@section('css')
    <link href="{{ asset("/css/jquery.roadmap.css")}}" rel="stylesheet" type="text/css" />
@endsection