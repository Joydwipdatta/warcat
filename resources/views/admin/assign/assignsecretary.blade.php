@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <h5><a href="{{ url()->previous() }}" class="float-end">Back</a></h5>
                    <h4 class="card-title">Assign Department</h4>
                    <form action="{{ route('save.secassign') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-6">
                            <label class="form-label">Secretary<span class="text-danger">*</span></label>
                            <select class="form-control select2" data-select2-id="1"
                                tabindex="-1" aria-hidden="true" name="secretary_id">
                                <option>Select</option>
                               @foreach ($secretary as $direct)
                                <option value="{{ $direct->id }}">{{ $direct->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                            <div class="alert alert-danger">secreatary Name cannot be blank</div>
                            @enderror

                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label">Assign Department<span class="text-danger">*</span></label>
                            <select class="select2 form-control select2-multiple"  multiple="multiple" name="department_id[]"  data-placeholder="Choose ...">
                               @foreach ( $department as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                            <div class="alert alert-danger">Department Name cannot be blank</div>
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
