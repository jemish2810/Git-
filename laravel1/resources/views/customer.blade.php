<!DOCTYPE html>
<html>

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <style>
        a {
            color: inherit;
        }
    </style>
</head>

<body>
    
    <div class="container"><br /><br />
        <button class="btn btn-info"><a href="{{ url('/home') }}" style="text-decoration: none; color: inherit;">Home</a></button>
        <button class="btn btn-success"><a href="{{ url('customer/create') }}" style="text-decoration: none; color: inherit;">Add New Customer</a></button>
        
        <h4>Records of Customer</h4>
        {{-- add custom filter --}}
        <select name="customfilter" id="filter" class="form-control">
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br />

        
        {{-- end customer filter --}}
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Image</th>
                    <th>F_Name</th>
                    <th>L_Name</th>
                    <th>Full_Name</th>
                    <th>Email</th>
                    <th>phone no</th>
                    <th>Gender</th>
                    <th>Action</th>
                
                </tr>
            </thead>
            <tbody>
                {{-- body --}}
            
            </tbody>
        </table>
    </div>
</body>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $(function () {
    var SITEURL = '{{URL::to("/customer")}}';
    console.log(SITEURL)
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        // ajax: "{{ route('customerinfo') }}",
        ajax: {
            "url": "{{ route('customerinfo') }}",
            "data": function(d) {
                d.filter = $('#filter').val();
            }
        },
        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
        columns: [
            {data: 'id', name: 'id'},
            {
            data: 'image',
            orderable: false,
            searchable: false,
            name: 'image',
            "render": function(data, type, full, meta) {
 
                return "<img src=\"" + data + "\" height=\"60\" width=\"60\" class=\"rounded-circle \" />";
            } },
            {data: 'firstname', name: 'firstname'},
            {data: 'lastname', name: 'lastname'},
            {data: 'full_name', name: 'full_name'},
            {data: 'email', name: 'email'},
            {data: 'phone_number', name: 'phone_number'},
            {data: 'gender', name: 'gender',orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false,
            render: function(data, type, row) {
                var editbtn= '<a href="{{url('customer/edit')}}/'+row.id+' " id='+row.id+' data-toggle="tooltip" data-original-title="Delete"class="edit btn btn-info"> <i class="fa fa-edit"></i></a>';

                var deletebtn='<a href="javascript:void(0);" id='+row.id+' data-toggle="tooltip" data-original-title="Delete"class="delete btn btn-danger"><i class="fa fa-trash"></i></a>';
                return editbtn+deletebtn;
              },
              
            orderable: false,
            searchable: false,
            width:'10%'
            }]

    });

    $('#filter').change(function(e){
        table.draw();
    });
            
    $('body').on('click', '.delete', function () {
        var customer_id = $(this).attr('id');
        
        if(confirm("Are You sure want to delete !")){
        $.ajax({
            type: 'GET',
            url: SITEURL + "/delete/"+customer_id,
            data:$(this),
            
            success: function (data) {
                
            var oTable = $('.data-table').dataTable(); 
            oTable.fnDraw(false);
            table.ajax.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            },
        });
    }
    }); 
})       
</script>
    
</html>