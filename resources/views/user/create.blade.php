@extends('app')

@section('page_title')
	{{ $page_title= trans('general.User') }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('user.edit'))

@section('content')
<div class="row">
<div class="col-md-8">
<div class="box box-primary box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">{{trans('general.New')}}</h3>
      <div class="box-tools pull-right">
        
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    
    {!! Form::model(new App\Project, ['route' => ['user.store']]) !!}
    <div class="box-body">
        
        <div class="form-group col-lg-12">
            {!! Form::label(trans("general.Name")) !!}
            {!! Form::text('name', null, array('required','class'=>'form-control'))!!} 
        </div>

        <div class="form-group col-lg-12">
            {!! Form::label(trans("general.Email")) !!}
            {!! Form::email('email', null, array('required','class'=>'form-control'))!!} 
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('password', trans("general.Password")) !!}
            {!! Form::password('password', null, array('required','class'=>'form-control'))!!} 
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('confirm_password',trans("general.ConfirmPassword")) !!}
            {!! Form::password('confirm_password', null, array('required','class'=>'form-control'))!!} 
        </div>
    
    </div><!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    {!! Form::close() !!}
  </div><!-- /.box -->
</div>
</div>

@endsection

@section('script')

@endsection

@section('css')
    <link href="{{ asset("/bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}" rel="stylesheet" type="text/css" />
@endsection