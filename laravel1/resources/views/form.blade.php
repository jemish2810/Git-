<div class='form-group'>
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
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
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success ']) !!}
</div>