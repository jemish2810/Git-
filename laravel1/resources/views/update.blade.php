@extends('layouts.layout')

@section('content')
<div class="card uper bg-light text-dark" style="width:500px">
    <div class="card-header">
        Update Customer
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
            {!! Form::model($cust,
            ['method' => 'POST',
            "enctype"=>"multipart/form-data",
            'action' => ['Customercontroller@update',$cust->id]])!!}
            <div class="imgcontainer " style="text-align: center; margin: 24px 0 12px 0;  position: relative;">
                <img src="/{{$cust->image}}  " height="150" width="150" class="  rounded-circle ">
            </div>
            @include('form', ['submitButtonText' => 'Update Candidate'])

            {!! Form::close() !!}
        {{-- Form binding end --}}

        {{-- <form method="post" action="{{ url('customer/update',$cust->id)}}" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label for="name">Customer Name:</label>
                <input type="text" value="{{$cust->name}}" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" value="{{$cust->email}}" class="form-control" name="email" />
            </div>
            <div class="form-group">
                <label for="phone_number">Phone_number :</label>
                <input type="text" value="{{$cust->phone_number}}" class="form-control" name="phone_number" />
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <button class="btn btn-dark"><a href="{{ url('/customer') }}">Back</a></button>
        </form> --}}
    </div>
</div>
@endsection