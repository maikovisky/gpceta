<html class="no-js" lang="pt-br">
<head>    
	@include('includes.head')
</head>
<body class="site-menubar-fold" data-auto-menubar="false">
    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
            data-toggle="collapse">
                <i class="icon wb-more-horizontal" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
                <img class="navbar-brand-logo" src="{{ URL::asset('images/falkermap.png')}}" title="Remark">
            </div>
            <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search" data-toggle="collapse">
                <span class="sr-only">Toggle Search</span>
                <i class="icon wb-search" aria-hidden="true"></i>
            </button>
        </div>
        
        <!-- Barra superior de Navegação -->
        <div class="navbar-container container-fluid">
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                @include('includes.navleft')
                @include('includes.navright')
            </div>
            <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->

        </div>
    </nav>
  <div class="site-menubar">
      @include('includes.sidebar')
  </div> 
 
  <div class="page animsition">
    <div class='page-aside' style="background-color: #dddddd">
        @include('includes.treeview')
    </div>
    <div class="page-main">
        <div class="page-content">
           @yield('breadcrumbs', Breadcrumbs::render('home'))
           <h2>@yield("titles")</h2>
           @if( Session::has('errors') )
                <div class="alert dark alert-danger" role="alert">
                    <ul>
                    @foreach($errors->all() as $error) 
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            @if (Session::has('message'))
                <div class="alert dark alert-primary" role="alert">{{ Session::get('message') }}</div>
            @endif     
            
            <!-- criando uma menssagem de alerta-->
            @if (Session::has('danger'))
                <div class="alert dark alert-danger" role="alert">{{ Session::get('danger') }}</div>
            @endif    
            @yield('content')
        </div>
    </div>
  </div>
  
  @include('includes.footer')

<script>
    @yield('script')
</script>
<script>
  (function(document, window, $) {
    'use strict';

    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  
  
</script>

  
  
</body>
</html>
