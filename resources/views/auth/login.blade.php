@extends('layouts.app')

@section('title')
    تسجيل الدخول
@endsection

@section('header')
    {!! Html::style('/admin/css/plugins/iCheck/custom.css') !!}
    {!! Html::style('/admin/css/animate.css') !!}
    {!! Html::style('/admin/css/style.css') !!}
    {!! Html::style('/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') !!}

@endsection

@section('content')

<div class="col-lg-6">
    <div class="ibox float-e-margins" style="font-size:20px">
        <div class="ibox-title">
            <h5 style="float:right;font-size:24px">تسجيل الدخول</h5>
        </div>
        <div class="ibox-content">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}


                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"><label class="col-lg-5 control-label">البريد الاليكتروني</label>

                    <div class="col-lg-10">
                        <input class="form-control" id="email" type="email" placeholder="ادخل البريد" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}"><label class="col-lg-2 control-label">كلمة السر</label>

                    <div class="col-lg-10">
                        <input type="password" id="password" placeholder="ادخل كلمة السر" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <div class="i-checks"><label> <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i></i> تذكرني </label></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-lg btn-white" type="submit">تسجيل</button>
                    </div>
                    <div class="col-md-8 col-md-offset-4">
                            

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            هل نسيت كلمة السر؟
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


                
@endsection




@section('footer')

    {!! Html::script('/admin/js/plugins/metisMenu/jquery.metisMenu.js') !!}
    {!! Html::script('/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

    <!-- Custom and plugin javascript -->
    {!! Html::script('/admin/js/plugins/pace/pace.min.js') !!}

    <!-- iCheck -->
    {!! Html::script('/admin/js/plugins/iCheck/icheck.min.js') !!}
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
@endsection
