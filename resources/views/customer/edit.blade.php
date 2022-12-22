@extends('layout')
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Customer
                    <a href="{{ url('admin/roomtype') }}" class="float-right btn btn-success btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                <form method="post" action="{{ url('admin/customer/'.$data->id) }}">
                    @csrf
                    @method('put')
                    <table class="table table-bordered" >
                        <tr>
                         <th>Full Name <span class="text-danger">*</span></th>
                         <td><input value="{{ $data->fullname }}" type="text" name="fullname" class="form-control"></td>
                        </tr>
                        <tr>
                         <th>Email <span class="text-danger">*</span></th>
                         <td><input value="{{ $data->email }}" type="email" name="email" class="form-control"></td>
                        </tr>
                        <tr>
                        <tr>
                         <th>Mobile<span class="text-danger">*</span></th>
                         <td><input value="{{ $data->mobile }}" type="text" name="mobile" mobile class="form-control"></td>
                        </tr>
                        <tr>
                         <th>Photo</th>
                         <td><input type="file" name="photo" />
                            <input type="hidden" name="prev_photo" value="{{ $data->photo }}">
                            <img src="{{asset('storage/app/'.$data->photo)}}"/>
                        </td>
                        </tr>
                        <tr>
                         <th>Address</th>
                         <td><textarea value="{{ $data->address }}" class="form-control" name=address ></textarea></td>
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
