@extends('admin.layouts.layout')

@php
$title= "إضافة عضو جديد";    
@endphp


@section('title')
    {{ $title }}
@endsection

@section('header')
    
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10 pull-right" style="direction:rtl">
            <h2 style="font-size: 27px">إضافة عضو جديد</h2>
            <ol class="breadcrumb" style="font-size: 18px">
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    الاعضاء
                </li>
                <li class="active">
                    <strong> إضافة عضو جديد</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight ecommerce">

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-2" style="font-size:20px"> البيانات</a></li>

                        </ul>
                        <div class="tab-content">
                            
                            <div id="tab-2" class="tab-pane active" style="direction: rtl">
                                <div class="panel-body">

                                        <form class="form-horizontal" method="POST" action="{{ route('admin.user.new') }}">
                                                {{ csrf_field() }}
                                        
                                        <fieldset class="form-horizontal" style="font-size:16px">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="id" name="id" class="form-control" placeholder="..." disabled></div>
                                                <label class="col-sm-2 control-label">رقم العضو:</label>
                                            </div>

                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <div class="col-sm-10">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="الاسم" value="{{ old('name') }}" required autofocus></div>
                                                <label class="col-sm-2 control-label">آسم العضو:</label>
                                                <div class="col-lg-10">
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>



                                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                
                            
                                                <div class="col-lg-10">
                                                    <input class="form-control" id="email" type="email" placeholder="ادخل البريد" name="email" value="{{ old('email') }}" required>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <label for="email" class="col-lg-2 control-label">البريد الاليكتروني</label>
                                            </div>

                                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                
                        
                                                <div class="col-lg-10">
                                                    <input type="password" id="password" placeholder="ادخل كلمة السر" class="form-control" name="password" required>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <label for="password" class="col-lg-2 control-label">كلمة السر</label>
                                            </div>



                                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            
                                                <div class="col-lg-10">
                                                    <input id="password-confirm" placeholder="ادخل كلمة السر مره اخري" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                                <label for="password-confirm" class="col-lg-2 control-label">تأكيد كلمة السر</label>
                                            </div>
                                            
                                            

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="admin" name="admin" >
                                                        <option value="1">1- مدير</option>
                                                        <option value="2">2-  مدير مساعد</option>
                                                        <option value="0">3-  مستخدم</option>
                                                    </select>
                                                </div>
                                                <label class="col-sm-2 control-label">الصلاحيات:</label>
                                            </div>
                                            <button type="submit" class="btn btn-outline-secondary" style="float: left">اضافة</button>
                                        </fieldset>

                                    </form>
      

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

            $('.input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        });
    </script>

@endsection

