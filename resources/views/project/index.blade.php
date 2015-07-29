@extends('app')


@section('page_title')
	{{ $page_title= trans('general.Projects') }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('project'))

@section('content')


<div class='row'>
    <div class='col-sm-12'>
    <div class="box box-primary box-solid">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-puzzle-piece"></i> {{trans('general.Open_Projects')}}</h3>
      <div class="box-tools pull-right">
          <a href="{{route('project.create')}}" class='btn'><i class='fa fa-plus'></i> {{trans('general.New')}}</a>
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
    <table class='table table-striped table-hover table-bordered'>
        <thead>
            <tr>
                <th>Id</th>
                <th>{{trans('general.Name')}}</th>
                <th>{{trans('general.Start_at')}}</th>
                <th>{{trans('general.Finish_preview_at')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->start_at->format('d/m/Y')}}</td>
                    <td>{{$p->finish_preview_at->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </div>
    </table>
    </div>
    
</div>

@endsection