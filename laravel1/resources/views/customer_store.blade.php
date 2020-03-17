<!doctype html>
<html>

<head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <br />
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Add New Customer</h2> 
            </div>
            <div class="panel-body">
                <form method="post" action="{{ route('store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-md-4"> Name</label>
                        <input type="text" class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Email</label>
                        <input type="email" class="form-control" name="email" />
                    </div>
                    <div class="form-group">
                        <label class="col-md-4">Phone number</label>
                        <input type="number" class="form-control" name="phone_number" />
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>