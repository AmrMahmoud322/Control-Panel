@extends('layouts.app')

@section('title')
    الصفحة الرئيسية
@endsection

@section('header')
    
@endsection

@section('content')
<div style="font-size: 30px;">الموقع متاح للاعمال الادارية فقط </div> 
@if (Auth::user()->admin == 1 || Auth::user()->admin == 2)
    <a href="{{ url('/admin/panel') }}" style="font-size: 30px;">
        الذهاب للوحة التحكم
    </a>
@endif
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in At'home page'!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
