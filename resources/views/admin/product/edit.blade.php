@extends('admin.layouts.layout')


@php
$title= "تعديل صنف";    
@endphp

@section('title')
    {{ $title }}
@endsection

@section('header')
    
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10 pull-right" style="direction:rtl">
            <h2 style="font-size: 27px">تعديل صنف حالي</h2>
            <ol class="breadcrumb" style="font-size: 18px">
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    البضائع
                </li>
                <li class="active">
                    <strong> تعديل صنف</strong>
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
                                    {!! Form::open(array('action'=>(['ProductController@update',$product->id]), 'method'=>'POST')) !!}
                                        
                                        <fieldset class="form-horizontal" style="font-size:16px">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="id" name="id" class="form-control" placeholder="..." value="{{$product->id}}" disabled></div>
                                                <label class="col-sm-2 control-label">رقم الصنف:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="الاسم" value="{{$product->name}}"></div>
                                                <label class="col-sm-2 control-label">آسم الصنف:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="buy_price"  name="buy_price" class="form-control" placeholder="0.0"  value="{{$product->buy_price}}"></div>
                                                <label class="col-sm-2 control-label">سعر الشراء:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="wholesale" name="wholesale" class="form-control" placeholder="0.0"  value="{{$product->wholesale}}"></div>
                                                <label class="col-sm-2 control-label">سعر الجملة:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="price" name="price" class="form-control" placeholder="0.0"  value="{{$product->price}}"></div>
                                                <label class="col-sm-2 control-label">سعر البيع:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="type" name="type"  value="{{$product->type}}">
                                                        <option value="إكسسوارات"
                                                        @if($product->type == "إكسسوارات")
                                                        SELECTED
                                                        @endif
                                                        >1- إكسسوارات</option>
                                                        <option value="صرف صحي"
                                                        @if($product->type == "صرف صحي")
                                                        SELECTED
                                                        @endif
                                                        >2- صرف صحي</option>
                                                        <option value="مياه"
                                                        @if($product->type == "مياه")
                                                        SELECTED
                                                        @endif
                                                        >2- مياه </option>
                                                    </select>
                                                </div>
                                                <label class="col-sm-2 control-label">نوع الصنف:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="quantity" name="quantity" class="form-control" placeholder="0"  value="{{$product->quantity}}"></div>
                                                <label class="col-sm-2 control-label">الكيمة:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="min_quantity" name="min_quantity" class="form-control" placeholder="0"  value="{{$product->min_quantity}}"></div>
                                                <label class="col-sm-2 control-label">أقل كيمة:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                <input type="text" id="notes" name="notes" class="form-control" placeholder="اكتب الملاحظة"  value="{{$product->notes}}"></div>
                                                <label class="col-sm-2 control-label">ملاحظات:</label>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="availability" name="availability" value="{{$product->availability}}">
                                                        <option value="متوفر"
                                                        @if($product->type == "متوفر")
                                                        SELECTED
                                                        @endif
                                                        >1- متوفر</option>

                                                        <option value="كمية قليلة"
                                                        @if($product->type == "كمية قليلة")
                                                        SELECTED
                                                        @endif
                                                        >2- كمية قليلة</option>

                                                        <option value="غير متوفر"
                                                        @if($product->type == "غير متوفر")
                                                        SELECTED
                                                        @endif
                                                        >3-غير متوفر</option>

                                                    </select>
                                                </div>
                                                <label class="col-sm-2 control-label">حالة الصنف:</label>
                                            </div>
                                            {{ Form::hidden('_method', 'PUT') }}
                                            <button type="submit" class="btn btn-outline-secondary" style="float: left">تحديث</button>
                                        </fieldset>

                                    {!! Form::close() !!}
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
