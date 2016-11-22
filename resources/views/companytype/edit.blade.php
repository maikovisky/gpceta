@extends('layouts.default')
@extends('layouts.edit')

@section('title')
<h1>{{Lang::get("general.CompanyType")}}</h1>
@stop

@section('sub-title')
@if ($companytype->id)
{{$companytype->name}}
@else
{{Lang::get("general.companytype")}}
@endif
@stop

@section('breadcrumbs', Breadcrumbs::render('companytype.edit', $companytype))

@section('edit')

@if (!$companytype->id)
{!! Form::open(array('route' => 'companytype.store')) !!}
@else
{!! Form::model('$companytype', [
        'method'=>'PUT',
        'route' => ['companytype.update',$companytype->id]
    ]) !!}
@endif
    <div class="form-group col-lg-12">
        {!!Form::label('name', Lang::get('general.companytype'))!!}
        {!!Form::text('name', $companytype->name, array('class' => 'form-control'))!!}
    </div>

    <button type="submit" class="btn btn-primary">{{Lang::get('general.Submit')}}</button>
    <button type="reset" class="btn btn-primary">{{Lang::get('general.Reset')}}</button>
{!! Form::close() !!}

@stop