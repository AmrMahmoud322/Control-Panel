<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ecommerce_product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 14:29:54 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ Request::root() }}/admin/img/icon.jpg"/>
    <title>
        لوحة التحكم |
        @yield('title')
    </title>

    {!! Html::style('/admin/css/bootstrap.min.css') !!}
    {!! Html::style('/admin/font-awesome/css/font-awesome.css') !!}

    {!! Html::style('/admin/css/plugins/summernote/summernote.css') !!}
    {!! Html::style('/admin/css/plugins/summernote/summernote-bs3.css') !!}

    {!! Html::style('/admin/css/plugins/datapicker/datepicker3.css') !!}

    {!! Html::style('/admin/css/animate.css') !!}
    {!! Html::style('/admin/css/style.css') !!}

    @yield('header')

</head>

<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu" style="direction: rtl; margin-right: -40px">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="{{ Request::root() }}/admin/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="text-muted text-xs block"><strong class="font-bold">{{ Auth::user()->name }}</strong> <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">تعديل الصفحة الشخصية</a></li>
                            <li class="divider"></li>
                            <li>
                                
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            تسجيل خروج
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                  
                            </li>
                        </ul>
                    </div>
                </li>
                
                @include('admin/layouts/navbar')                
                
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message" style="font-size: 23px">مرحبا بك في لوحة التحكم</span>
                    </li>
                    
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> تسجيل الخروج
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        @include('admin/layouts/messages')


        @yield('content')


        
        
        
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

    </div>
</div>

        <!-- Mainly scripts -->
{!! Html::script('/admin/js/jquery-3.1.1.min.js') !!}
{!! Html::script('/admin/js/bootstrap.min.js') !!}
{!! Html::script('/admin/js/plugins/metisMenu/jquery.metisMenu.js') !!}
{!! Html::script('/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

<!-- Custom and plugin javascript -->
{!! Html::script('/admin/js/plugins/pace/pace.min.js') !!}

<!-- SUMMERNOTE -->
{!! Html::script('/admin/js/plugins/summernote/summernote.min.js') !!}

<!-- Data picker -->
{!! Html::script('/admin/js/plugins/datapicker/bootstrap-datepicker.js') !!}

{!! Html::script('/admin/js/inspinia.js') !!}


@yield('footer')


</body>


</html>
