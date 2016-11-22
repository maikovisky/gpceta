
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>400 | Remark Admin Template</title>

  {!! HTML::style('remark/images/apple-touch-icon.png') !!}

  <!-- Stylesheets -->
  {!! HTML::style('remark/css/bootstrap.min.css') !!}
  {!! HTML::style('remark/css/bootstrap-extend.min.css') !!}
  {!! HTML::style('remark/css/site.min.css') !!}

  <!-- Plugins -->
  {!! HTML::style('remark/vendor/animsition/animsition.css') !!}
  {!! HTML::style('remark/vendor/asscrollable/asScrollable.css') !!}
  {!! HTML::style('remark/vendor/switchery/switchery.css') !!}
  {!! HTML::style('remark/vendor/intro-js/introjs.css') !!}
  {!! HTML::style('remark/vendor/slidepanel/slidePanel.css') !!}
  {!! HTML::style('remark/vendor/flag-icon-css/flag-icon.css') !!}

  <!-- Fonts -->
  {!! HTML::style('remark/fonts/web-icons/web-icons.min.css') !!}
  {!! HTML::style('remark/fonts/brand-icons/brand-icons.min.css') !!}
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!-- Inline -->
  {!! HTML::style('remark/css/errors.css') !!}

  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  {!! HTML::script('remark/vendor/modernizr/modernizr.js') !!}
  {!! HTML::script('remark/vendor/breakpoints/breakpoints.js') !!}
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-error page-error-400 layout-full">
    @yield('content')
    @yield('script')
</body>
</html>
