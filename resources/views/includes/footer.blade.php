<footer class="site-footer">© 2015 <a href="http://www.falker.com.br">Falker</a></footer> 
<script>
urltreeview = "{{URL::asset('ajax/treeview')}}";

</script>
<!-- Core -->
{!! HTML::script('remark/vendor/jquery/jquery.js'); !!}
{!! HTML::script('remark/vendor/bootstrap/bootstrap.js'); !!}
{!! HTML::script('remark/vendor/animsition/jquery.animsition.js'); !!}
{!! HTML::script('remark/vendor/asscroll/jquery-asScroll.js'); !!}
{!! HTML::script('remark/vendor/mousewheel/jquery.mousewheel.js'); !!}
{!! HTML::script('remark/vendor/asscrollable/jquery.asScrollable.all.js'); !!}
{!! HTML::script('remark/vendor/ashoverscroll/jquery-asHoverScroll.js'); !!}

{!! HTML::script('remark/vendor/bootstrap-treeview/bootstrap-treeview.min.js'); !!}

<!-- Plugins -->
{!! HTML::script('remark/vendor/switchery/switchery.min.js'); !!}
{!! HTML::script('remark/vendor/intro-js/intro.js'); !!}>
{!! HTML::script('remark/vendor/screenfull/screenfull.js'); !!}
{!! HTML::script('remark/vendor/slidepanel/jquery-slidePanel.js'); !!}

  <!-- Scripts -->
{!! HTML::script('remark/js/core.js'); !!}
{!! HTML::script('remark/js/site.js'); !!}

{!! HTML::script('remark/js/sections/menu.js'); !!}
{!! HTML::script('remark/js/sections/menubar.js'); !!}
{!! HTML::script('remark/js/sections/gridmenu.js'); !!}
{!! HTML::script('remark/js/sections/sidebar.js'); !!}

{!! HTML::script('remark/js/configs/config-colors.js'); !!}
{!! HTML::script('remark/js/configs/config-tour.js'); !!}

{!! HTML::script('remark/js/components/asscrollable.js'); !!}
{!! HTML::script('remark/js/components/animsition.js'); !!}
{!! HTML::script('remark/js/components/slidepanel.js'); !!}
{!! HTML::script('remark/js/components/switchery.js'); !!}


{!! HTML::script('remark/js/components/toastr.js'); !!}
{!! HTML::script('remark/js/components/bootstrap-treeview.js'); !!}

@yield('js', "")

{!! HTML::script('js/treeview.js'); !!}
{!! HTML::script('js/falkermap.js'); !!}

 


