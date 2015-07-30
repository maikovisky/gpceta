@extends('app')


@section('page_title')
	{{ $page_title= trans('general.Users') }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('user'))

@section('content')
<div class='row'>
    <div class='col-sm-12'>
    <div class="box box-primary box-solid">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-puzzle-piece"></i> {{trans('general.Team')}}</h3>
      <div class="box-tools pull-right">
          <a href="{{route('user.create')}}" class='btn'><i class='fa fa-plus'></i> {{trans('general.New')}}</a>
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
    <table class='table table-striped table-hover table-bordered'>
        <thead>
            <tr>
                <th>Id</th>
                <th></th>
                <th>{{trans('general.Name')}}</th>
                <th>{{trans('general.Projects')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
                <tr>
                    <td width="5%">{{$u->id}}</td>
                    <td width="5%"><img src="{{ $u->gravatar }}" class="user-image" alt="User Image"/></td>
                    <td>{{$u->name}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </div>
    </table>
    </div>
</div>
@endsection

