@extends('app')


@section('page_title')
	{{ $page_title= $project->name }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('project.resources', $project))

@section('content')
<div class="alert alert-success alert-dismissable">

</div>
<div id="roadmap"></div>
<div class='row'>
    
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