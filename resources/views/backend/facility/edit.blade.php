@extends('backend.layout.master')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-body">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$scope}}</h3>
                    &nbsp;
                    <a href="{{route($base_route.'.index')}}"><button class="btn btn-success">Back To Gallery Index</button></a>
                </div>
                <!-- form start -->
                {{Form::model($facility, ['route'=>[$base_route.'.update', $facility->id], 'method'=>'PUT', 'role'=>'form'])}}
                    @include('backend.facility.partials._form',['btnTxt'=>"Update"])
                {{Form::close()}}
            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection