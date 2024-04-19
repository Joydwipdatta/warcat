@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                      <h5><a href="{{ url()->previous() }}" class="float-end">Back</a></h5>
                    <h4 class="card-title font-weight-bold mb-3"><span class="text-primary m-2"> Name:</span>{{ $director->name }}</h4>

                    <form action="{{ route('update.department') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id"  value="{{ $director->id }}">


                        <input  type="hidden"  name="director_id" value="{{ $director->id }}">

                        <div class="mb-3 col-6 m-2" >
                            <label class="form-label">Assign Department<span class="text-danger">*</span></label>
                            <select class="select2 form-control select2-multiple" multiple="multiple" name="department_id[]" data-placeholder="Choose ...">
                                @foreach ( $department as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                            <div class="alert alert-danger">Department field cannot be blank</div>
                            @enderror
                        </div>


                        <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit"
                            value="Assign Department">
                    </form>
                </div>
            </div>









        </div>
    </div>
</div>
@endsection
