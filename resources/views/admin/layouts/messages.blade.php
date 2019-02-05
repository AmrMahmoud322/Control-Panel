@if(count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            <strong>فشل !</strong>{{$error}}
        </div>        
    @endforeach
@endif


@if(session('success'))
    <div class="alert alert-dismissible alert-secondary">
        <strong>تم بنجاح !</strong> {{session('success')}}.
    </div>
    
@endif

@if(session('error'))
    <div class="alert alert-dismissible alert-danger">
        <strong>فشل !</strong>{{session('error')}}
    </div> 
    
@endif