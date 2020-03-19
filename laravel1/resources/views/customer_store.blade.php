@extends('layouts.layout')

@section('content')
<div class="card uper">
    <div class="card-header">
        New Customer 
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                   @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        {{-- Form binding  --}}
            {!! Form::open(['route' => 'store']) !!}
            @include('form', ['submitButtonText' => 'Add Candidate'])
            {!! Form::close() !!}
        {{-- End form binding --}}
        
        {{-- <form method="post" action="{{ route('store') }}" enctype="multipart/form-data" >
            <div class="form-group">
                @csrf
                <label for="name">Customer Name:</label>
                <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
                <label for="phone_number">Phone_number :</label>
                <input type="text" class="form-control" name="phone_number" />
            </div>
            <button type="submit" class="btn btn-success">Create </button>
            <button class="btn btn-dark"><a href="{{ url('/customer') }}">Back</a></button>
        </form> --}}
    </div>
</div>
@endsection
