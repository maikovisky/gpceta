@extends('app')

@section('page_title')
	{{ $page_title= trans('general.Project') }}
@endsection

@section('breadcrumbs', Breadcrumbs::render('project.edit'))

@section('content')
<div class="row">
<div class="col-md-8">
<div class="box box-primary box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">{{trans('general.New_project')}}</h3>
      <div class="box-tools pull-right">
        
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="form-group col-lg-12">
            <label>{{trans("general.Name")}}</label>
            <input type="text" name='name' class="form-control" placeholder="">
        </div>

        <div class="form-group col-lg-6">
            <label>{{trans("general.Start_at")}}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" name="start_at" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div><!-- /.input group -->
        </div>


        <div class="form-group col-lg-6">
            <label>{{trans("general.Finish_preview_at")}}</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" name="start_at" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div><!-- /.input group -->
        </div>

        <div class="form-group  col-lg-12">
            <label>{{trans("general.Description")}}</label>
            <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 250px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

        </div>
        
    
    </div><!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div><!-- /.box -->
</div>
</div>

@endsection

@section('script')
<script src="{{ asset("/bower_components/admin-lte/dist/js/app.min.js")}}" type="text/javascript"></script>
<script src="{{ asset("/bower_components/admin-lte/dist/js/demo.js")}}" type="text/javascript"></script>
<script src="{{ asset("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js")}}" type="text/javascript"></script>
<script src="{{ asset("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js")}}" type="text/javascript"></script>
<script src="{{ asset("/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js")}}" type="text/javascript"></script>
<script src="{{ asset('/bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
      $(function () {
           $("[data-mask]").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
           $(".textarea").wysihtml5();

      });
</script>
@endsection

@section('css')
    <link href="{{ asset("/bower_components/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}" rel="stylesheet" type="text/css" />
@endsection