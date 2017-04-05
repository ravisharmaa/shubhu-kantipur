<div class="box-body">

    <div class="form-group">
        {{Form::label('Title')}}
        {{Form::text('name', null,['class'=>'form-control','placeholder'=>'Enter Image Title Here'])}}
    </div>
    @if(!empty($gallery->image))
    <div class="form-group">
        <strong><p>Previous Image</p></strong>
        <img src="{{asset('uploads/gallery/'.$gallery->image)}}" height="100" width="100">
    </div>
    @endif
    <div class="form-group">
        {{Form::label('Image')}}
        {{Form::file('image')}}
    </div>
    <div class="form-group">
        {{Form::label('Status')}} &nbsp;
        {{Form::radio('status', '1', true)}} Active &nbsp;
        {{Form::radio('status', '0')}}  De-Active
    </div>

</div>
<!-- /.box-body -->
<div class="box-footer">
   {{Form::button($btnTxt,['class'=>"btn btn-primary", 'type'=>'Submit'])}}
    {{Form::button('Reset',['class'=>"btn btn-danger", 'type'=>'reset'])}}
</div>