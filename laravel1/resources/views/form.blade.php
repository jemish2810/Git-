<div class='form-group'>
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control'] ) !!}
</div>
<div class='form-group'>
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control'] ) !!}
</div>

<div class='form-group'>
    {!! Form::label('image', 'image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success ']) !!}
</div>