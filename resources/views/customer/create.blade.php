@extends('layout')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Customer
                    <a href="{{ url('admin/customer') }}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if($errors->any())
                @foreach($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
                @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                <form method="post" action="{{ url('admin/customer') }}" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered" >
                       <tr>
                        <th>Full Name <span class="text-danger">*</span></th>
                        <td><input type="text" name="fullname" class="form-control"></td>
                       </tr>
                       <tr>
                        <th>Email <span class="text-danger">*</span></th>
                        <td><input type="email" name="email" class="form-control"></td>
                       </tr>
                       <tr>
                        <th>Password<span class="text-danger">*</span></th>
                        <td><input type="password" name="password" class="form-control"></td>
                       </tr>
                       <tr>
                       <tr>
                        <th>Mobile<span class="text-danger">*</span></th>
                        <td><input type="text" name="mobile" mobile class="form-control"></td>
                       </tr>
                       <tr>
                        <th>Photo</th>
                        <td><input type="file" name="photo" /></td>
                       </tr>
                       <tr>
                        <th>Address</th>
                        <td><textarea class="form-control" name="address" ></textarea></td>
                       </tr>
                       <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-primary">
                        </td>
                       </tr>
                    </table>
                </form>
                </div>
            </div>
        </div>

    </div>
@endsection
