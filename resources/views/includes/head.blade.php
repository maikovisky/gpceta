

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Um software simples e direto para agricultura de precisão">
<meta name="author" content="Maiko de Andrade">
<title>FalkerMap 2.0</title>
<link rel="shortcut icon" href="favicon.ico">

{!! HTML::style('remark/css/bootstrap.min.css') !!}
{!! HTML::style('remark/css/bootstrap-extend.min.css') !!}
{!! HTML::style('remark/css/site.css') !!}

<!-- Plugins -->
{!! HTML::style('remark/vendor/animsition/animsition.css') !!}
{!! HTML::style('remark/vendor/asscrollable/asScrollable.css') !!}
{!! HTML::style('remark/vendor/switchery/switchery.css') !!}
{!! HTML::style('remark/vendor/intro-js/introjs.css') !!}
{!! HTML::style('remark/vendor/slidepanel/slidePanel.css') !!}
{!! HTML::style('remark/vendor/flag-icon-css/flag-icon.css') !!}

<!-- This Page -->
{!! HTML::style('remark/vendor/toastr/toastr.css') !!}
{!! HTML::style('remark/vendor/bootstrap-treeview/bootstrap-treeview.css') !!}
 @yield('css', "")
 
{!! HTML::style('css/style.css') !!}


<!-- Fonts -->
{!! HTML::style('remark/fonts/web-icons/web-icons.min.css') !!}
{!! HTML::style('remark/fonts/brand-icons/brand-icons.min.css') !!}
 <!--link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin"-->

 
 <!-- Scripts -->
{!! HTML::script('remark/vendor/modernizr/modernizr.js') !!}
{!! HTML::script('remark/vendor/breakpoints/breakpoints.js') !!}

<script>
    var baseurl="{{URL::asset("/")}}";
    Breakpoints();
</script>
