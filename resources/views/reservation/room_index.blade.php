@extends('app')


@section('page_title')
	{{ $page_title= trans('general.Rooms') }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('room'))

@section('content')

@endsection


