@extends('backend.layout.master')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-body">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$scope}}</h3>
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