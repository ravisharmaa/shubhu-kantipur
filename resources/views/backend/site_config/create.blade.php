@extends('backend.layout.master')

@section('main-content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- form start -->
                {{Form::open(['route'=>$base_route.'.save', 'method'=>'post', 'role'=>'form'])}}
                    @include('backend.site_config.partials._form',['btnTxt'=>"Save"])
                {{Form::close()}}
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection