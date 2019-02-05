
<li @if($title == 'قائمة البضائع' || $title == 'إضافة صنف جديد' || $title == 'تعديل صنف')
    class="active"
    @endif
>
    <a href="#"><i class="fa fa-product-hunt fa-2"></i> <span class="nav-label">البضائع</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li @if( $title == 'قائمة البضائع')
        class="active"
        @endif
        ><a href="{{ url('/admin/product/') }}"> قائمة البضائع</a></li>
        
        @if( Auth::user()->admin == 1)
            <li @if( $title == 'إضافة صنف جديد' )
            class="active"
            @endif
            ><a href="{{ url('/admin/product/new') }}">اضافة صنف جديد</a></li>
        @endif
        
        @if($title == 'تعديل صنف')
            <li class="active"><a href="#">تعديل صنف </a></li>
        @endif
    </ul>
</li>



<li @if($title == 'عمل فاتورة' || $title == 'قائمة الفواتير' || $title == 'تعديل فاتورة')
    class="active"
    @endif
>
    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">الفواتير</span><span class="fa arrow"></span></a>

    <ul class="nav nav-second-level collapse">

        <li @if( $title == 'قائمة الفواتير' )
        class="active"
        @endif
        ><a href="{{ url('/admin/bill') }}">عرض قائمة الفواتير</a></li>

        <li @if( $title == 'عمل فاتورة' )
        class="active"
        @endif
        ><a href="{{ url('/admin/bill/new') }}">عمل فاتورة جديدة</li>

        @if( Auth::user()->admin == 1 && $title == 'تعديل فاتورة')
            <li @if( $title == 'تعديل فاتورة' )
            class="active"
            @endif
            ><a href="{{ url('/admin/user/edit') }}">تعديل فاتورة</a></li>
        @endif
        
    </ul>
</li>

@if( Auth::user()->admin == 1)

<li @if($title == 'إضافة عضو جديد' || $title == 'تعديل اعدادات عضو' || $title == 'قائمة الاعضاء')
    class="active"
    @endif
>
    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">الاعضاء</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">

        <li @if( $title == 'قائمة الاعضاء' )
        class="active"
        @endif
        ><a href="{{ url('/admin/user/list') }}">عرض قائمة الاعضاء</a></li>

        <li @if( $title == 'إضافة عضو جديد' )
        class="active"
        @endif
        ><a href="{{ url('/admin/user/new') }}">إضافة عضو جديد</a></li>

        @if( $title == 'تعديل اعدادات عضو' )
        <li class="active">
            <a href="{{ url('/admin/user/edit') }}">تعديل اعدادات الاعضاء</a>
        </li>
        @endif
        
    </ul>
</li>
@endif



