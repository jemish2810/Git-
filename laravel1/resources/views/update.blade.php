

<!doctype html>
<html>

<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <style>
        a {
            color: inherit;
        }
    </style>
</head>

<body>
    <div class="container">

        <br />
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Add New Customer</h2>
            </div>
            <div class="panel-body">
                <form method="post" action="{{ url('customer/update',$cust->id)}}">
                    {{-- <input name="_method" type="hidden" value="PUT"> --}}
           @csrf
        @method('PATCH')         
                    {{-- <input name="_token" type="hidden" value="{{ csrf_token() }}" /> --}}
                    <div class="form-group">
                        <label class="col-md-4"> Name</label>
                        <input type="text"value="{{$cust->name}}" class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Email</label>
                        <input type="email" value="{{$cust->email}}" class="form-control" name="email" />
                    </div>
                  <div class="form-group">
                        <label class="col-md-4">Phone number</label>
                        <input type="text" value="{{$cust->phone_number}}" class="form-control" name="email" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button class="btn btn-dark"><a href="{{ url('/home') }}">Home</a></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
