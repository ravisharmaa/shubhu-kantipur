@extends('backend.layout.master')

@section('main-content')
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$scope}}</h3>
                &nbsp;<a href="{{route($base_route.'.create')}}"><button class="btn btn-success">Create A Gallery Item</button></a>
            </div>
            <!-- /.box-header -->
            @if(Session::has('message'))
                {!! Session::get('message') !!}
            @endif
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody><tr>
                        <th style="width: 10px">S.NO</th>
                        <th>Image Details</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($gallery as $g)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$g->name}}</td>
                        <td>
                            @if($g->status==1)
                                <a href="" class="status" data-attr="{{$g->id}}"><span class="badge bg-green"> Active</span></a>
                            @else
                                <a href="" class="status" data-attr="{{$g->id}}"><span class="badge bg-red"> De-Active</span></a>
                            @endif
                        </td>
                        <td>
                            <a href="{{route($base_route.'.edit', $g->id)}}">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                            </a>
                            &nbsp;<a href="{{route($base_route.'.delete', $g->id)}}">
                                <button type="submit" class="btn btn-danger" onclick="return confirm ('Are you sure to delete?')"><i class="fa fa-trash"></i> Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- /.box -->
    </div>
@endsection

@section('extra-scripts')
    <script type="text/javascript">
        $("document").ready(function(){
            $('.status').click(function (e) {
               e.preventDefault();
               var t = $(this);
               var id = t.attr('data-attr');
               var token = '{{ csrf_token() }}';
               var params = {'id': id, '_token' : token};
               $.ajax({
                  method: "POST",
                  data : params,
                  url : '{{route($base_route.'.change_status')}} ',
                  error:function (request) {
                      console.log(request.responseText);
                  },
                  success:function (data) {
                      var success = jQuery.parseJSON(data);
                        if(success.status ==1 ){
                            t.html("<span class='badge bg-green'> Active</span>");
                        } else {
                        t.html("<span class='badge bg-red'> De-Active</span>");
                        }
                  }
               });
            })
        });
    </script>
@endsection