@extends('admin.layouts.layout')

@php
$title= "تعديل فاتورة";    
@endphp

@section('title')
    {{ $title }}
@endsection

@section('header')
    {{-- {!! Html::style('/admin/css/plugins/dataTables/datatables.min.css') !!}
 --}}
    {{-- smart select --}}
    {!! Html::style('/admin/css/plugins/chosen/bootstrap-chosen.css') !!}
    
    
	
    
    

@endsection

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10 pull-right" style="direction:rtl">
            <h2 style="font-size: 27px">الفواتير</h2>
            <ol class="breadcrumb" style="font-size: 18px">
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    الفواتير
                </li>
                <li class="active">
                    <strong>قائمة الفواتير</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    {!! Form::open(array('action'=>(['billController@update',$bill->id]), 'method'=>'POST')) !!}
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5 style="direction:rtl">الفاتورة</h5>
                        </div>
                        <div class="ibox-content" >
                            <div class="form-horizontal" style="direction: rtl; font-size: 25px">
                                <div class="form-group"  style="width:60%">
                                    <div class="col-sm-7">
                                    <input type="text" id="customer" name="customer" class="form-control" value="{{ $bill->customer }}"></div>
                                    <label class="col-sm-5 control-label">اسم العميل:</label>
                                </div>
                                <div class="form-group"  style="width:60%">
                                    <div class="col-sm-7">
                                    <input type="text" id="bill_note" name="bill_note" class="form-control" value="{{ $bill->bill_note }}"></div>
                                    <label class="col-sm-5 control-label">ملاحظات الفاتورة:</label>
                                </div>
                                <div class="form-group" style="width:60%">
                                    <div class="col-sm-7">
                                        <input type="text" id="status" name="status" class="form-control" value="{{ $bill->status }}">
                                        
                                    </div>
                                    <label class="col-sm-5 control-label">الدفع:</label>
                                </div>
                            </div>

                            <br/><br/><br/>
                                

                            <div class="table-responsive" style="min-height: 400px">
                                <table class="table table-striped table-bordered table-hover " style="direction:rtl;">
                                    <thead style="font-size: 15px">
                                        <tr>
                                            <th>الإجمالي </th>
                                            <th>السعر</th>
                                            <th>الكمية</th>
                                            <th>الآسم</th>
                                            <th>ملاحظات</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 14px" id="tableToModify">

                                    <?php $i = 1 ?>
                                    @foreach ($products as $product)
                                        
                                    
                                        <tr class="gradeA" id="Row-{{ $i }}">
                                                
                                            
                                            <td id="cellB-{{ $i }}">
                                                <input style="width: 90px;" type="text" id="total-{{ $i }}" name="total-{{ $i }}" class="form-control" placeholder="" value="{{ $product->total_price }}" readonly>
                                            </td>
                                                
                                            
                                            <td id="cellC-{{ $i }}">
                                                <input style="width: 90px;" type="text" id="price-{{ $i }}" name="price-{{ $i }}" class="form-control" placeholder="" value="{{ $product->price }}" readonly>
                                            </td>
                                            
                                            
                                            <td id="cellD-{{ $i }}">
                                                <input style="width: 100%;" type="text" id="quantity-{{ $i }}" name="quantity-{{ $i }}" class="form-control quantity" value="{{ $product->amount }}" placeholder="" readonly>
                                            </td>
                                            
                                            
                                            <td style="width: 40%;" id="cellE-{{ $i }}">
                                                    <input style="width: 100%;" type="text" id="select-{{ $i }}" name="select-{{ $i }}" class="form-control quantity" value="{{ $product->product_name }}" placeholder="" readonly>
                                            </td>
                                                
                                            
                                            
                                            <td id="cellF-{{ $i }}">
                                                <input style="width: 100%;" type="text" id="notes-{{ $i }}" name="notes-{{ $i }}" class="form-control" placeholder="اكتب الملاحظة" value="{{ $product->note }}">
                                            </td>
                                        </tr>
                                        @php
                                            $i++;    
                                        @endphp
                                    @endforeach
                                    
                                    </tbody>
                                    <tfoot style="font-size: 15px">
                                        
                                        <tr>
                                            <th>
                                                    <input style="width: 90px;float: right;" type="text" id="discount" name="discount" class="form-control" value="{{ $bill->discount }}" readonly>
                                            </th>
                                            
                                            <th><div style="float: right;">خصم</div></th>
                                            <th><div style="float: right;"></div></th>
                                            
                                            <th></th>
                                            <th></th>
                                        </tr>

                                        <tr>
                                            <th>
                                                <input style="width: 90px;float: right;" type="text" id="bill_total" name="bill_total" class="form-control" value="{{ $bill->total }}" readonly>
                                            </th>
                                            
                                            <th><div style="float: right;">الإجمالي</div></th>
                                            <th><div style="float: right;"></div></th>
                                            
                                            <th></th>
                                            <th>
                                                    {{ Form::hidden('_method', 'PUT') }}
                                                    <button type="submit" class="btn btn-outline-secondary" style="float: left" onclick="done()" >تحديث</button>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ csrf_field() }}
        {!! Form::close() !!}


@endsection

@section('footer')
    {{-- {!! Html::script('/admin/js/plugins/dataTables/datatables.min.js') !!}
 --}}
    {{-- smart select --}}
    {!! Html::script('/admin/SmartSelect/blobselect.min.js') !!}
    {!! Html::script('/admin/js/plugins/chosen/chosen.jquery.js') !!}
    
    <!-- Page-Level Scripts -->
    
@endsection