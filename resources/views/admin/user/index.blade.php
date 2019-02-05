@extends('admin.layouts.layout')

@php
$title= "قائمة الاعضاء";

   
@endphp

@section('title')
    {{ $title }}
@endsection

@section('header')
    {!! Html::style('/admin/css/plugins/dataTables/datatables.min.css') !!}

@endsection

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10 pull-right" style="direction:rtl">
            <h2 style="font-size: 27px">الاعضاء</h2>
            <ol class="breadcrumb" style="font-size: 18px">
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>
                    الاعضاء
                </li>
                <li class="active">
                    <strong>قائمة الاعضاء</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5 style="direction:rtl">قائمة الاعضاء</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" style="direction:rtl">
                                <thead style="font-size: 15px">
                                    <tr>
                                        <th>التحكم</th>
                                        <th>الايميل</th>
                                        <th>الاسم</th>
                                        <th>الصلاحيات</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 14px">
                                    @foreach ($users as $user)
                                        <tr class="gradeA">
                                        <td> <a href="{{ url('/admin/user/'.$user->id.'/edit') }}">تعديل </a>
                                             | 
                                             {!! Form::open(array('action'=>(['AdminController@destroy',$user->id]), 'method'=>'POST')) !!}
                                                 
                                             {{ Form::hidden('_method', 'DELETE') }}
                                             <button type="submit" class="btn btn-outline-secondary" style="float: left">حذف</button>
                                             {!! Form::close() !!}
                                        </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                @if( $user->admin == 1)
                                                مدير
                                                @elseif($user->admin == 0)
                                                مستخدم
                                                @elseif($user->admin == 2)
                                                مساعد مدير
                                                @else
                                                غير معروف 
                                                @endif
                                             </td>
                                            <td class="center"> <a href="{{ url('/admin/user/'.$user->id) }}"> {{ $user->id }} </a> </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot style="font-size: 15px">
                                    <tr>
                                        <th>التحكم</th>
                                        <th>الايميل</th>
                                        <th>الاسم</th>
                                        <th>الصلاحيات</th>
                                        <th>#</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    {!! Html::script('/admin/js/plugins/dataTables/datatables.min.js') !!}
    
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},
                    {extend: 'print',
                    customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]
            });
        });
    </script>

@endsection