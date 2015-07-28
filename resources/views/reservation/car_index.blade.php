@extends('app')


@section('page_title')
	{{ $page_title= trans('general.Cars') }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('car'))

@section('content')

@endsection

