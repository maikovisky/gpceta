@extends('app')


@section('page_title')
	{{ $page_title= trans('general.Users') }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('user'))

@section('content')

@endsection

