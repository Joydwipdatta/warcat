@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5><a href="{{ url()->previous() }}" class="float-end">Back</a></h5>
                <h4 class="card-title">Add Director</h4>
                 <form action="{{ Route('save.director') }}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3 mt-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Director Name<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Director Name" id="example-text-input" name="name">
                    </div>
                    @error('name')
                    <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Phone No.<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Phone no." id="example-text-input" name="phone">
                    </div>
                    @error('phone')
                    <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Email<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter email" id="example-text-input" name="email">
                    </div>
                    @error('email')
                    <div class="alert text-danger">{{ $message }}</div>
                    @enderror
                </div>

             <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Add Director">
        </form>
                <!-- end row -->
            </div>
        </div>


    </div> <!-- end col -->
</div>
</div>
</div>
</div>
@endsection
