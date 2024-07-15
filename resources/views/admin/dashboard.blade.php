<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .status-active {
            background-color: #d4edda;
            color: #155724;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .status-inactive {
            background-color: #f8d7da;
            color: #721c24;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .container {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="container mt-4">
    <div class="me-md-3 me-xl-5 mb-4">
        <h1 class="display-4">Dashboard</h1>
        <p>Your analytics dashboard</p>
    </div>

    <hr class="my-4">

    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Employees</h5>
                    <h1 class="card-text">{{ $totalEmployees }}</h1>
                    <a href="{{ url('view_employee') }}" class="btn btn-light text-primary mt-3">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <h1 class="card-text">{{ $totalUsers }}</h1>
                    <a href="{{ url('view_user') }}" class="btn btn-light text-success mt-3">View</a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
        @include('admin.script')

</html>