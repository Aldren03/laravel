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
    
    <div class="container mt-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Borrower</h1>
    </div>
    <button class="mb-2 btn btn-lg btn-success" data-toggle="modal" data-target="#addModal">
        <span class="fa fa-plus"></span> Add Borrower
    </button>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $borrower)
                        <tr>
                            <td>{{ $borrower->full_name }}</td>
                            <td>{{ $borrower->contact_number }}</td>
                            <td>{{ $borrower->address }}</td>
                            <td>{{ $borrower->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Borrower Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('add_borrower') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">Add Borrower</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Contact No</label>
                        <input type="tel" id="contact" name="contact_no" class="form-control" placeholder="Eg.[0965 567 6544]" pattern="[0-9]{4} [0-9]{3} [0-9]{4}" required />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" id="address" name="address" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" required maxlength="30" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
        @include('admin.script')

</html>