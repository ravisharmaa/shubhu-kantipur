<div class="box-body">
    <div class="form-group">
        {{Form::label('About Description')}}
        {{Form::textarea('footer_desc', null,['class'=>'form-control','placeholder'=>'Enter About Description'])}}
    </div>
    <div class="form-group">
        {{Form::label('Facebook Link')}}
        {{Form::text('fb_link', null,['class'=>'form-control','placeholder'=>'Enter Facebook Here'])}}
    </div>
    <div class="form-group">
        {{Form::label('Google Plus')}}
        {{Form::text('g_plus', null,['class'=>'form-control','placeholder'=>'Enter Google Link Here'])}}
    </div>
    <div class="form-group">
        {{Form::label('Twitter')}}
        {{Form::text('twitter', null,['class'=>'form-control','placeholder'=>'Enter Twitter Link Here'])}}
    </div>
    <div class="form-group">
        {{Form::label('phone')}}
        {{Form::text('phone', null,['class'=>'form-control','placeholder'=>'Enter Phone Number Here'])}}
    </div>
    <div class="form-group">
        {{Form::label('Email')}}
        {{Form::text('email', null,['class'=>'form-control','placeholder'=>'Enter Email Link Here'])}}
    </div>
    <div class="form-group">
        {{Form::label('Website')}}
        {{Form::text('website', null,['class'=>'form-control','placeholder'=>'Enter website Link Here'])}}
    </div>

</div>
<!-- /.box-body -->
<div class="box-footer">
   {{Form::button($btnTxt,['class'=>"btn btn-primary", 'type'=>'Submit'])}}
    {{Form::button('Reset',['class'=>"btn btn-danger", 'type'=>'Reset'])}}
</div>