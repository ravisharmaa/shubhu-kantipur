<div class="box-body">

    <div class="form-group">
        {{Form::label('Title')}}
        {{Form::textarea('facility_title', null,['class'=>'form-control','placeholder'=>'Enter Facility Title Here'])}}
    </div>
    <div class="form-group">
        {{Form::label('Status')}} &nbsp;
        {{Form::radio('status', '1', true)}} Active &nbsp;
        {{Form::radio('status', '0')}}  De-Active
    </div>
    <div class="form-group">
        {{Form::label('Order')}}
        {{Form::number('rank', null,['class'=>'form-control','min'=>'1', 'placeholder'=>'Enter The Desired Order'])}}
    </div>

</div>
<!-- /.box-body -->
<div class="box-footer">
   {{Form::button($btnTxt,['class'=>"btn btn-primary", 'type'=>'Submit'])}}
    &nbsp;
    {{Form::button('Reset',['class'=>"btn btn-danger", 'type'=>'reset'])}}
</div>