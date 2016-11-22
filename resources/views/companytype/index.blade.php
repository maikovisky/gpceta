@extends('layouts.default')
@extends('layouts.table')


@section("title")
<h1>{{Lang::get("general.CompanyType")}}</h1>
@stop

@section("sub-title")
{{Lang::get("general.CompanyType")}}
@stop

@section('breadcrumbs', Breadcrumbs::render('companytype'))

@section('actions')
{!!Form::actions(array('new' => route("companytype.create")))!!}
@stop

@section('table')
@if (count($companytype) > 0)
<table class='table table-striped table-bordered table-hover'>
    <thead>
        <tr>
            <th>{{Lang::get("general.id")}}</th>
        </tr>
    </thead>
    @foreach($modelsensors as $modelsensor) 
        <tr>
            <td><a href="{{route('companytype.edit', $companytype->id)}}">{{$companytype->id}}</a></td>
            <td><a href="{{route('companytype.edit', $companytype->id)}}">{{$companytype->name}}</a></td>
        </tr>
    @endforeach
</table>


@else
<div class="alert alert-info">
    {{Lang::get("general.norecordsfound")}}
</div>
@endif
                           
@stop

@section("script")

$(document).ready(function(){
    $(document).on('submit', '.delete-form', function(){
        return confirm("{{Lang::get("general.areyousure")}}");
    });
});

@stop