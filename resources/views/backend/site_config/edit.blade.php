@extends('backend.layout.master')

@section('main-content')
    <div class="row">
        <div class="col-xs-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$scope}}</h3>
                </div>
                <!-- form start -->
                {{Form::model($site_config, ['route'=>[$base_route.'.update', $site_config->id], 'method'=>'PUT', 'role'=>'form'])}}
                    @include('backend.site_config.partials._form',['btnTxt'=>"Save"])
                {{Form::close()}}
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection