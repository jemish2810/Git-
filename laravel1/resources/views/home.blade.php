@extends('layouts.app')
<style>

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!<br /><br />
                {{-- 
                    <button class="btn btn-primary"><a href="{{ url('/users') }}"
                            style="text-decoration: none; color: inherit;">Users- Table 1</a></button>
                    <button class="btn btn-secondary"><a href="{{ url('/customer') }}"
                            style="text-decoration: none; color: inherit;">Customer-Table 2</a></button>
                    <button class="btn btn-primary"><a href="{{ url('/upload') }}"
                            style="text-decoration: none; color: inherit;">Uploade Image</a></button>
                   <button class="btn btn-dark"><a href="{{url('admin/routes')}}" style="text-decoration: none; color: inherit;">Admin Or
                            Not</a></button>
                    <button class="btn btn-dark"><a style="text-decoration: none; color: inherit;"  href="{{ route('category.create') }}">Create Category </a></button>  
                    <button class="btn btn-dark"><a  style="text-decoration: none; color: inherit;"href="{{ url('/sendemail') }}">E-mail </a>                  
                --}}
                    <div class="btn-group">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            All Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{ url('/users') }}" class="dropdown-item" style="text-decoration: none; color: inherit;">Users-
                                Table 1</a>
                            <a href="{{ url('/customer') }}" class="dropdown-item"
                                style="text-decoration: none; color: inherit;">Customer-Table 2</a>
                            <a href="{{ url('/upload') }}" class="dropdown-item" style="text-decoration: none; color: inherit;">Uploade
                                Image</a>
                            <a href="{{url('admin/routes')}}" class="dropdown-item" style="text-decoration: none; color: inherit;">Admin Or
                                Not</a>
                    
                            <a style="text-decoration: none; color: inherit;" class="dropdown-item" href="{{ url('/sendemail') }}">E-mail
                            </a>
                            <a style="text-decoration: none; color: inherit;" class="dropdown-item"
                                href="{{ route('category.create') }}">Create Category
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection